import { assignId, detangle, element, inject, on, removeAttribute, setAttribute } from './utils.js'
import { ActivatableGroup } from './mixins/activatable.js'
import { SelectableGroup } from './mixins/selectable.js'
import { FilterableGroup } from './mixins/filterable.js'
import { Controllable } from './mixins/controllable.js'
import { Popoverable } from './mixins/popoverable.js'
import { Disableable } from './mixins/disableable.js'
import { Anchorable } from './mixins/anchorable.js'
import { UIControl, UIElement } from './element.js'

export class UISelect extends UIControl {
    boot() {
        let list = this.list()

        this._controllable = new Controllable(this)
        this._selectable = new SelectableGroup(list, {
            multiple: this.hasAttribute('multiple')
        })

        this._controllable.initial(initial => initial && this._selectable.setState(initial))
        this._controllable.getter(() => this._selectable.getState())

        let detangled = detangle()

        this._controllable.setter(detangled(value => { this._selectable.setState(value) }))

        this._selectable.onChange(detangled(() => {
            this._controllable.dispatch()

            this.dispatchEvent(new CustomEvent('select', { bubbles: false }))
        }))
    }

    mount() {
        this._disableable = new Disableable(this)

        let input = this.input()
        let button = this.button()
        let trigger = this.trigger()
        let list = this.list()
        let overlay = this.overlay()
        let multiple = this.hasAttribute('multiple')
        let autocomplete = this.hasAttribute('autocomplete')
        let strictAutocomplete = this.hasAttribute('autocomplete') && this.getAttribute('autocomplete').trim().split(' ').includes('strict')

        let listbox = this.querySelector('ui-options') || this

        let listId = initListbox(listbox, 'options')

        this._activatable = new ActivatableGroup(listbox, { filter: 'data-hidden' })

        // Handle control...

        if (! input && ! button) { // This is the static listbox...
            this._disableable.onInitAndChange((disabled) => {
                disabled ? this.removeAttribute('tabindex') : this.setAttribute('tabindex', '0')
            })
        }

        if (this.hasAttribute('filter') && this.getAttribute('filter') !== 'manual') {
            this._filterable = new FilterableGroup(list)

            this._filterable.onChange(() => {
                this._activatable.clearActive()

                if (this._filterable.hasResults()) {
                    this._activatable.activateFirst()
                }
            })

            this.addEventListener('close', () => {
                if (this._filterable) {
                    this._filterable.filter('')
                }
            })
        }

        // Handle the different select shapes...
        if (! this.querySelector('[popover], input')) { // static listbox...
            handleKeyboardNavigation(this, this._activatable)
            handleKeyboardSelection(this, this, this._activatable)
            handleActivationOnFocus(this, this._activatable, this._selectable)
        } else if (! this.querySelector('[popover]') && this.querySelector('input')) { // static listbox with input control
            let input = this.querySelector('input')

            this._disableable.onInitAndChange((disabled) => {
                if (disabled) {
                    input && setAttribute(input, 'disabled', '')
                } else {
                    input && removeAttribute(input, 'disabled')
                }
            })

            handleInputClearing(this, input, this._selectable, this._popoverable)
            handleActivationOnFocus(input, this._activatable, this._selectable)
            handleAutocomplete(autocomplete, strictAutocomplete, this, input, this._selectable, this._popoverable)
            preventInputEventsFromBubblingToSelectRoot(input)
            highlightInputContentsWhenFocused(input)
            this._filterable && filterResultsByInput(input, this._filterable)
            trackActiveDescendant(input, this._activatable)
            handleKeyboardNavigation(input, this._activatable)
            handleKeyboardSelection(this, input, this._activatable)
            handleMouseSelection(this, this._activatable)
        } else if (this.querySelector('[popover]') && this.querySelector('input:not([popover] input)')) { // popover listbox with input control
            let input = this.querySelector('input:not([popover] input)')

            setAttribute(input, 'role', 'combobox')
            setAttribute(input, 'aria-controls', listId)

            let popover = this.querySelector('[popover]')

            this._popoverable = new Popoverable(popover)

            this._anchorable = new Anchorable(popover, {
                reference: input,
                matchWidth: true,
                position: this.hasAttribute('position') ? this.getAttribute('position') : undefined,
                gap: this.hasAttribute('gap') ? this.getAttribute('gap') : undefined,
                offset: this.hasAttribute('offset') ? this.getAttribute('offset') : undefined,
            })

            handleAutocomplete(autocomplete, strictAutocomplete, this, input, this._selectable, this._popoverable)

            this._disableable.onInitAndChange((disabled) => {
                if (disabled) {
                    input && setAttribute(input, 'disabled', '')
                } else {
                    input && removeAttribute(input, 'disabled')
                }
            })

            // Register trigger buttons...
            this.querySelectorAll('button:not([popover] button)').forEach(button => {
                setAttribute(button, 'tabindex', '-1')
                setAttribute(button, 'aria-controls', listId)
                setAttribute(button, 'aria-haspopup', 'listbox')
                linkExpandedStateToPopover(button, this._popoverable)
                on(button, 'click', () => {
                    this._popoverable.toggle()
                    input.focus()
                })
            })

            handleInputClearing(this, input, this._selectable, this._popoverable)
            initPopover(this, input, popover, this._popoverable, this._anchorable)
            linkExpandedStateToPopover(input, this._popoverable)
            preventInputEventsFromBubblingToSelectRoot(input)
            highlightInputContentsWhenFocused(input)
            this._filterable && filterResultsByInput(input, this._filterable)
            trackActiveDescendant(input, this._activatable)
            controlPopoverWithInput(input, this._popoverable)
            controlPopoverWithKeyboard(input, this._popoverable, this._activatable, this._selectable)
            openPopoverWithMouse(input, this._popoverable)
            handleKeyboardNavigation(input, this._activatable)
            handleKeyboardSelection(this, input, this._activatable)
            handleMouseSelection(this, this._activatable)
            controlActivationWithPopover(this._popoverable, this._activatable, this._selectable)
            multiple || closePopoverOnAction(this, this._popoverable)
        } else if (this.querySelector('[popover]') && this.querySelector('[popover] input')) { // popover listbox with button control and popover input control
            let button

            if (CSS.supports('selector(&)')) { // Old safari doesn't support "&" which fixes a few select bugs...
                button = this.querySelector('button:not(& [popover] button)')
            } else {
                button = this.querySelector('button:not([popover] button)')
            }

            let input = this.querySelector('[popover] input')
            let popover = this.querySelector('[popover]')

            setAttribute(button, 'role', 'combobox')
            setAttribute(input, 'role', 'combobox')
            setAttribute(button, 'aria-controls', listId)

            this._disableable.onInitAndChange((disabled) => {
                if (disabled) {
                    button && setAttribute(button, 'disabled', '')
                    input && setAttribute(input, 'disabled', '')
                } else {
                    button && removeAttribute(button, 'disabled')
                    input && removeAttribute(input, 'disabled')
                }
            })

            this._popoverable = new Popoverable(popover)
            this._anchorable = new Anchorable(popover, {
                reference: button,
                matchWidth: true,
                position: this.hasAttribute('position') ? this.getAttribute('position') : undefined,
                gap: this.hasAttribute('gap') ? this.getAttribute('gap') : undefined,
                offset: this.hasAttribute('offset') ? this.getAttribute('offset') : undefined,
            })

            preventInputEventsFromBubblingToSelectRoot(input)
            highlightInputContentsWhenFocused(input)
            this._filterable && filterResultsByInput(input, this._filterable)
            focusInputWhenPopoverOpens(button, input, this._popoverable)
            initPopover(this, button, popover, this._popoverable, this._anchorable)
            linkExpandedStateToPopover(button, this._popoverable)
            handleInputClearing(this, input, this._selectable, this._popoverable)
            controlPopoverWithKeyboard(button, this._popoverable, this._activatable, this._selectable)
            togglePopoverWithMouse(button, this._popoverable)
            handleKeyboardNavigation(input, this._activatable)
            handleKeyboardSelection(this, input, this._activatable)
            handleMouseSelection(this, this._activatable)
            controlActivationWithPopover(this._popoverable, this._activatable, this._selectable)
            multiple || closePopoverOnAction(this, this._popoverable)
        } else if (this.querySelector('[popover]')) { // popover listbox with button control
            let button = this.querySelector('button:not([popover] button)')
            let popover = this.querySelector('[popover]')

            setAttribute(button, 'role', 'combobox')
            setAttribute(button, 'aria-controls', listId)

            this._disableable.onInitAndChange((disabled) => {
                if (disabled) {
                    button && setAttribute(button, 'disabled', '')
                    input && setAttribute(input, 'disabled', '')
                } else {
                    button && removeAttribute(button, 'disabled')
                    input && removeAttribute(input, 'disabled')
                }
            })

            this._popoverable = new Popoverable(popover)
            this._anchorable = new Anchorable(popover, {
                reference: button,
                matchWidth: true,
                position: this.hasAttribute('position') ? this.getAttribute('position') : undefined,
                gap: this.hasAttribute('gap') ? this.getAttribute('gap') : undefined,
                offset: this.hasAttribute('offset') ? this.getAttribute('offset') : undefined,
            })

            initPopover(this, button, popover, this._popoverable, this._anchorable)

            linkExpandedStateToPopover(button, this._popoverable)
            controlPopoverWithKeyboard(button, this._popoverable, this._activatable, this._selectable)
            togglePopoverWithMouse(button, this._popoverable)
            handleKeyboardNavigation(button, this._activatable)
            handleKeyboardSelection(this, button, this._activatable)
            handleMouseSelection(this, this._activatable)
            controlActivationWithPopover(this._popoverable, this._activatable, this._selectable)
            multiple || closePopoverOnAction(this, this._popoverable)
        }

        let observer = new MutationObserver(mutations => {
            setTimeout(() => {
                if ((! this._popoverable) || (this._popoverable.getState())) {
                    let firstSelectedOption = this._selectable.selecteds()[0]?.el

                    queueMicrotask(() => { // We need to let the popover fully become visible first so that we detect which elements are visible...
                        this._activatable.activateSelectedOrFirst(firstSelectedOption)
                    })
                } else {
                    this._activatable.clearActive()
                }
            })
        })
        observer.observe(list, { childList: true })
    }

    button() {
        // @todo: fix this:
        return this.querySelector('button:has(+ [popover])')
    }

    trigger() {
        // @todo: fix this:
        return this.querySelector('input, button')
    }

    input() {
        return this.querySelector('input')
    }

    list() {
        return this.querySelector('ui-options') || this
    }

    overlay() {
        return this.querySelector('[popover]')
    }

    clear() {
        if (! this.input()) return

        this.input().value = ''
        this.input().dispatchEvent(new Event('input', { bubbles: false }))
    }

    open() {
        this._popoverable.setState(true)
    }

    close() {
        this._popoverable.setState(false)
    }
}

class UIEmpty extends UIElement {
    boot() {
        setAttribute(this, 'data-hidden', '')
    }

    mount() {
        // We need this extra microtask here to make sure all
        // ui-option sub-elements have finished mounting...
        queueMicrotask(() => {
            let picker = this.closest('ui-autocomplete, ui-combobox, ui-select')
            let list = this.closest('ui-options')

            if (! list) return

            let isHidden = el => getComputedStyle(el).display === 'none'

            let refresh = () => {
                let empty

                if (CSS.supports('selector(&)')) { // Old safari doesn't support "&"...
                    empty = Array.from(list.querySelectorAll('& > ui-option')).filter(i => ! isHidden(i)).length === 0
                } else {
                    empty = Array.from(list.querySelectorAll(':scope > ui-option')).filter(i => ! isHidden(i)).length === 0
                }

                if (empty) {
                    removeAttribute(this, 'data-hidden')
                } else {
                    setAttribute(this, 'data-hidden', '')
                }
            }

            refresh()

            // Re-run when the list changes...

            let filterable = picker._filterable

            if (filterable) {
                filterable.onChange(refresh)
            }

            let observer = new MutationObserver(mutations => {
                setTimeout(() => refresh())
            })

            observer.observe(list, { childList: true })
        })
    }
}

class UISelected extends UIElement {
    boot() {
        this.placeholderHTML = this.innerHTML

        this.valuesAppended = new Map()

        this.selectedElementGraveyard = new Map()
    }

    picker() {
        return this.closest('ui-select')
    }

    mount() {
        // Wrap in queueMicrotask to allow all ui-options to be mounted...
        queueMicrotask(()=> {
            this.picker()._selectable.onInitAndChange(() => {
                this.displaySelectedValue()
            })

            let optionsEl = this.picker()?.list()

            if (optionsEl) {
                new MutationObserver(mutations => {
                    // Wrap in queueMicrotask to allow newly added options to be mounted...
                    queueMicrotask(() => {
                        this.displaySelectedValue()
                    })
                }).observe(optionsEl, { childList: true })
            }
        })
    }

    displaySelectedValue() {
        let value = this.picker().value

        if (Array.isArray(value)) {
            let values = value

            if (this.valuesAppended.size === 0) {
                this.clearPlaceholder()
            }

            let selecteds = this.picker()._selectable.selecteds()

            values.forEach(value => {
                // If the value is already in the list, we don't need to append it...
                if (this.valuesAppended.has(value)) return;

                let selected = selecteds.find(i => i.value === value) || this.selectedElementGraveyard.get(value)

                // If we can find a selected option for the value, clone and append it...
                if (selected) {
                    let el = document.createElement('ui-selected-option')
                    el.innerHTML = selected.el.innerHTML
                    el.style.display = 'block'

                    this.valuesAppended.set(value, el)

                    this.appendChild(el)

                    this.selectedElementGraveyard.set(value, selected)
                } else {
                    // Otherwise, we just wont add anything to the dom...
                }
            })

            let existingValues = this.valuesAppended.keys()
            let valuesForRemoval = existingValues.filter(i => ! values.includes(i))

            valuesForRemoval.forEach(i => {
                this.valuesAppended.get(i).remove()
                this.valuesAppended.delete(i)
                this.selectedElementGraveyard.delete(i)
            })

            if (this.valuesAppended.size === 0) {
                this.putBackPlaceholder()
                this.selectedElementGraveyard.clear()
            }
        } else {
            let selected = this.picker()._selectable.findByValue(value) || this.selectedElementGraveyard.get(value)

            this.selectedElementGraveyard.clear()

            if (selected) {
                let el = document.createElement('ui-selected-option')

                el.innerHTML = selected.el.innerHTML

                this.innerHTML = el.outerHTML

                this.selectedElementGraveyard.set(value, selected)
            } else {
                this.putBackPlaceholder()
            }
        }
    }

    clearPlaceholder() {
        this.innerHTML = ''
    }

    putBackPlaceholder() {
        this.innerHTML = this.placeholderHTML
    }

    showOverflow() {
        this.querySelector('ui-selected-overflow').style.display = 'block'
    }

    hideOverflow() {
        this.querySelector('ui-selected-overflow').style.display = 'block'
    }
}

class UISelectedOption extends UIElement {
    //
}

class UISelectedCount extends UIElement {
    mount() {
        let picker = this.closest('ui-select')

        if (! picker.hasAttribute('multiple')) return

        this.textContent = picker.value.length

        picker._selectable.onChange(() => {
            this.textContent = picker.value.length
        })
    }
}

class UISelectedSingular extends UIElement {
    mount() {
        let picker = this.closest('ui-select')

        if (! picker.hasAttribute('multiple')) return

        let count = picker.value.length

        if (count === 1) {
            this.removeAttribute('data-hidden')
        } else {
            this.setAttribute('data-hidden', '')
        }

        picker._selectable.onChange(() => {
            let count = picker.value.length

            if (count === 1) {
                this.removeAttribute('data-hidden')
            } else {
                this.setAttribute('data-hidden', '')
            }
        })
    }
}

class UISelectedPlural extends UIElement {
    mount() {
        let picker = this.closest('ui-select')

        if (! picker.hasAttribute('multiple')) return

        let count = picker.value.length

        if (count > 1) {
            this.removeAttribute('data-hidden')
        } else {
            this.setAttribute('data-hidden', '')
        }

        picker._selectable.onChange(() => {
            let count = picker.value.length

            if (count > 1) {
                this.removeAttribute('data-hidden')
            } else {
                this.setAttribute('data-hidden', '')
            }
        })
    }
}

class UISelectedEmpty extends UIElement {
    mount() {
        let picker = this.closest('ui-select')

        let show = () => this.removeAttribute('data-hidden')
        let hide = () => this.setAttribute('data-hidden', '')

        if (picker.hasAttribute('multiple')) {
            if (picker.value.length === 0) { show() } else { hide() }
            picker._selectable.onChange(() => {
                if (picker.value.length === 0) { show() } else { hide() }
            })
        } else {
            if (picker.value === null) { show() } else { hide() }
            picker._selectable.onChange(() => {
                if (picker.value === null) { show() } else { hide() }
            })
        }
    }
}

element('select', UISelect)
element('empty', UIEmpty)
element('selected', UISelected)
element('selected-count', UISelectedCount)
element('selected-singular', UISelectedSingular)
element('selected-plural', UISelectedPlural)
element('selected-option', UISelectedOption)
element('selected-empty', UISelectedEmpty)

inject(({ css }) => css`ui-select { display: block; }`)
inject(({ css }) => css`ui-selected-option { display: contents; }`)
inject(({ css }) => css`ui-empty { display: block; cursor: default; }`)
// element('trigger', UITrigger)

function getEffectiveValueFromOption(el) {
    if (el.hasAttribute('value')) return el.getAttribute('value')

    return el.textContent.trim()
}

function handleKeyboardNavigation(el, activatable) {
    on(el, 'keydown', e => {
        if (! ['ArrowDown', 'ArrowUp', 'Escape'].includes(e.key)) return;

        if (e.key === 'ArrowDown') {
            activatable.activateNext();
            e.preventDefault(); e.stopPropagation();
        } else if (e.key === 'ArrowUp') {
            activatable.activatePrev();
            e.preventDefault(); e.stopPropagation();
        }
    })
}

function handleKeyboardSelection(root, el, activatable) {
    on(el, 'keydown', e => {
        if (e.key === 'Enter') {
            let activeEl = activatable.getActive()

            e.preventDefault(); e.stopPropagation()

            if (! activeEl) return

            activeEl._selectable?.trigger()

            // Forward click events so people can use things like x-on:click in command palettes and such...
            activeEl.click()

            root.dispatchEvent(new CustomEvent('action', {
                bubbles: false,
                cancelable: false,
            }))
        }
    })
}

function handleMouseSelection(root, activatable, pointerdown = false) {
    on(root, pointerdown ? 'pointerdown' : 'click', e => {
        if (e.target.closest('ui-option')) {
            let option = e.target.closest('ui-option')

            if (option._disabled) return

            option._selectable?.trigger()

            root.dispatchEvent(new CustomEvent('action', {
                bubbles: false,
                cancelable: false,
            }))

            e.preventDefault(); e.stopPropagation()
        }
    })
}

function handleActivationOnFocus(el, activatable, selectable) {
    on(el, 'focus', () => {
        let firstSelectedOption = selectable.selecteds()[0]?.el

        activatable.activateSelectedOrFirst(firstSelectedOption)
    })

    on(el, 'blur', () => {
        activatable.clearActive()
    })
}

function initListbox(el) {
    let listId = assignId(el, 'options')

    setAttribute(el, 'role', 'listbox')

    return listId
}

function linkExpandedStateToPopover(el, popoverable) {
    setAttribute(el, 'aria-haspopup', 'listbox')

    let refreshPopover = () => {
        setAttribute(el, 'aria-expanded', popoverable.getState() ? 'true' : 'false')

        popoverable.getState() ? setAttribute(el, 'data-open', '') : removeAttribute(el, 'data-open', '')
    }

    popoverable.onChange(() => {
        refreshPopover()
    }); refreshPopover()
}

function initPopover(root, trigger, popover, popoverable, anchorable) {
    let refreshPopover = () => {
        Array.from([root, popover]).forEach(i => {
            popoverable.getState() ? setAttribute(i, 'data-open', '') : removeAttribute(i, 'data-open', '')
        })

        popoverable.getState() && anchorable.reposition()
    }

    popoverable.onChange(() => refreshPopover()); refreshPopover()

    popoverable.onChange(() => {
        if (popoverable.getState()) {
            root.dispatchEvent(new Event('open', {
                bubbles: false,
                cancelable: false,
            }))
        } else {
            root.dispatchEvent(new Event('close', {
                bubbles: false,
                cancelable: false,
            }))
        }
    })
}

function controlActivationWithPopover(popoverable, activatable, selectable) {
    popoverable.onChange(() => {
        if (popoverable.getState()) {
            let firstSelectedOption = selectable.selecteds()[0]?.el

            queueMicrotask(() => { // We need to let the popover fully become visible first so that we detect which elements are visible...
                activatable.activateSelectedOrFirst(firstSelectedOption)
            })
        } else {
            activatable.clearActive()
        }
    })
}

function controlPopoverWithKeyboard(button, popoverable, activatable, selectable) {
    on(button, 'keydown', e => {
        if (! ['ArrowDown', 'ArrowUp', 'Escape'].includes(e.key)) return;

        if (e.key === 'ArrowDown') {
            if (! popoverable.getState()) {
                popoverable.setState(true);
                e.preventDefault(); e.stopImmediatePropagation();
            }
        } else if (e.key === 'ArrowUp') {
            if (! popoverable.getState()) {
                popoverable.setState(true);
                e.preventDefault(); e.stopImmediatePropagation();
            }
        } else if (e.key === 'Escape') {
            if (popoverable.getState()) {
                popoverable.setState(false);
            }
        }
    })
}

function closePopoverOnAction(root, popoverable) {
    on(root, 'action', () => {
        popoverable.setState(false)
    })
}

function openPopoverWithMouse(el, popoverable) {
    on(el, 'click', () => {
        if (! popoverable.getState()) {
            popoverable.setState(true)
            el.focus()
        }
    })
}

function togglePopoverWithMouse(button, popoverable) {
    on(button, 'click', () => {
        popoverable.setState(! popoverable.getState())
        button.focus()
    })
}

function focusInputWhenPopoverOpens(button, input, popoverable) {
    popoverable.onChange(() => {
        if (popoverable.getState()) {
            setTimeout(() => input.focus())
        }
    })
}

function filterResultsByInput(input, filterable) {
    filterable && on(input, 'input', e => {
        filterable.filter(e.target.value)
    })
}

function highlightInputContentsWhenFocused(input) {
    on(input, 'focus', () => input.select())
}

function preventInputEventsFromBubblingToSelectRoot(input) {
    on(input, 'change', e => e.stopPropagation())
    on(input, 'input', e => e.stopPropagation())
}

function controlPopoverWithInput(input, popoverable) {
    on(input, 'keydown', (e) => {
        if (/^[a-zA-Z0-9]$/.test(e.key) || e.key === 'Backspace') {
            popoverable.getState() || popoverable.setState(true)
        }
    })
}

function handleInputClearing(root, input, selectable, popoverable) {
    let shouldClear = root.hasAttribute('clear')

    if (! shouldClear) return

    let setInputValue = value => {
        input.value = value
        input.dispatchEvent(new Event('input', { bubbles: false }))
    }

    let clear = root.getAttribute('clear')
    let clearOnAction = clear === '' || clear.split(' ').includes('action')
    let clearOnSelect = clear === '' || clear.split(' ').includes('select')
    let clearOnClose = clear === '' || clear.split(' ').includes('close')
    let clearOnEsc = clear === '' || clear.split(' ').includes('esc')

    if (clearOnAction) {
        root.addEventListener('action', e => {
            setInputValue('')
        })
    } else if (clearOnSelect) {
        selectable.onChange(() => {
            setInputValue('')
        })
    }

    if (clearOnClose) {
        popoverable.onChange(() => {
            if (! popoverable.getState()) {
                setInputValue('')
            }
        })
    }

    if (clearOnEsc) {
        on(input, 'keydown', e => {
            if (e.key === 'Escape') {
                setInputValue('')
            }
        })
    }
}

function trackActiveDescendant(input, activatable) {
    activatable.onChange(() => {
        let activeEl = activatable.getActive()

        activeEl ? setAttribute(input, 'aria-activedescendant', activeEl.id) : removeAttribute(input, 'aria-activedescendant')
    })
}

function handleAutocomplete(autocomplete, isStrict, root, input, selectable, popoverable) {
    if (! autocomplete) {
        setAttribute(input, 'autocomplete', 'off')
        setAttribute(input, 'aria-autocomplete', 'none')

        return
    }

    let setInputValue = value => {
        input.value = value
        input.dispatchEvent(new Event('input', { bubbles: false }))
    }

    setAttribute(input, 'autocomplete', 'off')
    setAttribute(input, 'aria-autocomplete', 'list')

    queueMicrotask(() => {
        selectable.onInitAndChange(() => {
            input.value = selectable.selectedTextValue()
        })
    })

    root.addEventListener('action', e => {
        setInputValue(selectable.selectedTextValue())
    })

    if (isStrict) {
        popoverable.onChange(() => {
            if (! popoverable.getState()) {
                setInputValue(selectable.selectedTextValue())
            }
        })
    }
}

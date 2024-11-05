@props([
    'clearable' => true,
    'closable' => null,
    'icon' => null,
])

@php
// Clerable or closable, not both...
if ($closable !== null) $clearable = null;

$classes = Flux::classes()
    ->add('h-10 w-full flex items-center px-3 py-2')
    ->add('font-medium text-sm text-zinc-800 dark:text-white')
    ->add('pl-9') // Make room for magnifying glass icon...
    ->add(($closable || $clearable) ? 'pr-9' : '') // Make room for close/clear button...
    ->add('outline-none')
    ->add('border-b border-zinc-200 dark:border-zinc-600')
    ->add('bg-white dark:bg-zinc-700')
    ;
@endphp

<div class="relative flex grow mx-[-5px] mt-[-5px] mb-[5px]" data-flux-select-search>
    <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-zinc-400 pl-3.5 left-0">
        <?php if (is_string($icon)): ?>
            <flux:icon :$icon variant="micro" />
        <?php elseif ($icon): ?>
            {{ $icon }}
        <?php else: ?>
            <flux:icon.magnifying-glass variant="micro" />
        <?php endif; ?>
    </div>

    <input type="text" {{ $attributes->class($classes)->merge(['placeholder' => 'Search...']) }} autofocus />

    <?php if ($closable): ?>
        <div class="absolute top-0 bottom-0 flex items-center justify-center pr-1 right-0">
            <ui-close>
                <flux:button square variant="subtle" size="sm" aria-label="Clear search input">
                    <flux:icon.x-mark variant="micro" />
                </flux:button>
            </ui-close>
        </div>
    <?php elseif ($clearable): ?>
        <div class="absolute top-0 bottom-0 flex items-center justify-center pr-1 right-0 [[data-flux-select-search]:has(input:placeholder-shown)_&]:hidden">
            <flux:button square variant="subtle" size="sm" tabindex="-1" aria-label="Clear command input"
                x-on:click="$el.closest('[data-flux-select-search]').querySelector('input').value = ''; $el.closest('[data-flux-select-search]').querySelector('input').dispatchEvent(new Event('input', { bubbles: false })); $el.closest('[data-flux-select-search]').querySelector('input').focus()"
            >
                <flux:icon.x-mark variant="micro" />
            </flux:button>
        </div>
    <?php endif; ?>
</div>


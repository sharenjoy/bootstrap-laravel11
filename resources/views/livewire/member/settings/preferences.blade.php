<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
}; ?>

<div>
    <x-noah.member-settings>
        <x-slot name="settingTitle">
            {{ __('Preferences') }}
        </x-slot>

        <x-slot name="settingDesc">
            {{ __("Save your preferred settings across the website.") }}
        </x-slot>

        <form wire:submit="submit">
            <div class="flex-1 space-y-6">
                <flux:fieldset>
                    <flux:legend>{{ __('Language') }}</flux:legend>
                    <flux:description>{{ __('You can easily save the website language by selecting your preferred version, ensuring a smoother browsing experience.') }}</flux:description>
                    <flux:radio.group>
                        <flux:radio
                            value="zh_TW"
                            label="繁體中文"
                            checked
                        />
                        <flux:radio
                            value="en"
                            label="English"
                        />
                        <flux:radio
                            value="zh_CN"
                            label="簡体中文"
                        />
                    </flux:radio.group>
                </flux:fieldset>

                <flux:separator variant="subtle" />

                <flux:fieldset>
                    <flux:legend>{{ __('Currency') }}</flux:legend>
                    <flux:description>{{ __('By saving your preferred currency, prices will be instantly converted to the corresponding value, making browsing and shopping more convenient.') }}</flux:description>
                    <flux:select variant="listbox" searchable placeholder="選擇幣別...">
                        <flux:option>TWD</flux:option>
                        <flux:option>USD</flux:option>
                        <flux:option>JPD</flux:option>
                    </flux:select>
                </flux:fieldset>

                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">{{ __('Save').' '.__('Preferences') }}</flux:button>
                </div>
            </div>
        </form>
    </x-noah.member-settings>
</div>

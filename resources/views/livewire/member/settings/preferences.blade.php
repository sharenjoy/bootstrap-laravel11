<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
}; ?>

<div>
    <x-member-settings>
        <x-slot name="settingTitle">
            {{ __('Preferences') }}
        </x-slot>

        <x-slot name="settingDesc">
            {{ __("Update your account's profile information and email address.") }}
        </x-slot>

        <form wire:submit="submit">
            <div class="flex-1 space-y-6">
                <flux:fieldset>
                    <flux:legend>Language</flux:legend>
                    <flux:description>Choose the languages you want to support.</flux:description>
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
                    <flux:legend>Currency</flux:legend>
                    <flux:description>Choose the languages you want to support.</flux:description>
                    <flux:select variant="listbox" searchable placeholder="Choose industries...">
                        <flux:option>Photography</flux:option>
                        <flux:option>Design services</flux:option>
                        <flux:option>Web development</flux:option>
                        <flux:option>Accounting</flux:option>
                        <flux:option>Legal services</flux:option>
                        <flux:option>Consulting</flux:option>
                        <flux:option>Other</flux:option>
                    </flux:select>
                </flux:fieldset>

                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">{{ __('Save').' '.__('Preferences') }}</flux:button>
                </div>
            </div>
        </form>
    </x-member-settings>
</div>

<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
}; ?>

<div>
    <x-member-settings>
        <x-slot name="settingTitle">
            {{ __('Profile Information') }}
        </x-slot>

        <x-slot name="settingDesc">
            {{ __("Update your account's profile information and email address.") }}
        </x-slot>

        <form wire:submit="submit">
            <div class="flex-1 space-y-6">
                <flux:field>
                    <flux:label>{{ __('Name') }}</flux:label>
                    <flux:description class="max-w-md">Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
                    <flux:input type="text" wire:model="name" class="max-w-md" />
                    <flux:error name="name" />
                </flux:field>
                <flux:field>
                    <flux:label>{{ __('Email') }}</flux:label>
                    <flux:description class="max-w-md">Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
                    <flux:input type="email" wire:model="email" class="max-w-md" />
                    <flux:error name="email" />
                </flux:field>
                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">{{ __('Save').' '.__('Profile Information') }}</flux:button>
                </div>
            </div>
        </form>
    </x-member-settings>
</div>

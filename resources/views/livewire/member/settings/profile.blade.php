<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
}; ?>

<div>
    <x-noah.member-settings>
        <x-slot name="settingTitle">
            {{ __('Profile Information') }}
        </x-slot>

        <x-slot name="settingDesc">
            {{ __("Update your account's profile information and email address.") }}
        </x-slot>

        <form wire:submit="submit">
            <div class="flex-1 space-y-6">
                <flux:field>
                    <flux:label>{{ __('Name').' ('.__('Username').')' }}</flux:label>
                    <flux:description class="max-w-md mb-1">{{ __('Please enter your full name. Providing your full name is recommended for identity verification or further services.') }}<br><span class="text-indigo-500">{{ __('Format restriction:') }} {{ __('Minimum 2 characters, maximum 30 characters, only Chinese or English characters accepted.') }}</span></flux:description>
                    <flux:input type="text" wire:model="name" class="max-w-md" />
                    <flux:error name="name" />
                </flux:field>
                <flux:field>
                    <flux:label>{{ __('Email') }}</flux:label>
                    <flux:description class="max-w-md">{{ __('This email will serve as your login credential and will be used to receive system notifications and password reset emails. Please provide your frequently used email address.') }}<br><span class="text-indigo-500">{{ __('Format restriction:') }} {{ __('Must follow the standard email format (e.g., name@domain.com).') }}</span></flux:description>
                    <flux:input type="email" wire:model="email" class="max-w-md" />
                    <flux:error name="email" />
                </flux:field>
                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">{{ __('Save').' '.__('Profile Information') }}</flux:button>
                </div>
            </div>
        </form>
    </x-noah.member-settings>
</div>

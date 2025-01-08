<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
}; ?>

<div>
    <x-member-settings>
        <x-slot name="settingTitle">
            {{ __('Update Password') }}
        </x-slot>

        <x-slot name="settingDesc">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </x-slot>

        <form wire:submit="submit">
            <div class="flex-1 space-y-6">
                <flux:field>
                    <flux:label>{{ __('Current Password') }}</flux:label>
                    <flux:description class="max-w-md">Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
                    <flux:input type="password" wire:model="current_password" class="max-w-md" viewable />
                    <flux:error name="current_password" />
                </flux:field>
                <flux:field>
                    <flux:label>{{ __('New Password') }}</flux:label>
                    <flux:description class="max-w-md">Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
                    <flux:input type="password" wire:model="password" class="max-w-md" viewable />
                    <flux:error name="password" />
                </flux:field>
                <flux:field>
                    <flux:label>{{ __('Confirm Password') }}</flux:label>
                    <flux:description class="max-w-md">Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
                    <flux:input type="password" wire:model="password_confirmation" class="max-w-md" viewable />
                    <flux:error name="password_confirmation" />
                </flux:field>
                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">{{ __('Update Password') }}</flux:button>
                </div>
            </div>
        </form>
    </x-member-settings>
</div>

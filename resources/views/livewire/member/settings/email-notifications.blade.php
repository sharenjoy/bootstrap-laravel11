<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
    public $social = false;
}; ?>

<div>
    <x-member-settings>
        <x-slot name="settingTitle">
            {{ __('Email notifications') }}
        </x-slot>

        <x-slot name="settingDesc">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </x-slot>

            <div class="flex-1 space-y-6">
                <flux:switch wire:model.live="communication" label="Communication emails" description="Receive emails about your account activity." />

                <flux:separator variant="subtle" />

                <flux:switch wire:model.live="marketing" label="Marketing emails" description="Receive emails about new products, features, and more." />

                <flux:separator variant="subtle" />

                <flux:switch wire:model.live="social" label="Social emails" description="Receive emails for friend requests, follows, and more." />

                <flux:separator variant="subtle" />

                <flux:switch wire:model.live="security" label="Security emails" description="Receive emails about your account activity and security." />
            </div>
    </x-member-settings>
</div>

<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
    public $social = false;
}; ?>

<div>
    <x-noah.member-settings>
        <x-slot name="settingTitle">
            {{ __('Email notifications') }}
        </x-slot>

        <x-slot name="settingDesc">
            {{ __('Adjust the types of email notifications you wish to receive at any time.') }}
        </x-slot>

        <div class="flex-1 space-y-6">
            <flux:switch wire:model.live="communication" label="限時優惠通知" description="提醒會員參加期間限定的折扣活動或促銷優惠。" />
            <flux:separator variant="subtle" />
            <flux:switch wire:model.live="marketing" label="會員專屬優惠" description="提供針對會員的獨家優惠或折扣。" />
            <flux:separator variant="subtle" />
            <flux:switch wire:model.live="social" label="新產品上市通知" description="宣布新產品或服務的推出，並附加促銷優惠。" />
            <flux:separator variant="subtle" />
            <flux:switch wire:model.live="security" label="購物提醒通知" description="針對用戶關注的商品發送促銷信息。" />
        </div>
    </x-noah.member-settings>
</div>

<x-noah.app>

    <x-slot name="header">
        <flux:navbar.item wire:navigate href="{{ route('member.orders') }}" :current="in_array(Route::currentRouteName(), [
            'member.orders',
            'member.order-detail',
        ])">{{ __('Orders') }}</flux:navbar.item>
        <flux:navbar.item wire:navigate href="{{ route('member.coupons') }}" :current="Route::currentRouteName() == 'member.coupons'">{{ __('Coupons') }}</flux:navbar.item>
        <flux:navbar.item wire:navigate href="{{ route('member.reward-points') }}" :current="Route::currentRouteName() == 'member.reward-points'">{{ __('Reward Points') }}</flux:navbar.item>
        <flux:navbar.item wire:navigate href="{{ route('member.shopping-credit') }}" :current="Route::currentRouteName() == 'member.shopping-credit'">{{ __('Shopping Credit') }}</flux:navbar.item>
        <flux:navbar.item wire:navigate href="{{ route('member.profile') }}" :current="in_array(Route::currentRouteName(), [
            'member.profile',
            'member.update-password',
            'member.email-notifications',
            'member.preferences',
        ])">{{ __('Settings') }}</flux:navbar.item>
        <flux:navbar.item wire:navigate href="{{ route('home') }}">{{ __('Home') }}</flux:navbar.item>
    </x-slot>

    <x-slot name="sidebar">
        <flux:navlist.item wire:navigate href="{{ route('member.orders') }}" :current="in_array(Route::currentRouteName(), [
            'member.orders',
            'member.order-detail',
        ])">{{ __('Orders') }}</flux:navlist.item>
        <flux:navlist.item wire:navigate href="{{ route('member.coupons') }}" :current="Route::currentRouteName() == 'member.coupons'">{{ __('Coupons') }}</flux:navlist.item>
        <flux:navlist.item wire:navigate href="{{ route('member.reward-points') }}" :current="Route::currentRouteName() == 'member.reward-points'">{{ __('Reward Points') }}</flux:navlist.item>
        <flux:navlist.item wire:navigate href="{{ route('member.shopping-credit') }}" :current="Route::currentRouteName() == 'member.shopping-credit'">{{ __('Shopping Credit') }}</flux:navlist.item>
        <flux:navlist.item wire:navigate href="{{ route('member.profile') }}" :current="in_array(Route::currentRouteName(), [
            'member.profile',
            'member.update-password',
            'member.email-notifications',
            'member.preferences',
        ])">{{ __('Settings') }}</flux:navlist.item>
        <flux:navlist.item wire:navigate href="{{ route('home') }}">{{ __('Home') }}</flux:navlist.item>
    </x-slot>

    <x-slot name="main">
        <flux:main container class="bg-white">

            {{ $slot }}

        </flux:main>
    </x-slot>

</x-noah.app>

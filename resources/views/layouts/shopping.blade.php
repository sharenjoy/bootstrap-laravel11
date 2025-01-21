<x-noah.app>

    <x-slot name="header">
        <flux:navbar.item wire:navigate href="{{ route('home') }}">{{ __('Home') }}</flux:navbar.item>
    </x-slot>

    <x-slot name="sidebar">
        <flux:navlist.item wire:navigate href="{{ route('home') }}">{{ __('Home') }}</flux:navlist.item>
    </x-slot>

    <x-slot name="main">
        <flux:main container class="bg-white px-0">

            {{ $slot }}

        </flux:main>
    </x-slot>
</x-noah.app>

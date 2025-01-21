<div class="flex max-md:flex-col items-start">
    <div class="w-full md:w-[220px] pb-4 mr-10">
        <flux:navlist>
            <flux:navlist.item wire:navigate href="{{ route('member.profile') }}" icon="user-circle" :current="Route::currentRouteName() == 'member.profile'">{{ __('Profile Information') }}</flux:navlist.item>
            <flux:navlist.item wire:navigate href="{{ route('member.update-password') }}" icon="lock-closed" :current="Route::currentRouteName() == 'member.update-password'">{{ __('Update Password') }}</flux:navlist.item>
            <flux:navlist.item wire:navigate href="{{ route('member.email-notifications') }}" icon="bell-alert" :current="Route::currentRouteName() == 'member.email-notifications'">{{ __('Email notifications') }}</flux:navlist.item>
            <flux:navlist.item wire:navigate href="{{ route('member.preferences') }}" icon="adjustments-vertical" :current="Route::currentRouteName() == 'member.preferences'">{{ __('Preferences') }}</flux:navlist.item>
        </flux:navlist>
    </div>

    <flux:separator class="md:hidden border-0 [print-color-adjust:exact] bg-zinc-800/5 dark:bg-white/10 h-px w-full" />

    <div class="flex-1 max-md:pt-6 self-stretch">
        <div class="mx-auto [:where(&)]:max-w-7xl max-w-xl lg:max-w-3xl">
            <flux:heading size="xl" level="1">{{ __('Settings') }}</flux:heading>

            <flux:separator class="border-0 [print-color-adjust:exact] bg-zinc-800/5 dark:bg-white/10 h-px w-full my-8" />

            <div class="flex flex-col lg:flex-row gap-4 lg:gap-6">
                <div class="w-80 mb-6">
                    <flux:heading size="lg" level="2">{{ $settingTitle }}</flux:heading>
                    <flux:subheading>{{ $settingDesc }}</flux:subheading>
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

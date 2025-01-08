<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
        <meta name="theme-color" content="#000">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Architronix description contents">

		<title>{{ $title ?? config('app.name') }}</title>

        <!-- Favicons -->
        {{-- <link rel="shortcut icon" href="img/favicon.ico" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" /> --}}

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css'])

        @fluxStyles
	</head>

    <body class="min-h-screen bg-zinc-50 dark:bg-zinc-800">
        <flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:brand wire:navigate href="{{ route('home') }}" logo="https://fluxui.dev/img/demo/logo.png" name={{ config('app.name') }} class="max-lg:hidden dark:hidden" />
            <flux:brand wire:navigate href="{{ route('home') }}" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name={{ config('app.name') }} class="max-lg:!hidden hidden dark:flex" />

            <flux:navbar class="-mb-px max-lg:hidden">
                <flux:navbar.item wire:navigate href="{{ route('home') }}">{{ __('Home') }}</flux:navbar.item>
                <flux:navbar.item wire:navigate href="{{ route('member.orders') }}" :current="Route::currentRouteName() == 'member.orders'">{{ __('Orders') }}</flux:navbar.item>
                <flux:navbar.item wire:navigate href="{{ route('member.coupons') }}" :current="Route::currentRouteName() == 'member.coupons'">{{ __('Coupons') }}</flux:navbar.item>
                <flux:navbar.item wire:navigate href="{{ route('member.reward-points') }}" :current="Route::currentRouteName() == 'member.reward-points'">{{ __('Reward Points') }}</flux:navbar.item>
                <flux:navbar.item wire:navigate href="{{ route('member.shopping-credit') }}" :current="Route::currentRouteName() == 'member.shopping-credit'">{{ __('Shopping Credit') }}</flux:navbar.item>
                <flux:navbar.item wire:navigate href="{{ route('member.profile') }}" :current="in_array(Route::currentRouteName(), [
                    'member.profile',
                    'member.update-password',
                    'member.email-notifications',
                    'member.preferences',
                ])">{{ __('Settings') }}</flux:navbar.item>
            </flux:navbar>

            <flux:spacer />

            <flux:navbar class="mr-4">
                <flux:navbar.item icon="magnifying-glass" href="#" label="Search" />
                <flux:navbar.item icon="shopping-cart" href="#" label="Search" />
            </flux:navbar>

            <flux:dropdown position="top" align="start">
                <flux:profile avatar="https://avatars.githubusercontent.com/u/1887781?v=4" />

                <flux:menu>
                    <div class="px-2 py-1.5">
                        <flux:subheading>Account</flux:subheading>
                        <flux:heading>Ronald</flux:heading>
                    </div>
                    <flux:menu.separator />
                    <flux:menu.item icon="arrow-right-start-on-rectangle">{{ __('Logout') }}</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        <flux:sidebar stashable sticky class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <flux:brand wire:navigate href="{{ route('home') }}" logo="https://fluxui.dev/img/demo/logo.png" name={{ config('app.name') }} class="px-2 dark:hidden" />
            <flux:brand wire:navigate href="{{ route('home') }}" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name={{ config('app.name') }} class="px-2 hidden dark:flex" />

            <flux:navlist variant="outline">
                <flux:navlist.item wire:navigate href="{{ route('home') }}">{{ __('Home') }}</flux:navlist.item>
                <flux:navlist.item wire:navigate href="{{ route('member.orders') }}" :current="Route::currentRouteName() == 'member.orders'">{{ __('Orders') }}</flux:navlist.item>
                <flux:navlist.item wire:navigate href="{{ route('member.coupons') }}" :current="Route::currentRouteName() == 'member.coupons'">{{ __('Coupons') }}</flux:navlist.item>
                <flux:navlist.item wire:navigate href="{{ route('member.reward-points') }}" :current="Route::currentRouteName() == 'member.reward-points'">{{ __('Reward Points') }}</flux:navlist.item>
                <flux:navlist.item wire:navigate href="{{ route('member.shopping-credit') }}" :current="Route::currentRouteName() == 'member.shopping-credit'">{{ __('Shopping Credit') }}</flux:navlist.item>
                <flux:navlist.item wire:navigate href="{{ route('member.profile') }}" :current="in_array(Route::currentRouteName(), [
                    'member.profile',
                    'member.update-password',
                    'member.email-notifications',
                    'member.preferences',
                ])">{{ __('Settings') }}</flux:navlist.item>
            </flux:navlist>

            <flux:spacer />

        </flux:sidebar>

        <flux:main container class="bg-white">

            {{ $slot }}

        </flux:main>

        @fluxScripts
    </body>

</html>

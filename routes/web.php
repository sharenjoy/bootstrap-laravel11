<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Livewire\Volt\Volt;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Volt::route('/', 'home')->name('home');
    Volt::route('/shopping-cart', 'shopping-cart')->name('shopping-cart');
    Volt::route('/checkout', 'checkout')->name('checkout');

    Route::group([
        'prefix' => 'member',
        // 'middleware' => ['auth', 'verified']
    ], function () {
        /** ALL DASHBOARD ROUTES **/
        Volt::route('orders', 'member.orders')->name('member.orders');
        Volt::route('orders/{id}', 'member.order-detail')->name('member.order-detail');
        Volt::route('coupons', 'member.coupons')->name('member.coupons');
        Volt::route('reward-points', 'member.reward-points')->name('member.reward-points');
        Volt::route('shopping-credit', 'member.shopping-credit')->name('member.shopping-credit');
        Route::group([
            'prefix' => 'settings'
        ], function () {
            Volt::route('profile', 'member.settings.profile')->name('member.profile');
            Volt::route('update-password', 'member.settings.update-password')->name('member.update-password');
            Volt::route('email-notifications', 'member.settings.email-notifications')->name('member.email-notifications');
            Volt::route('preferences', 'member.settings.preferences')->name('member.preferences');
        });
    });

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
});

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

    Route::group([
        'prefix' => 'member',
        'middleware' => ['auth', 'verified']
    ], function () {
        /** ALL MEMBER ROUTES **/
        Volt::route('dashboard', 'member.dashboard')->name('member.dashboard');
    });

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
});

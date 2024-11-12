<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

class SettingsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();

        view()->share('settings', $settings);
    }

    public function register()
    {
        //
    }
}


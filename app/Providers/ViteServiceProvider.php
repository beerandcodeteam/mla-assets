<?php

namespace App\Providers;

use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;

class ViteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Vite::macro('images', fn ($asset) => $this->asset("resources/images/{$asset}"));
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use App\Models\MstLabel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    public static function getCachedLabels()
    {
        return Cache::rememberForever('mst_labels_cache', function () {
            return MstLabel::all(['id', 'label_name', 'label_color'])->keyBy('id');
        });
    }
}

<?php

namespace App\Providers;

use App\Models\Wording;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $wordings = Wording::all()->groupBy('group')->map->keyBy('key')->toArray();
        Cache::forever('translation',$wordings);
        view()->share('locales', config('translatable.locales'));
        view()->share('current_locale', App::currentLocale());
        view()->share('translation', Cache::get('translation'));
    }
}

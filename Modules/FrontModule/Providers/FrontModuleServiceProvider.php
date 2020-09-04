<?php

namespace Modules\FrontModule\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\View;
use Modules\FrontModule\Services\SharedDataService;

class FrontModuleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {

        if (Schema::hasTable('trip_category')) {

            $categories = SharedDataService::getAllCategory();
            $configs = SharedDataService::getConfig();
            $languages = SharedDataService::getLanguages();
            $pages = SharedDataService::getAllPages();

            View::composer('*', function ($view) use ($pages, $categories, $configs, $languages) {
                $view->with('tripcategs', $categories);
                $view->with('config', $configs);
                $view->with('languages', $languages);
                $view->with('pages', $pages);

            });
        }


        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('frontmodule.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php', 'frontmodule'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/frontmodule');

        $sourcePath = __DIR__ . '/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/frontmodule';
        }, \Config::get('view.paths')), [$sourcePath]), 'frontmodule');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/frontmodule');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'frontmodule');
        } else {
            $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'frontmodule');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (!app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}

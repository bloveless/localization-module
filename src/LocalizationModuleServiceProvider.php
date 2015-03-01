<?php namespace Anomaly\LocalizationModule;

use Illuminate\Support\ServiceProvider;

/**
 * Class LocalizationModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule
 */
class LocalizationModuleServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        if (env('INSTALLED')) {
            $this->app->make('twig')->addExtension(
                $this->app->make('Anomaly\LocalizationModule\Language\LanguagePlugin')
            );
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Anomaly\LocalizationModule\Zone\ZoneServiceProvider');
        $this->app->register('Anomaly\LocalizationModule\State\StateServiceProvider');
        $this->app->register('Anomaly\LocalizationModule\Country\CountryServiceProvider');
        $this->app->register('Anomaly\LocalizationModule\Currency\CurrencyServiceProvider');
        $this->app->register('Anomaly\LocalizationModule\Language\LanguageServiceProvider');
    }
}

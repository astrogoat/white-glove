<?php

namespace Astrogoat\WhiteGlove;

use Astrogoat\WhiteGlove\Peripherals\Icon;
use Astrogoat\WhiteGlove\Peripherals\Modal;
use Astrogoat\WhiteGlove\Settings\Details;
use Astrogoat\WhiteGlove\Settings\ValueProps;
use Astrogoat\WhiteGlove\Settings\WhiteGloveSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class WhiteGloveServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('white-glove')
            ->settings(WhiteGloveSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->backendRoutes(__DIR__.'/../routes/backend.php')
            ->frontendRoutes(__DIR__.'/../routes/frontend.php');
    }

    public function configurePackage(Package $package): void
    {
        $package->name('white-glove')->hasConfigFile()->hasViews();
    }

    public function bootingPackage(): void
    {
        Livewire::component('astrogoat.white-glove.settings.details', Details::class);
        Livewire::component('astrogoat.white-glove.peripherals.modal', Modal::class);
        Livewire::component('astrogoat.white-glove.peripherals.icon', Icon::class);
    }

}

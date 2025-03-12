<?php

namespace Astrogoat\WhiteGlove\Peripherals;

use Helix\Fabrick\Notification;
use Helix\Lego\Http\Livewire\Traits\InteractsWithMedia;
use Helix\Lego\Http\Livewire\Traits\InteractsWithTopBar;
use Helix\Lego\Settings\AppSettings;
use Helix\Lego\Settings\Peripherals\Peripheral;

class Icon extends Peripheral
{
    use InteractsWithTopBar;
    use InteractsWithMedia;

    public string $icon;

    protected $listeners = [
        "addMedia:1" => 'addMedia',
    ];

    public function mount(AppSettings $settings)
    {
        parent::mount($settings);

        $this->icon = blank($settings->icon)
            ? ''
            : $settings->icon;
    }

    public function save()
    {
        $this->settings->icon = $this->icon;
        $this->settings->save();

        $this->notify(Notification::success('Saved', 'Icon settings have been saved.')->autoDismiss(2500));
        $this->markAsClean();
    }

    public function removeIcon()
    {
        $this->icon = '';
        $this->markAsDirty();
    }

    public function triggerMediaLibrary()
    {
        $this->openMediaLibrary(
            1,
            'Icon',
            array_merge([
                'maxFiles' => 1,
            ], [])
        );
    }

    public function render()
    {
        return view('white-glove::peripherals.icon');
    }

    public function addMedia($key, $provider, array $assets)
    {
        $this->icon = $assets[0]['url'];
    }
}

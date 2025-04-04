<?php

namespace Astrogoat\WhiteGlove\Settings;

use Helix\Fabrick\Notification;
use Helix\Lego\Http\Livewire\Traits\InteractsWithTopBar;
use Helix\Lego\Settings\AppSettings;
use Helix\Lego\Settings\Peripherals\Peripheral;

class Details extends Peripheral
{
    use InteractsWithTopBar;

    public array $details;

    public function mount(AppSettings $settings)
    {
        parent::mount($settings);

        $this->details = blank($settings->details)
            ? []
            : $settings->details;
    }

    public function addValueProp()
    {
        $this->details[] = '';

        $this->markAsDirty();
    }

    public function removeValueProp($index)
    {
        unset($this->details[$index]);
        $this->details = array_values($this->details);

        $this->updated('details', $this->details);

        $this->markAsDirty();
    }

    public function save()
    {
        $settings = app(WhiteGloveSettings::class);
        $settings->details = $this->details;
        $settings->save();

        $this->notify(Notification::success('Saved', 'Details settings have been saved.')->autoDismiss(2500));
        $this->markAsClean();
    }

    public function render()
    {
        return view('white-glove::settings.details');
    }
}

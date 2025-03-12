<?php

namespace Astrogoat\WhiteGlove\Settings;

use Helix\Lego\Apps\Contracts\SettingsCast;
use Helix\Lego\Http\Livewire\Traits\InteractsWithTopBar;
use Helix\Lego\Settings\AppSettings;

class Details extends SettingsCast
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

    public function render()
    {
        return view('white-glove::settings.details');
    }

    public function get($details)
    {
        return $details;
    }

  public function set($details)
    {
        return $details;
    }
}

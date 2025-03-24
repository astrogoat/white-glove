<?php

namespace Astrogoat\WhiteGlove\Peripherals;

use Astrogoat\WhiteGlove\Settings\WhiteGloveSettings;
use Helix\Fabrick\Notification;
use Helix\Lego\Http\Livewire\Traits\InteractsWithTopBar;
use Helix\Lego\Settings\AppSettings;
use Helix\Lego\Settings\Peripherals\Peripheral;

class Modal extends Peripheral
{
    use InteractsWithTopBar;

    public array $modal;

    public function mount(AppSettings $settings)
    {
        parent::mount($settings);

        $this->modal = blank($settings->modal)
            ? [
                'show_modal' => false,
                'label' => 'Learn more',
                'content' => '',
            ]
            : $settings->modal;
    }

    public function save()
    {

        $settings = app(WhiteGloveSettings::class);
        $settings->modal = $this->modal;
        $settings->save();

        $this->notify(Notification::success('Saved', 'Modal settings have been saved.')->autoDismiss(2500));
        $this->markAsClean();
    }

    public function render()
    {
        return view('white-glove::peripherals.modal');
    }
}

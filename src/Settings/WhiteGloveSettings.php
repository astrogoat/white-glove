<?php

namespace Astrogoat\WhiteGlove\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class WhiteGloveSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
//            'url' => Rule::requiredIf($this->enabled === true), // Example, modify to fit your need.
        ];
    }

    public function description(): string
    {
        return 'Interact with WhiteGlove.';
    }

    public static function group(): string
    {
        return 'white-glove';
    }
}

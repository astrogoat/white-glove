<?php

namespace Astrogoat\WhiteGlove\Settings;

use Astrogoat\WhiteGlove\Peripherals\Icon;
use Astrogoat\WhiteGlove\Peripherals\Modal;
use Helix\Lego\Settings\AppSettings;

class WhiteGloveSettings extends AppSettings
{
    public string $title;

    public $details;

    public $icon;
    public $modal;

    protected array $peripherals = [
        Icon::class,
        Modal::class,
    ];

    public function rules(): array
    {
        return [];
    }

    public static function casts(): array
    {
        return [
            'details' => Details::class,
        ];
    }

    public function description(): string
    {
        return 'Interact with White Glove.';
    }

    public static function group(): string
    {
        return 'white-glove';
    }

    public function sections(): array
    {
        return [
            [
                'title' => 'Title',
                'properties' => ['title'],
            ],
            [
                'title' => 'Details (Value props)',
                'properties' => ['details'],
            ],
        ];
    }

    public function help(): array
    {
        return [
            'title' => 'This is the title to be displayed on the WhiteGlove widget. Leave blank to use the default title: "White Glove Delivery".',
        ];
    }
}

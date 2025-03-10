<?php

namespace Astrogoat\WhiteGlove;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\WhiteGlove\WhiteGlove
 */
class WhiteGloveFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'white-glove';
    }
}

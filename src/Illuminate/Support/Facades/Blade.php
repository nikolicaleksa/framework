<?php

namespace Illuminate\Support\Facades;

/**

 *
 * @mixin \Illuminate\View\Compilers\BladeCompiler
 */
class Blade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'blade.compiler';
    }
}

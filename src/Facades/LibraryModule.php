<?php

namespace Aadi\LibraryModule\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aadi\LibraryModule\LibraryModule
 */
class LibraryModule extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Aadi\LibraryModule\LibraryModule::class;
    }
}

<?php namespace Euw\PdfGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class PDF extends Facade {

    public static function getFacadeAccessor()
    {
        return 'pdfgenerator';
    }

} 
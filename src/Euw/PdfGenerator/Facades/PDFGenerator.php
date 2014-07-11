<?php namespace Euw\PdfGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class PDFGenerator extends Facade {

    public static function getFacadeAccessor()
    {
        return 'pdfgenerator';
    }

} 
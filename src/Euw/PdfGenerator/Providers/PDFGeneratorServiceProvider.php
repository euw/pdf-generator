<?php namespace Euw\PdfGenerator\Providers;

use Illuminate\Support\ServiceProvider;

class PDFGeneratorServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('pdfgenerator', 'Euw\PdfGenerator\Generators\PDFGenerator');
    }
}
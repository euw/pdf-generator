<?php namespace Euw\PdfGenerator\Generators;

use Euw\PdfGenerator\Renderers\PDFRendererInterface;

class PDFGenerator implements PDFGeneratorInterface {

    /**
     * @var PDFRendererInterface
     */
    private $renderer;

    public function __construct(PDFRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function show($layout)
    {
        $this->renderer->render($layout)->show();
    }

    public function download($layout, $fileName)
    {
        $this->renderer->render($layout)->download($fileName);
    }

    public function attachment($layout)
    {
        $this->renderer->render($layout)->attachment();
    }

    public function saveToFile($layout, $fileName)
    {
        $this->renderer->render($layout)->saveToFile($fileName);
    }
}
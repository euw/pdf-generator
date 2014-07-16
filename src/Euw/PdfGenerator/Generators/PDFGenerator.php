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

    public function render($layout)
    {
        return $this->renderer->render($layout);
    }

    public function show($layout)
    {
        return $this->render($layout)->show();
    }

    public function download($layout, $fileName)
    {
        return $this->render($layout)->download($fileName);
    }

    public function attachment($layout)
    {
        return $this->render($layout)->attachment();
    }

    public function saveToFile($layout, $fileName)
    {
        return $this->render($layout)->saveToFile($fileName);
    }
}
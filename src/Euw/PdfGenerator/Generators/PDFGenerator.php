<?php namespace Euw\PdfGenerator\Generators;

use Euw\PdfGenerator\Layouts\PDFLayoutInterface;
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

    public function show(PDFLayoutInterface $layout, $content)
    {
        $this->renderer->render($layout, $content)->show();
    }

    public function download(PDFLayoutInterface $layout, $content)
    {
        $this->renderer->render($layout, $content)->download();
    }

    public function attachment(PDFLayoutInterface $layout, $content)
    {
        $this->renderer->render($layout, $content)->attachment();
    }
}
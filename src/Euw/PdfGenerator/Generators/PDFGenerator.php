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

    public function render($layout, $contents = [])
    {
        return $this->renderer->render($layout, $contents);
    }

    public function show()
    {
        return $this->renderer->show();
    }

    public function download($fileName)
    {
        return $this->renderer->download($fileName);
    }

    public function attachment()
    {
        return $this->renderer->attachment();
    }

    public function saveToFile($fileName)
    {
        return $this->renderer->saveToFile($fileName);
    }

    public function setTargetId($id)
    {
        $this->renderer->setTargetId($id);
    }
}
<?php namespace Euw\PdfGenerator\Generators;

use Euw\PdfGenerator\Layouts\PDFLayoutInterface;

interface PDFGeneratorInterface {
    public function show(PDFLayoutInterface $layout, $content);
    public function download(PDFLayoutInterface $layout, $content);
    public function attachment(PDFLayoutInterface $layout, $content);
}
<?php namespace Euw\PdfGenerator\Generators;

interface PDFGeneratorInterface {
    public function show($layout);
    public function download($layout, $fileName);
    public function attachment($layout);
    public function saveToFile($layout, $fileName);
}
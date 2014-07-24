<?php namespace Euw\PdfGenerator\Generators;

interface PDFGeneratorInterface {
    public function render($layout);
    public function show($layout);
    public function download($layout, $fileName);
    public function attachment($layout);
    public function saveToFile($layout, $fileName);

    public function setTargetId($id);
}
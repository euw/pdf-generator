<?php namespace Euw\PdfGenerator\Renderers;

interface PDFRendererInterface {
    public function render($layout);
    public function show();
    public function download($fileName);
    public function attachment();
    public function saveToFile($fileName);
}
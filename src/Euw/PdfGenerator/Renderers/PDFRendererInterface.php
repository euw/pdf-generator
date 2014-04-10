<?php namespace Euw\PdfGenerator\Renderers;

interface PDFRendererInterface {
    public function render($format, $content);
    public function show();
    public function download();
    public function attachment();
}
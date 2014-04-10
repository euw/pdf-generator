<?php namespace Euw\PdfGenerator\Layouts;

interface PDFLayoutInterface {
    public function toArray();
    public function layout();
} 
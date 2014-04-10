<?php namespace Euw\PdfGenerator\Layouts;

class PDFLayoutA4 implements PDFLayoutInterface {

    public function toArray()
    {
        return [210, 297];
    }

    public function layout()
    {
        // TODO: Implement layout() method.
    }
}
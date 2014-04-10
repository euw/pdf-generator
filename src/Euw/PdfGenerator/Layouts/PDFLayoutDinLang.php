<?php namespace Euw\PdfGenerator\Layouts;

class PDFLayoutDinLang implements PDFLayoutInterface {

    public function toArray()
    {
        return [105, 210];
    }

    public function layout()
    {
        return [
            'title' => [
                'color' => '0,0,0,100',
                'font-size' => 24,
                'font-family' => 'Helvetica',
                'x' => 14,
                'y' => 48
            ],
            'body' => [
                'color' => '0,0,0,100',
                'font-size' => 16,
                'font-family' => 'Helvetica',
                'x' => 14,
                'y' => 78
            ]
        ];
    }
}
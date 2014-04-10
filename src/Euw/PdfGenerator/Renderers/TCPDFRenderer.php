<?php namespace Euw\PdfGenerator\Renderers;

use Illuminate\Support\Facades\File;
use TCPDF;

class TCPDFRenderer implements PDFRendererInterface {

    private $pdf;

    public function __construct(TCPDF $pdf)
    {
        $this->pdf = $pdf;
        date_default_timezone_set("Europe/Berlin");
    }

    public function render($format, $content)
    {
        $this->addPage($format);
        $this->setBackgroundImage($format, $content);
        $this->writeTextContent($format, $content);

        return $this;
    }

    private function addPage($format)
    {
        // for full background image
        $this->pdf->SetAutoPageBreak(false);

        // margins
        $this->pdf->setMargins(0,0,0);
        $this->pdf->SetHeaderMargin(0);
        $this->pdf->SetTopMargin(0);
        $this->pdf->SetFooterMargin(0);

        // disable header and footer
        $this->pdf->setPrintHeader(true);
        $this->pdf->setPrintFooter(false);

        // add a new Page. P = Portrait, L = Landscape
        $this->pdf->AddPage('P', $format->toArray());
    }

    private function writeTextContent($format, $content)
    {
        $layout = $format->layout();

        if (is_array($content)) {
            foreach ($content as $identifier => $text) {
                if (array_key_exists($identifier, $layout)) {
                    $this->pdf->SetTextColor($layout[$identifier]['color']);
                    $this->pdf->SetFont($layout[$identifier]['font-family'], '', $layout[$identifier]["font-size"]);
                    $this->pdf->MultiCell(0,0, $text, 0, 'L', false, 1, $layout[$identifier]["x"], $layout[$identifier]["y"], true, 0, false, true, 0, 'T', true);
                }
            }
        }
    }

    private function setBackgroundImage($format, $content)
    {
        if (isset($content['background']) && File::exists($content['background'])) {
            // get the current page break margin
            $bMargin = $this->pdf->getBreakMargin();

            // get current auto-page-break-mode
            $autoPageBreak = $this->pdf->getAutoPageBreak();

            // disable auto-page-break
            $this->pdf->SetAutoPageBreak(false, 0);

            $this->pdf->Image($content['background'], 0, 0, $format->toArray()[0], $format->toArray()[1], '', '', '', false, 300, '', false, false, 0);

            // restore auto-page-break status
            $this->pdf->SetAutoPageBreak($autoPageBreak, $bMargin);

            //set the starting point for the page content
            // $this->pdf->setPageMark();
        }
    }

    public function show()
    {
        $time = time();
        // E: return the document as base64 mime multi-part email attachment (RFC 2045)
        // Options: I = display inline, F = output as file, D = download
        $this->pdf->Output($time.'.pdf', 'I');
    }

    public function download()
    {
        $time = time();
        // E: return the document as base64 mime multi-part email attachment (RFC 2045)
        // Options: I = display inline, F = output as file, D = download
        $this->pdf->Output($time.'.pdf', 'D');
    }

    public function attachment()
    {
        // TODO: Implement attachment() method.
    }
}
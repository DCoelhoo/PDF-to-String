<?php
    include('pdfparser/alt_autoload.php-dist');

    // Parse PDF file and build necessary objects.
    // https://github.com/smalot/pdfparser/
    
    $parser = new \Smalot\PdfParser\Parser();
    $pdf = $parser->parseFile('sample.pdf');

    $text = $pdf->getText();
    echo $text;
?>
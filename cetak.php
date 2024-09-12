<?php

require 'vendor/autoload.php'; 

use Dompdf\Dompdf;

$dompdf = new Dompdf();


$html = "<h1>2-AEC-2 KECE</h1>";
$dompdf->loadHtml($html);


$dompdf->setPaper('A4', 'portrait');


$dompdf->render();


$dompdf->stream("output.pdf", array("Attachment" => 0)); 

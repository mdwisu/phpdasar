<?php

ob_clean();
ob_start();

$rapport = ob_get_clean();
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new mPDF();
$mpdf->showImageErrors = true;
$mpdf->WriteHTML("<h1>Hello world..</h1>");
$mpdf->Output();
?>
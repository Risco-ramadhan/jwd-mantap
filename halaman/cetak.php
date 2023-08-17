<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vsga1/library/fpdf/fpdf.php';
ob_end_clean(); //    the buffer and never prints or returns anything.
ob_start(); // it starts buffering
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Hello World!');
$pdf->Output();
ob_end_flush();
?>

<div>mantap</div>
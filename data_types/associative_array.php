<?php
require 'fpdf/fpdf.php';

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial", "B", "20");
$pdf->Cell(0, 10, "rewwe");
$pdf->Output();
?>

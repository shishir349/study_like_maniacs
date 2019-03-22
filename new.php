<?php 
require('fpdf.php'); 
$pdf = new FPDF(); 
$pdf->AddPage(); 
$pdf->SetFont('Times','B',25); 
$pdf->Cell(176,10,'Welcome to fpdf',0,0,'C'); 

$pdf->Ln(); 
$pdf->SetFont('Arial','B',15); 
$pdf->Cell(176,5,'welcome to 2 line',0,0,'C');
$pdf->Output();
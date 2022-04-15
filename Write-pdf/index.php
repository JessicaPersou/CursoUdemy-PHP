<?php

$today= date('Y-m-d');
//$tpath = 'today/' .$today.'.pdf';


require('./pdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World da Jessica, arquivo sera salvo com meu nome agora!'); // mensagem do arquivo


// arquivo sava automatico e coloca o nome do dia ao salvar
$pdf->Output('I', 'Jessica-' . $today.'.pdf');

?>
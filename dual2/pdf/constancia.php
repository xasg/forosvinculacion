<?php 
session_start();
require ('fpdf.php');
include_once('../databases_usuario.php');
$id = $_SESSION["id"];
$participante = run_participante($id);

//$pdf = new FPDF('L','cm',array(29.700,21));
$pdf=new FPDF('P','mm','A4');
$pdf->AddFont('Montserrat','','Montserrat-Bold.php');
$pdf->SetTextColor(0,0,0);

$pdf->AddPage();

if ($participante['dt_region']==01) {
	$pdf->Image('img/sursureste_firmada.png',0,0,210,300,'PNG');
} elseif ($participante['dt_region']==02) {
	$pdf->Image('img/cdmx_firmada.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==03) {
	$pdf->Image('img/bajio_firmada.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==04) {
	$pdf->Image('img/frontera_firmada.png',0,0,210,300,'PNG');
}else {
	$pdf->Image('img/noroeste_firmada.png',0,0,210,300,'PNG');
}

// Nombre y Apellido
$pdf->SetFont('Montserrat','',45);
$pdf->SetTextColor(162,34,64);
//$pdf->Text(30,150,$participante['dt_nombre'] ." "."Mendez"." "."Garcia");
//$pdf->Cell(0,240,utf8_decode($participante['dt_nombre']),0,0,'C');
$pdf->Cell(0,250,utf8_decode($participante['dt_nombre']),0,0,'C');
$pdf->Ln(145);
$pdf->Cell(0,0,utf8_decode($participante['dt_apaterno'])."\n".utf8_decode($participante['dt_amaterno']),0,0,'C');
    $Y = $pdf->GetY();
$pdf->Output('certificado','I');
?>
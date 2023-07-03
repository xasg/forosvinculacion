<?php 
session_start();
require ('fpdf.php');
include_once('../databases_usuario.php');
//define('FPDF_FONTPATH', 'font/');
//require("font/makefont/makefont.php"); 
//MakeFont('font/mon/Montserrat.ttf','cp1252');
$id = $_SESSION["id"];
$participante = run_participante($id);

//$pdf = new FPDF('L','cm',array(29.700,21));
$pdf=new FPDF('P','mm','A4');
$pdf->SetTextColor(0,0,0);

$pdf->AddPage();

if ($participante['dt_region']==01) {
	$pdf->Image('img/sursureste.png',0,0,210,300,'PNG');
} elseif ($participante['dt_region']==02) {
	$pdf->Image('img/cdmx.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==03) {
	$pdf->Image('img/bajio.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==04) {
	$pdf->Image('img/frontera.png',0,0,210,300,'PNG');
}else {
	$pdf->Image('img/noroeste.png',0,0,210,300,'PNG');
}

// Nombre y Apellido
$pdf->SetFont('helvetica','B',23);
//$pdf->Text(30,150,$participante['dt_nombre'] ." "."Mendez"." "."Garcia");
$pdf->Cell(0,260,utf8_decode($participante['dt_nombre']) ." ".utf8_decode($participante['dt_apaterno'])." ".utf8_decode ($participante['dt_amaterno']),0,0,'C');




$pdf->Output('certificado','I');
?>
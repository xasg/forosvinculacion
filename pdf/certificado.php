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
	$pdf->Image('img/constancias/sursureste.png',0,0,210,300,'PNG');
} elseif ($participante['dt_region']==02) {
	$pdf->Image('img/constancias/cdmx.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==03) {
	$pdf->Image('img/constancias/bajio.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==04) {
	$pdf->Image('img/constancias/frontera.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==05) {
	$pdf->Image('img/constancias/noroeste.png',0,0,210,300,'PNG');
}else {
	$pdf->Image('img/constancias/general.png',0,0,210,300,'PNG');
}

// Nombre y Apellido
$pdf->SetFont('Montserrat','',45);
$pdf->SetTextColor(180,154,116);
//$pdf->Text(30,150,$participante['dt_nombre'] ." "."Mendez"." "."Garcia");
//$pdf->Cell(0,240,utf8_decode($participante['dt_nombre']),0,0,'C');
$pdf->Ln(150);
$pdf->Cell(0,0,utf8_decode($participante['dt_nombre']),0,0,'C');
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode($participante['dt_apellidos']),0,0,'C');
    $Y = $pdf->GetY();
$pdf->Output('certificado','I');
?>
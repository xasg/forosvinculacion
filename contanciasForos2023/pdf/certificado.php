<?php 
session_start();
require ('fpdf.php');
include_once('../databases_usuario.php');
$id = $_SESSION["id"];
$region = $_SESSION["region"];
//mysqli_set_charset( $mysqli, 'utf8');
$participante = run_participante($id, $region);



/*****************************************/
// esta funcion se usa para poder cambiar el valor de status_contancia a 1, esto indica que ya genero su constancia 
 $correo =  $participante['dt_email'];  
// echo "el correo  es ". $correo;
  update_status_constancia($correo);
 /******************************************/

//$pdf = new FPDF('L','cm',array(29.700,21));
$pdf=new FPDF('P','mm','A4');
$pdf->AddFont('Montserrat','','Montserrat.php');
$pdf->SetTextColor(0,0,0);

$pdf->AddPage();
//$pdf->Image('img/constancia.png',0,0,210,300,'PNG');
if ($participante['dt_region']==01) {
	$pdf->Image('img/sur_sureste.png',0,0,210,300,'PNG');
} elseif ($participante['dt_region']==02) {
	$pdf->Image('img/centro_sur.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==03) {
	$pdf->Image('img/centro_occidente.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==04) {
	$pdf->Image('img/noreste.png',0,0,210,300,'PNG');
}elseif ($participante['dt_region']==05) {
	$pdf->Image('img/noroeste.png',0,0,210,300,'PNG');
}else {
	$pdf->Image('img/metropolitana.png',0,0,210,300,'PNG');
}

// Nombre y Apellido
$pdf->SetFont('Montserrat','',35);
$pdf->SetTextColor(87,86,86);
//$pdf->Cell(0,240,utf8_decode($participante['dt_nombre']),0,0,'C');
$pdf->Cell(0,215,utf8_decode($participante['dt_nombre']),0,0,'C');
$pdf->Ln(125);
$pdf->Cell(0,0,utf8_decode($participante['dt_apaterno'])." ".utf8_decode($participante['dt_amaterno']),0,0,'C');
    $Y = $pdf->GetY();
$pdf->Output('certificado','I');



?>
<?php
include_once('databases_registro.php');
mysqli_set_charset( $mysqli, 'utf8');
$reg = isset( $_POST['region']) ? $_POST['region'] : '';
$registro = run_registros_tall($reg);
   
   require "vendor/autoload.php";
   use PhpOffice\PhpSpreadsheet\Spreadsheet;
   use PhpOffice\PhpSpreadsheet\IOFactory;

   $excel = new Spreadsheet();
   $hojaActiva = $excel->getActiveSheet();
   $hojaActiva->setTitle("Registros");

   $hojaActiva->getColumnDimension('A')->setWidth(40);
   $hojaActiva->setCellValue('A1', 'INSTITUCIÓN');
   $hojaActiva->getColumnDimension('B')->setWidth(40);
   $hojaActiva->setCellValue('B1', 'NOMBRE');
   $hojaActiva->getColumnDimension('C')->setWidth(30);
   $hojaActiva->setCellValue('C1', 'EMAIL');
   $hojaActiva->getColumnDimension('D')->setWidth(20);
   $hojaActiva->setCellValue('D1', 'CARGO');
   $hojaActiva->getColumnDimension('E')->setWidth(20);
   $hojaActiva->setCellValue('E1', ' OTRO CARGO');
   $hojaActiva->getColumnDimension('F')->setWidth(20);
   $hojaActiva->setCellValue('F1', ' TELÉFONO INS');
   $hojaActiva->getColumnDimension('G')->setWidth(20);
   $hojaActiva->setCellValue('G1', ' EXTENCIÓN');
   $hojaActiva->getColumnDimension('H')->setWidth(20);
   $hojaActiva->setCellValue('H1', ' MOVIL');
   $hojaActiva->getColumnDimension('I')->setWidth(20);
   $hojaActiva->setCellValue('I1', ' ESTATUS');

   $fila =2;
   while ($rows = $registro->fetch_assoc()) {      
      $hojaActiva->setCellValue('A' .$fila, $rows['dt_nom_org2'].$rows['dt_nom_org']);     
      $hojaActiva->setCellValue('B' .$fila, $rows['dt_nombre']." ".$rows['dt_apaterno']." ".$rows['dt_amaterno']);      
      $hojaActiva->setCellValue('C' .$fila, $rows['dt_email']);
      $hojaActiva->setCellValue('D' .$fila, $rows['dt_otro_cargo']);
      $hojaActiva->setCellValue('E' .$fila, $rows['dt_otro_cargo2']);
      $hojaActiva->setCellValue('F' .$fila, $rows['dt_tel_ins']);
      $hojaActiva->setCellValue('G' .$fila, $rows['dt_ext']);
      $hojaActiva->setCellValue('H' .$fila, $rows['dt_tel_movil']);
      $hojaActiva->setCellValue('I' .$fila, $rows['tp_estatus']);
      $fila++;


   }
   header('Content-Type: application/vnd.ms-excel');
   header('Content-Disposition: attachment;filename="Reporte.xls"');
   header('Cache-Control: max-age=0');
   $writer = IOFactory::createWriter($excel, 'Xlsx');
   $writer->save('php://output');

?>

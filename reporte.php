<?php

require('librerias/fpdf.php');


class PDF extends FPDF
{




function MiTabla(){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_contabilidad";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT id,fecha,descripcion,ingreso,egreso from contabilidad";

$result = mysqli_query($conn, $sql);









$this->Cell(37,5,"ID");
$this->Cell(37,5,"Fecha");
$this->Cell(39,5,"Descripcion");
$this->Cell(37,5,"Ingreso");
$this->Cell(80,5,"Egreso");





$this->Ln();

	foreach($result as $row)
	    {
	        foreach($row as $col)
	            $this->Cell(38,6,$col,1);
	        	$this->Ln();

	    }

}


// function Footer()
// {
//     // Go to 1.5 cm from bottom
//     $this->SetY(-15);
//     // Select Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Print centered page number
//     $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');

//     // $this->Image('https://cdn.euroinnova.edu.es/euroinnova_es/img_destacados/l/Curso-Contabilidad-Fiscalidad-Abogados.jpg',60,30,20,0,'JPG');
// }





}



$pdf = new PDF();

$pdf->SetTitle("Sistema de contabilidad Jonathan Castro");



$pdf->AddPage();
 // $pdf->Image('https://cdn.euroinnova.edu.es/euroinnova_es/img_destacados/l/Curso-Contabilidad-Fiscalidad-Abogados.jpg',60,30,20,0,'JPG');

$pdf->SetFont('Arial','',14);

$pdf->MiTabla();

// $pdf->Footer();


$pdf->Output();


?>
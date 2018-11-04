<?php



define('FPDF_FONTPATH','C:\xampp2\htdocs\MovieReview\Finalproject\Admin_panel\font');
include_Once('fpdf.php');

//font/helveticab.php

//Connect to your database
include("conectmysql.php");

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'User List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('First_name'=> 'firstname', 'Last_name'=> 'lastname','Email'=> 'email','created_at'=>'created_at');
 
$result = mysqli_query($connString, "SELECT firstname, lastname, email,created_at FROM registerrs") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM registerrs");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);

foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>

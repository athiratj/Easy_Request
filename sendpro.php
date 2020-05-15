<?php
include('libs/fpdf.php');
session_start();
$row=$_SESSION['arr'];
$conn = mysqli_connect("localhost", "root", "", "er");
$sql="INSERT INTO r4 (type,name,idkno,class,em,ph,dept) VALUES ('".$row['type']."','".$row['name']."','".$row['idkno']."','".$row['class']."','".$row['em']."','".$row['ph']."','".$row['dept']."')";
if ($conn->query($sql) === TRUE) {
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',7);
$pdf->Cell(1000,10,'GOVERNMENT ENGINEERING COLLEGE IDUKKI');
$pdf->Ln(10);
$pdf->Cell(70,12,'   NAME',1);
$pdf->Cell(70,12,$row['name'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   KTU ID',1);
$pdf->Cell(70,12,$row['idkno'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   TYPE OF REQUEST',1);
$pdf->Cell(70,12,$row['type'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   EMAIL',1);
$pdf->Cell(70,12,$row['em'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   PHONE',1);
$pdf->Cell(70,12,$row['ph'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   DEPARTMENT',1);
$pdf->Cell(70,12,$row['dept'],1);
$pdf->Ln(10);
$pdf->Ln(10);
$pdf->Ln(10);
$pdf->Cell(70,12,'   VERIFIED BY PRINCIPAL GEC IDUKKI',1);
$pdf->Cell( 40, 40, $pdf->Image("tick.png", $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Output();
}
?>
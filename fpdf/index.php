<?php

session_start();

// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SMK Bakti Praja Dukuhwaru',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Informasi Akun',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Jurusan',1,0);
$pdf->Cell(85,6,'Nama Calon Siswa Baru',1,0);
$pdf->Cell(27,6,'Username',1,0);
$pdf->Cell(25,6,'Password',1,1);

$pdf->SetFont('Arial','',10);

include '../koneksi.php';

// $p = $_SESSION['no_daftar'];

// $result = $koneksi->query("SELECT * FROM data_masuk WHERE no_daftar = 06112019055113");
$sql = "SELECT * FROM data_masuk WHERE no_daftar = ?";
$stmt = $koneksi->prepare($sql);
$stmt->execute(['06112019055113']);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $pdf->Cell(20,6,$row['jurusan'],1,0);
    $pdf->Cell(85,6,$row['nama'],1,0);
    $pdf->Cell(27,6,$row['no_daftar'],1,0);
    $pdf->Cell(25,6,$row['password'],1,1); 
}

$pdf->Output();
?>
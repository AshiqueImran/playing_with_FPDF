<?php
	require('fpdf.php');

	// $pdf = new FPDF();
	// $pdf->AddPage();
	// $pdf->SetFont('Arial','B',16);
	// $pdf->Cell(40,10,'Hello World!',1,2,'R');
	// $pdf->Ln(2);
	// $pdf->Cell(180,10,'Hello World next!',1,2,'C');
	// $pdf->Cell(60,10,'Powered by FPDF.',0,1,'C');
	// $pdf->Output();

//basic ends

	// class PDF extends FPDF
	// {
	// // Page header
	// function Header()
	// {
	//     // Logo
	//     $this->Image('logo.png',190,5,10);
	//     // Arial bold 15
	//     $this->SetFont('Arial','B',15);
	//     // Move to the right
	//     $this->Cell(80);
	//     // Title
	//     $this->Cell(30,10,'Title',1,0,'C');
	//     // Line break
	//     $this->Ln(20);
	// }

	// // Page footer
	// function Footer()
	// {
	//     // Position at 1.5 cm from bottom
	//     $this->SetY(-15);
	//     // Arial italic 8
	//     $this->SetFont('Arial','I',8);
	//     // Page number
	//     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	// }
	// }

	// // Instanciation of inherited class
	// $pdf = new PDF();
	// $pdf->AliasNbPages(); // // to add total page number
	// $pdf->AddPage();
	// $pdf->SetFont('Times','',12);
	// for($i=1;$i<=40;$i++)
	//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
	// $pdf->Output();

//ch-2 ends

	
?>
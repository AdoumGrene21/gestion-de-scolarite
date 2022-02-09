<?php

require_once('../public/fpdf/fpdf.php');

$fpdf = new FPDF('L', 'mm',array(53.98,85.60));
$fpdf->SetMargins(0.2, 2, 0.2, 0);
// $fpdf->SetAutoPageBreak(boolean auto,[float margin]);
$fpdf->SetAutoPageBreak(false);
$fpdf->AddPage();
// $fpdf->SetFont('Arial', '', 12);
$fpdf->Image('../public/photo/chp.png', 2.4, 2, 9.3);
// $fpdf->Image('../public/fpdf/image/designCarteScolaire.PNG', 0.2, 0.2,85.2);
$fpdf->Image('../public/fpdf/image/maieutique_background.PNG', 0.2, 0.2, 85.2);
// var_dump($params['post']->photo);
// die;
if(empty($params['post']->photo)){

}else{

    $fpdf->Image('../public/photo/'.$params['post']->photo, 2.4, 21, 20.3);
}


$fpdf->Image('http://localhost/schoolSoft/public/qr_generator.php?code='.$params['post']->Matricule, 70, 39, 12, 12, "PNG");


// $date =  
// $date = date("d/m/Y",$date );

$date = (new DateTime($params['post']->DateNaissance))->format('d/m/Y');
// $date = date_format($date, "d/m/Y");

$fpdf->SetFont('Arial','B', 9);
$fpdf->Cell(12, 6, "", 0, 0, 'L');
// $fpdf->Cell(70, 6, "LYCEE COLLEGE PRIVE LA MERVEILLE", 0, 1, 'L');

$fpdf->SetFont('Arial', '', 7);
$fpdf->Cell(12, 4, "", 0, 0, 'L');
$fpdf->Cell(56, 4, "", 0, 0, 'R');

$fpdf->Ln(10.3);

$fpdf->Cell(71, 4, "", 0, 0, 'R');
$fpdf->Cell(12, 4, strtoupper($params['post']->Nom), 0, 1, 'L');
$fpdf->Ln(5.5);
$fpdf->Cell(4, 3, "", 0, 0, 'L');
$fpdf->Cell(45, 3,"",0,1, 'L');
$fpdf->Ln(1);
$fpdf->Cell(32, 3, "", 0, 0, 'L');
$fpdf->Cell(54, 3,strtoupper($params['post']->Nom), 0, 1, 'L');

$fpdf->Ln(0.8);

$fpdf->Cell(36.5, 3, "", 0, 0, 'L');
$fpdf->Cell(54, 3,strtoupper($params['post']->Prenom), 0, 1, 'L');

$fpdf->Ln(0.5);
 
$fpdf->Cell(36, 3, "", 0, 0, 'L');
$fpdf->Cell(22, 3,$date , 0, 0, 'L');

$fpdf->Cell(33, 3,strtoupper($params['post']->LieuNaissance), 0, 1, 'L');
$fpdf->Ln(1.1);

$fpdf->Cell(35, 3, "", 0, 0, 'L');
$fpdf->Cell(6, 3,substr(strtoupper($params['post']->Civilite),0,1), 0, 0, 'L');

$fpdf->Ln(3.5);

$fpdf->Cell(39, 3, "", 0, 0, 'L');
$fpdf->Cell(19, 3,strtoupper($params['post']->Nationalite), 0, 1, 'L');

$fpdf->Ln(0.2);

$fpdf->Cell(49, 3, "", 0, 0, 'L');
$fpdf->Cell(45, 3,strtoupper($params['post']->Nationalite),0,1, 'L');

$fpdf->Cell(25, 3,strtoupper($params['post']->Matricule),0,1, 'C');


$fpdf->Output();

<?php


require_once('../public/fpdf/fpdf.php');
$fpdf = new FPDF('P', 'mm', 'A4');
$fpdf->SetMargins(10, 7, 10, 0);
$fpdf->SetAutoPageBreak(false);
$fpdf->AddPage();
$fpdf->SetFont('Arial', '', 12);




$date = "10/02/2021";

$nom = "grene";

$fpdf->SetFont('Arial', 'B', 11);
// $fpdf->SetFillColor(230,230,230);
$fpdf->Cell(80, 6, "REPUBLIQUE DU TCHAD", 0, 0, 'L', FALSE);
$fpdf->SetFont('Arial', 'B', 9);
$fpdf->Cell(35, 6, utf8_decode("Unité - Travail - Progres"), 0, 0, 'L', FALSE);

$fpdf->SetFont('Arial', 'B', 11);
$fpdf->Cell(75, 6, "LYCEE DE XXXX", 0, 1, 'R', FALSE);
$fpdf->Ln(-1);

// $fpdf->SetFont('Arial', 'B', 11);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(40, 6, "**************", 0, 0, 'C');


$fpdf->SetFont('Arial', '', 7);
$fpdf->Cell(150, 6,  utf8_decode("Travail - Volonté - Reusite"), 0, 1, 'R');
$fpdf->Ln(-2);
// $fpdf->Cell(165, 6,  utf8_decode("Travail - Volonté - Reusite"), 0, 1, 'R');
// $fpdf->Image('LOGOTCHAD.PNG', -25, 20, 100);
// $fpdf->Image('http://localhost/schoolSoft/public/qr_generator.php?code='.$params['post']->Matricule, 168, 20, 30, 30, "png");




$fpdf->SetFont('Arial', 'B', 11);
$fpdf->Cell(25, 6, "MINISTERE DE L'EDUCATION NATIONALE", 0, 1, 'L');


// $fpdf->Cell(25, 6, "", 1, 1, 'R');

$fpdf->SetFont('Arial', 'B', 11);
$fpdf->Cell(100, 6, "ET DE PROMOTION CIVIQUE", 0, 1, 'L');


$fpdf->Cell(120, 6, "", 0, 1, 'L');



$fpdf->Ln('10');
$fpdf->Cell(190, 6, "Annee Scolaire : 2020-2021", 0, 1, 'C');
$fpdf->Ln('2');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 20, "", 0, 0, 'C');
$fpdf->Cell(80, 10, "CERTIFICAT DE SCOLARITE", 1, 0, 'C');
$fpdf->Cell(55, 10, "", 0, 1, 'C');
$fpdf->Cell(120, 6, "", 0, 1, 'L');

$fpdf->SetFillColor(230, 230, 230);
$fpdf->Cell(190, 6, utf8_decode("Données Biometriques"), 0, 1, 'L', true);

// $fpdf->Image('LOGOECOLE.JPG', 165, 70, 30);
$fpdf->Image('../public/photo/'.$params['post']->photo, 10, 75, 37, 40);
$fpdf->Image('http://localhost/schoolSoft/public/qr_generator.php?code='.$params['post']->Matricule, 155, 75, 45, 45, "png");
$fpdf->Ln('45');
//////////////////////////////////////

$fpdf->SetFont('Arial', 'B', 13);
// $fpdf->SetFillColor(230,230,230);
$fpdf->Cell(190, 6, utf8_decode("Profil Elève"), 0, 1, 'L', true);
// $fpdf->Image('ligne42.PNG', 10, 81, 190);
//  $fpdf->Image('ligne42.PNG', 10, 132, 190);
// $fpdf->Image('ligne42.PNG', 10, 182, 190);

$fpdf->Cell(120, 2, "", 0, 1, 'L');

// $fpdf->Image('ligne.PNG', 10, 110, 200);

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 9, "Nom  : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(85, 9, strtoupper($params['post']->Nom), 0, 1, 'L');
// $fpdf->Cell(40, 6, "", 1, 0, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 9, "Prenom  : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(160, 9, strtoupper($params['post']->Prenom), 0, 1, 'L');
// $fpdf->Cell(40, 6, "", 1, 0, 'L');
// $fpdf->Cell(35, 6, "Adresse Client : ", 0, 0, 'L');
// $fpdf->Cell(40, 6, "xxx", 0, 1, 'L');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(55, 9, "Date et Lieu de naissance :", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(40, 9, $params['post']->DateNaissance, 0, 0, 'L');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(10, 9, utf8_decode('à'), 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(75, 9, strtoupper($params['post']->LieuNaissance), 0, 1, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 9, "Sexe : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(40, 9, strtoupper("Masculin"), 0, 1, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 9, "Matricule : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(80, 9, $params['post']->Matricule, 0, 0, 'L');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(30, 9, "Nationnalite : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(55, 9, strtoupper($params['post']->Nationalite), 0, 1, 'L');
// $fpdf->Cell(120, 6, "", 0, 1, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 9, "Adresses : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(80, 9, "Amriguebe 5em Arrondissement", 0, 0, 'L');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(30, 9, "Telephones : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(55, 9, $params['post']->Contact."/95138206", 0, 1, 'L');
$fpdf->Cell(120, 3, "", 0, 1, 'L');


$fpdf->SetFont('Arial', 'B', 13);
// $fpdf->SetFillColor(230,230,230);
$fpdf->Cell(190, 6, utf8_decode("Rensegnements Pedagogiques"), 0, 1, 'L', true);
$fpdf->Cell(120, 2, "", 0, 1, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 9, "Cycle  : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(80, 9, "xx", 0, 0, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(30, 9, "Parcours :", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(55, 9, "xx", 0, 1, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 9, "Niveau  : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(85, 9, "xx", 0, 1, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 9, "Classe  : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(85, 9, "xx", 0, 1, 'L');


$fpdf->Ln(5);
// $fpdf->Cell(190, 6, utf8_decode("Rensegnements Pedagogiques"), 0, 1, 'L');
$fpdf->Cell(190, 0, " ", 1, 1, 'C');
$fpdf->Ln(6);
$fpdf->SetFont('Arial', '', 11);
$fpdf->Cell(60, 6, "", 0, 0, 'C');
$fpdf->Cell(70, 6, "", 0, 0, 'L');
$fpdf->Cell(60, 6, "Le Directeur", 0, 1, 'C');
$fpdf->Ln(21);
$fpdf->Ln(17);
$fpdf->Cell(60, 6, "signature de l'eleve", 0, 0, 'C');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(120, 6, "ABAKAR KADARI", 0, 1, 'R');

// $fpdf->SetY(-2);
// $fpdf->Cell(190, 4.7, " ", 0, 1, 'C');
// $fpdf->SetFont('Arial', 'B', 7);
// $fpdf->Cell(5, 3, "NB:", 1, 0, 'L');
$fpdf->Ln(8);
$fpdf->SetFont('Arial', '', 7);
$fpdf->Cell(190, 3, "NB: Ce document tient lieu de carte provisoire pour le compte de l'annee scolaire 2020-2021", 0, 1, 'C');
// $fpdf->Cell(190, 3, "pour le compte de l'annee scolaire 2020-2021  ", 0, 1, 'L');





$fpdf->Output("OfficeForm.pdf", "I");

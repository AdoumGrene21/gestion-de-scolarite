<?php

require_once('../public/fpdf/fpdf.php');
$fpdf = new FPDF('P', 'mm', 'A4');
$fpdf->SetMargins(10, 7, 10, 0);
$fpdf->SetAutoPageBreak(false);
$fpdf->AddPage();
$fpdf->SetFont('Arial', '', 12);


////////////////////////////////////////////////////////////////////////
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


$fpdf->SetFont('Arial', 'B', 11);
$fpdf->Cell(25, 6, "MINISTERE DE L'EDUCATION NATIONALE", 0, 1, 'L');


// $fpdf->Cell(25, 6, "", 1, 1, 'R');

$fpdf->SetFont('Arial', 'B', 11);
$fpdf->Cell(100, 6, "ET DE PROMOTION CIVIQUE", 0, 1, 'L');

$fpdf->Ln(6);

$fpdf->SetFillColor(230, 230, 230);
$fpdf->Cell(190, 6, utf8_decode("BULLETIN DE NOTES"), 1, 1, 'C', true);



//////////////////////////////////////////////////////////////////////////////
$fpdf->Ln(3);

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 6, "Nom  : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(40, 6, strtoupper($params['post']->Nom), 0, 0, 'L');

$fpdf->Cell(66, 6, "", 0, 0, 'L');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(30, 6, "Classe :", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(30, 6, "", 0, 1, 'L');


$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 6, "Prenom  : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(40, 6, strtoupper($params['post']->Prenom), 0, 0, 'L');

$fpdf->Cell(66, 6, "", 0, 0, 'L');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(30, 6, "Effectif :", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(30, 6, "", 0, 1, 'L');

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(25, 6, "Ne le  : ", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(40, 6, strtoupper($params['post']->DateNaissance), 0, 0, 'L');

$fpdf->Cell(66, 6, "", 0, 0, 'L');
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(30, 6, "Redoublement :", 0, 0, 'L');
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(30, 6, "", 0, 1, 'L');
// $fpdf->Cell(40, 6, "", 1, 0, 'L');
$fpdf->Ln(3);

$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(42, 9, "Matieres", 1, 0, 'L');
$fpdf->Cell(13, 9, "Coef", 1, 0, 'L');
$fpdf->Cell(20, 9, "Moy.Dev", 1, 0, 'L');
$fpdf->Cell(21, 9, "Moy.Com", 1, 0, 'L');
$fpdf->Cell(20, 9, "Moy.Gen", 1, 0, 'L');
$fpdf->Cell(21, 9, "Moy.Coef", 1, 0, 'L');
$fpdf->Cell(30, 9, "Appreciations", 1, 0, 'L');
$fpdf->Cell(24, 9, "Signatures", 1, 1, 'L');
foreach ($params['notes'] as $note) {

    // $note->nom_enseignant;

    $moy_gen = ($note->note_controle + $note->note_composition) / 2;
    $moy_coef = (($note->note_controle + $note->note_composition) / 2) * $note->coef;
    if ($moy_gen == 10) {
        $appr = "moyenne";
    } elseif ($moy_gen < 10 && $moy_gen >= 6) {
        $appr = "insufisant";
    } elseif ($moy_gen < 6) {
        $appr = "faible";
    } elseif ($moy_gen > 10 && $moy_gen < 12) {
        $appr = "passable";
    } elseif ($moy_gen >= 12 && $moy_gen < 14) {
        $appr = "assez-bien";
    } elseif ($moy_gen >= 14 && $moy_gen < 16) {
        $appr = "bien";
    } elseif ($moy_gen >= 16 && $moy_gen < 18) {
        $appr = "tres bien";
    } else {
        $appr = "excellent";
    }


    $fpdf->SetFont('Arial', '', 12);
    $fpdf->Cell(42, 9,  $note->matiere, 1, 0, 'L');
    $fpdf->Cell(13, 9, $note->coef, 1, 0, 'L');
    $fpdf->Cell(20, 9, $note->note_controle, 1, 0, 'L');
    $fpdf->Cell(21, 9, $note->note_composition, 1, 0, 'L');
    $fpdf->Cell(20, 9, $moy_gen, 1, 0, 'L');
    $fpdf->Cell(21, 9, $moy_coef, 1, 0, 'L');
    $fpdf->Cell(30, 9, $appr, 1, 0, 'L');
    $fpdf->Cell(24, 9,substr( $note->nom_enseignant,0,9).".", 1, 1, 'L'); 
}








$fpdf->Output("OfficeForm.pdf", "I");

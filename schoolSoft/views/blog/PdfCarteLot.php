<?php
require_once('../public/fpdf/fpdf.php');
$fpdf = new FPDF('L', 'mm', array(53.98, 85.60));
$fpdf->SetMargins(0.2, 2, 0.2, 0);
$fpdf->SetAutoPageBreak(true);

foreach ($params['posts'] as $eleve) {
    if (!empty($eleve->photo)) {
        $fpdf->AddPage();
        // $fpdf->SetAutoPageBreak(boolean auto,[float margin]);
        // $fpdf->SetFont('Arial', '', 12);
        $fpdf->Image('../public/photo/chp.png', 2.4, 2, 9.3);
        $fpdf->Image('../public/fpdf/image/maieutique_background.PNG', 0.2, 0.2, 85.2);
        // $fpdf->Image('../public/fpdf/image/designCarteScolaire.PNG', 0.2, 0.2, 85.2);

        $fpdf->Image('../public/photo/' . $eleve->photo, 2.4, 21, 20.3);

        $fpdf->Image('http://localhost/schoolSoft/public/qr_generator.php?code='.$eleve->Matricule, 70, 39, 12, 12, "PNG");

        // $date =  
        // $date = date("d/m/Y",$date );

        $fpdf->SetFont('Arial', 'B', 9);
        $fpdf->Cell(12, 6, "", 0, 0, 'L');
        $fpdf->Cell(70, 6, "LYCEE COLLEGE PRIVE LA MERVEILLE", 0, 1, 'L');

        $fpdf->SetFont('Arial', '', 7);
        $fpdf->Cell(12, 4, "", 0, 0, 'L');
        $fpdf->Cell(56, 4, "", 0, 0, 'R');
        $fpdf->Cell(17, 4, "3eme", 0, 1, 'L');

        $fpdf->Ln(10);

        $fpdf->Cell(31, 3, "", 0, 0, 'L');
        $fpdf->Cell(54, 3, strtoupper($eleve->Nom), 0, 1, 'L');

        $fpdf->Ln(1.4);

        $fpdf->Cell(34, 3, "", 0, 0, 'L');
        $fpdf->Cell(54, 3, strtoupper($eleve->Prenom), 0, 1, 'L');

        $fpdf->Ln(1.1);

        $fpdf->Cell(35, 3, "", 0, 0, 'L');
        $fpdf->Cell(17, 3, $eleve->DateNaissance, 0, 0, 'L');

        $fpdf->Cell(33, 3, strtoupper($eleve->LieuNaissance), 0, 1, 'L');

        $fpdf->Ln(1.9);

        $fpdf->Cell(35, 3, "", 0, 0, 'L');
        $fpdf->Cell(6, 3, substr(strtoupper($eleve->Civilite), 0, 1), 0, 0, 'L');
        $fpdf->Cell(18, 3, "", 0, 0, 'L');
        $fpdf->Cell(19, 3, strtoupper($eleve->Nationalite), 0, 1, 'L');

        $fpdf->Ln(1.1);

        $fpdf->Cell(36, 3, "", 0, 0, 'L');
        $fpdf->Cell(45, 3, strtoupper($eleve->Matricule), 0, 1, 'L');

        $fpdf->Ln(1);

        $fpdf->Cell(36, 3, "", 0, 0, 'L');
        $fpdf->Cell(45, 3, strtoupper($eleve->Contact), 0, 1, 'L');
    }
}
$fpdf->Output();

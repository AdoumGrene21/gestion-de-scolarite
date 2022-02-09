<?php

namespace App\Models;

class Note extends Model
{
    protected $table = 'notes';
    public function getTableNote(string $id)
    {
        $stmt = $this->db->getPDO()->prepare("
        SELECT *, m.libelle as nom_matiere, CONCAT(e.Nom ,' ', e.Prenom) AS fullname, p.libelle as periode, en.id as identifiant
        FROM enseigner as en ,notes as n, eleve as e, matiere as m, periode as p
        WHERE  n.id_enseigner = ?  AND e.Matricule = n.id_eleve AND m.id = en.id_matiere AND p.id = m.id_periode
        ");

        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }
    public function allNoteFromEleve(string $id)
    {
        $stmt = $this->db->getPDO()->prepare("
        SELECT *, m.libelle AS matiere, CONCAT(e.nom ,' ', e.prenom) AS nom_enseignant
        FROM enseigner as en ,matiere as m,classe as c,enseignant as e, notes as n, eleve as el
        WHERE c.id = en.id_classe AND m.id = en.id_matiere AND e.id = en.id_enseignant AND en.id = n.id_enseigner 
        AND el.Matricule = n.id_eleve AND el.Matricule = ?
        ");
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }
}
<?php

namespace App\Models;
// use App\Models\Models;
use PDO;



class Classe extends Model
{
    protected $table = 'classe';

    public function  findClasseById(string $id)
    {
        $stmt = $this->db->getPDO()->prepare("
        SELECT * FROM classe 
        WHERE id = ?
        ");
        $stmt->execute(array($id));
        return $stmt->fetch();
    }
   

    public function getAllClasse(): array
    {
        return $this->query("
        SELECT *
        FROM classe 
        ");
    }
    public function getAllMatiere(): array
    {
        return $this->query("
        SELECT *, m.libelle as n_matiere, c.libelle as n_classe, en.id as iden
        FROM enseigner as en ,matiere as m, classe as c, enseignant as e
        WHERE c.id = en.id_classe AND m.id = en.id_matiere AND e.id = en.id_enseignant
      
        ");
    }

    public function getClasse(): array
    {
        
        return $this->query("
        SELECT c.id as id, c.libelle as classe, n.libelle as niveau, cy.libelle as cycle, p.libelle as parcours
        FROM   cycle as cy, parcours as p, classe AS c
        INNER JOIN niveau AS n
        ON c.id_niveau = n.id
        WHERE p.id = cy.id_parcours AND cy.id = n.id_cycle; 
        
        ");
    }
    public function classe()
    {
        return $this->query("
        SELECT * FROM classe
        ");
    }

    public function update_Classe(int $id, array $data)
    {
        // var_dump($data);

        // $idT = $data['idTuteur'];
        // $NomPrenom = $data['NomPrenom'];
        // $Telephone = $data['Telephone'];
        // $fonction = $data['fonction'];
      

        // $data['id'] = $id;
      
        //  $stmt = $this->db->getPDO()->query("UPDATE {$this->table} 
        //  SET  NomPrenom =  '{$NomPrenom}', Telephone = '{$Telephone}', fonction = '{$fonction}'
        //  WHERE id = {$idT} ");
        //  $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
      
    
    }
}

?>

<?php

namespace App\Models;
// use App\Models\Models;
use PDO;



class Tuteur extends Model
{
    protected $table = 'tuteur';

    public function getEleve()
    {
        return $this->query("
        SELECT e.* FROM eleve e
        INNER JOIN tuteur t ON t.id = e.idTuteur
        WHERE t.id = ?
        ", [$this->id]);
    }

    public function allT(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY NomPrenom DESC");
    }



    public function update_T(int $id, array $data)
    {
        // var_dump($data);

        $idT = $data['idTuteur'];
        $NomPrenom = $data['NomPrenom'];
        $Telephone = $data['Telephone'];
        $fonction = $data['fonction'];
      

        $data['id'] = $id;
      
         $stmt = $this->db->getPDO()->query("UPDATE {$this->table} 
         SET  NomPrenom =  '{$NomPrenom}', Telephone = '{$Telephone}', fonction = '{$fonction}'
         WHERE id = {$idT} ");
         $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
      
    
    }
}

?>

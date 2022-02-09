<?php
namespace App\Models;
use DateTime;
use PDO;

class Eleve extends Model
{
    protected $table = 'eleve';
   
    public function InsertNewEleve(array $data)
    {
      $Civilite = $data['sexe'];
      $Nom = $data['Nom'];
      $Prenom = $data['Prenom'];
      $DateNaissance = $data['DateNaissance'];
      $LieuNaissance = $data['LieuNaissance'];
      $Nationalite = $data['nationnalite'];
      $Contact = $data['telephone'];
      $Quartier = $data['quartier'];
      $Arrondissement = $data['arrondissement'];
      $Email = $data['email'];
      //////////////////////////////
      if ($Civilite == 'masculin') {
          $code1 = '1';
        }else{
            $code1 = '2';
        }
        if ($Nationalite == 'tchadienne') {
            $code2 = '001';
      }else{
          $code2 = '002';
        }
        ///////////////////////////////////
      $Matricule = $code1.$code2.substr(time(),-4).substr($Contact,-2).substr($Contact,0,2);
      $id_classe = $data['classe'];

      $nomTuteur = $data['nomprenom'];
      $contactTuteur = $data['contact'];
      $fonctioTuteur = $data['fonction'];

      $stmt0 =  $this->db->getPDO()->query("insert into tuteur(NomPrenom,fonction,Telephone) values('$nomTuteur','$fonctioTuteur','$contactTuteur')");
      $stmt0->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
      $idTuteur= $this->db->getPDO()->lastInsertId(); 
  
      $stmt1 =  $this->db->getPDO()->query("insert into eleve(Matricule,Civilite,Nom, Prenom, DateNaissance, LieuNaissance, Nationalite, Contact,Quartier, Arrondissement, Email, photo, idTuteur, id_classe) values('$Matricule','$Civilite','$Nom', '$Prenom', '$DateNaissance', '$LieuNaissance', '$Nationalite', '$Contact','$Quartier', '$Arrondissement', '$Email','','$idTuteur','$id_classe')");
      $stmt1->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]); 

      return  $Matricule;
    }

    public function all(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY Nom DESC");
    }

    public function update_Photo(int $id, array $data)
    {
        $extension = explode('.', $data['photo']['name']);
        $photo = $id.'.'.$extension[1];
        $target = '../public/photo/'.$photo;
        move_uploaded_file($data['photo']['tmp_name'], $target);    
        $data['id'] = $id;   
         $stmt = $this->db->getPDO()->query("UPDATE {$this->table} 
         SET  photo =  '{$photo}'
         WHERE Matricule ={$id} ");
         $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
    }
        
    public function getCreated(): string
    {
        return (new DateTime($this->DateNaissance))->format('d/m/Y');
    }
    public function getMat(): string
    {
        return $this->Matricule;
    }
    public function getSexe(): string
    {
        if ($this->Civilite=='Feminin') {           
            return "F";
        }else{           
            return "M";
        }
    }

    public function findEleveByClasse(string $id)
    {
        $stmt = $this->db->getPDO()->prepare("
        SELECT * , CONCAT( Nom,' ',Prenom) AS FULLNAME
        FROM {$this->table} AS e
        INNER JOIN classe AS c
        ON e.id_classe = c.id
        WHERE c.id =?
        ORDER BY FULLNAME;
        ");
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }    
}

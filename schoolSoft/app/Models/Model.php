<?php

namespace App\Models;

use Database\DBConnection;
use PDO;
use PHPExcel;
use PHPExcel_IOFactory;

abstract class Model
{

    protected $db;
    protected $table;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }


    public function findById(string $id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE Matricule = ?", [$id], true);
       
    }
    public function dataCsv($fille)
    {
        require 'C:\xampp\htdocs\schoolSoft\public\PHPExcel\Classes\PHPExcel.php';
        // C:\xampp\htdocs\schoolSoft\public\PHPExcel\Classes\PHPExcel.php
        require 'C:\xampp\htdocs\schoolSoft\public\PHPExcel\Classes\PHPExcel\IOFactory.php';
        $objetExcel = PHPExcel_IOFactory::load($fille);
        foreach ($objetExcel->getWorksheetIterator() as $worksheet) {
            $highestrow = $worksheet->getHighestRow();
            for ($row=0; $row < $highestrow ; $row++) {

                $name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                $prenom = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                $date_naissance = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                $lieu_naissance = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                $telephone = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                $filiere = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                $matricule = $worksheet->getCellByColumnAndRow(7, $row)->getValue();

                // $stmt = $this->db->getPDO()->prepare("INSERT INTO eleve() VALUES(?, ?, ?, ?, ?, ?)");
                // return $stmt->execute(array("%$id%","%$id%","%$id%","%$id%"));
            }
        }
    }
   

    public function search($id)
    {
        $stmt = $this->db->getPDO()->prepare("SELECT * FROM {$this->table} WHERE (Nom LIKE ?) OR (Prenom LIKE ?) OR (Matricule LIKE ?) OR (CONCAT(Nom,' ', Prenom) LIKE ?) ");
        //  $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
      
        $stmt->execute(array("%$id%","%$id%","%$id%","%$id%"));
      
        return $stmt->fetchAll();
      
    }
    
    // public function destroy(int $id): bool
    // {
    //     return $this->query("DELETE FROM {$this->table} WHERE Matricule = ?", $id);
    // }

    public function update($id, array $data)
    {
        $sqlRequestPart = "";
        $i = 1;

        foreach ($data as $key => $value ) {
            $comma = $i === count($data) ? " " : ", ";
            $sqlRequestPart .= "{$key} = :{$key}{$comma}";
            $i++;
        }

        $data['Matricule'] = $id;

        return $this->query("UPDATE {$this->table} SET {$sqlRequestPart} WHERE Matricule = :Matricule", $data);
    
    }
    

    public function query(string $sql, array $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';

        if (
            (strpos($sql, 'DELETE') === 0) || (strpos($sql, 'UPDATE') === 0) || (strpos($sql, 'CREATE') === 0)
        ) {
            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmt->execute($param);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if ($method === 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }
}

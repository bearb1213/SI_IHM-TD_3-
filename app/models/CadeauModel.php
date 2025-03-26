<?php

namespace app\models;

use Flight;

class ChauffeurModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function getCadeauGarcon(){
        $sql="select * from cadeaux_cadeau where id_categorie!=1 ";
        $stmt = $this->db->prepare($sql);
        $result=$stmt->execute();
        return $result->fetchAll();
    }
    public function getCadeauFille(){
        $sql="select * from cadeaux_cadeau where id_categorie!=2";
        $stmt = $this->db->prepare($sql);
        $result=$stmt->execute();
        return $result->fetchAll();
    }
    

    public function generateCadeau($garcon,$fille){
        
    }
}
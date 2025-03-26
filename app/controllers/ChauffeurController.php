<?php

namespace app\controllers;

use app\models\ChauffeurModel;

use Flight;

class ChauffeurController {

	public function __construct() {

	}


	public function chauffeurList() {
		$chauffeur = Flight::chauffeurModel()->getAllChauffeur();
        $data['chauffeur'] = $chauffeur;
        //Flight::render('vehicule-list', $data);
        Flight::render('chauffeur-list', $data);
    }
}
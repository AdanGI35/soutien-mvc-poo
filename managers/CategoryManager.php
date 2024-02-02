<?php

require 'AbstractManager.php';

class CategoryManager extends Manager {
    // Constructeur
    public function __construct($host, $dbName, $user, $password) {
        parent::__construct($host, $dbName, $user, $password);
    }

    public function findAll() {
        return []; 
    }
}

$categoryManager = new CategoryManager("localhost", "nom_de_la_base", "utilisateur", "mot_de_passe");
$categories = $categoryManager->findAll();



<?php
/*
//require
require 'models/CategoryManager.php';

//instancier
$category = new Category("catégorie 1");


//var dump

var_dump($category);

//setId
$category->setId(1);

//var dump
var_dump($category);
*/


require 'managers/CategoryManager.php';

// Instanciation du CategoryManager avec les détails de connexion
$categoryManager = new CategoryManager("localhost", "nom_de_la_base", "utilisateur", "mot_de_passe");

// Affichage des informations du CategoryManager

var_dump($categoryManager);



var_dump($categories);


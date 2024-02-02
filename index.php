<?php
//require
require 'models/Category.php';

//instancier
$category = new Category("catégorie 1");


//var dump

var_dump($category);

//setId
$category->setId(1);

//var dump
var_dump($category);
<?php 
if (!isset($bdd)) { 
    require"../models/model.php";
}
//;
require'../models/accueilSelect.php';
require '../models/thematique.php';

//affichage des thematiques
function Accueil_them(){
	$thmas=getThematique();
	//var_dump($thmas);
	$articles = getArticles();
	require"../views/Accueil.php";
	
}
Accueil_them();


 ?>
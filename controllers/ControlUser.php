<?php 
require '../models/model.php';
require '../models/thematique.php';

//affichage des thematiques
function gestion_site_user(){
	$users=getArticle();
	//var_dump($users);
	require"../views/gestionUsers.php";
	
}

gestion_site_user();
 ?>
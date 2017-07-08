<?php 
//require '../models/model.php';

if(!isset($theme)){
      require '../models/thematique.php';
    }
//affichage des thematiques
function gestion_site_them(){
	$thmas=getThematique();
	//var_dump($thmas);
	require"../views/gestionThem.php";
	
}

gestion_site_them();
 ?>
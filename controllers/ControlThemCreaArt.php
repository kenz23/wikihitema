<?php 
if (!isset($bdd)) { 
    require"../models/model.php";
}
require '../models/thematique.php';

function Crea_article_them(){
	$thmas=getThematique();
	//var_dump($thmas);
	require"../views/creationArticle.php";
	
}
Crea_article_them();
 ?>
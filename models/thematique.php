<?php 
if(!isset($bdd)){
require'../models/model.php';
}
$theme="getThematique()";
//inserer des thematiques
function AddThematique($thematique){
    $nom=$thematique;
    $id_user=$_SESSION['id'];

    $sql="insert into thematiques (name_them, id_user ) values ('$thematique', '$id_user')";
    $resultat= executerRequete($sql);
        return $resultat;
  }

//recuperer des thematiques
function getThematique(){

	$bdd = getBdd();
	$sql="SELECT * FROM thematiques order by name_them asc";
	$stmt = $bdd->prepare($sql);
	$stmt->execute();
    
        return $stmt;
}	
//recuperer des thematiques
function getArticle(){
	$bdd = getBdd();
	$sql="SELECT * FROM users order by name_user asc";
	$stmt = $bdd->prepare($sql);
	$stmt->execute();
    //$resultat= executerRequete($sql);
        return $stmt;
}



?>
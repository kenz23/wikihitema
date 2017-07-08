<?php 

//$thematique=$_GET['them'];

function getArticles(){//$thematique
    $bdd = getBdd();
    $sql="SELECT * FROM articles order by date_modif desc";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
        return $stmt;
  }


 ?>
<?php 
/*
** Traitement du formulaire article pour la vue 
*/
if(!isset($_SESSION))
            {
                session_start(); 
            }
require"../views/header.php";
require"../models/model.php";


//connexion a la base 
if (empty($_POST['thematique']) || empty($_POST['titreart']) || empty($_POST['textarea']))
{    
    	$message = "<p class='message'>Veillez remplir tous les champs</p>";
        echo $message;
        require'../controllers/ControlThemCreaArt.php';
        
}else{
    //recuperer les donnees du formulaire
        $thematique = htmlspecialchars($_POST['thematique']);
        //echo "$thematique";
        $titreart = htmlspecialchars($_POST['titreart']);
        //echo "$titreart";
        $textarea = htmlspecialchars($_POST['textarea']);
        //echo "$textarea";

        //vérifier que le titre de l'article a creer n'existe pas sur la base
        $stmt= searchExistanceArt($titreart);
        $nb_resultats=$stmt->rowCount();
    //var_dump($nb_resultats);

        //verifier que les champs sont renseignés
        
        if ($nb_resultats !== 0) {
            $message = "<p class='message'>Le titre de l'article existe déja</p>";
            echo $message;
            require'../controllers/ControlThemCreaArt.php';
            
        }
        else{
            
        //inserer les donnees dans la base de donnees
           AddArticle($thematique, $titreart,$textarea); 
            require'../controllers/Controller.php';
        }
    
            
}

?>


 ?>
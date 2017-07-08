<?php
//Début de la session
            if(!isset($_SESSION))
            {
                session_start(); 
            } 
        	//connexion a la base 
		    require"../views/header.php";
		    
        //Oublie d'un champ 
        if (empty($_POST['themati'])){
        	$message = "<p class='message'>Veillez remplir le champ thématique</p>";
        	echo $message;
            require'../views/gestion_site.php';
        	
        }
        //pseudo ou mot de passe incorrecte     	
        else{
		    if (!isset($bdd)) { 
                require"../models/model.php";
            }
		    $thematique=htmlspecialchars($_POST['themati']);
		    
		    // Vérification des identifiants
		    $sql = "select * from thematiques where name_them=?";
		    $stmt=$bdd->prepare($sql);
            $stmt->execute(array($thematique));
            //var_dump($stmt);
		    $resultat=$stmt->rowCount();
		    
//var_dump($resultat);


        	if ($resultat !== 0)
        	{ 
            $message="<p class='message'>La thématique existe déja</p>";
        	echo $message;
            require'../views/gestion_site.php';
            
            
	        }
	        //connecter
	        else
	        {
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
    	            $_SESSION['name_them'] = $row['name_them'];
                    var_dump($_SESSION['name_them']);
                }
                if(!isset($theme)){
                require"../models/thematique.php";
                }
	            AddThematique($thematique);
	            require'../views/gestion_site.php';
            
	            
	        }
    	}
?>


 
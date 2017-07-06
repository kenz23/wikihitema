<?php
/*
** Traitement du formulaire de connexion
*/

//Début de la session
session_start();    
//formulaire de connexion
if (!isset($_POST['login'])) { 
    //require'../views/article.php';
    echo "mauvais";
}
else{
    //connexion a la base 
    require"../views/header.php";
    require'../models/model.php';
    // Hachage du mot de passe

    $pass_hache = htmlspecialchars(/*sha1*/($_POST['password']));
    $login = htmlspecialchars($_POST['login']);
    
    // Vérification des identifiants
    $sql = "select * from users where login='$login' and mot_de_passe='$pass_hache'";
    $stmt=executerRequete($sql);
    $resultat=$stmt->rowCount();
        //Oublie d'un champ 
        if (empty($_POST['login']) || empty($_POST['password']) ){
        	$message = "<p class='message'>Veillez remplir tous les champs</p>";
        	echo $message;
            require'../views/connexion.php';
        	
        }
        //pseudo ou mot de passe incorrecte     	
        elseif ($resultat == 0)
        { 
            $message="<p class='message'>Le mot de passe ou le login 
                    entré n'est pas correcte.</p>";
        	echo $message;
            require'../views/connexion.php';
            
            
        }
        //connecter
        else
        {
            
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['login'] = $resultat['login'];
            $_SESSION['role'] = $resultat['role'];          
            $_SESSION['connected']= true;        
            $message= '<p>Bienvenue '.$_POST['login'].', vous êtes maintenant connecté!</p>';
            echo $message;
            
        }
    }
?>

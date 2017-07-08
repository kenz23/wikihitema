<?php
/*
** Traitement du formulaire de connexion pour views/connexion.php
*/

//formulaire de connexion
if (!isset($_POST['login'])) { 
    require'../views/accueil.php'; 
}
else{
     
    require"../views/header.php";
    require'../models/model.php';  //connexion a la base par la fonction getbd()
    
    // Hachage du mot de passe
    $pass_hache = htmlspecialchars(sha1($_POST['password']));
//var_dump($pass_hache);
    $login = htmlspecialchars($_POST['login']);
    
    
        //Oublie d'un champ 
        if (empty($_POST['login']) || empty($_POST['password']) ){
        	$message = "<p class='message'>Veillez remplir tous les champs</p>";
        	echo $message;
            require'../views/connexion.php';
        	
        }else{
            	
        // Vérification les identifiants
            $sql = "select * from users where login=? and mot_de_passe=?";
            $stmt=$bdd->prepare($sql);
            $stmt->execute(array($login, $pass_hache));
            $resultat=$stmt->rowCount();
            $row=$stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultat == 0)
            { 
                $message="<p class='message'>Le mot de passe ou le login 
                        entré n'est pas correcte.</p>";
            	echo $message;
                require'../views/connexion.php';
                
            }
            //connecter
            else
            {
                //Début de la session
                if(!isset($_SESSION))
                {
                    session_start(); 
                }
                $_SESSION['id'] = $row['id_user'];
                //$_SESSION['name_user'] = $row['name_user'];
                $_SESSION['login'] = $row['login'];
                $_SESSION['role'] = $row['role']; 
                //echo  $row['role'] ; 
                $_SESSION['connected']= true;        
                $message= '<p>Bienvenue '.$_POST['login'].', vous êtes maintenant connecté!</p>';
                echo $message;
                 
                require"../controllers/Controller.php";    
           }
        }
}
?>



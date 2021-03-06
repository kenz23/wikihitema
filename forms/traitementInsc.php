<?php   
/*
** Traitement du formulaire de du nouveau inscription
*/
require"../views/header.php";
require"../models/model.php";

 
//verifier que les champs sont renseignés
if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['role']) ||empty($_POST['password'])||empty($_POST['vpassword'])|| empty($_POST['role'])|| empty($_POST['login']))
{    
    	$message = "<p class='message'>Veillez remplir tous les champs</p>";
        echo $message;
        require'../views/inscription.php';
        
}else{
    //recuperer les donnees du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $login = htmlspecialchars($_POST['login']);
        $tel = htmlspecialchars($_POST['tel']);
        $pass_hache1 = htmlspecialchars(sha1($_POST['password']));
        
        $role = htmlspecialchars($_POST['role']);

        
    

        //vérifier que l'utilisateur a creer n'existe pas sur la base
        $stmt= searchExistance($login, $email);
        //var_dump($stmt);
        $nb_resultats=$stmt->rowCount();
    //var_dump($nb_resultats);

    //vérifier que le mot de passe et mot de passe sont les memes 
    if ($_POST['password']==$_POST['vpassword']){

        //vérifier que l'utilisateur a cree n'existe pas sur la base
        if ($nb_resultats !== 0) {
            $message = "<p class='message'>Le login ou l'email existe déja, essayez encore</p>";
            echo $message;
            require'../views/inscription.php';
            
        }
        elseif((strlen($login) <=6) or (strlen($_POST['password']) <=6)){
            $message = "<p class='message'>Le nombre des caracteres doit etre superieur à 6 pour le login et mot de passe</p>";
                echo $message;
                require'../views/inscription.php';
        }else{
            //les roles autorisées sont auteur et abonne
            if($role == 'auteur' or $role =='abonné')
            {
            //inserer les donnees dans la base de donnees
            AddUsers($nom, $prenom,$email,$tel, $login, $pass_hache1, $role); 
            require'../views/connexion.php';

            }else{
                $message = "<p class='message'>Le champ Profil doit prendre comme valeur soit Auteur ou Abonné</p>";
                echo $message;
                require'../views/inscription.php';
            }
        }
    }else{
        $message = "<p class='message'>Le mot de passe est different du vérification mot de passe</p>";
            echo $message;
            require'../views/inscription.php';
    }
            
}

?>

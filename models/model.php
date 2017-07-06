<?php 
// Connexion à la BD en initialisant la connexion au besoin
  function getBdd() {    
      // Création de la connexion
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=wikihitema;charset=utf8', 'root', 'root');
      }
      catch (Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }
    return $bdd;
  }

  // Exécute une requête SQL sans parametre
 function executerRequete($sql) {
    $bdd = getBdd();
    
      $resultat = $bdd->query($sql);    // exécution directe
    
    return $resultat;
  }
// recherche existence de compte avec le meme email  et nom et prenom

  function searchExistance($login,$email){

    $sql="SELECT * FROM users where login='$login' or email='$email'";
    $resultat= executerRequete($sql);
        return $resultat;
  }

//inserer les donnees dans la base de donnees
  function AddUsers($nom, $prenom,$email,$tel, $login, $pass_hache1, $role){
    $nom=nettoyage($nom);
    $prenom=nettoyage($prenom);
    $email=nettoyage($email);
    $tel=nettoyage($tel);
    $login=nettoyage($login);
    $pass_hache1=nettoyage($pass_hache1);
    $role=nettoyage($role);

    $sql="insert into users (name_user, fname_user, email, tel,login, mot_de_passe, role ) values ('$nom', '$prenom','$email','$tel', '$login', '$pass_hache1', '$role')";
    $resultat= executerRequete($sql);
        return $resultat;
  }

//fonction nettoyage sécurisé les entrées du formulaire
function nettoyage($tex){
                // Lettre accentuées
               $search = array('\'', '--', '<','/*', '//', '#');
            // Equivalent non accentué
               $replacement = array('a','a','a','a','a', 'a', 'a'); 
            //remplacement des lettre accentuées 
               $texts = str_replace( $search, $replacement , $tex);
               return $texts;
            }
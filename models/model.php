<?php 
if(!isset($_SESSION))
            {
                session_start(); 
            } 
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
$bdd = getBdd();

  // Exécute une requête SQL sans parametre
 function executerRequete($sql) {
    
    $bdd = getBdd();
      $resultat = $bdd->query($sql);    // exécution directe
      
    return $resultat;
  }
  
// recherche existence de compte avec le meme email  et login

  function searchExistance($login,$email){
      $bdd = getBdd();
    $sql="SELECT * FROM users where login='$login' or email='$email'";
    $resultat= executerRequete($sql);
        return $resultat;
    /*$stmt= $bdd->prepare($sql);
    $resultat=$stmt->execute(array($login, $email));
        return $resultat;*/
  }
//article

  function searchExistanceArt($article){
    $sql="SELECT * FROM articles where name_article='$article'";
    $resultat= executerRequete($sql);
        return $resultat;
  }
  function selectId($thematique){
    $bdd = getBdd();
    $sql="SELECT id_them FROM thematiques where name_them='$thematique'";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        return $row['id_them'];
    }
  }
  
  function AddArticle($thematique, $titreart,$textarea) {

    $id_them=selectId($thematique);
    $titreart=$titreart;
    $textarea= stripslashes($textarea);
    $id_user= $_SESSION['id'];
    echo "$id_user";

    $sql="insert into articles (id_them, name_article, contenu_article, date_creat,date_modif, id_user) values ('$id_them', '$titreart','$textarea',NOW(), NOW(), '$id_user')";

    $resultat= executerRequete($sql);
        return $resultat;
  }
//inserer les donnees dans la base de donnees
  function AddUsers($nom, $prenom,$email,$tel, $login, $pass_hache1, $role){
    $nom=$nom;
    $prenom=$prenom;
    $email=$email;
    $tel=$tel;
    $login=$login;
    $pass_hache1=$pass_hache1;
    $role=$role;

    $sql="insert into users (name_user, fname_user, email, tel,login, mot_de_passe, role ) values ('$nom', '$prenom','$email','$tel', '$login', '$pass_hache1', '$role')";
    $resultat= executerRequete($sql);
        return $resultat;
  }


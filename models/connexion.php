<?php 

require_once 'model.php';

class connexion extends model {

  // Renvoie la liste des billets du blog
  public function getconnexion($login, $motdepasse) {
    $sql = 'select login, mot_de_passe from users where login=? and mot_de_passe=? ';
    $connexion = $this->executerRequete($sql, array($login, $motdepasse));
    
    if ($connexion->rowCount() == 1){
      $var=$connexion->fetch();

      return $var;  // Accès à la première ligne de résultat
    }
    else
      return false;
    }
    public function getSolde()
    {
        return $this->var ;
    }
    public function __toString()
    {
        return "Le solde du compte de est de " . $var;
    }

}


$login="kenz";
$motdepasse="1234";

 $connexion= new connexion();
 echo $connexion;
 $var= $connexion->getconnexion($login, $motdepasse);
 var_dump($var);
 foreach ($var as  $value) {
   echo $value;
 }
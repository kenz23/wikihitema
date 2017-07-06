<?php 
require"header.php";
?>
<body class="body" class="my_background">

<div class="container">

	<div class="row">
		<div class="col-md-offset-2 col-md-8">
		<h1> Inscription <br/> <small> Merci de renseigner vos informations </small></h1>
		</div>
	</div>
<form method="POST" action="../forms/traitementInsc.php">
	<div class="row">
		<div class="col-md-offset-2 col-md-3">
			<div class="form-group">
			<label for="Nom">Nom</label>
			<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
			</div>
		</div>

		<div class="col-md-offset-1 col-md-3">
			<div class="form-group">
			<label for="Prenom">Prénom</label>
			<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" onblur="nettoyageJs(this)">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-offset-2 col-md-7">
			<div class="form-group">
			<label for="Email">Email address</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" onblur="verifMail(this)">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-offset-2 col-md-3">
			<div class="form-group">
			<label for="Password">Mot de passe</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" >
			</div>
		</div>

		<div class="col-md-offset-1 col-md-3">
			<div class="form-group">
			<label for="Vpassword">Vérification mot de passe</label>
			<input type="password" class="form-control" id="vpassword"  name="vpassword" placeholder="Vérification mot de passe">
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="col-md-offset-2 col-md-3">
		<label for="role">Profil (Auteur ou Abonné)</label>
		<input list="roles" type="text" id="role" name="role" class="form-control" placeholder="Rôle" >
		<datalist id="roles">
			<option>Auteur</option>
			<option>Abonné</option>
		</datalist>
		</div>
		<div class="col-md-offset-1 col-md-3">
			<div class="form-group">
			<label for="Vpassword">Login</label>
			<input type="text" class="form-control" id="login"  name="login" placeholder="login">
			</div>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-md-offset-2 col-md-3">
			<div class="input-group">
			<span class="input-group-addon glyphicon glyphicon-earphone"></span>
			<input type="number" class="form-control" name="tel" placeholder="Téléphone" aria-describedby="basic-addon1">
			</div>
		</div>
	</div>

	<br/>
	<div class="row">
		<div class="col-md-offset-5 col-md-1">
		<button type="submit" class="btn btn-primary" type="submit">Envoyer mes informations</button>
		</div>
	</div>

</div>
</form>
<?php 
require"footer.php";
?>

<script type="text/javascript">
//surligne le champ si il y a une erreur 
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
//verifier le contenu du champ email
    function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
//parcourir les differents caracteres du text https://openclassrooms.com/courses/tout-sur-le-javascript/td-verification-d-un-formulaire
//https://openclassrooms.com/courses/apprenez-a-coder-avec-javascript/manipulez-les-chaines-de-caracteres
/*function nettoyageJs(champ)
{
   var valeur=champ.value;
   for (var i = 0; i <= valeur.length; i++) {
   	var car= valeur.charAt(0);
   	console.log(car);
	   	if (car == '-'){
	   	surligne(champ, true);
	      return false;
	   }
	   else
	   {
	      surligne(champ, false);
	      return true;
	   }
   }
}*/
</script>
</script>
</body>
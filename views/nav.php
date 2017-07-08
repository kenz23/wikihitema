<?php 
	if(!isset($_SESSION))
	{
	session_start(); 
	}
	require"header.php";
	//https://silviomoreto.github.io/bootstrap-select/examples/   pour le select 
 ?>

 <body class="body">


 	<div class="row" id="logo">
			<img src="../images/logo.png" alt="logo">	 
			<button type="button"  class="col-md-offset-7"><a href="../models/deconnexion.php">Déconnexion</a></button>
					 
	</div>	
	<?php  
	//gestion des fonctions par rôle
	if($_SESSION['role']=='administrateur')
	{
		require"menuAdmin.php";
	}
	elseif($_SESSION['role']=='auteur')
	{
		require"menuAuteur.php";
	}
	?>
	
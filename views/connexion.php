<?php 
/*
** formulaire de connexion 
*/
require"header.php";
 ?>

<body class="body"> 
<span>
    <img src="../images/logo.png">
</span>
<div id="formulaire" class="text-center center-block" >
    <form method="POST" action="../forms/traitementConnex.php">
        <legend>Connexion</legend>
        <p>
            <label for="login">Login*  :&nbsp;</label><input name="login" type="text" id="login" /><br />
            <label for="password">Mot de Passe*  :&nbsp;</label><input type="password" name="password" id="password" />
        </p>
        <p >
            <input class="button" type="submit" value="Connexion" />
        </p>
        <p>Pas de compte? <a href="../views/inscription.php">Créez-en un!</a></p>
    </form>
</div>
<?php 
require"footer.php";
?>
</body>
<script type="text/javascript">
    /*var login=document.getElementById('pseudo').value;
    console.log(login);
    var mdp=document.getElementById('password');
    if (login && mdp){
        alert("vous avez pas remplie tout les champs");
    }*/
</script>
</html>
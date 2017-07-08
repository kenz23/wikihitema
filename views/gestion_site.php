<?php 
require"../views/nav.php";
 

?>
<!--hr class="separation" /-->	
<body class="body">
	<div class=" col-md-offset-1 menu"  style="float: left;">
        <nav class="navbar navbar-defaut navbar-static-top" role="navigation">
            <div class="navbar-inner">
                <div class="container col-md-12" >
                    <a class="btn btn-navbar" data-target=".navbar-invese-collapse" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <ul class="nav">

                    	<li><p>Bonjour <?php echo $_SESSION['login']; ?> </p></li>
                    	<li><p>Gestion du site</p></li>
                        <li class="themat"><a href="#">Thématiques</a></li>
                        <li class="users"><a href="#">Users</a></li>
                        <li class="articl"><a href="#">Articles</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</div>
<div class="col-md-7">
    <div   id="blockg">
    <?php 
      if(!isset($theme)){
      require '../models/thematique.php';
    }
    require"../controllers/ControlThem.php";
    
     ?>          
    
    </div>
</div>
<script type="text/javascript">

    

    $(document).on('click', '.users', function(){ 

        document.getElementById("blockg").style.display = "none";
        
        $("#blockg" ).load( "../controllers/ControlUser.php " );
        

        document.getElementById("blockg").style.display = "block";
        
    }); 
    $(document).on('click', '.articl', function(){ 

        document.getElementById("blockg").style.display = "none";
        
        $("#blockg" ).load( "../views/gestionArticles.php " );
        

        document.getElementById("blockg").style.display = "block";
        
    }); 
    $(document).on('click', '.themat', function(){ 

        document.getElementById("blockg").style.display = "none";
        
        $("#blockg" ).load( "../controllers/ControlThem.php " );
        console.log ("hello");

        document.getElementById("blockg").style.display = "block";
        
    }); 
</script>

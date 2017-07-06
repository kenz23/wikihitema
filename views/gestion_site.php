<?php 
require"header.php";
require"menu.php";
//https://openclassrooms.com/forum/sujet/bootstrap-navbar-irremediablement-verticale
?>
<!--hr class="separation" /-->	
	<body class="body">
	<div class="menu">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-target=".navbar-invese-collapse" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <ul class="nav menu">

                    	<li><p>Bonjour <?php //echo $user ?> </p></li>
                    	<li><p>Gestion du site</p></li>
                        <li><a href="#">Thématiques</a></li>
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Articles</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</div>
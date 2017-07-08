<?php 
require"../views/nav.php";
 ?>
 <div class="contenaire">
	<div class=" col-md-offset-1 menu"  style="float: left;">
        <nav class="navbar navbar-defaut navbar-static-top" role="navigation">
            <div class="navbar-inner">
                <div class="container  menu">
                    <a class="btn btn-navbar" data-target=".navbar-invese-collapse" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <ul class="nav menu">

                    	<li><p>Bonjour <?php echo $_SESSION['login']; ?> </p></li>
                    	<li class="form-group">
                    	<form method="POST" action="#">
							<label for="thematique">Thématiques</label>
							<select class="form-control" id="thema" name="thema">

								<?php $i=1; foreach ($thmas as $thma) :?>
								<option class="option"><?= $thma['name_them'] ?></option>
								<?php $i++; endforeach; ?>

							</select>
						<form>
						</li>
                       
                    </ul>
                </div>
            </div>
        </nav>
	</div>
</form>
	<div class="col-md-7 col-md-offset-1" style="margin-top: 5%; margin-bottom: 5%; " id="blockA">
	<table   class="table table-hover table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Article</th>
				<th>Date de création</th>
			</tr>
		</thead>
		<tbody >
			<?php $i=1; foreach ($articles as $article) :?>
			
			<h1><?= $article['name_article'] ?></h1>
			<p><?=  htmlspecialchars($article['contenu_article']) ?></p>
			<p><?= $article['date_creat'] ?></p>
	
			<tr class="<?php echo $i ?>">
				<td><?php echo $i ?></td>		
				<td ><?= $article['name_article'] ?></td>
				<td><?= $article['date_creat'] ?></td>
			</tr>	
			<?php $i++; endforeach; ?>
		</tbody>			
	</table>
</div>
</div>

<div>
<?php 
require"../views/footer.php";
 ?>
</div>

<script type="text/javascript" >
	    

   /* $('.option').click(function(){
	console.log("heloo");
		// récupérer la valeur du champ 
		var them = $('#thema').val();
		console.log(them);
		
		$.ajax({

           'url' : '../models/accueilSelect.php',
           'type' : 'GET',
           'data': {'them':them},

            'success' : function(){ // success !
                 $("#tel_struct").val(reponse);
            },

            'error' : function(){
                    alert("Impossible de telecharger la page");
            }

        }); 
		
});	*/

    
</script>

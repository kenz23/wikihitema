<?php 
require"../views/nav.php";
 ?>	
		
<form method="POST" action="../forms/traitementArticle.php">
		<div >
			<div class="form-group">

			<label for="thematique">Thématiques</label>

			<select class="form-control" id="thematique" name="thematique">
				<?php $i=1; foreach ($thmas as $thma) :?>
				<option class="<?php echo $i ?>"><?= $thma['name_them'] ?></option>
				<?php $i++; endforeach; ?>
			</select>
			</div>
		</div>

		<div >
			<div class="form-group">
				<label for="titreart">Titre de l'articles</label>
				<input class="form-control" name="titreart" type="text" id="titreart" />
			</div>
		</div>
		

 
	 <legend for="textarea">Editeur d'article</legend>
	 <textarea id="textarea" name="textarea"></textarea>
	  
	  <div class="col-md-offset-5 col-md-1">
			<button type="submite" class="btn btn-primary">Envoyer</button>
	  </div>
</form>
 
<script type="text/javascript">
$(document).ready(function(){	
	$("#textarea").ckeditor();
});
</script> 
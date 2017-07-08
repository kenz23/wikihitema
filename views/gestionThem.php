<table id="myTable" class="table table-hover table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Thématiques</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#</td>  
            <form method="POST" action="../forms/traitementGestThem.php">                
                <td> 
                    <input type="text" id="themati" name="themati" class="form-control" placeholder="Thematique"/>

                </td>
                
                <td>
                    <button type="submit" class="btn btn-primary" id="ajout">Ajouter</button>
                </td>
            </form>
             
            </tr>
            
            <?php $i=1; foreach ($thmas as $thma) :?>

            <tr>
                    <td><?= $i ?></td>
                    <td><?= $thma['name_them'] ?> </td>
            </tr>

            <?php $i++; endforeach; ?>
            
        </tbody>            
</table>
    
<script type="text/javascript">
    //Ajout 
    /*$('#ajout').click(function(){
        $("#myTable > tbody:last-child").append('<tr class="tr" ><td>#</td><td class="themati">' + $('#themati').val() + '</td><td class="button"><button class="btn btn-danger" type="submit">Supprimer</button></td></tr>');
            });*/

</script>    
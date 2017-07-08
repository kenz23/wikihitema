<table id="myTable" class="table table-hover table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
                <?php $i=1; foreach ($users as $user) :?>
                
            <tr>
                    <td><?= $i ?></td>
                    <td><?=  $user['name_user'] ?> </td>
                    <td><?=  $user['fname_user'] ?> </td>
                    <td><?=  $user['role'] ?></td>
                    <td><button class="btn btn-danger" type="submit"  >Supprimer</button></td>
            </tr>

            <?php  $i++; endforeach; ?>
        </tbody>            
</table>
<div>
    <button class="btn btn-success" type="button"><a href="../views/Ajout_admin.php"> +  Administrateur</a></button>
</div>


    
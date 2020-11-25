<?php
include "Controller/UtilisateurC.php"
?>
<div>
Ajouter un User
<div>
<table border="1">
<form method="post" action="Views/addUser.php" enctype="multipart/form-data">

<tr>
<td>Nom</td>
<td><input type="text" pattern="[a-zA-Z0-9- ]+" maxlength="30" name="Nom" class="form-control" required></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" pattern="[a-zA-Z0-9- ]+" maxlength="30" name="Prenom" class="form-control" required></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" maxlength="30" name="Email" class="form-control" required></td>
</tr>
<tr>
<td>Login</td>
<td><input type="text" pattern="[a-zA-Z0-9- ]+" maxlength="30" name="Login" class="form-control" required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" pattern="[a-zA-Z0-9- ]+" maxlength="30" name="Password" class="form-control" required></td>
</tr>
<tr>
<td><input type="submit" value="Add User" name="addUser"> </td>

</tr>


</form>
</table>

Affichage des users
</div>

<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>login</td>
<td>password</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
<?php
/*$userC=new UtilisateurC();
$users=$userC->afficherUtilisateur();*/

    $sql="select * From utilisateur";
    $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->execute();
        
        $liste = $req->fetchAll();

        foreach($liste as $row){	
	?>
	<tr>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Prenom']; ?></td>
	<td><?PHP echo $row['Email']; ?></td>
	<td><?PHP echo $row['Login']; ?></td>
	<td><?PHP echo $row['Password']; ?></td>
	<td>
    <a href="views/supprimerUser.php?id=<?PHP echo $row['id'];?>"> Supprimer </a> 
	</td>
	<td><a href="views/modifierUser1.php?id=<?PHP echo $row['id'];?>">
	Modifier</a></td>
	</tr>
	<?PHP
    }
    ?>


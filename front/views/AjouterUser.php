<?PHP
session_start() ;
$con = mysqli_connect('localhost','root','') ;
mysqli_select_db($con,'1projetweb') ;
       $nom =$_POST['nom'];
		$prenom =$_POST['prenom'];
		$adresse=$_POST['adresse'] ;
		$email =$_POST['email'];
		$mdp=$_POST['mdp'];
		$tel=$_POST['tel'] ;
		$date=$_POST['date'];
		$photo=$_POST['photo'];
		$s = "select * from client where nom='$nom'" ;
	$resultat = mysqli_query($con,$s) ;
	$num = mysqli_num_rows($resultat) ;//return valeur de la resultat 1= si client déja dans la table sinon 0
if($num == 1)
{
	header('location: shop.php') ;
}
	else
	{
		$reg="insert into client (nom,prenom,mdp,email,date,tel,adresse,photo) values('$nom','$prenom','$mdp','$email','$date','$tel','$adresse','$photo')";
		mysqli_query($con,$reg) ;
		header('location:shop.php') ;
	}
         
	



?>
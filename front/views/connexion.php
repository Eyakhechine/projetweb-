<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 

include('../model/User.php') ;
$c=new Database();
$conn=$c->connexion();//connect to db
$user=new User($_POST['nom'],$_POST['mdp'],$conn);//constructeur parametre
$u=$user->Logedin($conn,$_POST['nom'],$_POST['mdp']);
$vide=false;
if (!empty($_POST['nom']) && !empty($_POST['mdp']))
{
	
	foreach($u as $t)
	{
		$vide=true;
	if ($t['nom']==$_POST['nom'] && $t['mdp']==$_POST['mdp'])
	{	
		session_start();
		$_SESSION['l']=$_POST['nom'];
		$_SESSION['p']=$_POST['mdp'];
		$_SESSION['i']=$t['id_client'];
		header("location:shop.php");
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=sign.php">'; 
      } 
}	  
 
else { 
     // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=login.html">';  
}  

?> 
</body>
</html>
<?php
require "config.php" ;
class loginC
{
	function AjouterUser($User)
	{
		//require_once "config.php" ;
		$sql = "insert into client (nom,prenom,email,mdp) values(:nom,:prenom,:email,:pwd)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':nom',$User->getnom()) ;
			$req->BindValue(':prenom',$User->getprenom()) ;
			$req->BindValue(':email',$User->getemail()) ;
			$req->BindValue(':mdp',$User->getmdp()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	function AfficherSign($User)
	{
		echo "nom: ".$User->getnom()."<br>";
		echo "prenom: ".$User->getprenom()."<br>";
		echo "email: ".$User->getemail()."<br>";
		echo "mdp: ".$User->getmdp()."<br>";
	}
	function afficher_Sign_return()
	{
		//require_once "config.php" ;
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimer($nom)
	{ 
		//require_once "config.php" ;
		$sql="DELETE FROM client where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherclients($str){
		$sql="select * from client where nom like '%".$str."%' or prenom like '%".$str."%' or email like '%".$str."%' or id_client like '%".$str."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieretat($id_client,$etat)
   {  
		$sql = "UPDATE carte SET etat='$etat' WHERE id_client=:id_client ";
	
	$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
 }
	
}

?>
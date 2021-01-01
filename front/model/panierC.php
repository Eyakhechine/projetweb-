<?php
class PanierC{
	public function ajouter($id)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO panier(id_client) VALUES(:idc)');
		$query->bindValue(':idc',$id);
		$query->execute();
	}

	public function ajouterProduit($idproduit,$nb)
	{
		$db=config::getConnexion();
		$query=$db->query('insert into cart '.$idproduit.' AND idpanier='.$idpanier);
		if ($query->rowCount()>0)
			return false;
		$query=$db->prepare('INSERT INTO produitpanier(idpanier,idproduit,quantite) VALUES(:idp,:idprod,:qte)');
		$query->bindValue(':idp',$idpanier);
		$query->bindValue(':idprod',$idproduit);
		$query->bindValue(':qte',$nb);
		$query->execute();
	}

	public function afficher($id)
	{
		$db=config::getConnexion();
		return $db->query('SELECT p.idproduit id, p.image img, p.nomproduit nom, p.prix prix, pp.quantite qte FROM produit p INNER JOIN produitpanier pp ON p.idproduit=pp.idproduit WHERE pp.idpanier='.$_SESSION['client']['id_client']);
	}

	public function supprimerProduit($idpanier,$idproduit)
	{
		$db=config::getConnexion();
		$query=$db->query('DELETE FROM produitpanier WHERE idproduit='.$idproduit.' AND idpanier='.$idpanier);
	}
	public function modifierProduit($idproduit,$qte)
	{
		$db=config::getConnexion();
		$query=$db->prepare('SELECT * from produitpanier WHERE idproduit=:idprod AND idpanier=:idpan');
		$query->bindValue(':idprod',$idproduit);
		$query->bindValue(':idpan',$_SESSION['idclient']);
		$query->execute();
		$pp=$query->fetch();
		$query=$db->prepare('UPDATE produitpanier SET quantite=:qte WHERE idproduit=:idprod AND idpanier=:idpan');
		$query->bindValue(':qte',$qte);
		$query->bindValue(':idprod',$idproduit);
		$query->bindValue(':idpan',$_SESSION['idclient']);
		$query->execute();
}
}
?>
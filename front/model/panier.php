<?PHP
class panier{
	private $idClient;
	private $idPanier;
		
	function __construct($idClient,$idPanier){
		$this->idClient=$idClient;
		$this->idPanier=$idPanier;
	}
	
	function getIdClient(){
		return $this->IdClient;
	}
	function getIdPanier(){
		return $this->IdPanier;
	}

	function setIdClient($idClient){
		$this->idClient=$idClient;
	}
	function setIdPanier($idPanier){
		$this->idPanier=$idPanier;
	}
	
}

?>
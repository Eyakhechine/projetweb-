<?php 
include('../controller/dbconfig.php') ;
class User
{
	 private $id;
    private $mdp;
	private $role;
    public $conn;	
	private $nom ;
	private $prenom ;
	private $email ;
	private $adresse ;
	private $tel ;
	public function __construct($nom,$mdp,$conn)
	{
		$this->nom=$nom;
		$this->mdp=$mdp;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getnom()
	{
		return $this->nom ;
	}
	function gettel()
	{
		return $this->tel ;
	}
	function getprenom()
	{
		return $this->prenom ;
	}
	function getemail()
	{
		return $this->email ;
	}
	function getadresse()
	{
		return $this->adresse;
	}
    function getmdp()
	{
		return $this->mdp;
		
	}
	 function getdate()
	{
		return $this->date;
		
	}
		public function setnom($nom)
	{
		$this->nom=$nom ;
	}
		public function setadresse($adresse)
	{
		$this->nom=$adresse ;
	}
		public function settel($tel)
	{
		$this->tel=$tel ;
	}
		public function setprenom($prenom)
	{
		$this->prenom=$prenom ;
	}
		public function setemail($email)
	{
		$this->email=$email ;
	}
	public function setmdp($mdp)
	{
		$this->mdp=$mdp ;
	}
		public function setdate($date)
	{
		$this->date=$date ;
	}
	public function Logedin($conn,$nom,$mdp)
	{
		$req="select * from client where nom='$nom' && mdp='$mdp'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	
	

	
}


	?>
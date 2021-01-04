<?PHP
class commande{
	private $idCommande;
	private $id_client;
	private $dateCommande;
	private $prix_total;
	private $etat ;
	function __construct($id_client,$dateCommande,$prix_total)
	{
		$this->id_client=$id_client;
		$this->dateCommande=$dateCommande;
		$this->prix_total=$prix_total;
	}
	
	function getidCommande(){
		return $this->idCommande;
	}
	function getid_client(){
		return $this->id_client;
	}
	function getdateCommande(){
		return $this->dateCommande;
	}
	function getprix_total(){
		return $this->prix_total;
	}
	function getquantity(){
		return $this->quantity;
	}
	function getetat(){
		return $this->etat;
	}

	function setidCommande($idCommande){
		$this->idCommande=$idCommande;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setdateCommande($dateCommande){
		$this->dateCommande=$dateCommande;
	}
	function setprix_total($prix){
		$this->prix_total=$prix_total;
	}
	function setquantity($quantity){
		$this->quantity=$quantity;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	
}

?>
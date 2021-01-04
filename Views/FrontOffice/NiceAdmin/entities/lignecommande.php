<?PHP
class lignecommande{
	private $idCommande;
	private $id_produit;
	private $prixUnitaire;
	
	
	function __construct($idCommande,$id_produit,$prixUnitaire,$quantiteCommande){
		$this->idCommande=$idCommande;
		$this->id_produit=$id_produit;
		$this->quantiteCommande=$quantiteCommande;
		$this->prixUnitaire=$prixUnitaire;
	}
	
	function getidCommande(){
		return $this->idCommande;
	}
	function getidLigneCommande(){
		return $this->idLigneCommande;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	function getquantite(){
		return $this->quantiteCommande;
	}
	function getprixUnitaire(){
		return $this->prixUnitaire;
	}
	


	function setidCommande($idCommande){
		$this->idCommande=$idCommande;
	}
	function setquantite($quantiteCommande){
		$this->quantiteCommande=$quantiteCommande;
	}
	function setidLigneCommande($idLigneCommande){
		$this->idLigneCommande=$idLigneCommande;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setprixUnitaire($prixUnitaire){
		$this->prixUnitaire=$prixUnitaire;
	}
	
	
}

?>
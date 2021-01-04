<?php

class Chef 
{
	private $id_chef ;
	private $nom_chef ;
	private $prenom_chef ;
	private $age_chef;
	private $domaine_chef;
	private $salaire_chef;
	private $image;
	

	


 
	function __construct($nom_chef,$prenom_chef,$age_chef,$domaine_chef,$salaire_chef,$image){
            
			
			$this->nom_chef=$nom_chef ;
			$this->prenom_chef=$prenom_chef ;
			$this->age_chef=$age_chef ;
			$this->domaine_chef =$domaine_chef;
			$this->salaire_chef=$salaire_chef;
			$this->image=$image;
		
	}

	
	function getIdChef(){
		return $this->id_chef;
		
	}
	
	
	function getNomChef(){
		return $this->nom_chef;
	}
	
	function getPrenomChef(){
		return $this->prenom_chef;
	}
	
	function getAgeChef(){
		return $this->age_chef;
	}
	
	function getDomaineChef(){
		return $this->domaine_chef;
		
	}
	
		function getSalaireChef(){
		return $this->salaire_chef;
		
	}
	
	function getImage(){
		return $this->image;
		
	}
		
	
	
	
	
	
	
	
	function setIdChef ($id_chef)
	{
		$this->id_chef=$id_chef;
	}
	
	

	function setNomChef ($nom_chef)
	{
		$this->nom_chef=$nom_chef;
	}


	function setPrenomChef ($prenom_chef)
	{
		$this->prenom_chef=$prenom_chef;
	}
	
	
	function setAgeChef($age_chef)
	{
		$this->age_chef=$age_chef;
	}
	
	function setDomaineChef($domaine_chef)
	{
		$this->domaine_chef=$domaine_chef;
	}

	function setSalaireChef($salaire_chef)
	{
		$this->salaire_chef=$salaire_chef;
	}
	
	
	function setImage($image)
	{
		$this->image=$image;
	}
	


	
	
	
}





?>

	
	
	
	
	

		
	

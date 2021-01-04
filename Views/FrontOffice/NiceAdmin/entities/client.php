<?php

class Clients 
{
	private $id_client ;
	private $login ;
	private $nom_client ;
	private $prenom_client ;
	private $mot_passe;
	private $email_client;
	private $sexe_client;
	private $datenaissance_client ;
	private $tel_client;
	private $cin_client; 
	private $adresse_client;
	private $codepostal_client ;
	private $ville_client ;
	private $pays_client ;
	

	


 
	function __construct($login,$nom_client,$prenom_client,$mot_passe,$email_client,$sexe_client,$datenaissance_client,$tel_client,$cin_client,$adresse_client,$codepostal_client,$ville_client,$pays_client){
            
			$this->login=$login ;
			$this->nom_client=$nom_client ;
			$this->prenom_client=$prenom_client ;
			$this->mot_passe=$mot_passe ;
			$this->email_client =$email_client ;
			$this->sexe_client=$sexe_client;
			$this->datenaissance_client=$datenaissance_client;
			$this->tel_client =$tel_client ;
			$this->cin_client =$cin_client ;
	        $this->adresse_client=$adresse_client;
		    $this->codepostal_client=$codepostal_client ;
		    $this->ville_client=$ville_client ;
			$this->pays_client =$pays_client ;
	   

		
	}

	
	function getIdClient(){
		return $this->id_client;
		
	}
	
	function getLogin(){
		return $this->login;
	}
	
	function getNomClient(){
		return $this->nom_client;
	}
	
	function getPrenomClient(){
		return $this->prenom_client;
	}
	
	function getMotPasse(){
		return $this->mot_passe;
	}
	
	function getSexeClient(){
		return $this->sexe_client;
		
	}
	
		function getAdresseClient(){
		return $this->adresse_client;
		
	}
	
		function getCinClient(){
		return $this->cin_client;
		
	}
	
		function getTelClient(){
		return $this->tel_client;
		
	}
	
	
	
	function getEmailClient(){
		return $this->email_client;
		
	}
	
	
	
	function getPaysClient(){
		return $this->pays_client;
		
	}
	
	function getVilleClient(){
		return $this->ville_client;
		
	}
	
	function getcodepostal_client()
	{
		return $this->codepostal_client;
		
	}
	
	
	function getdatenaissance_client()
	{
		return $this->datenaissance_client;
		
	}
	
	
	
	function setIdClient ($id_client)
	{
		$this->id_client=$id_client;
	}
	
	
	function setSexeClient ($sexe_client)
	{
		$this->sexe_client=$sexe_client;
	}
	
	
	function setAdresseClient ($adresse_client)
	{
		$this->id_client=$adresse_client;
	}
	
	
	function setCinClient ($cin_client)
	{
		$this->cin_client=$cin_client;
	}
	
	function setTelClient ($tel_client)
	{
		$this->tel_client=$tel_client;
	}
	
	function setEmailClient ($email_client)
	{
		$this->email_client=$email_client;
	}
	
	function setStatutClient ($statut_client)
	{
		$this->statut_client=$statut_client;
	}
	

	
	function setVilleClient ($ville_client)
	{
		$this->ville_client=$ville_client;
	}
	function setcodepostal_client ($codepostal_client)
	{
		$this->codepostal_client=$codepostal_client;
	}
	
	
	function setdatenaissance_client ($datenaissance_client)
	{
		$this->datenaissance_client=$datenaissance_client;
	}
	
	
	
	
	function setNomClient ($nom_client)
	{
		$this->nom_client=$nom_client;
	}


	function setPrenom ($prenom_client)
	{
		$this->prenom_client=$prenom_client;
	}
	
	
	function setLogin ($login)
	{
		$this->login=$login;
	}
	
	function setMotPasse ($mot_passe)
	{
		$this->mot_passe=$mot_passe;
	}
	
	

	
	

	public function Logedin($conn,$login,$mot_passe)
	{
		$req="select * from clients where login='$login' && mot_passe='$mot_passe'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	
	
	
}





?>

	
	
	
	
	

		
	

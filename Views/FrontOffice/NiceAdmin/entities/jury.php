<?php

class jury
{
	
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $pays;
	
	function __construct($id,$nom,$prenom,$email,$pays)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->pays=$pays;
	}

	function getId()
	{
		return $this->id;	
	}


	function getNom()
	{
		return $this->nom;	
	}

	function getPrenom()
	{
		return $this->prenom;	
	}

	function getEmail()
	{
		return $this->email;	
	}

	function getPays()
	{
		return $this->pays;	
	}

	function setId($id)
	{
		$this->id=$id;	
	}
    

	function setNom($nom)
	{
		$this->nom=$nom;	
	}
    

	function setPrenom($prenom)
	{
		 $this->prenom=$prenom;	
	}
	function setEmail($email)
	{
		$this->email=$email;	
	}
	function setPays($pays)
	{
		$this->pays=$pays;	
	}
	

	
}
?>
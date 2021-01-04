<?php

class event
{
	
	private $reference;
	private $titre;
	private $description;
	private $type;
	private $dateevent;
	private $image;
	
	
	function __construct($reference,$titre,$description,$type,$dateevent,$image)
	{
		$this->reference=$reference;
		$this->titre=$titre;
		$this->description=$description;
		$this->type=$type;
		$this->dateevent=$dateevent;
		$this->image=$image;
		
	}

	function getReference()
	{
		return $this->reference;	
	}


	function getTitre()
	{
		return $this->titre;	
	}

	function getDescription()
	{
		return $this->description;	
	}

	function getType()
	{
		return $this->type;	
	}

	function getDateevent()
	{
		return $this->dateevent;	
	}

	function getImage()
	{
		return $this->image;	
	}




	function setReference($reference)
	{
		$this->reference=$reference;	
	}
    

	function setTitre($titre)
	{
		$this->titre=$titre;	
	}
    

	function setDescription($description)
	{
		 $this->description=$description;	
	}
	function setType($type)
	{
		$this->type=$type;	
	}
	function setDateevent($dateevent)
	{
		$this->dateevent=$dateevent;	
	}
	function setImage($image)
	{
		$this->image=$image;	
	}	
	
	

	
}
?>
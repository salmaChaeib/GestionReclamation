<?php
class Product
{
	private $id ;
	private $nom ;
	private $description ;
  private $imageUrl;


	public function __construct($nom,$description,$imageUrl)
	{

		$this->nom=$nom ;
		$this->description=$description;

    $this->imageUrl=$imageUrl;

	}

	public function getId()
	{
		return $this->id ;
	}
  public function getImageUrl()
	{
		return $this->imageUrl;
	}
	public function getNom()
	{
		return  $this->nom;
	}

	public function getDescription()
	{
		return $this->description ;
	}



}
?>

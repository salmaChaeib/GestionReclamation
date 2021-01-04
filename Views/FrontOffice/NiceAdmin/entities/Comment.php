<?php
class Comment
{
	private $id ;
	private $description ;
	private $idUser ;
	private $idProduct;


	public function __construct($description,$idProduct)
	{
			
		$this->description=$description;
		$this->idProduct=$idProduct;

	}

	public function getId()
	{
		return $this->id ;
	}
	public function getIdUser()
	{
		return  $this->idUser;
	}

	public function getDescription()
	{
		return $this->description ;
	}
	public function getIdProduct()
	{
		return $this->idProduct ;
	}


}
?>

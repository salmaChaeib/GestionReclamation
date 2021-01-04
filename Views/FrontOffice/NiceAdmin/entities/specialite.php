<?php
class specialite
{
	private $codeS ;
	private $image;
	private $nomS ;
	private $description ;

	public function getcodeS()
	{
		return $this->codeS ;
	}
	public function getimage()
	{
		return $this->image ;
	}
	public function getnomS()
	{
		return  $this->nomS ;
	}
	public function getdescription()
	{
		return $this->description ;
	}
	
	public function __construct($codeS,$image,$nomS,$description)
	{
		$this->codeS=$codeS ;
		$this->image=$image ;
		 $this->nomS=$nomS ;
		$this->description=$description ;
	}
}
?>
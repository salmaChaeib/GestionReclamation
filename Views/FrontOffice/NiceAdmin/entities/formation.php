<?php
class formation
{
	private $codeF ;
	private $nomS ;
	private $nomF ;
	private $chef ;
	private $prix ;
	private $description ;
	private $dateD ;
	private $dateF ;
	private $imagef;

	public function __construct($codeF,$nomS,$nomF,$chef,$prix,$description,$dateD,$dateF,$imagef)
	{
		$this->codeF=$codeF ;
		 $this->nomS=$nomS ;
		$this->nomF=$nomF ;
		$this->chef=$chef ;
		$this->prix=$prix ;
		 $this->description=$description;
		$this->dateD=$dateD;
		$this->dateF=$dateF ;
		$this->imagef=$imagef ;
	}

	public function getcodeF()
	{
		return $this->codeF ;
	}
	public function getnomS()
	{
		return  $this->nomS ;
	}
	public function getnomF()
	{
		return $this->nomF ;
	}
	public function getchef()
	{
		return $this->chef ;
	}
	public function getprix()
	{
		return $this->prix ;
	}
	public function getdescription()
	{
		return $this->description ;
	}
	public function getdateD()
	{
		return $this->dateD ;
	}
	public function getdateF()
	{
		return $this->dateF ;
	}
	public function getimagef()
	{
		return $this->imagef ;
	}
}
?>
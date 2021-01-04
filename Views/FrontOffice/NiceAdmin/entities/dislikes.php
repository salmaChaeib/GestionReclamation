<?php

class Dislikes 
{
	private $id_chef ;
	private $user_id ;
 
	function __construct($id_chef,$user_id){
            
			
			$this->id_chef=$id_chef ;
			$this->user_id=$user_id ;
			
	}

	
	function getIdChef(){
		return $this->id_chef;
		
	}
	
	
	function getUser_id(){
		return $this->user_id;
	}
	

	
	
	
	
	
	
	
	function setIdChef ($id_chef)
	{
		$this->id_chef=$id_chef;
	}
	
	

	function setUser_id ($user_id)
	{
		$this->user_id=$user_id;
	}





	
	
	
}





?>

	
	
	
	
	

		
	

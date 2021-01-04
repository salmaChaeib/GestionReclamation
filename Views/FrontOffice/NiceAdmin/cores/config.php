<?php
	class config
	{
		private static $bdd=NULL;
		public static function getConnexion()
		{
			if(!isset($bdd))
			try
			{
				$bdd =new PDO('mysql:host=localhost;dbname=baseprojet;charset=utf8','root','');
			}
			catch(Exception $e)
			{
				die('erreur:'.$e->getMessage());
			}
			return $bdd;
		}
	}

?>
<?php
include('../cores/juryCore.php');


if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['pays'])) 
	{
		$jury= new jury($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pays']);
		$juryCore= new juryCore();
		$juryCore->ajouterjury($jury);
		header('Location: ../view/ajouterjury.html');
		
	}


?>
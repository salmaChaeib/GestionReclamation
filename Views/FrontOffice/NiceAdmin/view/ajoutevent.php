<?php
include('../cores/eventCore.php');


if(isset($_POST['ref']) && isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['choix']) && isset($_POST['dateevent']) 
	&& isset($_POST['image'])) 
	{
		$event= new event($_POST['ref'],$_POST['titre'],$_POST['description'],$_POST['choix'],$_POST['dateevent'],$_POST['image']);
		$eventCore= new eventCore();
		$eventCore->ajouterevent($event);
		header('Location: ../view/ajouter_event.html');
		
	}


?>
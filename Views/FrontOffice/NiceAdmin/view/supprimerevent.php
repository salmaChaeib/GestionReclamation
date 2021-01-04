<?php
include("../cores/eventCore.php");



if(isset($_POST['ref'])) 
{   
	
	$eventCore=new eventCore();
	$eventCore->supprimerevent($_POST['ref']);
	header('Location: ../view/afficherevent.php');
	
}
else
{
echo "ma7abich ifasa5";
}

?>

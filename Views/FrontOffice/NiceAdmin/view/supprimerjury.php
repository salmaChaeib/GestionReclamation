<?php
include("../cores/juryCore.php");



if(isset($_POST['id'])) 
{   
	
	$juryCore=new juryCore();
	$juryCore->supprimerjury($_POST['id']);
	header('Location: ../view/afficherjury.php');
	
}

else
{
echo "ma7abich ifasa5";
}

?>
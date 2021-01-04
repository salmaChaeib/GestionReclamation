<?php


include ("../cores/crudClient.php");

$cc=new crudClient();


$id_client=$_GET['id_client'];


	$cc->desac($cc->conn,$id_client);
header('Location:../view/affichageDesClients.php');


?>
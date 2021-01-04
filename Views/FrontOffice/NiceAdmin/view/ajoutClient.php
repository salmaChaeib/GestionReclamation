<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
/*********************************************************************************************************************/
//1- établir la cnx avec la base de données
//2- récupérer les informations depuis le formulaire
//3- créer un objet chauffeur et l'insérer dans la base [méthode d'insertion dans la base dans la classe chauffeur ]
/*********************************************************************************************************************/
include ("crudClient.php");

$cc=new crudClient(); //cnx déjà établie dans le constructeur de la classe crudChauffeur
//2-récupérer les informations depuis le formulaire et créer un objet chauffeur à insérer

$sexe="";


if (isset($_POST['sexe_client'])){$sexe=$_POST['sexe_client'];} else {$sexe="";};


if (isset($_POST['login']) and isset($_POST['nom_client']) and isset($_POST['prenom_client']) and isset($_POST['mot_passe']) and isset($_POST['email_client']) and isset($_POST['datenaissance_client']) and isset($_POST['tel_client']) and isset($_POST['cin_client']) and isset($_POST['adresse_client']) and isset($_POST['codepostal_client']) and isset($_POST['ville_client']) and isset($_POST['pays_client']))
{
$cl=new Clients($_POST['login'],$_POST['nom_client'],$_POST['prenom_client'],$_POST['mot_passe'],$_POST['email_client'],$sexe,$_POST['datenaissance_client'],$_POST['tel_client'],$_POST['cin_client'],$_POST['adresse_client'],$_POST['codepostal_client'],$_POST['ville_client'],$_POST['pays_client']);	

$cc->insertClient($cl,$cc->conn);
echo "Insertion effectuée avec succès";

}
else{
	echo "Insertion non effectuée ";
}


$id=$_POST['login'];
header('location:afficherChef.php);

?>

</body>
</html>
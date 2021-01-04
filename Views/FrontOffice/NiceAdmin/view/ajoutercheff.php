<?php
include "../entities/chef.php";
include "../cores/crudChef.php";

$cc=new chefC(); //cnx déjà établie dans le constructeur de la classe crudChauffeur
//2-récupérer les informations depuis le formulaire et créer un objet chauffeur à insérer

if (isset($_POST['nom_chef']) and isset($_POST['prenom_chef'])  and isset($_POST['age_chef']) and isset($_POST['domaine_chef']) and isset($_POST['salaire_chef']) and isset($_POST['image']))
{
$cl=new chef($_POST['nom_chef'], $_POST['prenom_chef'], $_POST['age_chef'], $_POST['domaine_chef'], $_POST['salaire_chef'], $_POST['image']); 

$cc->insertChef($cl,$cc->conn);
echo "Insertion effectuée avec succès";
    header('Location:  afficherChef.php');
} else {
    echo "ajout failed";
}










?>
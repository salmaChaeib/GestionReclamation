<?PHP
include "../cores/ReclamationC.php";
$reclamation1C=new ReclamationC();
$reclamation1C->supprimerReclamation($_GET['id']);
header('Location: ../blank.php'); 
?>
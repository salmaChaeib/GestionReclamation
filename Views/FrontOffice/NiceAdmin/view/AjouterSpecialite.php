<?PHP
include "../entities/specialite.php" ;
include "../cores/specialiteC.php" ;
	if (isset($_GET['codeS']) and isset ($_GET['image']) and isset ($_GET['nomS']) and isset($_GET['description']))
{	
$specialite=new specialite($_GET['codeS'],$_GET['image'],$_GET['nomS'],$_GET['description']);
$specialiteC=new specialiteC() ;
$specialiteC->AjouterSpecialite($specialite);
$specialiteC->AfficherSpecialites($specialite);
}
header('location:AfficherSpecialite1.php')


?>
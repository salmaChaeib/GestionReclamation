<?PHP
include "../entities/formation.php" ;
include "../cores/formationC.php" ;

	if (isset($_GET['codeF']) and isset ($_GET['nomS']) and isset($_GET['nomF']) and isset ($_GET['chef']) and isset ($_GET['prix']) and isset ($_GET['description']) and isset ($_GET['dateD']) and isset ($_GET['dateF'])and isset ($_GET['imagef']))
{	


$formation=new formation($_GET['codeF'],$_GET['nomS'],$_GET['nomF'],$_GET['chef'],$_GET['prix'],$_GET['description'],$_GET['dateD'],$_GET['dateF'],$_GET['imagef']);
$formationC=new formationC() ;
$formationC->AjouterFormation($formation);
$formationC->AfficherFormations($formation);
}
header('location:AfficherFormation1.php')


?>
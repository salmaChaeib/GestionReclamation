<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/reclamation.php";
include "../Cores/ReclamationC.php";
if (isset($_GET['Id'])){
	$ReclamationC=new ReclamationC();
    $result=$ReclamationC->recupererReclamation($_GET['Id']);
	foreach($result as $row){
		$Id=$row['Id'];
		$Nom=$row['Nom'];
		$email=$row['email'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>Id</td>
<td><input type="text" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>subject</td>
<td><input type="text" name="subject" value="<?PHP echo $subject ?>"></td>
</tr>
<tr>
<td>message</td>
<td><input type="text" name="message" value="<?PHP echo $message ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="button" name="valider" value="valider"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="Idd" value="<?PHP echo $_GET['Id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Reclamation=new Reclamation($_POST['id'],$_POST['nom'],$_POST['email'],$_POST['subject'],$_POST['message']);
	$ReclamationC->modifierReclamation($Reclamation,$_POST['Id']);
	echo $_POST['Id'];
	header('Location: blank.php');
}
?>
</body>
</HTMl>
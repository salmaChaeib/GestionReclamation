<HTML>
<head>
</head>
<body>
<?PHP
include "../../entities/Product.php";
include "../../core/ProductService.php";
if (isset($_GET['id'])){
	$formationC=new ProductService();
    $result=$formationC->recupererProduct($_GET['id']);
	foreach($result as $row){
    $id=$row['id'];
		$nomS=$row['nom'];
		$description=$row['description'];
    $imageUrl=$row['imageUrl'];
		?>
<form method="POST">
<table>
<caption>Modifier Product</caption>
<tr>
<td>Nom Product</td>
<td><input type="text" name="nom" value="<?PHP echo $nomS ?>"></td>
</tr>
<td>Description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
</tr>
<td>Description</td>
<td><input type="file" name="imageUrl" value="<?PHP echo $imageUrl ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
</table>
</form>
<input type="text" name="id" value="<?PHP echo $id ?>" hidden>
<?PHP
	}
}
if (isset($_POST['modifier'])){  // existe ou non et diff de 0
	$formation=new Product($_POST['nom'],$_POST['description'],$_POST['imageUrl']);
	$formationC->modifierProduct($formation,$id);

	header('Location: afficherProductAdmin.php');
}

?>
</body>
</HTMl>

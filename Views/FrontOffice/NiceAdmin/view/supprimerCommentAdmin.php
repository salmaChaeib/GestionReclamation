<?PHP
include "../cores/CommentService.php";
$commentService=new CommentService();
if (isset($_POST["id"])){
	$commentService->supprimerComment($_POST["id"]);

	header('Location: afficherComment1.php?id=' . $_POST["idComment"]);
}

?>

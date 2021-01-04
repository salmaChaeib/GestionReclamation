<?PHP
include "../Cores/quizC.php";
$quiz1C=new quizC();
$listeQuiz=$quiz1C->AfficherQuiz() ;
?>
<table border="1">
<tr>
<th> ID</th>
<th> score</th>

</tr>

<?PHP
foreach($listeQuiz as $row)
{
	?>
	<tr>
	<td><?PHP echo $row['Id']; ?></td>
	<td><?PHP echo $row['score']; ?></td>
	
	<td><form method="POST" action="supprimerQuiz.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id']; ?>" name="Id">
	</form>
	</td>
	
	<?PHP
}
?>
</table>



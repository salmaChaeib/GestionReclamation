<?PHP
include "../cores/quizC.php";
$quiz1C=new QuizC();
$quiz1C->supprimerQuiz($_GET['id']);
header('Location: ../profile.html'); 
?>
<?PHP
include "../config.php";
class quizC {

    function ajouterQuiz($quiz){
		$sql="insert into quiz (score)values(:score)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $q1=$quiz->getScore();
        
        $req->bindValue(':score',$score);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 	function recupererQuiz(){
		
		$req="SELECT * FROM quiz ";
		$db = config::getConnexion();
		$clt=$db->query($req);
		return $clt->fetchAll();
	}
	
}
 <?php
include('../cores/config.php');
include('../entities/participant.php');

class participantCore
{

 function ajouterparticiper($participant)
    {     
          $id= $participant->getId();
          $nom= $participant->getNom();
          $prenom= $participant->getPrenom();
          $email= $participant->getEmail();
          $pays= $participant->getPays();
          
          $config=new config();
          $bdd = $config->getConnexion();
          $req=$bdd->prepare('INSERT INTO participant(id,nom,prenom,email,pays)VALUES(:id,:nom,:prenom,:email,:pays)');
          $req->execute(array("id"=>$id,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'pays'=>$pays));
    }

     function afficher_return1()
      {
        $config=new config();
        $bdd=$config->getConnexion();

       $response=$bdd->query('SELECT * FROM participant');
        return $response;
      }

   

     function supprimerparticipant($id)

  {     
        $config=new config();
        $bdd=$config->getConnexion();
        $req1=$bdd->prepare('DELETE FROM participant where id=:id');
        $req1->execute(array('id'=>$id));
  }

  function modifierparticipant($ancien_id,$nv_id,$nv_nom,$nv_prenom,$nv_email,$nv_pays)
{   
          $config=new config();
         $bdd=$config->getConnexion();


         $reqq=$bdd->prepare('UPDATE participant SET id=:nv_id,nom=:nv_nom,prenom=:nv_prenom,email=:nv_email,pays=:nv_pays WHERE id=:ancien_id');

         $reqq->execute(array('nv_id'=>$nv_id,'nv_nom'=>$nv_nom,'nv_prenom'=>$nv_prenom,'nv_email'=>$nv_email,'nv_pays'=>$nv_pays,'ancien_id'=>$ancien_id));
   
  }


 }



?>
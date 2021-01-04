<?php
include('../cores/config.php');
include('../entities/jury.php');

class juryCore
{

 function ajouterjury($jury)
    {     
          $id= $jury->getId();
          $nom= $jury->getNom();
          $prenom= $jury->getPrenom();
          $email= $jury->getEmail();
          $pays= $jury->getPays();
          
          $config=new config();
          $bdd = $config->getConnexion();
          $req=$bdd->prepare('INSERT INTO jury(id,nom,prenom,email,pays)VALUES(:id,:nom,:prenom,:email,:pays)');
          $req->execute(array("id"=>$id,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'pays'=>$pays));
    }

     function afficher_return2()
      {
        $config=new config();
        $bdd=$config->getConnexion();

       $response=$bdd->query('SELECT * FROM jury');
        return $response;
      }


       function supprimerjury($id)

  {     
        $config=new config();
        $bdd=$config->getConnexion();
        $req2=$bdd->prepare('DELETE FROM jury where id=:id');
        $req2->execute(array('id'=>$id));
  }

     function modifierjury($ancien_id,$nv_id,$nv_nom,$nv_prenom,$nv_email,$nv_pays)
{   
          $config=new config();
         $bdd=$config->getConnexion();


         $reqq=$bdd->prepare('UPDATE jury SET id=:nv_id,nom=:nv_nom,prenom=:nv_prenom,email=:nv_email,pays=:nv_pays WHERE id=:ancien_id');

         $reqq->execute(array('nv_id'=>$nv_id,'nv_nom'=>$nv_nom,'nv_prenom'=>$nv_prenom,'nv_email'=>$nv_email,'nv_pays'=>$nv_pays,'ancien_id'=>$ancien_id));
   
  }

    }



    ?>
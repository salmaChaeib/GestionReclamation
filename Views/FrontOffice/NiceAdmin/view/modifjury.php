<?php
		include('../cores/juryCore.php');	    
        
        $juryCore = new juryCore();
        $juryCore->modifierjury($_GET['an_id'],$_GET['nv_id'],$_GET['nv_nom'],$_GET['nv_prenom'],$_GET['nv_email'],$_GET['nv_pays']);
        header("location:../view/afficherjury.php");



?>
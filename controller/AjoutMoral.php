<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../model/ManagerPhysique.php';
require_once '../model/Moral.class.php';
$manager = new ManagerMoral();


$error=[];
if(isset($_POST['ajouter'])) {
    if (!is_numeric($_POST['salaire'])) {
        $error['salaire']="Veuilllez remplir correctement ce champ SVP...";
    }
    if(is_numeric($_POST['nomEmpl'])){
        $error['nomEmpl']="Veuilllez remplir correctement ce champ SVP...";
    }

    if (is_numeric($_POST['ninea'])) {
        $error['ninea']="Veuilllez remplir correctement ce champ SVP...";
    }
    if(is_numeric($_POST['rc'])){
        $error['rc']="Veuilllez remplir correctement ce champ SVP...";
    }

    if(is_numeric($_POST['raisonSocial'])){
    $error['raisonSocial']="Veuilllez remplir correctement ce champ SVP...";
    }

    if(is_numeric($_POST['adressEmpl'])){
        $error['adressEmpl']="Veuilllez remplir correctement ce champ SVP...";
    }

  

    if(count($error)>0){
        $error['vide']="";
    }else{
   $moral= new Moral(array(
       'salaire'=>trim($_POST['salaire'], ' '),
       'nomEmpl'=>trim($_POST['nomEmpl'], ' '),
       'ninea'=> trim($_POST['ninea'], ' '),
       'rc'=>trim($_POST['rc'], ' '),
       'raisonSocial'=>trim($_POST['raisonSocial'], ' '),
       'adressEmpl'=>trim($_POST['adressEmpl'], ' ')
   ));
   
      $manager->AddMoral($moral); //Call fucntion Add Client
    

 }
}
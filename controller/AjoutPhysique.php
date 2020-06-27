<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../model/ManagerPhysique.php';
require_once '../model/Physique.class.php';
$manager = new ManagerPhysique();


$error=[];
if(isset($_POST['ajouter'])) {
    if (is_numeric($_POST['prenom'])) {
        $error['pnom']="Veuilllez remplir correctement ce champ SVP...";
    }
    if(is_numeric($_POST['nom'])){
        $error['nom']="Veuilllez remplir correctement ce champ SVP...";
    }

    if (is_numeric($_POST['adress'])) {
        $error['adress']="Veuilllez remplir correctement ce champ SVP...";
    }
    if(is_numeric($_POST['profession'])){
        $error['profession']="Veuilllez remplir correctement ce champ SVP...";
    }

    if(!is_numeric($_POST['telephone'])){
    $error['tel']="Veuilllez remplir correctement ce champ SVP...";
    }
    if ($_POST['telephone'][0]!='7' || ($_POST['telephone'][1]!='0' && $_POST['telephone'][1]!='6' && $_POST['telephone'][1]!='7' && $_POST['telephone'][1]!='8')) {
    # code...
    $error['optel']="Votre numero de telephone doit etre commencé par 70 ou 76 ou 77 ou 78";
    }

    if(is_numeric($_POST['cni'])){
        $error['cni']="Veuilllez remplir correctement ce champ SVP...";
    }

    //Controle de saisie sur le champ de saisie Email
if (!preg_match('#^[a-zA-Z0-9]+[\w.-]*@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', htmlspecialchars($_POST['email'])) )
{
   # code...
   $error['email']=" Votre email est incorrect ou n'est pas valide <br/>";

}
  if(empty($_POST['email'])){
   $error['mail']=" Veuillez remplir ce champ vide <br/>";
      
  }

    if(count($error)>0){
        $error['vide']="";
    }else{
   $physique= new Physique(array(
       'prenom'=>trim($_POST['prenom'], ' '),
       'nom'=>trim($_POST['nom'], ' '),
       'adress'=> trim($_POST['adress'], ' '),
       'email'=>trim($_POST['email'], ' '),
       'telephone'=>trim($_POST['telephone'], ' '),
       'sexe'=>trim($_POST['sexe'], ' '),
       'profession'=> trim($_POST['profession'], ' '),
       'cni'=> trim($_POST['cni'], ' '),
       'idEmployeur'=>trim($_POST['idEmployeur'], ' ')
   ));
   
      $manager->AddPhysique($physique); //Call fucntion Add Client
    

 }
}
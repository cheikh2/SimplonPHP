
<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../model/Manager.php';
require_once '../model/Config.php';

class ManagerMoral extends Manager{


//function d'ajout d'un nouvvel client physique
 public function AddMoral(Moral $moral){
        $req=self::InsertUpdate("INSERT INTO Moral VALUES(?, ?, ?, ?, ?, ?, ? )", 
       array(
        $moral->getIdMoral(), 
        $moral->getSalaire (),
        $moral->getNomEmpl(),
        $moral->getNinea(),
        $moral->getRc (),
        $moral->getRaisonSocial(),
        $moral->getAdressEmpl(),
        ));

        if($req){
            echo '<div class="alert alert-success">Client enregistré avec succés </div>';
        }else{
            echo '<div class="alert alert-danger">Erreur d\'enregistrement du nouvel Client</div>';
        }
    }


}



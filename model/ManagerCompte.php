
<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../model/Manager.php';
require_once '../model/Config.php';

class ManagerCompte extends Manager{


//function d'ajout d'un nouvvel client physique
public function AddCompte(Compte $compte){
      /*  $req=self::InsertUpdate("INSERT INTO Compte VALUES(?, ?, ?, ?, ?, ?, ? )", 
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

//function de liste de tabeau des Medecins
public function ListeMoral(){
    $req=self::FindAll("SELECT idEmployeur, salaire , nomEmpl , ninea , rc, raisonSocial, adressEmpl
    FROM Moral");
    return $req;*/
}

}



<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../model/ManagerMoral.php';
require_once '../entity/Moral.class.php';
$manager = new ManagerMoral();


if (isset($_POST['ajouter'])) {

    $moral = new Moral(array(
        'nomEmpl' => trim($_POST['nomEmpl']),
        'ninea' => trim($_POST['ninea']),
        'rc' => trim($_POST['rc']),
        'raisonSocial' => trim($_POST['raisonSocial']),
        'adressEmpl' => trim($_POST['adressEmpl'])
    ));

    $manager->AddMoral($moral); //Call fucntion Add Client


}

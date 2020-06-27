<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../model/ManagerMoral.php';
require '../model/Moral.class.php';
require_once '../view/header.php';

$manager= new ManagerMoral();

require_once '../controller/AjoutMoral.php';
?>
  <div class="compteform"><h1>CREATION DE CLIENT Moral</h1></div>
    <div class="main">   
  <form  action="" method="POST">	
  <div id="name">

    <h2 class="client" id="client">Infos...client...Moral</h2>
    <div id="part1">
  
	      <span id="missSalaire"></span><br>
				<label for="salairelab"></label>
        <input class="salaire"  type="number" name="salaire" id="salaire"  placeholder="Salaire" required>
        <small> <b> <?php if(!empty($error['salaire'])) echo $error['salaire']?> </b> </small> 


            <span id="missNomEmpl"></span><br>
            <label for="nomEmpl"></label>
            <input class="nomEmpl" type="text" name="nomEmpl" id="nomEmpl" class="form-control" placeholder="Nom de l'employeur" required>
            <small> <b> <?php if(!empty($error['nomEmpl'])) echo $error['nomEmpl']?> </b> </small> 		


                <span id="missNinea"></span><br>
                <label for="ninea"></label>
                <input class="ninea" type="text" name="ninea" id="ninea" class="form-control" placeholder="Ninea" required>
                <small> <b> <?php if(!empty($error['ninea'])) echo $error['ninea']?> </b> </small> 		



                    <span id="missRc"></span><br>
                    <label for="rc"></label>
                    <input class="rc" type="rc" name="rc" id="rc" class="form-control" placeholder="Registre de commerce" required>
                    <small> <b> <?php if(!empty($error['rc'])) echo $error['mail']?> </b> </small> 



                        <span id="missRaisonSocial"></span><br>
                        <label for="raisonSocial"></label>
                        <input class="raisonSocial" type="text" name="raisonSocial" id="raisonSocial" class="form-control" placeholder="Raison Sociale" maxlength="9" minlength="9" required>
                        <small> <b> <?php if(!empty($error['raisonSocial'])) echo $error['raisonSocial']?> </b> </small> <br>


                                <span id="missAdressEmpl"></span><br>
                                <label for="adressEmpl"></label>
                                <input class="adressEmpl" type="text" name="adressEmpl" id="adressEmpl" class="form-control" placeholder="Adresse Employeur" required>
                                <small> <b> <?php if(!empty($error['adressEmpl'])) echo $error['adressEmpl']?> </b> </small> 		

                                    
                                  <div class="butt">
                                  <input class="button" type="submit" name="ajouter" class="btn btn-outline-info my-2 my-sm-0"  value="Ajouter" required>
                                  <input class="btn" type="reset" name="annuler" class="btn btn-outline-danger my-2 my-sm-0"  value="Annuler" required> 	
                                  </div>
                              </div>  
                            </div>
                        </form>
                      </div>
                  </body>
              </html>

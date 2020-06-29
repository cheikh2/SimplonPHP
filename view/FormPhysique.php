<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../model/ManagerPhysique.php';
require '../model/Physique.class.php';
require_once '../view/header.php';

$manager= new ManagerPhysique();

require_once '../controller/AjoutPhysique.php';
?>
  <div class="compteform"><h1>CREATION DE CLIENT</h1></div>
    <div class="main">   
  <form  action="" method="POST">	
  <div id="name">

    <h2 class="client" id="client">Infos_client</h2>
    <div id="part1">
  
	      <span id="missPrenom"></span><br>
				<label for="prenomlab"></label>
        <input class="prenom"  type="text" name="prenom" id="prenom"  placeholder="Prenom du client" required>
        <small> <b> <?php if(!empty($error['pnom'])) echo $error['pnom']?> </b> </small> 


            <span id="missNom"></span><br>
            <label for="nom"></label>
            <input class="nom" type="text" name="nom" id="nom" placeholder="Nom du client" required>
            <small> <b> <?php if(!empty($error['nom'])) echo $error['nom']?> </b> </small> 		


                <span id="missAdress"></span><br>
                <label for="adress"></label>
                <input class="adress" type="text" name="adress" id="adress" placeholder="Adresse du client" required>
                <small> <b> <?php if(!empty($error['adess'])) echo $error['adess']?> </b> </small> 		



                    <span id="missEmail"></span><br>
                    <label for="email"></label>
                    <input class="email" type="email" name="email" id="email" placeholder="Email du client" required>
                    <small> <b> <?php if(!empty($error['email'])) echo $error['email']?> </b> </small> <br>
                    <small> <b> <?php if(!empty($error['mail'])) echo $error['mail']?> </b> </small> 



                        <span id="missTelephone"></span><br>
                        <label for="telephone"></label>
                        <input class="telephone" type="text" name="telephone" id="telephone" placeholder="Telephone  du client" maxlength="9" minlength="9" required>
                        <small> <b> <?php if(!empty($error['tel'])) echo $error['tel']?> </b> </small> <br>
                        <small> <b> <?php if(!empty($error['optel'])) echo $error['optel']?> </b> </small> 

                            <div class="sexe">
                            <label for="sexe">Sexe</label>
                            <input type="radio" name="sexe" id="sexe"  value="Homme" required> Homme
                            <input type="radio" name="sexe" id="sexe"  value="Femme" required> Femme
                            <input type="radio" name="sexe" id="sexe"  value="Autres" required> Autres
                            </div>

                                <span id="missProfession"></span><br>
                                <label for="profession"></label>
                                <input class="profession" type="text" name="profession" id="profession" placeholder="Profession du client" required>
                                <small> <b> <?php if(!empty($error['profession'])) echo $error['profession']?> </b> </small> 		

                                    <span id="missCni"></span><br>
                                    <label for="cni"></label>
                                    <input class="cni" type="text" name="cni" id="" placeholder="CIN du client" required>
                                    <small> <b> <?php if(!empty($error['cni'])) echo $error['cni']?> </b> </small> 		

                                        <span id="missSalaire"></span><br>
				                                <label for="salairelab"></label>
                                        <input class="salaire"  type="number" name="salaire" id="salaire"  placeholder="Salaire" required>
                                        <small> <b> <?php if(!empty($error['salaire'])) echo $error['salaire']?> </b> </small> 

                                        <div class="idEmployeur">
                                            <label for="idempl"></label> 
                                            <select type="text" name="idEmployeur" id="idEmployeur" required>
	                                          <?php 
                                            $man= new Manager();
                                            $pdo= $man->getConnexion();
                                            $req=$pdo->prepare("SELECT * FROM Moral");
                                            $req->execute();
                                            while($employeur=$req->fetch(PDO::FETCH_ASSOC)){;
                                            ?>  
                                            <option value="<?= $employeur['idEmployeur'] ?>"> <?= $employeur['nomEmpl'] ?> </option>
                                            <?php }?>
                                            </select>        
                                        </div>                                     

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
<?php

########******* Coding BY CHEIKH MBOW **********#########

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../model/ManagerCompte.php';
require '../model/Compte.class.php';
require_once '../view/header.php';

$manager= new ManagerCompte();

require_once '../controller/AjoutCompte.php';
?>
  <div class="compteform"><h1>CREATION DE Compte</h1></div>
    <div class="main">   
  <form  action="" method="POST">	
  <div id="name">

        <h2 class="client" id="client">Infos...compte...client</h2>
        <div id="part1">
  

            <span id="missNumAgence"></span><br>
            <label for="nomAgence"></label>
            <input class="nomAgence" type="text" name="nomAgence" id="nomAgence" placeholder="Numero Agence" required>
            <small> <b> <?php if(!empty($error['agence'])) echo $error['agence']?> </b> </small> 


	            <span id="missNumCompte"></span><br>
		        <label for="comptelab"></label>
                <input class="numCompte"  type="text" name="numCompte" id="numCompte"  placeholder="Numero Compte" required>
                <small> <b> <?php if(!empty($error['compte'])) echo $error['compte']?> </b> </small> 		


                    <span id="missRib"></span><br>
                    <label for="rib"></label>
                    <input class="rib" type="text" name="rib" id="rib" placeholder="rib" required>
                    <small> <b> <?php if(!empty($error['rib'])) echo $error['rib']?> </b> </small> 		


                        <label for="idtype">Type compte</label> 
                        <select name="idtype" id="idtype" required>
	                        <?php 
                                $man= new Manager();
                                $pdo= $man->getConnexion();
                                $req=$pdo->prepare("SELECT * FROM TypeCompte");
                                $req->execute();
                                while($type=$req->fetch(PDO::FETCH_ASSOC)){;
                            ?>  
                            <option value="<?= $type['idTypeCompte'] ?>"> <?= $type['libelle'] ?> </option>
                            <?php }?>
                        </select>

                                    <span id="missMontant"></span><br>
                                    <label for="montant"></label>
                                    <input class="montant" type="text" name="montant" id="montant" placeholder="Montant" required>
                                    <small> <b> <?php if(!empty($error['montant'])) echo $error['montant']?> </b> </small> <br>


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
                                                    <input class="cni" ype="text" name="cni" id="" placeholder="CIN du client" required>
                                                    <small> <b> <?php if(!empty($error['cni'])) echo $error['cni']?> </b> </small> 		


                                                <span id="missCni"></span><br>
                                                <label for="id"></label>
                                                <input class="idEmployeur" type="text" name="idEmployeur" id="" placeholder="Id employeur">
                                                <small> <b> <?php if(!empty($error['idemployeur'])) echo $error['idemployeur']?> </b> </small> 

                                            <span id="missSalaire"></span><br>
	                                        <label for="salairelab"></label>
                                            <input class="salaire"  type="number" name="salaire" id="salaire"  placeholder="Salaire" required>
                                            <small> <b> <?php if(!empty($error['salaire'])) echo $error['salaire']?> </b> </small> 


                                        <span id="missNomEmpl"></span><br>
                                        <label for="nomEmpl"></label>
                                        <input class="nomEmpl" type="text" name="nomEmpl" id="nomEmpl" placeholder="Nom de l'employeur" required>
                                        <small> <b> <?php if(!empty($error['nomEmpl'])) echo $error['nomEmpl']?> </b> </small> 		


                                    <span id="missNinea"></span><br>
                                    <label for="ninea"></label>
                                    <input class="ninea" type="text" name="ninea" id="ninea" placeholder="Ninea" required>
                                    <small> <b> <?php if(!empty($error['ninea'])) echo $error['ninea']?> </b> </small> 		


                                <span id="missRc"></span><br>
                                <label for="rc"></label>
                                <input class="rc" type="rc" name="rc" id="rc" placeholder="Registre de commerce" required>
                                <small> <b> <?php if(!empty($error['rc'])) echo $error['mail']?> </b> </small> 


                            <span id="missRaisonSocial"></span><br>
                            <label for="raisonSocial"></label>
                            <input class="raisonSocial" type="text" name="raisonSocial" id="raisonSocial" placeholder="Raison Sociale" maxlength="9" minlength="9" required>
                            <small> <b> <?php if(!empty($error['raisonSocial'])) echo $error['raisonSocial']?> </b> </small> <br>


                        <span id="missAdressEmpl"></span><br>
                        <label for="adressEmpl"></label>
                        <input class="adressEmpl" type="text" name="adressEmpl" id="adressEmpl" placeholder="Adresse Employeur" required>
                        <small> <b> <?php if(!empty($error['adressEmpl'])) echo $error['adressEmpl']?> </b> </small>

                <div class="butt">
                <input class="button" type="submit" name="ajouter" class="btn btn-outline-info my-2 my-sm-0"  value="Ajouter" required>
                <inpu   t class="btn" type="reset" name="annuler" class="btn btn-outline-danger my-2 my-sm-0"  value="Annuler" required> 	
                </div>
                
              </div>  
            </div>
          </form>
        </div>
    </body>
</html>

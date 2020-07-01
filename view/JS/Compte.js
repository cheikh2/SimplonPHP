/**** Fonction pour griser des champs  ****/

function compteStatus(){
    let type = document.getElementById("typeCompte");

    if (type.value == "0") {
        document.getElementById("agio").style.visibility = "hidden";
        document.getElementById("frai").style.visibility = "hidden";
    }
        
    if (type.value =="bloc") {
        document.getElementById("agio").style.visibility = "hidden";
        document.getElementById("frai").style.visibility = "visible";
        document.getElementById("duree").style.visibility = "visible";
    
    }

    if (type.value == "epar"){
        document.getElementById("agio").style.visibility = "hidden";
        document.getElementById("frai").style.visibility = "visible";
        document.getElementById("duree").style.visibility = "hidden";
        document.getElementById("idmo").style.marginTop = "-70px";
        document.getElementById("agio").style.top = "70px";
        document.getElementById("frai").style.top = "100px";
    }
    
    if (type.value == "cour") {
        document.getElementById("agio").style.visibility = "visible";
        document.getElementById("frai").style.visibility = "hidden";
        document.getElementById("duree").style.visibility = "hidden";
        document.getElementById("idmo").style.marginTop = "-70px";
        document.getElementById("agio").style.top = "70px";
    }
    
            
           
        }
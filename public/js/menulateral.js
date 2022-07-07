let perro=document.getElementById("menuperro");
let gato=document.getElementById("menugato");
let ave=document.getElementById("menuave");
let reptil=document.getElementById("menureptil");

let boton=document.getElementById("botonmenu");

let bandera=true;

function launchmenu(){
    if(bandera==true){
        bandera=false;
        perro.setAttribute("class", "sliding-menu2");
        gato.setAttribute("class", "sliding-menu2");
        ave.setAttribute("class", "sliding-menu2");
        reptil.setAttribute("class", "sliding-menu2");
    }
    else{
        if(bandera==false){
            bandera=true;
            perro.setAttribute("class", "sliding-menu1");
            gato.setAttribute("class", "sliding-menu1");
            ave.setAttribute("class", "sliding-menu1");
            reptil.setAttribute("class", "sliding-menu1");
        }
    }
    
}

boton.addEventListener("click", launchmenu);
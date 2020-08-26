
function Password() {
    
    let num = false;let size = false;let pass = 1;
    let caracteres = false;let letra = false;let accept = false;
    
    let password = document.getElementById("contraseña").value;
    let passConfirm = document.getElementById("contraseña2").value;
    
    if(password.length > 8){
        size=true;
        pass++;
        accept = true;
    }
    if(password.match(/[!#$%*&.]/)){
        caracteres = true;
        pass++;
    }
    if(password.match(/[a-z]/)){
        letra=true;
        pass++;
    }
    if(password.match(/[0-9]/)){
        num=true;
        pass++;
    }
    if(accept == false && password == passConfirm ){
       alert( "La contraseña no cumple los requisitos");
    }
    else if(password == passConfirm && size == true && letra==true && caracteres==true ){
        alert("Contraseña aceptada");
    }
    else{
        alert( "Las contraseñas no coinciden");
    }
}

function Tienda(){
    
    let xbox,play,terc,suma,iva=0;
    
    xbox = document.getElementById("xbox").value;
    play = document.getElementById("play").value;
    terc = document.getElementById("switch").value;
    
    if(xbox!=0 || play!=0 || terc!=0){
        iva=iva+(xbox*0.16);
        iva=iva+(play*0.16);
        iva=iva+(terc*0.16);
    }
    
    suma = parseFloat(xbox) + parseFloat(play) + parseFloat(terc) + parseFloat(iva);
    
    document.getElementById("Virtual").innerHTML="<br>Xbox One: $" + xbox+"\nPlaystation 4: $" + play + "\nNintendo Switch: $" + terc + "\nIVA total de productos: $\n" + iva + "<br>Total: $\n" + suma;
}


function Personal(){
    
    let total=0,pc, audifonos,pantalla,teclado,solo, mouse;
    nombre1 = document.getElementById("nombre").value;
    pc = document.getElementById("PC").value;
    audifonos = document.getElementById("Audifonos").value;
    pantalla = document.getElementById("Pantalla").value;
    teclado = document.getElementById("tecla").value;
    mouse = document.getElementById("Pantalla").value; 
    
    total=parseFloat(pc)+parseFloat(audifonos)+parseFloat(pantalla)+parseFloat(teclado)+parseFloat(mouse);

    if (nombre1 == "" ){
        
        alert("Necesitas rellenar todos los campos");
        
    }else{
        
        if(total<13000){
           
           document.getElementById("Personal").innerHTML="<br><br>Hola:\n "+ nombre1 + "<br>Tu presupuesto de: $" + total +"\nes muy poco para poder comprar una computadora gamer:\n" ;
        }else if(total>25000){
                
            document.getElementById("Personal").innerHTML="<br><br>Hola:\n "+ nombre1 + "<br>Tu presupuesto de: $"+ total +"\n es el adecuado para una buena computadora gamer:\n";
        }
    }
}







document.querySelector(".boton").onclick = function () {
    
    var contra = document.querySelector(".password").value; 
    var confirmarContra = document.querySelector(".confirmarPassword").value;
    
    if (contra == "") {
        alert("Necesitas poner una contraseña");
    }
    
    else if(contra != confirmarContra) {
        alert("Password no coincide");
        return false;
    }
    
    else if (contra == confirmarContra) {
            
        alert("Password coincide");
             
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
    
    document.getElementById("Virtual").innerHTML="<br>Xbox One: $" + xbox+"\nPlaystation 4: $" + play + "\nNintendo Switch: $" + terc + "\nIVA: $\n" + iva + "<br>Total: $\n" + suma;

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

    if (nombre1 == "" ) {
        
        alert("Necesitas rellenar todos los campos");
        
    }else{
        
        if(total<13000){
           
           document.getElementById("Personal").innerHTML="<br><br>Hola:\n "+ nombre1 + "<br>Tu presupuesto de: $" + total +"\nes muy poco para poder comprar una computadora gamer:\n" ;
        }else if(total>25000){
                
            document.getElementById("Personal").innerHTML="<br><br>Hola:\n "+ nombre1 + "<br>Tu presupuesto de: $"+ total +"\n es el adecuado para una buena computadora gamer:\n";
        }
        
        
    }
    
    
    
}





document.querySelector(".boton").onclick = function es () {
    
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
    
    if(xbox!=0){
        iva=iva+(xbox*0.16);
        
    }
    if(play!=0){
        iva=iva+(play*0.16);
        
    }
    if(terc!=0){
        iva=iva+(terc*0.16);
        
    }
    suma = parseFloat(xbox) + parseFloat(play) + parseFloat(terc) + parseFloat(iva);
    document.getElementById("Virtual").innerHTML="Xbox One: $" + xbox+"\nPlaystation 4: $" + play + "\nNintendo Switch: $" + terc + "\nIVA: $\n" + iva + "<br>Total: $\n" + suma;

}
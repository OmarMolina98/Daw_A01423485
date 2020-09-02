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

function formulario(){
    
  var nombre = document.getElementById("nombre").value;
  var fecha = document.getElementById("Fecha").value;
  var hotel = document.getElementById("hotel").value;
  var personas = document.getElementById("personas").value;

  
	if(nombre != "" && fecha != "" && hotel != ""  && personas != ""){
      alert("Se lleno exitosamente el formulario");

  }else{
  	alert("Llena todo los campos");
  }
}
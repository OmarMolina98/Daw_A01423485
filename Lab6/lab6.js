

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


function ashuda(){
    
    document.getElementById('ayuda').innerHTML = "¡Tranquilo!";
    document.getElementById('correo').innerHTML = "Te dejo mi correo, para que te pongas en contacto: A01423485@itesm.mx";
}

function Desaparecer() {
    
  document.getElementById("ghost").style.visibility = "hidden";

}

function changeColor(obj) {
    
    if (obj.style.color == 'orange') {
               obj.style.color = "#a7e9af";
    } else {
            obj.style.color = 'orange';
    }
}


setTimeout(Timer,1500);

function Timer(){
    
  alert("¡Qué onda espero te guste la página!");
  
}

function scaleUp(obj, size) {
            obj.style.fontSize = size;
        }

function showSix() {
    
    var element = document.getElementById("six");
             
    if(element.style.visibility == "hidden"){
               
     element.style.visibility = "visible";
     
    } 
    else {
            element.style.visibility = "hidden";
    }   
}


function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
    
}




function sumar(){
        
    var num1 = Math.floor((Math.random() * 100) + 1);
    var num2 = Math.floor((Math.random() * 100) + 1);
    document.write("<br/>Primer numero aleatorio"+num1+"<br/>Segundo numero aleatorio"+num2);    
    alert("\nSuma los dos números\n" +"Este es el primer numero random:" + num1 + "\nEste es el segundo numero random:" + num2);
        
    var sumar=num1+num2;
            
    var nombre = parseInt(prompt("Dame el resultado de la suma"));
    if(sumar==nombre){
        
       document.write("</br>El resultado es el correcto");
      
    }else{
         
         document.write("</br>El resultado es el incorrecto:" + nombre);
    }
        
}



function cuadrado(){
    
    document.write("<table border='1px'>");    
    document.write("<tr style=''>");

    var nombre = parseInt(prompt("Dame la cantidad "));

    for(let i=0;i<nombre;i++)
    {
        document.write("<tr>");
        document.write("<td>" + i + "</td>");
        document.write("<td>" + i**2 + "</td>");
        document.write("<td>" + i**3 + "</td>");
        document.write("</tr>");
    }
}

function contadores(){

		var Arreglo =new Array (100);
        var positivos=0, negativos=0, cero = 0;
    
		for(let i = 0; i<100;i++){
            
			Arreglo[i]=Math.floor(Math.random()*200)-100;
            document.write(Arreglo[i] + "\n ");
            
            if(Arreglo[i]>0){
                
				positivos=positivos+1;
                
			}else if(Arreglo[i]<0){
                
				negativos=negativos+1;
                
			}else{
                
				cero=cero+1;
			}
		}
        document.write("<br>")
		document.write("<br> Esta es la cantidad de numeros positivos: " + positivos + "  <br>");
		document.write(" Esta es la cantidad de numeros negativos: " + negativos + " <br>");
		document.write(" Esta es la cantidad de ceros:" + cero + " <br>");

}

function matriz(){
    
    const matrix = [10];
    var Arre =new Array(10);

        for(let i = 0; i<10; i++){
        
       		matrix[i] = new Array(10);
       		Arre[i]=0;
    	}

    	for(let i = 0; i<10; i++){
        
        	for(let j = 0; j<10; j++){
            
            matrix[i][j]=0;
        	}
   		 }

   		for(let i = 0; i<10; i++){
        
        	for(let j = 0; j<10; j++){
            
            matrix[i][j]=Math.floor(Math.random()*10);
        	}

   		 }
   		 for(let i = 0; i<10; i++){
        
        	for(let j = 0; j<10; j++){
            
            document.write(matrix[i][j] + "\n");
        	}
        	document.write("<br>");

   		 }

   		 for(let i = 0; i<10; i++){
        
        	for(let j = 0; j<10; j++){
            
            	Arre[i]=Arre[i]+matrix[i][j];
        	}
        	
   		 }

   		 for(let i=0; i<10;i++){
   		 	Arre[i]/10;
   		 	document.write("promedio del renglon: \n" + (i+1) + ": " + Arre[i]/10 + "<br>");
   		 }
    
}

function orden_inverso(){
    
    let num1 = prompt("Dame el numero para cambiar su orden:");
    
    while(isNaN(num1)){
        
        num1 = prompt("Asegurate ");
    }
    
    num1 = num1 + "";
    alert(num1.split("").reverse("").join(""));
    
}

function Problema_Personal(){
    
    class miClase{
        
        constructor(primero, segundo, name){
            
            this.uno = primero; 
            this.dos = segundo;
            this.nombre = name;
   
        };
        
        miMetodoUno(){
            

            this.uno=edad;
          
            return alert(this.uno);
        };
        
        
        miMetodoDos(parametroUno, parametroDos){
            
            var nombre = prompt("Dame tu nombre:");
            
            var edad = parseInt(prompt("Dame tu edad:"));
          
            alert("El parametro uno es:" + nombre + "\nEl parametro Dos es:" + edad);  
            
            
        };
    };
    
    var objetoUno = new miClase();
    
    
    
    objetoUno.miMetodoDos();
    
}
























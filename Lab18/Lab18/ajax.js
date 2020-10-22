function getRequestObject() {
    
if(window.XMLHttpRequest){

    return(new XMLHttpRequest());
}

else if(window.ActiveXObject){
    
    return(new ActiveXObject("Microsoft.XMLHTTP"));
    
}else{
    
    return(null);
}

}

 function selectValue(){

    var list=document.getElementById("list");
     
    var userInput=document.getElementById("nombre");
     
    var ajaxResponse=document.getElementById("ajaxResponse");
     
    userInput.value=list.options[list.selectedIndex].text;
     
    ajaxResponse.style.visibility="hidden";
     
    userInput.focus();
 }
 
 function sendRequest(){

    request=getRequestObject();
    
    if(request!=null){
        
      var userInput = document.getElementById("nombre");
        
      var url='funciones.php?nombre_original='+userInput.value;
        
      request.open('GET','tablas.php',true);
        
      request.onreadystatechange = 
          
             function() { 
          
                 if((request.readyState==4)){
                     
                     var ajaxResponse=document.getElementById("ajaxResponse");
                     
                     var table = document.getElementById("tableButton");
                     
                     ajaxResponse.innerHTML=request.responseText;
                     
                     table.style.visibility="hidden";
                     
                     ajaxResponse.style.visibility="visible";
                     
                 }     
             };
        
      request.send(null);
    }
 }
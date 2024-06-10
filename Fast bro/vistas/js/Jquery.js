$(document).ready(function(){
    var velocidad=100;
  
    $(document).ready(function() {
       $("#Boton1").click(function() {
           $("#contenido1").toggle(velocidad);
       });
       $("#Boton2").click(function() {
           $("#contenido2").toggle(velocidad);
       });
       $("#Boton3").click(function() {
           $("#contenido3").toggle(velocidad);
       });
       $("#Boton4").click(function() {
           $("#contenido4").toggle(velocidad);
       });
   });
   $("#b_reset").click(function(){location.reload();});
 });

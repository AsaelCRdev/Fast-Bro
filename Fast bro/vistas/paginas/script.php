<link rel="stylesheet" href="vistas/css/style.css">
<link rel="stylesheet" type="text/css" href="vistas/css/modal.css">
<link rel="stylesheet" href="vistas\css\normalize.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type = "text/javascript" src = "jquery.js"> </script> 
<script type = "text/javascript">
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
</script>

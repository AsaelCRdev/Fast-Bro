<?php
require_once "modelos\conexion.php";
$sql= "SELECT * FROM producto";
$resultado= $conexion->query($sql);
if($resultado->num_rows > 0){
  while($row = $resultado->fetch_assoc()){
        $informacion[] = $row;

      }
};

?>
<main class="Comida">
        <h2 class="comida--title">Los mas pedidos</h2>
        <div class="platos">
            <article class="plato">
            <?php foreach ($informacion as $info){
              if ($info['idproducto']==1) {?>
                <img src="vistas\img\Tocino-Burguer.jpg" alt="hamburguesa">
                <h2><?php echo $info['nombre']; ?></h2>
                <button id="Boton1">Ver mas ⬇</button>
                <div id="contenido1" style="display: none;">
                <p>
                  <?php echo $info['descripcion'];?><br>
                  <?php echo $info['precio'];?>$<br>
                </p>
                </div> 
    <?php }}; ?>      
                <div class="plato--info">
                    <button id="myBtn">+</button>
                    <input name="precio" type="hidden" id="precio" value="6">
                    <input name="titulo" type="hidden" id="titulo" value="burguer">
                    <input name="cantidad" type="hidden" id="cantidad" value="1">
                </div>
            </article>
            <article class="plato">
          <?php foreach ($informacion as $info){
            if ($info['idproducto']==2){?>
                <img src="vistas\img\hamburguesa.jpg-1200x788.png" alt="pollo-frito">
                <h2><?php echo $info['nombre'];?></h2>
                <button id="Boton2">Ver mas ⬇</button>
                <div id="contenido2" style="display: none;">
                  <?php echo $info['descripcion'];?><br>
                  <?php echo $info['precio'];?>$<br>
                </div>       
                <?php }}; ?>       
                 <div class="plato--info">
                    <button id="myBtn_2">+</button>
                    <input name="precio" type="hidden" id="precio" value="10.99">
                    <input name="titulo" type="hidden" id="titulo" value="Tocino-burguer">
                    <input name="cantidad" type="hidden" id="cantidad" value="1">
                </div>
            </article>
            <article class="plato">
            <?php foreach ($informacion as $info){
            if ($info['idproducto']==3){?>
                <img src="vistas\img\smash-burguer.jpg" alt="papas-fritas">
                <h2><?php echo $info['nombre'];?></h2>
                <button id="Boton3">Ver mas ⬇</button>
                <div id="contenido3" style="display: none;">
                    <p>
                    <?php echo $info['descripcion'];?><br>
                    <?php echo $info['precio'];?>$<br>
                    </p>
                </div>       
                <?php }}; ?>       
               <div class="plato--info">
                    <button id="myBtn_3">+</button>
                    <input name="precio" type="hidden" id="precio" value="1">
                    <input name="titulo" type="hidden" id="titulo" value="papas">
                    <input name="cantidad" type="hidden" id="cantidad" value="1">
                </div>
            </article>
            <article class="plato">
            <?php foreach ($informacion as $info){
            if ($info['idproducto']==4){?>
                <img src="vistas\img\papas-fritas.png" alt="hamburguesa-grande">
                <h2><?php echo $info['nombre'];?></h2>
                <button id="Boton4">Ver mas ⬇</button>
                <div id="contenido4" style="display: none;">
                    <p>
                    <?php echo $info['descripcion'];?><br>
                    <?php echo $info['precio'];?>$<br>
                    </p>
                </div>
                <?php }}; ?>   
                <div class="plato--info">
                    <button id="myBtn_4">+</button>
                    <input name="precio" type="hidden" id="precio" value="7.99">
                    <input name="titulo" type="hidden" id="titulo" value="smash-burguer">
                    <input name="cantidad" type="hidden" id="cantidad" value="1">
                </div>
            </article>
        </div>
    </main>
<div id="myModal" class="modal">
  <div class="modal-content">
      <span class="close">&times;</span>
      <p>Seleccione la cantidad que desea comprar:</p>
      <button id="myBtn2">+</button>
      <button id="myBtn3">-</button>
  <form action="vistas/paginas/pagar.php" method="post">
      <label for="Tocino_Burguer" id="producto1">Tocino Burguer :</label><br>
      <input type="Number" id="Tocino_Burguer" name="Tocino_Burguer" value="0"><br>
      <label for="Hamburguesa_de_Carne" id="producto2">Hamburguesa de Carne :</label><br>
      <input type="Number" id="Hamburguesa_de_Carne" name="Hamburguesa_de_Carne" value="0"><br>
      <label for="Smash-Burguer" id="producto3">Smash-Burguer :</label><br>
      <input type="Number" id="Smash-Burguer" name="Smash-Burguer" value="0"><br>
      <label for="Papas_Fritas" id="producto4">Papas Fritas :</label><br>
      <input type="Number" id="Papas_Fritas" name="Papas_Fritas" value="0"><br>
      <p id="pedido">El total de productos comprados es : 0 </p>
      <label for="compra" id="total">El total a pagar es :</label><br>
      <input type="Number" id="compra" name="compra" value="0" step="0.1" readonly><br>
      <input type="submit" value="Pagar" id="pagar">
  </form>
  </div>
</div>
<script>
<?php 
  require_once "vistas\js\modal.js";
?>
</script>
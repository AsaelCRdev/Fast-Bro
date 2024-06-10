<?php

require_once "C:/xampp/htdocs/tienda-pruebas/modelos/conexion.php";

// Insertar datos en la base de datos
$tocino_Burguer = $_POST['Tocino_Burguer'];
$hamburguesa_carne = $_POST['Hamburguesa_de_Carne'];
$smash_Burguer = $_POST['Smash-Burguer'];
$papas_fritas = $_POST['Papas_Fritas'];
$total = $_POST['compra'];


$sql = "INSERT INTO pedidos (tocino_burguer, hamburguesa_carne, smash_Burguer, papas_fritas, total) VALUES ('$tocino_Burguer', '$hamburguesa_carne', '$smash_Burguer','$papas_fritas','$total')";

if (empty($tocino_Burguer) && empty($hamburguesa_carne) && empty($smash_Burguer) && empty($papas_fritas)) {
    
    echo'<script>
                alert("Debes pedir Algun producto");
        </script>';
}else{
$sql = "INSERT INTO pedidos (tocino_burguer, hamburguesa_carne, smash_burguer, papas_fritas, total) VALUES (?, ?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->execute([$tocino_Burguer, $hamburguesa_carne, $smash_Burguer, $papas_fritas, $total]);
}

?>


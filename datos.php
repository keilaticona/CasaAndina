<?php
include "conexion.php";
//pedido a la Base de Datos; todos los datos de la tabla producto
$sql = "SELECT * FROM hoteles ORDER BY categoria";

//ejecutar pedido
$resultado = $con->query($sql);

//crear arreglo asociativo
$hoteles = array();
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        //Aquí añadimos cada fila como un item del arreglo asociativo
        $clave=$fila["id"];
        $hoteles[$clave]=array(
        	"nombre" => $fila["nombre"],
        	"marca" => $fila["marca"],
        	"categoria" => $fila["categoria"],
        	"proveedor"=> $fila["proveedor"],
        	"cantidad" => $fila["CANTIDAD"],
        	"preciou" => $fila["preciounitario"],
        	"imagen" => $fila["imagen"],

        	 );

       
    }
} else {
    echo "El pedido no ha devuelto nada";
}
$con->close();
?>
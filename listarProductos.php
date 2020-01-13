<?php

include "conexion.php";
//pedido a la Base de Datos; todos los datos de la tabla producto
$tipo =$_POST["tipo"];

if ($tipo==1) {
    $sql  = "SELECT * FROM hoteles WHERE nombre='CAMARA DIGITAL' ORDER BY nombre";
}elseif ($tipo==2) {
    $sql = "SELECT * FROM hoteles WHERE nombre='TV' ORDER BY nombre";
}elseif ($tipo==3) {
    $sql = "SELECT * FROM hoteles WHERE nombre='CELULAR' ORDER BY nombre";
}else {
    $sql = "SELECT * FROM hoteles ";

}


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
        	
        	"imagen" => $fila["imagen"],

        	 );

       
    }
} else {
    echo "El pedido no ha devuelto nada";
}
$con->close();

    $html ='';   
    foreach($hoteles as $clave => $valor) {
            $html= $html.'
        
            <div class="col-md-4"><br>
            <div class="imagen-logo" >
                <img src="imagenes/logo.jpg" width="28" height="21" > <br> 
            </div>

                <div class="card my-3" style=" width: 30rem; ><br>
                    <div class="card-header p-4"><br>
                        <img src="imagenes/'.$valor["imagen"].'"class="card-img-top" alt="Ripley">      
                    </div>
                    <div class="card-body">
                        
                        <p class="card-text">'.$valor["nombre"].'</p>         <br>          
                    </div>
                    <ul class="list-group list-group-flush">
                                                  
                        
                    </ul>
                    <div class="card-body text-right">
                        <a href="#" class="card-link">Comprar</a>
                    </div>
                    
                </div>
            </div>
            ';
        }
        echo $html;
            ?>
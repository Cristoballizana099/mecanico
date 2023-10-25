<!-- SENTENCIA PARA ELIMINAR DE LA DATABASE por id.-->
<?php 

include("conexion.php");
if(isset($_POST['submit'])){

		$patente =$_POST['idpatentes']; 
        $validar= " SELECT * FROM tablageneral WHERE Idpatente = '$patente'";
		$validacion =$conexion ->query($validar);

		 


		 if ($validacion->num_rows > 0 ){

			?>
            <h3 class = "suceess" style= "color: green;"> datos eliminados con exito!</h3>

            <?php

		mysqli_query($conexion, "DELETE FROM tablageneral where Idpatente = '$patente'");
			
		}
		else{
			?>
                <h3 class = "error" style= "color: red;"> datos inexistentes en nuestra base de datos </h3>
                <?php
	
		}

}
	
 ?>


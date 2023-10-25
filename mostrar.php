<!-- SENTENCIA PARA ELIMINAR DE LA DATABASE por id.-->
<?php 

include("conexion.php");




if(isset($_POST['submit'])){


    $id = $_POST['idpatente'];


    $consulta = "SELECT * FROM tablageneral WHERE Idpatente = '$id'";
    $resultado = $conexion->query($consulta);



    if ($resultado->num_rows > 0){

      foreach($resultado as $fila){
        echo   '<form id="contacts" action="mostrar.php" method="post">';
        echo   '<h3>Informe del Vehículo</h3>';

        echo   '<fieldset>
            <input placeholder="Color del auto" name="Idpatente" type="text" tabindex="4" value='.$fila['Idpatente'].' >
        </fieldset>';
        echo     '<fieldset>
                <input placeholder="Rut" name="rutCliente " type="text" tabindex="1" value='.$fila['rutCliente'].'>
              </fieldset>';
        echo    '<fieldset>
                <input placeholder="Nombre y Apellido" name="NombreApellido " type="text" tabindex="2"value='.$fila['NombreApellido'].' >
              </fieldset>';
        echo   '<fieldset>
                <input placeholder="Modelo de auto"  name="modeloAuto" type="text" tabindex="3"value='.$fila['modeloAuto'].'>
              </fieldset>';
        echo   '<fieldset>
                <input placeholder="Color del auto" name="colorAuto" type="text" tabindex="4"value='.$fila['colorAuto'].' >
              </fieldset>';
        echo  '<fieldset>
                <input placeholder="Descripción de reparación" name="piezaCambiada" type="text" tabindex="5" value='.$fila['piezaCambiada'].'>
              </fieldset>';
        echo  '<fieldset>
                <input placeholder="Pieza cambiada" type="text" name="descripcionReparacion" tabindex="6" value='.$fila['descripcionReparacion'].'>
              </fieldset>';
        echo    '<fieldset>
                <input placeholder="Total" type="text"  name="Total" tabindex="7" value='.$fila['Total'].' >
              </fieldset>';

             


          }

    }else {

      ?>
                <h3 class = "error" style= "color: red;"> no encontramos el Vehículo con esta patente</h3>
                <?php

    }
   
             


  }

    








 ?>


<?php
include("conexion.php");

if(isset($_POST['register'])){

    if(   
                strlen($_POST['idpatentes']) >= 1 && 
                strlen($_POST['RutClientes']) >= 1 && 
                strlen($_POST['NombreApellidos']) >= 1 && 
                strlen($_POST['ModeloAutos'])>= 1 &&
                strlen($_POST['ColorAutos']) >= 1 && 
                strlen($_POST['PiezaCambiadas']) >= 1 &&
                strlen($_POST['Descripcions']) >= 1 && 
                strlen($_POST['totals']) >= 1
            
        ){
            $idpatentes = trim($_POST['idpatentes']);    
            $RutClientes = trim($_POST['RutClientes']);
            $NombreApellidos = trim($_POST['NombreApellidos']);
            $ModeloAutos = trim($_POST['ModeloAutos']);
            $ColorAutos = trim($_POST['ColorAutos']);
            $PiezaCambiadas = trim($_POST['PiezaCambiadas']);
            $Descripcions = trim($_POST['Descripcions']);
            $totals = trim($_POST['totals']);


            $consulta= "INSERT INTO  tablageneral (Idpatente,rutCliente,NombreApellido,modeloAuto
            ,colorAuto,piezaCambiada,descripcionReparacion,Total) VALUES ('$idpatentes','$RutClientes','$NombreApellidos','$ModeloAutos','$ColorAutos','$PiezaCambiadas','$Descripcions','$totals')";


            $resultado=mysqli_query($conexion,$consulta);


            if ($resultado){
                ?>
                <h3 class = "success" style= "color: green;" > registro completado!</h3>
                <?php
            }else{
                ?>
                <h3 class = "error" style= "color: red;"> no pudimos registrar el Vehículo favor verificar datos</h3>
                <?php
            }


    }else{

        ?>

        <h3 class = "error" > ocurrio un error en la conexion.</h3>
        
        <?php
    }
}

?>
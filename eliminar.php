<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/formulario.css">
        <link rel="stylesheet" href="css/footer.css">
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     
        <!-- CSS bootstrap v5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Eliminar</title>
    </head>  
    <body class="bg-light">
      <!-- NAVBAR-->
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light container navbar-main">
      <!--Branding-->
      <div class="navbar-brand">
        <span class="logoNavbar">Mectech</span>
      </div>
      <!--Btn-->
     
      <!--Items-->
     
      <div class="nav ms-auto">
        <a href="index.php" class="nav-link"> Home</a>   
        <a href="index.php" class="nav-link"> Servicios</a>
        <a href="#secContacto" class="nav-link">Contacto</a>


        
      </div>
      </nav>  

      <div class="container"  id="sechome">
        <!--HEADER-->
        <br><br><br><br>
        <header class="row contenedor " >
            
        </header>
        <br><br><br><br>
        <!--SERVICIOS-->
        <section class="row justify-content-around text-center" id="secServicios">
          <!--TITULO-->
            <h2 class="col-12 display-4 text-capitalize mb-3"> 
              Formulario Eliminar Vehículo
            </h2>
          
            <!--FORMULARIO-->

            <div class="container"> 
                <form id="contact"  method="POST">
                  <h3>Eliminar Vehículo</h3>
                  <h4>Ingrese los datos solicitados:</h4>
                  <fieldset>
                    <input placeholder="Patente: xxxxxx" name="idpatentes" type="text" tabindex="2" required maxlength="6" minlength="6">
                  </fieldset>
                  <fieldset>
                    <button name="submit" type="submit" id="id" data-submit="...Sending">Eliminar</button>
                  </fieldset>
                </form>

                <?php include("deleteactividad.php") ?>
                   


              </div>
              
              </div>

            <!--FORMULARIO-->
          

        </section> 

        <br><br><br><br><br><br>

        <!--FOOTER-->
                <footer class="container">
                  <div class="top_header" id="secContacto">
                  <section>
                  <span><i class="fa fa-map-marker"></i></span>
                  <span>Garcia lorca 3120, Maipú</span>
                  </section>
                  <section>
                  <span><i class="fa fa-phone"></i></span>
                  <span>(+56) 950509611</span>
                  </section>
                  <section>
                  <span><i class="fa fa-envelope"></i></span>
                  <span>mectech@gmail.com</span>
                  </section>
                  </div>
                  <span class="border-shape"></span>

                  <div class="copyright">
                  Copyright © 2023 MecTech.cl - All rights reserved 
                  </div>
                  </footer>
   

    

     

      <!-- JS bootstrap-->
      <script> </script>

      <!--JS main-->
      <script src="./js/index.js"></script>

      
      
      
        
      </body>
</html>

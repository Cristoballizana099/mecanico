<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/cartas.css">
        <link rel="stylesheet" href="css/footer.css">
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     
        <!-- CSS bootstrap v5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Home</title>
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
        <a href="#sechome" class="nav-link"> Home</a>   
        <a href="#secServicios" class="nav-link"> Servicios</a>
        <a href="#secContacto" class="nav-link">Contacto</a>


        
      </div>
      </nav>  

      <div class="container"  id="sechome">
        <!--HEADER-->
        <br><br><br><br>
        <header class="row contenedor " >
            <div class=" col-12 col-md-9 ">
              <h1 class="display-2 ">
                <span class="d-block">Bienvenido!</span>
                a MecTech Santiago
              </h1>
            </div>
            <div class="col-12 col-md-3">
              <div class="photo-frame position-relative shadow" >
                  <img src="img/home.jfif" alt="Gina Adams" class="w-100">
              </div>    
            </div>
        </header>
        <br><br><br><br>
        <!--SERVICIOS-->
        <section class="row justify-content-around text-center" id="secServicios">
          <!--TITULO-->
            <h2 class="col-12 display-4 text-capitalize mb-3"> 
              Que necesitas?
            </h2>

          <!--CARTAS-->
          <div class="container  ">
            <div class="flex">
              <div class="card" id="carta4"> 
                <img class="CartasImg" src="img/ingresar.jfif" alt="">
                <div class="card-body">
                  <h3>Ingresar</h3>
                  <p>Solo personal autorizado puede hacer ingreso de información sobre reparación.
                  </p>
                </div>
              </div>
              <div class="card" id="carta5">
                <img class="CartasImg" src="img/eliminar.jfif" alt="">
                <div class="card-body">
                  <h3>Eliminar</h3>
                  <p>Solo personal autorizado puede hacer eliminacion de información sobre reparación.
                  </p>
                </div>
              </div>
              <div class="card" id=carta6>
                <img class="CartasImg" src="img/mostrar.jfif" alt="">
                <div class="card-body">
                  <h3>Información</h3>
                  <p>Ingresa aquí para saber la información sobre la reparación de tu auto.
                  </p>
                </div>
              </div>
             
            </div>
          </div>

        </section> 

        <br><br><br><br><br><br>

        <!--FOOTER-->
          <footer>
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
      </div>

    

     

      <!-- JS bootstrap-->
      <script> </script>

      <!--JS main-->
      <script src="./js/indexx.js"></script>

      
      
      
        
      </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reservas</title>
    <link href="css/app.css" rel="stylesheet">        
        
    </head>
    <body style="background-color: #f5ebe0">

        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <a href="main.page.html" class="logo d-flex align-items-center me-auto -me-lg-0">
                    <h1>Restaurante</h1>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="reservations\edit.blade.php">Modifica tu reserva</a></li>
                        <li><a href="reservations\show.blade.php">Revisa tu reserva</a></li>
                    </ul>
                </nav>
                <a class="btn-reserva" href="reservations/create.blade.php">Nueva reserva</a>
            </div>
        </header>

        <section id="hero" class="hero d-flex align-items-center section-bg">
            <div class="container">
                <div class="row justify-content-between gy-5">
                  <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Disfruta de una comida sana<br>y deliciosa</h2>
                    <div class="d-flex gap-2 col-6 mx-auto" data-aos="fade-up" data-aos-delay="200">
                      <a href="reservations/create.blade.php" class="btn btn-primary btn-lg">HAZ TU RESERVA</a>
                    </div>
                    
  
                    
</div>
                 
                  <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="images\hero-img.png" class="center-img">
                  </div>
        </section>
        
        <main id="main">

            
        </main>


    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Gusti pasta</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head> 

    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <a class="navbar-brand">
      <img src="https://media.istockphoto.com/id/988943478/it/vettoriale/disegno-doodle-di-pasta.jpg?s=1024x1024&w=is&k=20&c=ROufLCNBD5i5dL7RU5G3LCwzZ6-T-L_tW9Un3_FgPpo=" width="24" height="24">
    </a>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pastificio "La Pasta"</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#https://images.emojiterra.com/google/android-12l/512px/1f3e0.png">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php">Menù</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Prezzi</a>
        </li>
      </ul>
      <span class="navbar-text">
        Qualità, bellezza e bontà
      </span>
    </div>
  </div>
</nav>

        <h1>Tipi di pasta</h1>

        <?php
       $classici = array("Burro", "Burro e salvia", "Pomodoro e basilico", "Aglio, olio e peperoncino", "Carbonara");
       $carne = array("Ragù classico", "Pomodoro e salsiccia", "Pomodoro e pancetta");
       $pesce = array("Pomodoro e tonno", "Panna e salmone", "Gamberetti e zucchine", "Pasta allo scoglio", "Cozze e vongole");
       $pesto = array("Pesto alla genovese", "Pesto di verdure", "Pesto di pistacchi", "Pesto di pomodori secchi");
       ?>

        <h2>Classici, carne, pesce, pesto</h2>

       <?php

       echo "CLASSICI <br>";
       foreach($classici as $item)
       {
            echo "$item <br>";
       }

       echo "<br> CARNE <br>";
       foreach($carne as $item)
       {
            echo "$item <br>";
       }

       echo "<br> PESCE <br>";
       foreach($pesce as $item)
       {
            echo "$item <br>";
       }

       echo "<br> PESTO <br>";
       foreach($pesto as $item)
       {
            echo "$item <br>";
       }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

<style>
    h1{
        font-size:40px;
        margin-left: 4cm;
        margin-top: 1cm;
    }

    h2{
        font-size:25px;
        margin-left: 4cm;
        margin-top: 0,1cm;
        font-style: italic;
    }

    body{
        background-image:URL("https://img.freepik.com/free-photo/uncooked-spaghetti-penne-rigatoni-with-copy-space_23-2148360775.jpg");
        background-size:cover;
        }
</style>


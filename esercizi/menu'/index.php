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

        <h1>Sughi per pasta</h1>

        <?php
       $pasta = array(array("Titolo" => "Classici", "Categoria" => "Burro <br> Burro e salvia <br> Pomodoro e basilico <br> Aglio, olio e peperoncino <br> Carbonara"), array("Titolo" => "Carne", "Categoria" => "Ragù classico <br> Pomodoro e salsiccia <br> Pomodoro e pancetta"), array("Titolo" => "Pesce", "Categoria" => "Pomodoro e tonno <br> Panna e salmone <br> Gamberetti e zucchine <br> Pasta allo scoglio <br> Cozze e vongole"), array("Titolo" => "Pesto", "Categoria" => "Pesto alla genovese <br> Pesto di verdure <br> Pesto di pistacchi <br> Pesto di pomodori secchi"));
       ?>

        <h2>Classici, carne, pesce, pesto</h2>
        <hr align="left" size="1" width="700" color="black">

        <table>
          <td>
       <?php
       foreach($pasta as $item)
       {
            echo "<br><h4>$item[Titolo]</h4>";
            echo "<h3>$item[Categoria]</h3>";
       }
        ?>
          </td>

          <td>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" style="width:400px">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/07/PASTA-CON-PESTO-DI-POMODORINI_SITO-4_INTRO.jpg" class="d-block w-100" alt="pasta al pomodoro e basilico">
    </div>
    <div class="carousel-item">
      <img src="https://www.fattoincasadabenedetta.it/wp-content/uploads/2021/04/SITO-.-15-Pasta-con-sugo-di-pesce-spada.jpg" class="d-block w-100" alt="pasta con pesce">
    </div>
    <div class="carousel-item">
      <img src="https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/07/AdobeStock_235021478-1200x900.jpg" class="d-block w-100" alt="pasta con pesto">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </td>
      </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

<style>
    h1{
        font-size:40px;
        margin-left: 7cm;
        margin-top: 1cm;
    }

    h2{
        font-size:25px;
        margin-left: 7cm;
        margin-top: 0,1cm;
        font-style: italic;
    }

    h3{
        font-size:15px;
        margin-left: 4cm;
        font-style: bold;
    }

    h4{
        font-size:20px;
        margin-left: 4cm;
        font-style: italic;
    }

    body{
        background-image:URL("https://img.freepik.com/free-photo/uncooked-spaghetti-penne-rigatoni-with-copy-space_23-2148360775.jpg");
        background-size:cover;
        }
</style>


<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Gusti pasta</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head> 

    <body background="https://img.freepik.com/premium-photo/raw-homemade-pasta-with-ingredients-black-background-top-view_378419-32.jpg?w=900">
        <h1>Tipi di pasta</h1>

        <?php
       $classici = array("Burro", "Burro e salvia", "Pomodoro e basilico", "Aglio, olio e peperoncino", "Carbonara");
       $carne = array("Ragù classico", "Pomodoro e salsiccia", "Pomodoro e pancetta");
       $pesce = array("Pomodoro e tonno", "Panna e salmone", "Gamberetti e zucchine", "Pasta allo scoglio", "Cozze e vongole");
       $pesto = array("Pesto alla genovese", "Pesto di verdure", "Pesto di pistacchi", "Pesto di pomodori secchi");

       echo "Classici, carne, pesce, pesto <br>";

       foreach($classici as $item)
       {
            echo "$item <br>";
       }

       foreach($carne as $item)
       {
            echo "$item <br>";
       }

       foreach($pesce as $item)
       {
            echo "$item <br>";
       }

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
        color: aliceblue;
        font-size:40px;
        margin-left: 2cm;
        margin-top: 1cm;
    }

    .item{
          color: aliceblue;
    }
</style>


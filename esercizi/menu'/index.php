<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Gusti pasta</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head> 

    <body>
        <h1>Tipi di pasta</h1>

        <?php
       $classici = array("pasta con burro", "pasta al pomodoro", "pasta al pomodoro e basilico");
       $ragu = array("ragù classico", "ragù non classico", "ragù strano");
       $pesce = array("pasta con tonno", "pasta con salmone");

       echo "Classici, Ragù, Pesce";

       foreach($classici as $item)
       {
            echo "$item <br>";
       }

       foreach($ragu as $item)
       {
            echo "$item <br>";
       }

       foreach($pesce as $item)
       {
            echo "$item <br>";
       }


        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>


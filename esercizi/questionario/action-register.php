<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Form</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head> 

    <body>
    <div class="container">

        <h1>Risposte del Form</h1>
        <h2>Ciao</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Chiave</th>
                    <th>Valore</ht>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($_GET as $k => $v) {
                    //$v = $v ?: "NULL";
                    echo "<tr> <td> $k </td> <td> $v </td> </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

<style>
    h1{
        font-size:40px;
        text-align: center;
        margin-top: 1cm;
        color:green;
    }

    h2{
        font-size:25px;
        text-align: center;
        margin-top: 0,1cm;
        font-style: italic;
        color:rgb(172, 255, 31);
    }

    body{
        background-color: <?= $_GET['color']?>;
    }
</style>
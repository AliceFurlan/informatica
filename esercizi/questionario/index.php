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

    <h1>Form</h1>
    <h2>Ciao</h2>

    <form action="./action-register.php">
      <label for="fname">Nome:</label><br>
      <input type="text" id="fname" name="fname"><br>

      <label for="lname">Cognome:</label><br>
      <input type="text" id="lname" name="lname"><br>

      <label for="age">Età:</label><br>
      <input type="number" id="age" name="age"><br>
      
      <label for="birthdate">Data di nascita:</label><br>
      <input type="date" id="birthdate" name="birthdate"><br>

      <label for="sport">Sport preferito:</label><br>
      <input type="text" id="sport" name="sport"><br>

      <label for="psw">Password:</label><br>
      <input type="password" id="psw" name="psw"><br>

    <?php
    if($_GET['psw']=='info2023'){

    }
    ?>


    </form>
  </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>



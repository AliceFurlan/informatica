<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Form</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head> 

    <body style="background-image: linear-gradient(to top right, #FFFFFF 0%, #8f00ff 50%, #AACFEF 100%);">
      <div class="container">

    <h1>Form</h1>
    <h2>Inserisci i seguenti dati</h2><br>

  <table>
    <tr>
      <td>
        <form action="/esercizi/questionario/action-register.php">
    <br><label for="fname">Nome:</label>
      <input type="text" id="fname" name="nome"><br><br>

      <label for="lname">Cognome:</label>
      <input type="text" id="lname" name="cognome"><br><br>

      <label for="age">Età:</label>
      <input type="number" id="age" name="eta"><br><br>
      
      <label for="birthdate">Data di nascita:</label>
      <input type="date" id="birthdate" name="data-di-nascita"><br><br>

      <label for="sport">Sport preferito:</label>
      <input type="text" id="sport" name="sport"><br><br>

      <label for="psw">Password:</label>
      <input type="password" id="psw" name="password"><br><br>

      <label for="color">Seleziona il colore della pagina successiva:</label>
      <input type="color" id="color" name="colore"><br><br>

      <input type="hidden" value="info2023" name="hidden">
      <input type="submit" value="invia"><br><br>
    </form>
      </td>

      <td align="right">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://img.freepik.com/premium-photo/purple-yellow-flower-with-yellow-center_931576-33465.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://img.freepik.com/premium-photo/purple-dahlia-autumn-flower_717440-1920.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/premium-photo/purple-dahlia-autumn-flower_717440-1915.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </td>
    </tr>
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
        color:rgb(73, 23, 119);
    }

    h2{
        font-size:25px;
        text-align: center;
        margin-top: 0,1cm;
        font-style: italic;
        color:rgb(119, 17, 208);
    }

    label{
      margin-left: 1cm;
      color:rgb(73, 23, 119);
    }

    input{
      margin-left: 2cm;   
      text-align: center;  
      border-color: rgb(210, 150, 255); 
    }

    form{
      border-radius: 10px;
      background-color: whitesmoke;
      text-align: left;
      margin-right: 5cm;  
    }

    body{
      margin-bottom: 8cm;       
    }
</style>
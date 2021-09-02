<?php

session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';

if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

?>





<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Inregistreaza-te</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="main.css">
  
  <link rel="stylesheet" type="text/css" href="style.css">

<link rel="icon" type="image/png" href="favicon.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" width="190" height="60" alt="Logo Learninro">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="phpfiles/categorii.php">Categorii Aplicatii</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="phpfiles/recomandate.php">Recomandate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="phpfiles/suport.php">Suport tehnic</a>
              </li>
            </ul>
          </div>
        </nav>





      <div id="welcome">

      <h2 style="text-align: center;">Inregistreaza-te pe platforma learninro!</h2>
      <h5 style="text-align: center; padding: 5px;">Invata cum sa folosesti aplicatiile pentru la scoala ca elev sau profesor!</h5>
      
      <img class="homeimg" src="images/pic1.jpg" alt="pic" style="height: 180px;"> 
      


      </div>


      <div class="container" id="register" style=" margin-top:50px; margin-bottom:50px;"> 
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
        <label for="name">Numele Complet:</label>
            <input class="form-control" type="text" name="first_name" placeholder="Nume" pattern="[A-Za-z]{3,}" required="" style="margin-bottom: 10px;">
            <input class="form-control" type="text" name="last_name" placeholder="Prenume"  required="" style="margin-bottom: 10px;">
        <label for="email">Adresa de email:</label>
            <input class="form-control" type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="" style="margin-bottom: 10px;">
        <label for="tel">Numar de telefon:</label>
            <input class="form-control" type="tel" name="phone" placeholder="Nr. telefon (RO)"  pattern="[0-9]{10}" required="" style="margin-bottom: 10px;">
        <label for="password">Parola:</label>
            <input class="form-control" type="password" name="password" placeholder="Parola" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="">
        <small id="emailHelp" class="form-text text-muted">Parola va contine minim 8 caractere, minim o litera mare si una mica si minim o cifra</small>
            <input class="form-control" type="password" name="confirm_password" placeholder="Confirma parola" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" style="margin-bottom: 10px;">
            <div class="send-button">
            <button type="submit" name="signupSubmit" class="btn btn-outline-dark">Inregistrare!</button>
            </div>
        </form>


    </div>
</div>







      


<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Learninro</h5>

        <p>
         Platforma complet gratuita dedicata elevilor si profesorilor dezvoltata de 3 tineri de clasa a 12-a ce-si doresc mentinerea metodelor de e-learning si dupa terminarea pandemiei.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contact</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Parteneri</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-dark" href="">Learninro</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
<?php

session_start();

$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';


if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>


<div>
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>


    <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="main.css">

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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
              <li class="nav-item">
                <li class="nav-item">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $userData['first_name'].' '.$userData['last_name']; ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="profile.php">Profil</a>
                        <a class="logout dropdown-item" href="userAccount.php?logoutSubmit=1"><button type="button" class="btn btn-outline-dark">Deconectare</button></a>
                    </div>
                </div>
                </div>
              </li>
              </li>
            </ul>
          </div>
        </nav>


      <div id="welcome">

      <h2 style="text-align: center;">Bun venit la learninro!</h2>
      <h5 style="text-align: center; padding: 5px;">Invata cum sa folosesti aplicatiile pentru la scoala ca elev sau profesor!</h5>
      <img class="homeimg" src="images/pic1.jpg" alt="pic" style="height: 180px;"> 
      


      </div>

      <h4 style="margin-top:30px; text-align:center; padding: 5px;">Vizualizeaza cele mai apreciate aplicatii de E-learning</h4>

<div class="container">
  <div class="card-carousel" >
    <div class="card" id="1">
      <div class="image-container"></div>
      <p * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-size: 16px;
  }

  p {
    font-size: 16px;
  }> <a href="phpfiles/dojo.php" style="color:black; text-decoration: none;"><b>Dojo Classroom</b> <br>Nou intrați în lumea creșelor sau a grădinițelor? Tine legătura cu profesorii și a afla tot ce trebuie, din viața de zi cu zi pe care cel mic o petrece la creșă sau grădiniță.</a></p>
    </div>
     
     <div class="card" id="2">
      <div class="image-container"></div>
      <p><a href="phpfiles/forms.php" style="color:black; text-decoration: none;"> <b>Forms</b> <br> Google Forms este un software de administrare a sondajelor inclus ca parte a suitei gratuite Google. </a></p>
    </div>

     <div class="card" id="3">
      <div class="image-container"></div>
      <p><a href="phpfiles/googleclassroom.php" style="color:black; text-decoration: none;"> <b>Google Classroom</b> <br> Google Classroom este dezvoltat de Google pentru școli si își propune să simplifice crearea, distribuirea și clasificarea sarcinilor în online.</a></p>
    </div>

     <div class="card" id="4">
      <div class="image-container"></div>
      <p><a href="phpfiles/teams.php" style="color:black; text-decoration: none;"> <b>Microsoft Teams</b> <br>Microsoft Teams este aplicația absolută de mesagerie pentru organizația dumneavoastră – un spațiu de lucru pentru colaborare și comunicare.</a></p>
    </div>

     <div class="card" id="5">
      <div class="image-container"></div>
      <p><a href="phpfiles/zooms.php" style="color:black; text-decoration: none;"> <b>Zoom</b> <br> Zoom oferă servicii de telefonie video și chat online pentru teleconferințe, telecomunicații, educație la distanță și relații sociale. </a></p>
    </div> 

  </div>
  <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
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








    <?php }else{ ?>
        







      <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>learninro</title>
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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
              <li class="nav-item">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalCenter">
                Intra in cont
              </button>
              </li>
              </li>
            </ul>
          </div>
        </nav>





      <div id="welcome">

      <h2 style="text-align: center;">Bun venit la learninro!</h2>
      <h5 style="text-align: center; padding: 5px;">Invata cum sa folosesti aplicatiile pentru la scoala ca elev sau profesor!</h5>
      
      <img class="homeimg" src="images/pic1.jpg" alt="pic" style="height: 180px;"> 
      


      </div>

      <h4 style="margin-top:30px; text-align:center; padding: 5px;">Vizualizeaza cele mai apreciate aplicatii de E-learning</h4>
      <h5 style="text-align: center; padding: 5px;">In aceasta aplicatie poti invata cum iti poti inmbunatati cunostintele pentru scoala online si nu numai.</h5>




      <div class="container" style="margin-bottom: 60px;">
  <div class="card-carousel" >
    <div class="card" id="1">
      <div class="image-container"></div>
      <p * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-size: 16px;
  }

  p {
    font-size: 16px;
  }> <a href="phpfiles/dojo.html" style="color:black; text-decoration: none;"><b>Dojo Classroom</b> <br>Nou intrați în lumea creșelor sau a grădinițelor? Tine legătura cu profesorii și a afla tot ce trebuie, din viața de zi cu zi pe care cel mic o petrece la creșă sau grădiniță.</a></p>
    </div>
     
     <div class="card" id="2">
      <div class="image-container"></div>
      <p><a href="phpfiles/forms.php" style="color:black; text-decoration: none;"> <b>Forms</b> <br> Google Forms este un software de administrare a sondajelor inclus ca parte a suitei gratuite Google. </a></p>
    </div>

     <div class="card" id="3">
      <div class="image-container"></div>
      <p><a href="phpfiles/googleclassroom.php" style="color:black; text-decoration: none;"> <b>Google Classroom</b> <br> Google Classroom este dezvoltat de Google pentru școli si își propune să simplifice crearea, distribuirea și clasificarea sarcinilor în online.</a></p>
    </div>

     <div class="card" id="4">
      <div class="image-container"></div>
      <p><a href="phpfiles/teams.php" style="color:black; text-decoration: none;"> <b>Microsoft Teams</b> <br>Microsoft Teams este aplicația absolută de mesagerie pentru organizația dumneavoastră – un spațiu de lucru pentru colaborare și comunicare.</a></p>
    </div>

     <div class="card" id="5">
      <div class="image-container"></div>
      <p><a href="phpfiles/zooms.php" style="color:black; text-decoration: none;"> <b>Zoom</b> <br> Zoom oferă servicii de telefonie video și chat online pentru teleconferințe, telecomunicații, educație la distanță și relații sociale. </a></p>
    </div> 

  </div>
  <a href="#" class="visuallyhidden card-controller">Carousel controller</a>


<br><br>


  <p>
    <div class="col text-center">
  <a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Intra in contul tau!
  </a>
</div>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div class="container">
          <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

            <form action="userAccount.php" method="post">
            <div class="form-group">
                <label for="email">Introduceti adresa dvs. de mail:</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="exemplu@exemplu.com" required="">
                <small id="emailHelp" class="form-text text-muted">Datele dvs nu ajung in online.</small>
            </div>
            <div class="form-group">
                <label for="password">Introduceti parola contului dvs:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Parola" required="">
            </div>
            <button type="submit" name="loginSubmit" class="btn btn-outline-dark">Conectare</button>
            </form>
            <br>
            <p>Esti nou aici? <a href="registration.php">Creaza un cont!</a></p>
            
        </div>
  </div>
</div>





</div>






<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Intra in contul tau!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
          <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

            <form action="userAccount.php" method="post">
            <div class="form-group">
                <label for="email">Introduceti adresa dvs. de mail:</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="exemplu@exemplu.com" required="">
                <small id="emailHelp" class="form-text text-muted">Datele dvs nu ajung in online.</small>
            </div>
            <div class="form-group">
                <label for="password">Introduceti parola contului dvs:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Parola" required="">
            </div>
            <button type="submit" name="loginSubmit" class="btn btn-outline-dark">Conectare</button>
            </form>
            <br>
            <p>Esti nou aici? <a href="registration.php">Creaza un cont!</a></p>
            
        </div>
      </div>
    </div>
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




    <?php } ?>
    
</div>
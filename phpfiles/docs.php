<?php

session_start();

$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';


if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>



    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include '../user.php';
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

  <title>Google Documents</title>
  <meta name="Bug Hunters" content="Bug Hunters">

 
  <link rel="stylesheet" href="../css/zoom.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
          <a class="navbar-brand" href="../index.php">
            <img src="../images/logo.png" width="190" height="60" alt="Logo Learninro">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categorii.php">Categorii Aplicatii</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recomandate.php">Recomandate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="suport.php">Suport tehnic</a>
              </li>
              <li class="nav-item">
                <li class="nav-item">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $userData['first_name'].' '.$userData['last_name']; ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="../profile.php">Profil</a>
                        <a class="logout dropdown-item" href="../userAccount.php?logoutSubmit=1"><button type="button" class="btn btn-outline-dark">Deconectare</button></a>
                    </div>
                </div>
                </div>
              </li>
              </li>
            </ul>
          </div>
        </nav>
    




  <div class="obj">

  <img class="brandimg" src="../images/docs.png" style="height: 150px;">
  <h1 style="text-align: center;">Google Documents</h1>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Documente Google este un procesor de text inclus ca parte a unei aplicatii web pentru birouri gratuite, oferite de Google ??n cadrul serviciului s??u Disc Google. Acest serviciu include, de asemenea, Foi de calcul Google ??i Prezent??ri Google, respectiv un program de foi de calcul ??i un program de prezentare. Documente Google este disponibil ca aplicatie web, aplica??ie mobil?? pentru Android, iOS, Windows, ??i ca aplica??ie desktop pe Chrome OS. Aplica??ia este compatibil?? cu formatele de fisiere Microsoft Office. 
  <br><a href="https://docs.google.com/document/u/0/" target="_blank">Acceseaza platforma aici.</a> </p>







  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color:#3D94FA;">Info Generale</a>
    </li>
  </ul>



<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


  <!--Content pentru profesori-->
  
<div class="bs-example"> 
<div class="card">
<div class="card-header" id="headingSix">
    <h2 class="mb-0">
        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum se foloseste Google Docs?<br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>                     
    </h2>
</div>
<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
    <div class="card-body">
        <p><br>
        Informatii relevante se regasesc in clipul urmator: <br><br>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/tz4cXWsE5Hs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </p>
        <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
          Inchide
        </a> 
    </div>
</div>
</div>

</div>


</div>


</div>


  </div>


<div class="col text-center">

  <br> <button type="button" id="warbtn" class="btn btn-warning" style="font-size: 20px;"><a href="suport.php" style="color:black; text-decoration: none;">Solicita ajutor!</a></button> 
  
</div>



<!-- Footer -->
<footer class="bg-light text-center text-lg-start" style="margin-top: 50px;">
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
    ?? 2021 Copyright:
    <a class="text-dark" href="">Learninro</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



<script src="../js/googleclassroom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
    


    <?php }else{ ?>
        
      <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Google Documents</title>
  <meta name="Bug Hunters" content="Bug Hunters">

 
  <link rel="stylesheet" href="../css/zoom.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
          <a class="navbar-brand" href="../index.php">
            <img src="../images/logo.png" width="190" height="60" alt="Logo Learninro">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categorii.php">Categorii Aplicatii</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recomandate.php">Recomandate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="suport.php">Suport tehnic</a>
              </li>
            </ul>
          </div>
        </nav>
    





  <img class="brandimg" src="../images/docs.png" style="height: 150px;">
  <h1 style="text-align: center;">Google Documents</h1>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Documente Google este un procesor de text inclus ca parte a unei aplicatii web pentru birouri gratuite, oferite de Google ??n cadrul serviciului s??u Disc Google. Acest serviciu include, de asemenea, Foi de calcul Google ??i Prezent??ri Google, respectiv un program de foi de calcul ??i un program de prezentare. Documente Google este disponibil ca aplicatie web, aplica??ie mobil?? pentru Android, iOS, Windows, ??i ca aplica??ie desktop pe Chrome OS. Aplica??ia este compatibil?? cu formatele de fisiere Microsoft Office. 
  <br><a href="https://docs.google.com/document/u/0/" target="_blank">Acceseaza platforma aici.</a> </p>




  <div class="alert alert-secondary" role="alert" style="text-align:center;">
          Nu esti inregistrat in cont! <br>
          <a href="../registration.php" class="alert-link">Creaza-ti un cont de aici</a>.
        </div>


        



<!-- Footer -->
<footer class="bg-light text-center text-lg-start" style="margin-top: 50px;">
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
    ?? 2021 Copyright:
    <a class="text-dark" href="">Learninro</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



<script src="../js/googleclassroom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>



    <?php } ?>
    
</div>

  









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

  <title>Google Tasks</title>
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

  <img class="brandimg" src="../images/tasks.jpg" style="height: 150px;">
  <h1 style="text-align: center;">Google Tasks</h1>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Aplica??ia le ofer?? utilizatorilor posibilitatea de a-??i nota ??i edita cu u??urin???? activit????ile ??i sarcinile (tasks) pe care le au de f??cut zilnic oric??nd ??i oriunde s-ar afla. Aplica??ia se integreaz?? ??i cu Gmail ??i Google Calendar, astfel ??nc??t utilizatorii s?? poat?? gestiona dintr-un singur loc sarcinile pe care le au de f??cut. Pentru fiecare task notat, ace??tia pot ad??uga, pe l??ng?? data c??nd s?? primeasc?? alert??, ??i detalii despre ce au de f??cut ??i despre progresul realizat pentru ??ndeplinirea sarcinii, iar ??n plus pot ad??uga ??i subsarcini pentru a se putea organiza mai bine.  
  <br><a href="https://jamboard.google.com/" target="_blank">Acceseaza platforma aici.</a> </p>

  


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
        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum se foloseste aceasta aplicatie?<br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>                     
    </h2>
</div>
<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
    <div class="card-body">
        <p><br>
        Pasul 1: deschide??i Google Tasks<br><br>
            Pute??i ad??uga sarcini ??n panoul lateral din Gmail.<br>
            1.	Pe computer, accesa??i Gmail.<br>
            ???	Important: dac?? nu vede??i aplica??ia Tasks, da??i clic pe s??geata din partea dreapt?? jos a ecranului pentru a extinde panoul.<br> 
            2.	??n partea dreapt??, da??i clic pe Tasks  .<br><br>
            Pasul 2: crea??i o sarcin?? sau o list??<br>
        </p>
        <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
          Inchide
        </a> 
    </div>
</div>
</div>
<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Sfaturi de utilizare <br class="br"> <span class="badge badge-dark badgeuri">Important</span></button>									
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <p><br>
                    <b>Modifica??i o sarcin??</b> <br>
                    1.	Pe computer, accesa??i Gmail, Calendar sau un fi??ier din Documente, Foi de calcul sau Prezent??ri Google. <br><br>
                    2.	??n partea dreapt??, da??i clic pe Tasks.<br><br>
                    3.	Da??i clic pe Edita??i   pe sarcina pe care vre??i s?? o modifica??i.<br><br>
                    4.	Modifica??i informa??iile sarcinii. <br><br>
                       ???	Dac?? sarcina pe care dori??i s?? o modifica??i este una repetat??, pentru a modifica data ??i ora sarcinii urm??toare din serie, atinge??i data. Pentru a edita data ??i ora pentru toate sarcinile, da??i clic pe informa??iile despre repetare din partea de jos. 
                    <br><br>5.	Da??i clic pe ??napoi.<br><br>

                    <b>Marca??i o sarcin?? ca finalizat??.</b><br>
                    1.	Pe computer, accesa??i Gmail, Calendar sau un fi??ier din Documente, Foi de calcul sau Prezent??ri Google. <br>
                    2.	??n partea dreapt??, da??i clic pe Tasks.<br>
                    3.	??n st??nga unei sarcini, atinge??i Terminat.<br>

                    <b>??terge??i o sarcin??.</b><br>
                    1.	Pe computer, accesa??i Gmail, Calendar sau un fi??ier din Documente, Foi de calcul sau Prezent??ri Google. <br>
                    2.	??n partea dreapt??, da??i clic pe Tasks.<br>
                    3.	Pe sarcina pe care vre??i s?? o ??terge??i, da??i clic pe Edita??i, ??terge??i.<br><br>

                    Not??: pentru a ??terge o sarcin?? dintr-o serie de sarcini repetate, accesa??i Calendar ??i da??i clic pe sarcina pe care dori??i s?? o ??terge??i, ??terge??i, Aceast?? sarcin??.

                    <b>Reordona??i-v?? sarcinile.</b><br>
                    1.	Pe computer, accesa??i Gmail. <br>
                    2.	??n partea dreapt??, da??i clic pe Tasks. <br>
                    3.	Da??i clic pe o sarcin?? ??i muta??i-o unde vre??i. <br>

                    <b>Sorta??i sarcinile dup?? termenul limit??.</b><br>
                    1.	Pe computer, accesa??i Gmail.<br>
                    2.	??n partea dreapt??, da??i clic pe Tasks.<br>
                    3.	Da??i clic pe Mai multe.<br>
                    4.	Sub ???Sorta??i dup?????, da??i clic pe Dat??.<br>

                    <b>Muta??i o sarcin?? ??n alt?? list??.</b><br>
                    1.	Pe computer, accesa??i Gmail.<br>
                    2.	??n partea dreapt??, da??i clic pe Tasks  .<br>
                    3.	Da??i clic pe sarcina pe care vre??i s?? o muta??i. Apoi, da??i clic pe Edita??i  .<br>
                    4.	Da??i clic pe numele listei.<br>
                    5.	Alege??i o list??.<br>

                    <b>G??si??i sau ascunde??i sarcinile finalizate.</b><br>
                    1.	Pe computer, accesa??i Gmail.<br>
                    2.	??n partea dreapt??, da??i clic pe Tasks.<br>
                    3.	Pentru a vedea sarcinile finalizate, l??ng?? op??iunea ???Finalizate???, da??i clic pe s??geata ??n jos.<br>
                    4.	Pentru a ascunde, da??i clic pe s??geata ??n sus.<br>

                </p> 
                <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Inchide
                </a>   
            </div>
        </div>
    </div>

</div>
</div>


</div>


</div>




  </div>

 

  <div class="col text-center">
  
  <br> <button type="button" id="warbtn" class="btn btn-warning" style="font-size: 20px;"><a href="suport.php" style="color:black; text-decoration: none;">Solicita ajutor!</a></button> 
  <br> <br> 
  
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

  <title>Google Tasks</title>
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
    




  <div class="obj">

  <img class="brandimg" src="../images/tasks.jpg" style="height: 150px;">
  <h1 style="text-align: center;">Google Tasks</h1>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Aplica??ia le ofer?? utilizatorilor posibilitatea de a-??i nota ??i edita cu u??urin???? activit????ile ??i sarcinile (tasks) pe care le au de f??cut zilnic oric??nd ??i oriunde s-ar afla. Aplica??ia se integreaz?? ??i cu Gmail ??i Google Calendar, astfel ??nc??t utilizatorii s?? poat?? gestiona dintr-un singur loc sarcinile pe care le au de f??cut. Pentru fiecare task notat, ace??tia pot ad??uga, pe l??ng?? data c??nd s?? primeasc?? alert??, ??i detalii despre ce au de f??cut ??i despre progresul realizat pentru ??ndeplinirea sarcinii, iar ??n plus pot ad??uga ??i subsarcini pentru a se putea organiza mai bine.  
  <br><a href="https://jamboard.google.com/" target="_blank">Acceseaza platforma aici.</a> </p>

  
  <div class="alert alert-secondary" role="alert" style="text-align:center;">
          Nu esti inregistrat in cont! <br>
          <a href="../registration.php" class="alert-link">Creaza-ti un cont de aici</a>.
</div>



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

  









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

  <title>Microsoft Teams learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="../css/teams.css">

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

  <img class="brandimg" src="../images/teams.jpg" style="height: 150px;">
  <h3 style="text-align: center;">Microsoft Teams</h3>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Microsoft Teams este aplica??ia absolut?? de mesagerie pentru organiza??ia dumneavoastr?? ??? un spa??iu de lucru pentru colaborare ??i comunicare ??n timp real, pentru ??nt??lniri, pentru partaj??ri de fi??iere ??i aplica??ii ??i chiar ??i pentru emotigrame ocazionale! <br> ??ntr-un singur loc, la vedere ??i disponibile pentru to??i.
  <br><a href="https://www.microsoft.com/ro-ro/microsoft-365/microsoft-teams/download-app" target="_blank">Acceseaza platforma aici.</a> </p>





    
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #6D81FE;">Info Profesori</a>
    </li>
  </ul>



<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


  <!--Content pentru profesori-->
  
<div class="bs-example"> 
<div class="card">
<div class="card-header" id="headingSix">
    <h2 class="mb-0">
        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum postam asigment-uri pentru elevi? <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>                     
    </h2>
</div>
<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
    <div class="card-body">
        <p><br>
          <b> Pasul 1:</b><br>
          Naviga??i la canalul general din sala de clas?? dorit??, apoi selecta??i Atribuiri. <br><br> 
          <b> Pasul 2:</b><br>
          Selecta??i Creare > Atribuire. <br>
          <b> Not??:</b> Selecta??i fila Expandare (diagonal??, s??geat?? dubl??) pentru a intra ??n modul ecran complet. <br><br> 
          <img src="../images/teams/asignteams.png"  class="instructionpic" alt="Pasul 1 teams"><br><br> 
          <b> Pasul 3:</b><br>
          Introduce??i un titlu pentru aceast?? tema - este necesar. <br><br> 
          <b> Pasul 4:</b><br>
          Furniza??i mai multe informa??ii pentru tema. <br><br>     
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
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum realizam un test? <br class="br"> <span class="badge badge-dark badgeuri">Important</span></button>									
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <p><br>
                    <b>Pasul 1:</b> <br>
                    ??n Microsoft Teams, selecta??i echipa unei clase ??n care dori??i s?? distribui??i testul. <br><br> 
                    <b> Pasul 2:</b><br>
                    Pe canalul General, selecta??i fila Teme pentru acas??. Selecta??i s??geata pentru meniul derulant Crea??i, apoi selecta??i Test nou. <br><br>
                    <img class="instructionpic" src="../images/teams/test1teams.png" alt="teams"><br><br>  
                    <b> Pasul 3:</b><br>
                    Crea??i un test nou sau selecta??i unul existent. Utiliza??i bara de c??utare dac?? nu vede??i imediat testul pe care ??l c??uta??i.  <br><br> 
                    <b> Nota:</b><br>
                    Dac?? selecta??i + test nou, se va deschide o fereastr?? nou?? de browser web pe dispozitivul dvs. Crea??i-v?? testul ??n Forms, apoi reveni??i la Echipe. Noul test va fi acum disponibil pentru a-l selecta ??i a-i atribui elevilor. <br><br>
                    <img class="instructionpic" src="../images/teams/test2teams.png" alt="teams"><br><br>
                    <b> Pasul 4:</b><br>
                    Dup?? ce selecta??i testul dorit, acesta va ap??rea ??n atribuire sub resurse. Introduce??i restul de set??ri dorite pentru tema respectiv??, apoi selecta??i Alocati.   <br><br>  
                    <img class="instructionpic" src="../images/teams/test3teams.png" alt="teams"><br><br>
                </p> 
                <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Inchide
                </a>   
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum setam un meeting?</button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <p><br>
                    <b>??nt??lniri programate</b><br>
                    Exist?? trei modalit????i diferite de a accesa op??iunile ??nt??lnirii pentru o ??nt??lnire programat??: <br><br>

                    ??n teams, accesa??i calendarul Butonul ??nt??lniri , selecta??i o ??nt??lnire, apoi Op??iuni de ??nt??lnire. <br>
                    ??ntr-o invita??ie la ??nt??lnire, selecta??i Op??iuni de ??nt??lnire. <br>
                    ??n timpul unei ??nt??lniri, selecta??i Afi??a??i participan??ii Pictograma Afi??a??i participan??ii ??n controalele ??nt??lnirii. Apoi, deasupra listei de participan??i, alege??i Gestionare permisiuni Pictograma gestionare participan??i din Microsoft teams .
                    <br><br>

                    <b> ??nt??lniri instantanee</b> <br> 
                    Dup?? ce a??i ??nceput o ??nt??lnire, select??nd ??nt??lnire acum Butonul ??nt??lni??i-v?? acum (fie de pe un canal, fie din calendar): <br><br>

                    Alege??i Afi??a??i participan??ii Pictograma Afi??a??i participan??ii ??n controalele ??nt??lnirii. Ve??i vedea o list?? cu toate persoanele din ??nt??lnire. <br>
                    Deasupra listei, selecta??i Gestionare permisiuni Pictograma gestionare participan??i din Microsoft teams pentru a merge la op??iunile de ??nt??lnire. <br>
                                      </p> 

                    <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
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


  <button type="button" id="warbtn" class="btn btn-warning" style="font-size: 20px;"><a href="suport.php" style="color:black; text-decoration: none;">Solicita ajutor!</a></button> 
  

</div>



<br><br><br>



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

  <title>Microsoft Teams learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="../css/teams.css">

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

  <img class="brandimg" src="../images/teams.jpg" style="height: 150px;">
  <h3 style="text-align: center;">Microsoft Teams</h3>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Microsoft Teams este aplica??ia absolut?? de mesagerie pentru organiza??ia dumneavoastr?? ??? un spa??iu de lucru pentru colaborare ??i comunicare ??n timp real, pentru ??nt??lniri, pentru partaj??ri de fi??iere ??i aplica??ii ??i chiar ??i pentru emotigrame ocazionale! <br> ??ntr-un singur loc, la vedere ??i disponibile pentru to??i.
  <br><a href="https://www.microsoft.com/ro-ro/microsoft-365/microsoft-teams/download-app" target="_blank">Acceseaza platforma aici.</a> </p>



  <div class="alert alert-secondary" role="alert" style="text-align:center;">
          Nu esti inregistrat in cont! <br>
          <a href="../registration.php" class="alert-link">Creaza-ti un cont de aici</a>.
</div>


  </div>







<br><br><br>

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












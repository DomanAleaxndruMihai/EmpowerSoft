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

  <title>Google Forms learninro</title>
  <meta name="demopage" content="demopage">

  <link rel="stylesheet" href="../css/forms.css">

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

    
 



  <img class="brandimg" src="../images/Google_Forms_2020_Logo.svg" style="height: 150px;">
  <h3 style="text-align: center;">Google Forms</h3>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Google Forms este un software de administrare a sondajelor inclus ca parte a suitei gratuite Google Docs Editors, oferită de Google. Serviciul include, de asemenea, Documente Google, Foi de calcul Google, Prezentări Google, Desene Google, Site-uri Google și Google Keep.
  <br><a href="https://docs.google.com/forms/" target="_blank">Acceseaza platforma aici.</a> </p>


  <div class="obj">

    <!--Tabs section-->

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #703DB4;">Info Profesori</a>
        </li>
      </ul>



  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


      <!--Content pentru profesori-->
      
  <div class="bs-example"> 
  <div class="card">
    <div class="card-header" id="headingSix">
        <h2 class="mb-0">
            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum putem crea teme/teste? <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>                     
        </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
        <div class="card-body">
            <p><br>
              <b> Pasul 1:</b><br>
              Intrati in Google Classroom, pe cursul la care vreti sa adaugati tema/test. <br><br> 
              <img src="../images/forms/pas1.jpg"  class="instructionpic" alt="Pasul 1 forms"><br><br> 
              <b> Pasul 2:</b><br>
              Anterior temei/testului, creati un subiect (adica un titlu de lectie/capitol), caruia sa ii asociati tema/testul. <br><br> 
              <img src="../images/forms/pas2.png"  class="instructionpic" alt="Pasul 2 froms"><br><br> 
              <b> Pasul 3:</b><br>
              Creati apoi, din acelasi meniu (Activitate la curs), Tema cu chestionar. <br><br> 
              <img src="../images/forms/pas3.png"  class="instructionpic" alt="Pasul 3 froms"><br><br>    
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
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum completam si cream un chestionar? <br class="br"> <span class="badge badge-dark badgeuri">Important</span></button>									
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p><br>
                        <b>Pasul 1:</b> <br>
                        Completati campurile(Titlu), adaugati fisiere, daca sunt necesare rezolvarii temei, de la Adaugati. <br><br>
                        <img class="instructionpic" src="../images/forms/pas4.png" alt="Pasul 4 froms"><br><br>
                        <b> Pasul 2:</b><br>
                        Creati chestionarul propriu-zis,accesand optiunea Formulare, glisand Importarea Notelor pe ON. <br><br>
                        <img class="instructionpic" src="../images/forms/pas5.png" alt="Pasul 5 froms"><br><br>  
                        <b> Pasul 3:</b><br>
                        Se adauga itemii. Primul item, este de tip raspuns scurt: Numele si prenumele elevului (elevul isi va completa la primirea testului cu numele si prenumele lui). Completarea trebuie sa fie obligatorie, la fel si pentru ceilalti itemi.  <br><br>  
                        <img class="instructionpic" src="../images/forms/pas6.png" alt="Pasul 6 froms"><br><br>
                        <b> Pasul 4:</b><br>
                        Se adauga un nou item, de exemplu, cu raspuns unic; Se acceseaza Cheie de raspuns, pentru a da puncaj itemului si a indica raspunsul corect (elevul nu il va vedea decat dupa finalizarea si trimiterea testului, insa testul va fi corectat automat, iar ulterior completarii testului, elevul va putea vedea nota si raspunsurile corecte/gresite).   <br><br>  
                        <img class="instructionpic" src="../images/forms/pas7.png" alt="Pasul 7 froms"><br><br>
                        Cheia de raspuns: <br>
                        <img class="instructionpic" src="../images/forms/pas8.png" alt="Pasul 8 froms"><br><br>
                        <b> Pasul 5:</b><br>
                        Se alege un alt item de tip selectie multipla si se parcurg pasii ca la itemul anterior: <br>
                        <img class="instructionpic" src="../images/forms/pas9.png" alt="Pasul 9 froms"><br><br>
                        <img class="instructionpic" src="../images/forms/pas10.png" alt="Pasul 10 froms"><br><br>
                        <img class="instructionpic" src="../images/forms/pas11.png" alt="Pasul 11 froms"><br><br>
                        <b> Pasul 6:</b><br>
                        Puteti aduga itemi de tip selectie unica, care cer recunoasterea unei imagini; Pentru a face asta apasati pe caseta pentru imagine. (mijloc sus) <br>
                        <img class="instructionpic" src="../images/forms/pas12.png" alt="Pasul 12 froms"><br><br>
                        <img class="instructionpic" src="../images/forms/pas13.png" alt="Pasul 13 froms"><br><br>
                        <b> Pasul 7:</b><br>
                        Se previzualizeaza formularul (asa il va vedea elevul), de la butonul din dreapta, sus: 
                        <img class="instructionpic" src="../images/forms/pas14.png" alt="Pasul 14 froms"><br><br>
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
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum vizualizam chestionarul?</button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <p><br>
                        <b> Pasul 1:</b><br>
                        Vizualizam si modificam setarile testului, de la butonul din dreapta sus: <br><br>
                        <img class="instructionpic" src="../images/forms/pas15.jpg" alt="Pasul 15 froms"><br><br>

                        <b> Pasul 2:</b><br>
                        Stabilim cursul (in exemplu, 9B T.I.C.), elevii carora le distribuim tema (in exemplu, un student) , numarul de puncte, subiectul (lectia) careia ii atasati tema si termenul limita. Apasati apoi butonul Creati o tema, iar elevii vor vedea tema in fluxurile lor. <br><br>
                        <img class="instructionpic" src="../images/forms/pas16.jpg" alt="Pasul 16 froms"><br><br>  
                        
                        <b> Pasul 3:</b><br>
                        In spatiul de stocare Drive, vedem testul creat si raspunsurile elevilor: <br><br>
                        <img class="instructionpic" src="../images/forms/pas17.png" alt="Pasul 17 froms"><br><br> 
                        <img class="instructionpic" src="../images/forms/pas18.png" alt="Pasul 18 froms"><br><br>  
                        <img class="instructionpic" src="../images/forms/pas19.png" alt="Pasul 19 froms"><br><br>   

                        <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                          Inchide
                        </a> 
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum cream un fisier Exel pentru a vedea rezultatele?</button>                     
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p><br>
                      <b> Pasul 1:</b><br>
                      Creati un fisier Excel pentru a vedea rezultatele, apasand butonul verde din dreapta sus. <br><br> 
                      <img src="../images/forms/pas20.png"  class="instructionpic" alt="Pasul 20 forms"><br><br> 
                      Asa arata fisierul cu rezultatele elevilor: 
                      <img src="../images/forms/pas21.png"  class="instructionpic" alt="Pasul 21 forms"><br><br> 


                      <b> Nota:</b><br>
                      La final, elevului dvs I se vor afisa punctele si raspunsurile corecte
                      <img src="../images/forms/pas22.png"  class="instructionpic" alt="Pasul 22 forms"><br><br> 
                      <img src="../images/forms/pas23.png"  class="instructionpic" alt="Pasul 23 forms"><br><br>  
                        
                      </p>  
                        <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
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

    <button type="button" id="testbtn" class="btn btn-success" style="font-size: 20px;margin-top: 40px; margin-bottom:50px;"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdAssfr0xqH9WQGZ7HGaHCdt_GUxw2alZV2MHvOF4fKhxdi2w/viewform?usp=sf_link" style="color:white; text-decoration: none;" >Testeaza ce ai invatat!</a></button>
 

    <br> <button type="button" id="warbtn" class="btn btn-warning" style="font-size: 20px;"><a href="suport.php" style="color:black; text-decoration: none;">Solicita ajutor!</a></button> 
    

  </div>

  <br><br>


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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="../js/products.js"></script>
</body>

</html>




    <?php }else{ ?>
        
      
      

      <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Google Forms learninro</title>
  <meta name="demopage" content="demopage">

  <link rel="stylesheet" href="../css/forms.css">

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

    
 



  <img class="brandimg" src="../images/Google_Forms_2020_Logo.svg" style="height: 150px;">
  <h3 style="text-align: center;">Google Forms</h3>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Google Forms este un software de administrare a sondajelor inclus ca parte a suitei gratuite Google Docs Editors, oferită de Google. Serviciul include, de asemenea, Documente Google, Foi de calcul Google, Prezentări Google, Desene Google, Site-uri Google și Google Keep.
  <br><a href="https://docs.google.com/forms/" target="_blank">Acceseaza platforma aici.</a> </p>


  <div class="obj">

   
  
<div class="alert alert-secondary" role="alert" style="text-align:center;">
          Nu esti inregistrat in cont! <br>
          <a href="../registration.php" class="alert-link">Creaza-ti un cont de aici</a>.
</div>


  

</div>
  <div class="col text-center">

    <br> <button type="button" id="warbtn" class="btn btn-warning" style="font-size: 20px;"><a href="suport.php" style="color:black; text-decoration: none;">Solicita ajutor!</a></button> 
    

  </div>

  <br><br>


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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="../js/products.js"></script>
</body>

</html>







    <?php } ?>
    
</div>

  
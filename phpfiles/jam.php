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

  <title>Jamboard learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="../css/jams.css">

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

  <img class="brandimg" src="../images/jam.jpg" style="height: 150px;">
  <h3 style="text-align: center;">Jamboard Google</h3>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Începe sau deschide un Google Jamboard în timp ce ești într-un apel video. Un Jamboard este un panou virtual care se poate șterge, în care poți face schimb de idei live cu ceilalți.
  <br><a href="https://jamboard.google.com/" target="_blank">Acceseaza platforma aici.</a> </p>





    
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #F89D28;">Info generale</a>
    </li>
  </ul>



<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


  <!--Content general-->
  
<div class="bs-example"> 
<div class="card">
        <div class="card-header" id="headingFive">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Pagini din Google Jam <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>                     
            </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
                
              
              <p>
  
                Caracteristici despre: <br><br>
  
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#create" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Crearea mai multor table
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#delete" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                 Stergerea complete a unei table
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#zoom" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Apropierea/departarea tablei
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#back" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Adaugarea unui fundal
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#wrt" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Cum scriem pe tabla
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#select" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Cum selectam ce este pe tabla
                </a>
              </p>
  
              <div class="collapse" id="create">
                <div class="card card-body">
                  <h3>Crearea mai multor table</h3>
                  <p> Dupa ce am deschis google jamboard, putem apasa pe butonul de “create frame” (creare tabla) pentru a avea mai multe table. <br></p>
                  <img src="../images/jam/poza1.png" width="50%" alt="Pasul 1 jam">  <p> <br> </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#create" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                </div>
              </div>
  
              
              <div class="collapse" id="delete">
                <div class="card card-body">
                  <h3>Stergerea complete a unei table</h3>
                  <p> Pentru a sterge tot ce ati scris pe table, apasati pe butonul “clear frame” (stergere tabla). <br></p>
                  <img src="../images/jam/poza2.png" width="50%" alt="Pasul 2 jam">  <p> <br> </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#delete" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                </div>
              </div>
  
  
              <div class="collapse" id="zoom">
                <div class="card card-body">
                  <h3>Apropierea/departarea tablei</h3>
                  <p>In cazul in care doriti sa mariti sau sa micsorati table, apasati pe butonul “zoom” (marire) si alegeti setarea pe care o doriti. <br></p>
                  <img src="../images/jam/poza3.png" width="50%" alt="Pasul 3 jam">  <p> <br> </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#zoom" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                </div>
              </div>

              <div class="collapse" id="back">
                <div class="card card-body">
                  <h3>Adaugarea unui fundal</h3>
                  <b> Pasul 1:</b><br>
                  In cazul in care doriti sa adaugati un background (font) tablei, apasati pe butonul “backgroud”.<br><br> 
                  <img src="../images/jam/poza4.png" width="50%" alt="Pasul 4 jam">  <p> <br> </p>

                  <b> Pasul 2:</b><br>
                  Dupa aceea, o sa va apara cateva optiuni de unde puteti sa alegeti ce sa folositi.<br><br> 
                  <img src="../images/jam/poza5.png" width="50%" alt="Pasul 5 jam">  <p> <br> </p>


                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#back" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                </div>
              </div>

              <div class="collapse" id="wrt">
                <div class="card card-body">
                  <h3>Cum scriem pe tabla</h3>
                  <p>Pentru a incepe sa scrieti pe table, apasati pe pictograma de forma unui stilou. De aici va puteti alege cum sa arate scrisul dvs. , dar si ce culori aveti la dispozitie. <br></p>
                  <img src="../images/jam/poza6.png" width="50%" alt="Pasul 6 jam">  <p> <br> </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#wrt" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                </div>
              </div>
  
              <div class="collapse" id="select">
                <div class="card card-body">
                  <h3>Cum selectam ce este pe tabla</h3>
                  <p>Pentru a selecta ce ati scris, apasati pe butonul “select” (selecteaza) ce are forma unui cursor de mouse. <br></p>
                  <img src="../images/jam/poza7.png" width="50%" alt="Pasul 7 jam">  <p> <br> </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#select" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                </div>
              </div>
  
  
            </div>
        </div>


<div class="accordion" id="accordionExample">
    
    
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum adaugam “sticky notes” (biletele)? <br class="br"> <span class="badge badge-dark badgeuri">Important</span></button>									
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <p><br>
                    <b>Pasul 1:</b> <br>
                    Apasati pe butonul “sticky notes” (biletele) <br><br> 
                    <img src="../images/jam/poza9.png" width="50%" alt="Pasul 9 jam">  <p> <br> </p>
                    <b> Pasul 2:</b><br>
                    De aici putem adauga notite de la tastatura folosind diferite culori, dupa placul sau nevoile dvs. <br><br>
                    <img src="../images/jam/poza8.png" width="50%" alt="Pasul 8 jam">  <p> <br> </p>
                    <b> Pasul 3:</b><br>
                    Pentru a adauga notita, apasati pe butonul save (salvare)  <br><br> 
                    <img src="../images/jam/poza11.png" width="50%" alt="Pasul 11 jam">  <p> <br> </p>
                    <b> Pasul 4:</b><br>
                    Pentru a adauga notita in pozitia pe care o doriti, tineti apasat pe ea cu click stanga (de pe mouse) si mutati-o in pozitia dorita. <br><br>  
                    <img src="../images/jam/poza12.png" width="50%" alt="Pasul 12 jam">  <p> <br> </p>
                    <b> Pasul 5:</b><br>
                    Pentru a schimba culoarea, dublica notita sau pentru a o sterge, apasati pe cele 3 punctulete de pe aceasta.<br>
                    Butonul “edit” (editare) va permite sa schimbati culoare<br>
                    Butonul “duplicate” (duplicare) va permite sa multiplicati notita<br>
                    Butonul “delete” (va permite sa stergeti notita)
                     <br><br>  
                    <img src="../images/jam/poza13.png" width="50%" alt="Pasul 13 jam">  <p> <br> </p>
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
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum adaugam imagini?</button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <p><br>
                    
                    <b>Pasul 1:</b> <br>
                    Apasam pe butonul “add image” (adaugare imagine) <br><br> 
                    <img src="../images/jam/poza14.png" width="50%" alt="Pasul 14 jam">  <p> <br> </p>
                    <b> Pasul 2:</b><br>
                    De aici puteti adauga imagini din: <br><br>
                    <img src="../images/jam/poza15.png" width="50%" alt="Pasul 15 jam">  <p> <br> </p>
                    •	Calculatorul dvs (select from your device)<br>
                    •	Din Drive (google drive)<br>
                    •	Din Photos (cloud-ul creat de google pentru poze)<br>
                    •	Direct de pe internet  (Google Image Search)<br>
                    <b> Pasul 3:</b><br>
                    Dupa ce ati ales poza, aceasta va va aparea pe tabla. <br><br> 
                    <img src="../images/jam/poza16.png" width="50%" alt="Pasul 16 jam">  <p> <br> </p>
                    <b> Pasul 4:</b><br>
                    Pentru a mari/ micsora poza, apasati pe coltul din dreapta jos.
                    In cazul in care doritit sa mutate poza, procedati ca la “Notes” (vezi tutorial notite google jamboard)
                    <b> Pasul 5:</b><br>
                    Pentru a roti poza, tineti apasat pe coltul din stanga sus
                     <br><br>  
                    <img src="../images/jam/poza17.png" width="50%" alt="Pasul 17 jam">  <p> <br> </p>
                    <b> Pasul 6:</b><br>
                    Daca doriti sa multiplicati sau sa stergeti poza, apasati pe cele 3 buline din dreapta sus. <br><br> 
                    <img src="../images/jam/poza18.png" width="50%" alt="Pasul 18 jam">  <p> <br><br> </p>
                    Butonul more actions (mai multe actiuni): <br>
                    Acesta se afla in coltul din dreapta sus. <br>
                    Apasandu-l, vor aparea urmatoarele setari: <br>
                    <img src="../images/jam/poza19.png" width="50%" alt="Pasul 19 jam">  <p> <br><br> </p>
                    •	Rename (redenumire) <br>
                    •	Dowload as pdf (descarcati in format pdf)<br>
                    •	Save frame as image (salvati tabla ca imagine)<br>
                    •	Remove (stergeti)<br>
                    •	Make a copy (creati o copie)

                    </p> 

                    <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                      Inchide
                    </a> 
            </div>
        </div>
    </div>

    <div class="card">
            <div class="card-header" id="headingElvn">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseElvn" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum trimitem ce am scris pe table mai multor persoane?</button>									
                </h2>
            </div>
            <div id="collapseElvn" class="collapse" aria-labelledby="headingElvn" data-parent="#accordionExample">
                <div class="card-body">
                    <p>
                    Apasati pe butonul “share” din dreapta sus: <br> 
                    <img src="../images/jam/poza20.png" width="50%" alt="Pasul 20 jam">  <br> 
                    </p>  
                    <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseElvn" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
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
  </div>


  <div class="col text-center">
  
  <br> <button type="button" id="warbtn" class="btn btn-warning" style="font-size: 20px;"><a href="suport.php" style="color:black; text-decoration: none;">Solicita ajutor!</a></button> 
  
</div>



<!-- Footer -->
<footer class="bg-light text-center text-lg-start" style="margin-top: 100px;">
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


 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>






    <?php }else{ ?>
        
      
      <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Jamboard learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="../css/jams.css">

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

  <img class="brandimg" src="../images/jam.jpg" style="height: 150px;">
  <h3 style="text-align: center;">Jamboard Google</h3>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Începe sau deschide un Google Jamboard în timp ce ești într-un apel video. Un Jamboard este un panou virtual care se poate șterge, în care poți face schimb de idei live cu ceilalți.
  <br><a href="https://jamboard.google.com/" target="_blank">Acceseaza platforma aici.</a> </p>



<div class="alert alert-secondary" role="alert" style="text-align:center; ">
          Nu esti inregistrat in cont! <br>
          <a href="../registration.php" class="alert-link">Creaza-ti un cont de aici</a>.
</div>

  </div>






<!-- Footer -->
<footer class="bg-light text-center text-lg-start" style="margin-top: 100px;">
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


 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>






    <?php } ?>
    
</div>

  
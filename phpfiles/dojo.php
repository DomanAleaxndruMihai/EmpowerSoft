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
    
      <title>ClassDojo learninro</title>
      <meta name="demopage" content="demopage">
    
      <link rel="stylesheet" href="../css/products.css">
    
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
  
      
   
  
  
  
    <img class="brandimg" src="../images/dojo.jpg" style="height: 150px;">
    <h3 style="text-align: center;">ClassDojo</h3>
    <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">ClassDojo conecteaza profesorii cu studenții și părinții pentru a crea comunități unite.
    <br><a href="https://www.classdojo.com/" target="_blank">Acceseaza platforma aici.</a> </p>
  
  
    <div class="obj">
  
      <!--Tabs section-->
  
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #149f5c;">Info Profesori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: #149f5c;">Info Elevi</a>
          </li> 
        </ul>
  
  
  
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
  
        <!--Content pentru profesori-->
        
    <div class="bs-example">
    <div class="card">
        <div class="card-header" id="headingFive">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Ce pagini sunt in Dojo Classroom? <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>                     
            </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
                
              
              <p>
  
                Caracteristici despre: <br><br>
  
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#stream" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Classroom
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#classwork" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                Portfolios
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#people" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                Class Story
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#notes" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Messages
                </a>
              </p>
  
              <div class="collapse" id="stream">
                <div class="card card-body">
                  <h3>Pagina Classroom</h3><p>
                  Aici regasiti doua grupe:
                  <ul>
                    <li>Students</li>
                    <li>Groups</li>
                  </ul> <br>
                  La Students adaugati elevi iar la Groups puneti un nume grupului si adaugati cati elevi doriti pentru a face un grup. (Pentru proiecte, pentru teme, etc.)
                          <img src="../images/dojo/dojo7.png"  class="instructionpic" alt="Pasul 7 dojo"><br><br> 
                          Puteti vedea titlul postarii, cine a trimis , sau cine nu a trimis iar in dreapta vedeti toti elevii.
                          <img src="../images/dojo/dojo8.png"  class="instructionpic" alt="Pasul 8 dojo"><br><br> 
                          </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#stream" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                </div>
              </div>
  
              <div class="collapse" id="classwork">
                <div class="card card-body">
                <h3>Portofolio</h3>
                Apăsați pe Create an Activity pentru a crea o tema. 
                <ul>
                    <li>Puneti titlul temei dvs.</li>
                    <li>Adaugati niște instrucțiuni.</li>
                    <li>Selectati tipul de răspuns al elevilor.</li>
                  </ul> <br>
                  *De asemenea puteți schimba cine sa primeasca aceasta tema.
                  <br><br>
                  La "Whole class assigned" o sa primeasca toata clasa,dar puteți face click și să selectați doar elevii doriți. <br><br>
                  <img src="../images/dojo/dojo9.png"  class="instructionpic" alt="Pasul 9 dojo"><br><br> 
                <p>
                </p>
                <a class="btn btn-outline-danger" data-toggle="collapse" href="#classwork" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Inchide
                </a>
                </div>
              </div>
  
  
              <div class="collapse" id="people">
                <div class="card card-body">
                  <h3>Class Story</h3>
                  <p>
                  Aici puteți pune instrucțiuni despre o tema, sau dacă un profesor lipsește, indicații, etc.
                  <br> Puteți selecta și dacă elevii pot sa lăsa comentarii la postarile dvs. <br>
                  De asemenea puteți atașa poze,video-uri sau documente la postare. <br>
                  <img src="../images/dojo/dojo10.png"  class="instructionpic" alt="Pasul 10 dojo"><br><br> 

                </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#people" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                
                </div>
              </div>
  
  
              <div class="collapse" id="notes">
                <div class="card card-body">
                  <h3>Messages</h3>
                  <p>
                  Aici este secțiunea unde puteți vorbi cu părinții elevilor.
                  Faceți click pe un elev iar apoi introduceți numărul părintelui. <br>
                  <img src="../images/dojo/dojo11.png"  class="instructionpic" alt="Pasul 11 dojo"><br><br> 

                </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#notes" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                
                </div>
              </div>
  
  
            </div>
        </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingSix">
          <h2 class="mb-0">
              <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum sa iti creezi un cont de ClassDojo? <br class="br"> <span class="badge badge-dark badgeuri">Important</span></button>                     
          </h2>
      </div>
      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
              <p><br>
              <b> Pasul 1:</b><br>
              Pentru a începe cu ClassDojo ca elev, trebuie să vă înregistrați pentru un cont.<br> 
              <img src="../images/dojo/dojo1.png"  class="instructionpic" alt="Pasul 1 dojo"><br><br> 
              <b>1.</b>Accesați classdojo.com<br>
              <b>2.</b>Alegeți Teacher ca tip de cont.<br>
              <b>3.</b>Completati cerințele.<br>
              <b>4.</b>Apăsați Sign up<br>
                <br><br><b> Pasul 2:</b><br>
                <b>Selectarea scolii dvs.</b> <br><br> 
                Dacă predați într-o scoala, apăsați una dintre variantele afișate sau introduceți numele școlii respective.
                Dacă nu lucrați într-o scoala apăsați: “I don’t teach in school”
                <img src="../images/dojo/dojo2.png"  class="instructionpic" alt="Pasul 2 dojo"><br><br> 
                <br><br><b> Pasul 3:</b><br>
                Cand ați găsit scoala dvs. apăsați pe Join This School. <br><br> 
                <img src="../images/dojo/dojo3.png"  class="instructionpic" alt="Pasul 3 dojo"><br><br> 
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
                      <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum creez o clasa?</button>									
                  </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                      <p><br>
                          <b>Pasul 1:</b> <br>
                          Accesati <b>New class</b>. <br><br>
                          <img src="../images/dojo/dojo4.png"  class="instructionpic" alt="Pasul 4 dojo"><br><br> 
                          <b> Pasul 2:</b><br>
                          Introduceți numele clasei dvs.<br><br> 
                          <b> Pasul 3:</b><br>
                          Selectați clasa ( A-8-A, A-5-A etc). <br><br> 
                          <b> Pasul 4:</b><br>
                          Sharing points:
                          <ul>
                            <li>Distribuiți doar punctele pozitive cu părinții</li>
                            <li>Distribuiți toate punctele cu părinții</li>
                            <li>Nu distribuiți punctele cu părinții</li>
                          </ul>
                          <br><br> 
                          <b> Pasul 5:</b><br>
                          Create Class <br><br> 
                          
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
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum adaug elevi?</button>
                  </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                      <p><br>
                          <b> Pasul 1:</b><br>
                          Apăsați pe Add Students. <br><br>
                          <img src="../images/dojo/dojo5.png"  class="instructionpic" alt="Pasul 5 dojo"><br><br> 
                          <b> Pasul 2:</b><br>
                          Introduceți Prenumele și Numele elevului iar apoi apăsați ADD <br><br>
                          <img src="../images/dojo/dojo6.png"  class="instructionpic" alt="Pasul 6 dojo"><br><br> 
  
                         <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                            Inchide
                          </a> 
                  </div>
              </div>
          </div>
      
      </div>
  </div>
  
  
      </div>
  
  
      <!--Content pentru elevi-->
  
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         
        
        <div class="bs-example">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingTen">
                  <h2 class="mb-0">
                      <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTen" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum sa iti creezi un cont de ClassDojo? <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>									
                  </h2>
              </div>
              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                  <div class="card-body">
                      <p><br>
                      Pentru a începe cu ClassDojo ca elev, trebuie să vă înregistrați pentru un cont. <br><br>
                          <img src="../images/dojo/dojo12.jpg"  class="instructionpic" alt="Pasul 12 dojo"><br><br> 

                          1. Accesați classdojo.com <br>
                          2. Alegeți Student ca tip de cont. <br>
                          3. Alegeți prin ce metoda sa intrați în clasa virtuală în funcție de ce informații va oferă profesorul pentru conectare (Scanner QR / Class Code / Google Account) <br>
                          4. Conectati-va cu metoda aleasă ( în cazul meu Class Code , adică codul primit de la profesor ) <br><br>

                      </p>  
                      <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseTen" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                        Inchide
                      </a>  
                  </div>
              </div>
          </div> 
              <div class="card">
                  <div class="card-header" id="headingEight">
                      <h2 class="mb-0">
                          <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseEight" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Selectarea numelui și caracterului </button>									
                      </h2>
                  </div>
                  <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                          <p><br>
                          Aici veți avea o lista în care sunt toți elevii după numele lor. <br>
                          Tot ce va fi nevoie sa faceți este doar sa va găsiți caracterul și numele în rând cu el și-l selectați. <br> <br>
                          
                          <img src="../images/dojo/dojo14.jpg"  class="instructionpic" alt="Pasul 14 dojo"><br><br>

                          </p>  
                          <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                            Inchide
                          </a>  
                      </div>
                  </div>
              </div> 
              <div class="card">
                <div class="card-header" id="headingNine">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseNine" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Unelte pentru crearea temei</button>									
                    </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><br>
                        <img src="../images/dojo/dojo15.jpg"  class="instructionpic" alt="Pasul 15 dojo"><br><br>
                        Uneltele reprezentate în stânga ne ajuta la modificarea și crearea temei , având un rol pentru: <br>

                        1.	Crearea de figuri<br>
                        2.	Trasarea liniilor<br>
                        3.	Modul stilou , cu care scrim<br>
                        4.	Guma de mestecat , folosită pentru greșeli <br>
                        5.	 “ T “ venind de la text si posibilitatea de schimbare<br>
                        6.	Colorarea anumitor părți din tema  <br>
                        7.	Dând click pe acele săgeți putem modica , dând în urma sau înainte când schimbăm ceva din tema <br><br>

                        </p>  
                        <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                          Inchide
                        </a>  
                    </div>
                </div>
            </div>  
          <div class="card">
            <div class="card-header" id="headingElvn">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseElvn" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum verificam statusul temei?</button>									
                </h2>
            </div>
            <div id="collapseElvn" class="collapse" aria-labelledby="headingElvn" data-parent="#accordionExample">
                <div class="card-body">
                    <p><br>
                      După ce vom termina totul de scris și dorim sa transmitem , vom apasă pe butonul albastru : "Hand In" <br><br>
                      <img src="../images/dojo/dojo16.jpg"  class="instructionpic" alt="Pasul 16 dojo"><br><br>

                      Pentru a vedea ce am terminat ne ducem la , secțiunea : "Portofolio" <br><br>
                      <img src="../images/dojo/dojo17.jpg"  class="instructionpic" alt="Pasul 17 dojo"><br><br>
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

  <title>ClassDojo learninro</title>
  <meta name="demopage" content="demopage">

  <link rel="stylesheet" href="../css/products.css">

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

  




<img class="brandimg" src="../images/dojo.jpg" style="height: 150px;">
<h3 style="text-align: center;">ClassDojo</h3>
<p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">ClassDojo conecteaza profesorii cu studenții și părinții pentru a crea comunități unite.
<br><a href="https://www.classdojo.com/" target="_blank">Acceseaza platforma aici.</a> </p>


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












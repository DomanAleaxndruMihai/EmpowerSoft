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

  <title>Kahoot! learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="../css/khoot.css">

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

  <img class="brandimg" src="../images/kahoot.png" style="height: 250px;">
  <h3 style="text-align: center;">Kahoot!</h3>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Kahoot! este o platformă de învățare bazată pe jocuri utilizată în fiecare zi de milioane de oameni din întreaga lume pentru a descoperi, crea, juca și partaja jocuri de învățare. Face învățarea distractivă și captivanta pentru studenți și profesori, companii, familii și prieteni.
  <br><a href="https://kahoot.com/" target="_blank">Acceseaza platforma aici.</a> </p>
 

    
      <!--Tabs section-->
  
      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #6D81FE;">Info profesori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: #6D81FE;">Info elevi</a>
          </li> 
        </ul>



<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


  <!--Content pentru profesori-->
  
  
<div class="bs-example"> 
<div class="card">
<div class="card-header" id="headingSix">
    <h2 class="mb-0">
        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum sa iti creezi un cont de Kahoot! <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>                     
    </h2>
</div>
<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
    <div class="card-body">
        <p><br>
        Pentru a începe cu Kahoot! ca profesor, trebuie să vă înregistrați pentru un cont.
        Rețineți că studenții nu au nevoie de conturi pentru a juca kahoots.
        <br>
        <ol>
          <li> Accesați kahoot.com și faceți clic pe Sign up.</li>
          <li>Alegeți Teacher ca tip de cont.</li>
          <li>Specificați dacă lucrați într-o școală, mai mare instituția de învățământ sau în administrația școlii.</li>
          <li>Dacă doriți să vă înscrieți cu un e-mail, introduceți adresa dvs. de e-mail și o parolă sigură pe care doriți să o utilizați. Alternativ, vă puteți înregistra cu conturile dvs. Google sau Microsoft existente și utilizați acele acreditări pentru a vă conecta la Kahoot! mai târziu.</li>
          <li>Alegeți un plan: puteți folosi Kahoot! gratuit sau sa faceți upgrade la unul dintre planurile premium de deblocare Puteți decide să faceți upgrade oricând!</li>
          <li>Completați informațiile suplimentare în ecranul de întâmpinare.</li>
          <li>Voila, ești un Kahoot înregistrat! În scurt timp, veți primi un e-mail de bun venit cu câteva sfaturi pentru a începe.</li>
        </ol>
        <img src="../images/kahoot/k3.png"  class="instructionpic" alt="Pasul 1 kahoot"><br><br> 
        <br><br>
        Cand o sa intrați pentru prima data în Kahoot! o sa va apara acest Pop-up. Indicatia noastra este sa il completati.
        <img src="../images/kahoot/k1.png"  class="instructionpic" alt="Pasul 2 kahoot"><br><br>
        <img src="../images/kahoot/k2.png"  class="instructionpic" alt="Pasul 3 kahoot"><br><br>

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
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum ma obisnuiesc cu platforma? <br class="br"> <span class="badge badge-dark badgeuri">Important</span></button>									
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <p><br>
                Pentru a va familiariza cu platforma, prima data faceți click pe “Play Demo Game”
                <img src="../images/kahoot/k2.png"  class="instructionpic" alt="Pasul 3 kahoot"><br><br>   
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
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum creez un kahoot?</button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <p><br>

                <img src="../images/kahoot/k5.png"  class="instructionpic" alt="Pasul 5 kahoot"><br><br>
                Dați click pe butonul albastru Create din dreapta sus.<br><br>
                <img src="../images/kahoot/k6.png"  class="instructionpic" alt="Pasul 6 kahoot"><br><br>
                Apăsați pe “Create a new Kahoot” <br>
                1. Puneți un titlu.<br>
                2. Inserati o imagine, dacă este necesar.<br>
                3. Adaugati răspunsurile.<br>
                4. La fiecare răspuns apare un cerc, selectați cercul la răspunsul corect.<br>
                <img src="../images/kahoot/k7.png"  class="instructionpic" alt="Pasul 7 kahoot"><br><br>
                Pentru a adauga o alta intrebare apăsați pe butonul albastru <b>“Add question”</b> <br><br>
                <img src="../images/kahoot/k8.png"  class="instructionpic" alt="Pasul 8 kahoot"><br><br>
                Aici puteți schimba modul de joc. Aveți sa alegeți dintre Quiz si True or False. <br>
                Pentru a juca celelalte moduri trebuie sa faceți upgrade la contul dvs. de Kahoot! Deși, aveți o saptamana gratis pentru a încerca fiecare mod de joc. <br>
                <img src="../images/kahoot/k9.png"  class="instructionpic" alt="Pasul 9 kahoot"><br><br>
                De aici puteți schimba timpul pe care il au elevii sa raspunda la intrebari. De la minim 5 secunde pana la 4 minute. <br><br>
                <img src="../images/kahoot/k10.png"  class="instructionpic" alt="Pasul 10 kahoot"><br><br>
                Puteți să selectați modul în care primesc participantii punctele.
                <br><br>
                <b>Standard</b> - Primesti punctele în mod normal<br>
                <b>Double Points</b> - Primesti dublul de puncte<br>
                <b>No Points</b> - Fără puncte<br>
                <img src="../images/kahoot/k11.png"  class="instructionpic" alt="Pasul 11 kahoot"><br><br>
                <b>Single Select</b> - Participantii pot alege un singur răspuns. <br>
                <b>Multi-select</b> - Participantii pot alege unul sau mai multe răspunsuri corecte. (Se necesita Upgrade la contul dvs. de Kahoot!) <br><br>
                Pentru a pune un titlu la Kahoot!-ul dvs. și o descriere apăsați aici. <br>
                <img src="../images/kahoot/k12.png"  class="instructionpic" alt="Pasul 12 kahoot"><br><br>


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


<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         
        
         <div class="bs-example">
           <div class="accordion" id="accordionExample">
             <div class="card">
               <div class="card-header" id="headingTen">
                   <h2 class="mb-0">
                       <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTen" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum intri pe Kahoot-ul profesorului? <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>									
                   </h2>
               </div>
               <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                   <div class="card-body">
                       <p><br>
                       Accesezi pagina <a href="https://kahoot.it/">https://kahoot.it/</a> si inserati codul trimis de catre profesor. <br><br>
                       
                <img src="../images/kahoot/k13.png"  class="instructionpic" alt="Pasul 13 kahoot"><br><br>
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
                           <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseEight" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum sa iti creezi un cont de Kahoot! </button>									
                       </h2>
                   </div>
                   <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                       <div class="card-body">
                           <p><br>
                          Pentru a începe cu Kahoot! ca elev, NU trebuie să vă înregistrați pentru un cont. 
                          <br>
                          <ol>
                            <li> Accesați kahoot.com și faceți clic pe Sign up.</li>
                            <li>Alegeți Student ca tip de cont.</li> 
                            <li>Dacă doriți să vă înscrieți cu un e-mail, introduceți adresa dvs. de e-mail și o parolă sigură pe care doriți să o utilizați. Alternativ, vă puteți înregistra cu conturile dvs. Google sau Microsoft existente și utilizați acele acreditări pentru a vă conecta la Kahoot! mai târziu.</li>
                            <li>Alegeți un plan: puteți folosi Kahoot! gratuit sau sa faceți upgrade la unul dintre planurile premium de deblocare Puteți decide să faceți upgrade oricând!</li>
                            <li>Completați informațiile suplimentare în ecranul de întâmpinare.</li>
                            <li>Voila, ești un Kahoot înregistrat! În scurt timp, veți primi un e-mail de bun venit cu câteva sfaturi pentru a începe.</li>
                          </ol>
                          <img src="../images/kahoot/k3.png"  class="instructionpic" alt="Pasul 1 kahoot"><br><br> 
                          <br><br>
                          Cand o sa intrați pentru prima data în Kahoot! o sa va apara acest Pop-up. Indicatia noastra este sa il completati.
                          <img src="../images/kahoot/k1.png"  class="instructionpic" alt="Pasul 2 kahoot"><br><br>
                          <img src="../images/kahoot/k2.png"  class="instructionpic" alt="Pasul 3 kahoot"><br><br>
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
                         <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseNine" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum ma obisnuiesc cu kahoot?</button>									
                     </h2>
                 </div>
                 <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                     <div class="card-body">
                         <p><br>
                         Pentru a va familiariza cu platforma, prima data faceți click pe “Play Demo Game” <br><br>
                        <img src="../images/kahoot/k2.png"  class="instructionpic" alt="Pasul 3 kahoot"><br><br> 
                         </p>  
                         <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
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

<br><br>

<div class="col text-center">
  
  <br> <button type="button" id="warbtn" class="btn btn-warning" style="font-size: 20px;"><a href="suport.php" style="color:black; text-decoration: none;">Solicita ajutor!</a></button> 
  <br> <br> 
  
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

  <title>Kahoot! learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="../css/khoot.css">

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

  <img class="brandimg" src="../images/kahoot.png" style="height: 250px;">
  <h3 style="text-align: center;">Kahoot!</h3>
  <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Kahoot! este o platformă de învățare bazată pe jocuri utilizată în fiecare zi de milioane de oameni din întreaga lume pentru a descoperi, crea, juca și partaja jocuri de învățare. Face învățarea distractivă și captivanta pentru studenți și profesori, companii, familii și prieteni.
  <br><a href="https://kahoot.com/" target="_blank">Acceseaza platforma aici.</a> </p>
 



  <div class="alert alert-secondary" role="alert" style="text-align:center;">
          Nu esti inregistrat in cont! <br>
          <a href="../registration.php" class="alert-link">Creaza-ti un cont de aici</a>.
</div>

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



<script src="../js/googleclassroom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
      

    <?php } ?>
    
</div>

  









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
    
      <title>Google Classroom learninro</title>
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
  
      
   
  
  
  
    <img class="brandimg" src="../images/gclassroom.jpg" style="height: 150px;">
    <h3 style="text-align: center;">Google Classroom</h3>
    <p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Aceasta platforma este un serviciu de gestionare a învățării creat și întreținut de Google. Acesta oferă o metodă rapidă de comunicare (Google Chat), comunicare prin e-mail (Gmail), convorbiri în timp real cu elevii (Google Meet), documente, prezentări și foi de calcul integrate (Disc Google, suita de programe de birou online de la Google), programări inteligente cu Google Calendar și multe altele.
    <br><a href="https://classroom.google.com" target="_blank">Acceseaza platforma aici.</a> </p>
  
  
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
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Ce pagini sunt in Google Classroom? <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>                     
            </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
                
              
              <p>
  
                Caracteristici despre: <br><br>
  
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#stream" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Pagina Stream
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#classwork" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Pagina Classwork
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#people" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Pagina People
                </a>
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#notes" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Pagina Notes
                </a>
              </p>
  
              <div class="collapse" id="stream">
                <div class="card card-body">
                  <h3>Pagina Stream</h3>
                  Aceasta pagina iti ofera posibilitatea sa pui intrebari, sa interactionezi cu elevii si sa postezi teme si raspunsuri. Stream-ul este prima pagina ce se deschide dupa ce ati accesat un curs.<br><br>
                  <img src="../images/classroom/pas14classroom.png" width="50%" alt="Pasul 14 classroom"><br><br> 
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#stream" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                </div>
              </div>
  
              <div class="collapse" id="classwork">
                <div class="card card-body">
                <h3>Pagina classwork</h3>
                
                <p>
                  In aceasta pagina poti accesa toate materialele cursului. In aceasta pot fi create teme, teste sau materiale pentru elevi in timpul orelor. <br>
  
                  <b> Pasul 1:</b><br>
                  Pentru asta va trebuii sa apasati pe butonul “Classwork”. <br><br> 
                  <img src="../images/classroom/pas15classroom.png"  class="instructionpic" alt="Pasul 15 classroom"><br><br> 
  
                  <b> Pasul 2:</b><br>
                  Pentru a creea materile pentru elevi apasati pe butonul “Create”.
                  <br>Pentru mai multe informatii accesati “crearea unei teme”. <br><br> 
                  <img src="../images/classroom/pas16classroom.png"  class="instructionpic" alt="Pasul 16 classroom"><br><br> 
  
                  <b> Pasul 3:</b><br>
                  Pentru a accesa drive-ul apasati pe “Class driver folder”.  <br><br> 
                  <img src="../images/classroom/pas17classroom.png"  class="instructionpic" alt="Pasul 17 classroom"><br><br> 
  
                  <b> Pasul 4:</b><br>
                  Pentru a adauga topice la clasa dvs, apasati butonul “create” iar dupa aceea butonul “topics”.  <br><br> 
                  <img src="../images/classroom/pas18classroom.png"  class="instructionpic" alt="Pasul 18 classroom"><br><br> 
  
                  <b> Pasul 5:</b><br>
                  Pentru a creea un un document pentru elevii dvs, o posibilitate este sa apasati pe butonul “Material”.  <br><br> 
                  <img src="../images/classroom/pas19classroom.png"  class="instructionpic" alt="Pasul 19 classroom"><br><br> 
  
                  <b> Pasul 5:</b><br>
                  Dupa aceea, apasand pe butonul “Topic” veti putea alege subiectul  materialului dvs didactic.  <br><br> 
                  <img src="../images/classroom/pas20classroom.png"  class="instructionpic" alt="Pasul 20 classroom"><br><br> 
  
                </p>
                <a class="btn btn-outline-danger" data-toggle="collapse" href="#classwork" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                  Inchide
                </a>
                </div>
              </div>
  
  
              <div class="collapse" id="people">
                <div class="card card-body">
                  <h3>Pagina People</h3>
                  <p>
                  Aceasta functie iti permite sa comunici cu elevii tai si sa invitii alte cadre didactice sa preadea cu tine.
                  Pentru a accesa aceasta functie, apasati butonul “People”, iar pentru a adauga persoane apasa ti pe persoana cu un plus langa aceasta de la sectiunea “Teachers”.<br><br>
                  <img src="../images/classroom/pas21classroom.png"  class="instructionpic" alt="Pasul 21 classroom"><br><br><br> 
                  Pentru a exclude de la curs sau a interzice anumitor elevi sa faca comentarii: <br><br>
  
                  <b> Pasul 1:</b><br>
                  Se va apasa pe buleta de langa numele elevilor, iar dupa acceea se va apasa pe butonul “actions”.<br><br> 
                  <img src="../images/classroom/pas22classroom.png"  class="instructionpic" alt="Pasul 22 classroom"><br><br> 
  
                  <b> Pasul 2:</b><br>
                  Pentru a trimite un email catre elev sau parintele acestuia, se va apasa pe cele 3 puncte din dreapta numelui, iar dupa accea se va alege persoana catre care se va trimite.<br><br> 
                  <img src="../images/classroom/pas23classroom.png"  class="instructionpic" alt="Pasul 23 classroom"><br><br> 
  
                </p>
                  <a class="btn btn-outline-danger" data-toggle="collapse" href="#people" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                    Inchide
                  </a>
                
                </div>
              </div>
  
  
              <div class="collapse" id="notes">
                <div class="card card-body">
                  <h3>Pagina Stream</h3>
                  <p>
                  Aceasta pagina iti permite sa verfifici notele elevilor. <br><br>
  
                  Pentru a o accesa aceasta functie apasati pe butonul “Notes”.<br><br>
                  <img src="../images/classroom/pas24classroom.png" class="instructionpic" alt="Pasul 24 classroom"><br><br><br> 
                  
                  Pentru a verifica notele, progresul elevilor si media va puteti uita pe tabelul din stanga. <br><br>
                  <img src="../images/classroom/pas25classroom.png" class="instructionpic" alt="Pasul 25 classroom"><br><br><br> 
   
                  Pentru a returna elevilor cee ace au facut, se va apasa pe cel 3 puncte de langa data din acel table.<br><br> 
                  <img src="../images/classroom/pas26classroom.png"  class="instructionpic"alt="Pasul 26 classroom"><br><br> 
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
              <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum notez o tema? <br class="br"> <span class="badge badge-dark badgeuri">Important</span></button>                     
          </h2>
      </div>
      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
              <p><br>
                <b> Pasul 1:</b><br>
                Din pagina “Classwork” se poate accesa munca elevilor dumeavoastra. Acest lucru este posibil prin apasarea pe una dintre teme, iar dupa aceea apasarea butonului “View Assignment”. <br><br> 
                <img src="../images/classroom/pas10classroom.png"  class="instructionpic" alt="Pasul 10 classroom"><br><br> 
                <b> Pasul 2:</b><br>
                Dupa deschiderea noii ferestre web, pentru a gasi statusul elevilor dvs. avand in vedere tema veti apasa pe butonul “All”. <br><br> 
                <img src="../images/classroom/pas11classroom.png"  class="instructionpic" alt="Pasul 11 classroom"><br><br> 
                <b> Pasul 3:</b><br>
                Pentru a verifica tema unui elev, apasa ti pe acesta, iar dupa aceea deschideti fisierul trimis de el. <br><br> 
                <img src="../images/classroom/pas12classroom.png"  class="instructionpic" alt="Pasul 12 classroom"><br><br> 
                <b> Pasul 4:</b><br>
                Pentru a returna tema unui elev, bifati casuta de langa el, iar pentru a le trimite tuturor apasati pe caseta “all students” <br><br> 
                <img src="../images/classroom/pas13classroom.png"  class="instructionpic" alt="Pasul 13 classroom"><br><br> 
                <b> Nota:</b><br>
                Elevii dumneavoastra nu vor putea verifica nota pana cand tema nu este returnata! <br><br> 
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
                      <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum creez o tema? (Assignments)</button>									
                  </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                      <p><br>
                          <b>Pasul 1:</b> <br>
                          Toate temele se vor regasi pe pagina “Classwork”. Pentru a o accesa, apasati dublu click pe aceasta. <br><br>
                          <img class="instructionpic" src="../images/classroom/pas1classom.png" alt="Pasul 1 classroom"><br><br>
                          <b> Pasul 2:</b><br>
                          Se va apasa butonul "Creati" pentru a incepe. <br>
                          Exista cateva tipuri de teme precum cele create prin "Assignments". <br><br>
                          <img class="instructionpic" src="../images/classroom/pasul2classroom.png" alt="Pasul 2 classroom"><br><br>
                          Pentru a crea o tema in assignments se va apasa pe butonul “Create”, iar dupa aceea pe butonul “Assignments”. <br><br> 
                          <b> Pasul 3:</b><br>
                          In plus, pe langa cerita propusa spre rezolvare, se pot atasa documente sau link-uri spre Youtube, documete din propiul dvs calculator sau de pe Google drive din coltul de stanga jos. <br><br>  
                          <img class="instructionpic" src="../images/classroom/pas3classroom.png" alt="Pasul 3 classroom"><br><br>
                          
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
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum postez un test online?</button>
                  </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                      <p><br>
                          <b> Pasul 1:</b><br>
                          Pentru a crea o tema in quiz assignments se va apasa pe butonul “Create”, iar dupa aceea pe butonul “Quiz assignments”. <br><br>
                          <img src="../images/classroom/pas4classroom.png" class="instructionpic" alt="Pasul 4 classroom"><br><br>
  
                          <b> Nota:</b><br>
                          Inainte de a se trimite testul ca trebui sa apasati pe “Blank quiz” si sa se completeze cu datele pe care doriti sa le introduceti.<br><br>
                          <img src="../images/classroom/pas5classroom.png" class="instructionpic" alt="Pasul 5 classroom"><br><br>   
                          <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                            Inchide
                          </a> 
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum adaug materiale de studiu?</button>                     
                  </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                      <p><br>
                        <b> Pasul 1:</b><br>
                        Pentru a crea un Material se va apasa pe butonul “Create”,iar dupa aceea pe butonul “Material”. <br><br> 
                        <img src="../images/classroom/pas6classroom.png"  class="instructionpic" alt="Pasul 6 classroom"><br><br> 
                        <b> Nota:</b><br>
                          Aceasta functie iti permite sa partajezi cu clasa documete, dar acestea nu solicita elevilor fisiere tema. <br>
                          <b> In plus</b>, se pot atasa documente sau link uri spre Youtube, documete din propiul dvs calculator sau de pe Google drive din coltul de stanga jos.<br>
                          <img src="../images/classroom/pas7classroom.png"  class="instructionpic" alt="Pasul 7 classroom"><br><br> 
                          </p>  
                          <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
                            Inchide
                          </a>   
                  </div>
              </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i> Cum reutilizez o tema?</button>                     
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <p><br>
                      Aceasta functie iti permite sa reutilizezi o tema dintr un alt curs de pe google classroom. (Reuse post) <br><br>
                      <b> Pasul 1:</b><br>
                      Pentru a folosia functia Reuse post se va apasa pe butonul “Create”,iar dupa aceea pe butonul “Reuse post”. <br><br> 
                      <img src="../images/classroom/pas8classroom.png"  class="instructionpic" alt="Pasul 8 classroom"><br><br> 
                      <b> Pasul 2:</b><br>
                      Se va alege cursul de la care doresti sa reutilizezi tema. <br><br> 
                      <img src="../images/classroom/pas9classroom.png"  class="instructionpic" alt="Pasul 9 classroom"><br><br> 
                    </p>    
                    <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="true" aria-controls="collapseExample" style="margin-bottom: 3px;">
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
                      <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTen" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Pot sa retrag o tema?  <br class="br"> <span class="badge badge-warning badgeuri">Recomandat</span></button>									
                  </h2>
              </div>
              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                  <div class="card-body">
                      <p><br>
                          Poti retrage o tema pentru a o modifica. Dupa aceasta actiune, profesorul nu mai poate vedea tema trimisa pana cand nu incarcati un nou document si dati "Turn in" sau "Hand in".
                          <br><br>
                          In cazul in care doriti sa retrageti tema dumneavoastra, <b> apasati pe butonul “Unsubmit”</b>. <br><br>
                          <img src="../images/classroom/pas34.png"  class="instructionpic" alt="Pasul 34 classroom"><br><br>
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
                          <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseEight" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum accesez o clasa?</button>									
                      </h2>
                  </div>
                  <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                          <p><br>
                              <b>Pasul 1:</b> <br>
                              Pentru a intra in contul de student, apasati pe imaginea unde scrie “I’m a student”. <br><br>
                              <img src="../images/classroom/pas27classroom.png"  class="instructionpic" alt="Pasul 27 classroom"><br><br> 
                              <b>Pasul 2:</b> <br>
                              Dupa ce ati apasat, o sa va apara clasa unde trebuie sa intrati. Pentru a face asta, dati click pe butonul “join”. <br><br>
                              <img src="../images/classroom/pas28.png"  class="instructionpic" alt="Pasul 28 classroom"><br><br>  
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
                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseNine" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum accesez temele?</button>									
                    </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><br>
                            <b>Pasul 1:</b> <br>
                            Pentru a accesa temele din clasa, apasati pe butonul “classwork”. <br><br>
                            <img src="../images/classroom/pas29.png"  class="instructionpic" alt="Pasul 29 classroom"><br><br> 
                            <b>Pasul 2:</b> <br>
                            Pentru a intra pe tema pe care doriti sa o faceti, apasati pe butonul “View assignment”. <br><br>
                            <img src="../images/classroom/pas30.png"  class="instructionpic" alt="Pasul 30 classroom"><br>
                            <b>Nota:</b> In cazul unui test, acesta se va gasi tot in aceasta sectiune.
                            <br><br>
                            <b>Pasul 3:</b> <br>
                            Dupa ce ati citit si rezolvat cerinta pe care o aveati de facut, apasati pe butonul “Add” pentru a va adauga tema. <br>
                            Daca aveti tema salvata pe Google Drive, apasati pe butonul “Google Drive” si selectati fisierul pe care doriti sa il incarcati. <br>
                            Daca doriti sa atasati un link, apasati pe butonul ”link” si trimiteti linkul pe care il doriti . <br>
                            Daca aveti tema salvata in memoria calculatorului, apasati pe butonul “files” si selectati documentul pe care vreti sa il trimiteti. <br><br>
                            <img src="../images/classroom/pas31.png"  class="instructionpic" alt="Pasul 31 classroom"><br> <br>
                            <b>Pasul 4:</b> <br>
                            Dupa ce ati selectat ce doriti sa trimiteti, apasati pe butonul “upload”. <br><br>
                            <img src="../images/classroom/pas32.png"  class="instructionpic" alt="Pasul 32 classroom"><br><br> 
                            <b>Pasul 5:</b> <br>
                            Pentru a trimite tema dumneavoastra, apasati pe butonul “Hand in” ("Turn in"). <br><br>
                            <img src="../images/classroom/pas33.png"  class="instructionpic" alt="Pasul 33 classroom"><br><br>
  
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
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseElvn" style="text-decoration: none; color: white;"><i class="fa fa-plus"></i>Cum vedem nota la o tema si comentariile facute de profesorul dvs?</button>									
                </h2>
            </div>
            <div id="collapseElvn" class="collapse" aria-labelledby="headingElvn" data-parent="#accordionExample">
                <div class="card-body">
                    <p><br>
                      <b>Pasul 1:</b> <br>
                      Pentru a vedea nota data de profesorul dumneavoastra, aceasta va aparea in dreptul activitatii. <br><br>
                      <img src="../images/classroom/pas35.png"  class="instructionpic" alt="Pasul 35 classroom"><br><br> 
                      <b>Pasul 2:</b> <br>
                      Pentru a vedea comentariile profesorului dumneavoastra, dati click pe fisierul pe care l ati incarcat. Acesta va aparea asa: <br><br>
                      <img src="../images/classroom/pas36.png"  class="instructionpic" alt="Pasul 36 classroom"><br><br> 
                      <b>Pasul 3:</b> <br>
                      Dupa ce ati deschis fisierul, apasati pe cele 3 puncte din dreapta sus. Acestea au numele de “mai multe optiuni”. In final apasati butonul “deschideti in fereastra noua”. <br><br>
                      <img src="../images/classroom/pas37.png"  class="instructionpic" alt="Pasul 37 classroom"><br><br> 
                      <img src="../images/classroom/pas38.png"  class="instructionpic" alt="Pasul 38 classroom"><br><br> 
                      <b>Pasul 4:</b> <br>
                      Vi se va deschide o noua pagina. In dreapta veti regasi comentariile postate de profesorul dvs. <br><br>
                      <img src="../images/classroom/pas39.png"  class="instructionpic" alt="Pasul 39 classroom"><br><br> 
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

  <title>Google Classroom learninro</title>
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

  




<img class="brandimg" src="../images/gclassroom.jpg" style="height: 150px;">
<h3 style="text-align: center;">Google Classroom</h3>
<p style="text-align: center; margin-bottom:30px; width:70%;  margin-left:15%;">Aceasta platforma este un serviciu de gestionare a învățării creat și întreținut de Google. Acesta oferă o metodă rapidă de comunicare (Google Chat), comunicare prin e-mail (Gmail), convorbiri în timp real cu elevii (Google Meet), documente, prezentări și foi de calcul integrate (Disc Google, suita de programe de birou online de la Google), programări inteligente cu Google Calendar și multe altele.
<br><a href="https://classroom.google.com" target="_blank">Acceseaza platforma aici.</a> </p>


<div class="obj">



<div class="alert alert-secondary" role="alert" style="text-align:center;">
          Nu esti inregistrat in cont! <br>
          <a href="../registration.php" class="alert-link">Creaza-ti un cont de aici</a>.
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
      


    <?php } ?>
    
</div>












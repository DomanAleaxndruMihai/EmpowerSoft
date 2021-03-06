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

  <title>Tools-learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="../css/apps.css">

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
              <li class="nav-item ">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="categorii.php">Categorii Aplicatii</a>
              </li>
              <li class="nav-item ">
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



        <div id="welcome">
            <div style="margin-top: 50px;">
                <img src="../images/paper.jpg" width="339px" class="homeimg">
            </div>
            <h2 style="text-align: center;">Vezi cele mai utilizate instrumente pentru predarea online!</h2>
            <h5 style="text-align: center;">Afla mai multe despre toate si alege ce ti se potriveste mai bine!</h5>
        </div>



        <div>
            <div class="iconapp"><a href="docs.php" style="text-align: center; color: black; text-decoration: none;">
                <img class="iconpic" src="../images/docs.png"> 
                <h2 style="text-align: center;">Google Documents</h2>
                <p>Documente Google este un procesor de text inclus ca parte a unei aplicatii web pentru birouri gratuite, oferite de Google ??n cadrul serviciului s??u Disc Google. Acest serviciu include, de asemenea, Foi de calcul Google ??i Prezent??ri Google, respectiv un program de foi de calcul ??i un program de prezentare. Documente Google este disponibil ca aplicatie web, aplica??ie mobil?? pentru Android, iOS, Windows, ??i ca aplica??ie desktop pe Chrome OS. Aplica??ia este compatibil?? cu formatele de fisiere Microsoft Office.</p>
            </a></div>
    
            <div class="iconapp"><a href="jam.php" style="text-align: center; color: black; text-decoration: none;">
                <img class="iconpic" src="../images/jam.jpg"> 
                <h2 style="text-align: center;">Google Jamboard</h2>
                <p>Cu aceast?? aplica??ie asociat?? Jamboard, pute??i r??sfoi, vedea ??i trimite articole Jam create de dvs. ??i de colegii de echip??. Jamboard este o tabl?? digital?? cu ajutorul c??reia p??n?? ??i echipele aflate la distan???? pot s?? schi??eze idei ??i s?? le salveze ??n cloud, astfel ??nc??t acestea s?? poat?? fi accesate de pe orice dispozitiv. Aplica??ia se adreseaz?? clien??ilor G Suite care au un dispozitiv Jamboard.</p>
            </a></div>
            
            <div class="iconapp"><a href="mboard.php" style="text-align: center; color: black; text-decoration: none;"> 
                <img class="iconpic" src="../images/tboard.jpg"> 
                <h2 style="text-align: center;">Microsoft Whiteboard</h2>
                <p>Nu exist?? o modalitate vizual?? mai bun?? de a v?? exprima ideile dec??t de a le scrie pe o tabl??. Dac?? v?? lipse??te, consulta??i Microsoft Whiteboard! O mul??ime de oameni descoper?? c?? lucrul de acas?? poate fi productiv ??i pl??cut, dar lipsesc sesiunile de brainstorming integrale pentru dezvoltarea ??i perfec??ionarea ideilor. Panourile albe simplific?? exprimarea ideilor, colaborarea la proiect??ri ??i ??nv????area oamenilor despre concepte noi. <br> Microsoft Whiteboard este o aplica??ie gratuit?? destinat?? re-cre??rii acestei experien??e.</p>
            </a></div>
    
            <div class="iconapp"><a href="kahoot.php" style="text-align: center; color: black; text-decoration: none;">
                <img class="iconpic" src="../images/kahoot.png" width="180px"> 
                <h2 style="text-align: center;">Kahoot!</h2>
                <p>Kahoot! este o platform?? gratuit?? de ??nv????are bazat?? pe joc ??i tehnologie educational??. Kahoot! este acum folosit?? de peste 50 milioane de oameni din 180 de ????ri. </p>
            </a></div>
    
            <div class="iconapp"><a href="task.php" style="text-align: center; color: black;text-decoration: none;">
                <img class="iconpic" src="../images/tasks.jpg"> 
                <h2 style="text-align: center;">Google Tasks</h2>
                <p>Aplica??ia le ofer?? utilizatorilor posibilitatea de a-??i nota ??i edita cu u??urin???? activit????ile ??i sarcinile (tasks) pe care le au de f??cut zilnic oric??nd ??i oriunde s-ar afla. Aplica??ia se integreaz?? ??i cu Gmail ??i Google Calendar, astfel ??nc??t utilizatorii s?? poat?? gestiona dintr-un singur loc sarcinile pe care le au de f??cut. Pentru fiecare task notat, ace??tia pot ad??uga, pe l??ng?? data c??nd s?? primeasc?? alert??, ??i detalii despre ce au de f??cut ??i despre progresul realizat pentru ??ndeplinirea sarcinii, iar ??n plus pot ad??uga ??i subsarcini pentru a se putea organiza mai bine.</p>
            </a></div>
    </div>     



      
<!-- Footer -->
<footer class="bg-light text-center text-lg-start" style="margin-top: 50px;;">
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




<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>


    <?php }else{ ?>
        
      
      
    <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Tools-learninro</title>
  <meta name="Bug Hunters" content="Bug Hunters">

  <link rel="stylesheet" href="../css/apps.css">

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
              <li class="nav-item ">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="categorii.php">Categorii Aplicatii</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="recomandate.php">Recomandate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="suport.php">Suport tehnic</a>
              </li>  
            </ul>
          </div>
        </nav>



        <div id="welcome">
            <div style="margin-top: 50px;">
                <img src="../images/paper.jpg" width="339px" class="homeimg">
            </div>
            <h2 style="text-align: center;">Vezi cele mai utilizate instrumente pentru predarea online!</h2>
            <h5 style="text-align: center;">Afla mai multe despre toate si alege ce ti se potriveste mai bine!</h5>
        </div>



        <div class="alert alert-secondary" role="alert" style="width: 30%; text-align:center; margin-left:35%; margin-top: 50px; ">
          Nu esti inregistrat in cont! <a href="../index.php" class="alert-link">Intra de aici</a> pentru a vedea tot continutul. 
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
      ?? 2021 Copyright:
      <a class="text-dark" href="">Learninro</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->




<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>


    <?php } ?>
    
</div>

  
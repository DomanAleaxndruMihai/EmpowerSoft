<?php

session_start();

include 'user.php';
$user = new User();

if(isset($_POST['signupSubmit'])){

    // empty check
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
        
        // verificare pass 
        if($_POST['password'] !== $_POST['confirm_password']){
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Parola trebuie sa fie la fel cu cea confirmata!'; 

        }else{
            // verificare in db user
            $prevCon['where'] = array('email'=>$_POST['email']);
            $prevCon['return_type'] = 'count';
            $prevUser = $user->getRows($prevCon);

            if($prevUser > 0){
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Aceasta adresa de email este deja folosita!';

            }else{

                // trimite useri catre db
                $userData = array(
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'phone' => $_POST['phone']
                );

                $insert = $user->insert($userData);

                // status dupa verificare
                if($insert){
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg'] = 'Contul a fost creat. Inregistreaza-te cu datele tale!';

                }else{
                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg'] = 'Ups, a aparut o problema! Incearca iar ..';

                }
            }
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Completeaza toate campurile!'; 

    }



    // stocare sesiune 
    $_SESSION['sessData'] = $sessData;
    $redirectURL = ($sessData['status']['type'] == 'success')?'index.php':'registration.php';
    header("Location:".$redirectURL);


}elseif(isset($_POST['loginSubmit'])){
    
    if(!empty($_POST['email']) && !empty($_POST['password'])){
 
        $conditions['where'] = array(
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'status' => '1'
        );
        $conditions['return_type'] = 'single';
        $userData = $user->getRows($conditions);

        // setare date user si status in login
        if($userData){
            $sessData['userLoggedIn'] = TRUE;
            $sessData['userID'] = $userData['id'];
            $sessData['status']['type'] = 'success';
            $sessData['status']['msg'] = 'Bun venit, '.$userData['first_name'].'!';
        }else{
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Ai gresit emailul sau parola, incearca iar.'; 
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Introduceti emailul si parola.'; 
    }
     
    $_SESSION['sessData'] = $sessData;  
    header("Location:index.php");

}elseif(!empty($_REQUEST['logoutSubmit'])){
     
    unset($_SESSION['sessData']);
    session_destroy();
    
    $sessData['status']['type'] = 'success';
    $sessData['status']['msg'] = 'Te-ai deconectat cu succes. Te asteptam din nou!';
    $_SESSION['sessData'] = $sessData;
    
    header("Location:index.php");
}else{
    
    header("Location:index.php");
}
<?php

require('../database.php');


if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['pwd'])){
        
        $user_pseudo = htmlspecialchars(($_POST['pseudo']));
        $user_password = htmlspecialchars($_POST['pwd']);

        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        if($checkIfUserExists->rowCount() > 0){

            $userInfos = $checkIfUserExists->fetch();
            if(password_verify($user_password, $userInfos['pwd'])){

                
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['lastname'] = $userInfos['lastname'];
                $_SESSION['firstname'] = $userInfos['firstname'];
                $_SESSION['pseudo'] = $userInfos['pseudo'];

                
                header('Location: index.php');
    
            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }

        }else{
            $errorMsg = "Votre pseudo est incorrect...";
        }
    }else{
        $errorMsg = "Veuillez compléter tous les champs";
    }
}
<?php
session_start();
require('actions/database.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['pwd'])){

        $user_pseudo = htmlspecialchars(($_POST['pseudo']));
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){

            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, lastname, firstname, pwd)VALUES(?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));

            $getInfoOfThisUser = $bdd->prepare('SELECT id, pseudo, firstname, lastname FROM users WHERE lastname = ? AND firstname = ? AND pseudo = ?');
            $getInfoOfThisUser->execute(array($user_lastname, $user_firstname, $user_pseudo));

            $userInfos = $getInfoOfThisUser->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['lastname'] = $userInfos['lastname'];
            $_SESSION['firstname'] = $userInfos['firstname'];
            $_SESSION['pseudo'] = $userInfos['pseudo'];
            
            header('Location: index.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà !";
        }


    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
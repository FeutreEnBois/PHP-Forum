<?php
	$mysqli = new mysqli("localhost", "root", "", "php_exam_db"); // Connexion à la db "php_exam"
    // si vous avez une erreur ici, remplacez le deuxième "root" par une string vide
    
    //$result = $mysqli->query("SELECT * FROM users"); // On utilise l'instance créée pour faire une requête bidon
?>

<title>  Register </title>

<h1> Register </h1>

<p> Fill following shit to register </p>

<form>
    <label>
        Username :
    </label>
    <input type="text" id="name" name="name" placeholder="MyUsername">

    <br> <br> 

    <label>
        Email :
    </label>
    <input type="text" id="email" name="email" placeholder="my@email.com">

    <br> <br>

    <label>
        Password :
    </label>
    <input type="password" id="password" name="password">

    <br> <br>

    <label>
        Confirm password :
    </label>
    <input type="password" id="Cpassword" name="Cpassword">

    <br> <br> 

    <input type="submit"/>
</form>
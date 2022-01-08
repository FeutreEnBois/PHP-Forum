<?php
	$mysqli = new mysqli("localhost", "root", "", "php_exam_db"); // Connexion à la db "php_exam"
    // si vous avez une erreur ici, remplacez le deuxième "root" par une string vide
    
    $result = $mysqli->query("SELECT * FROM users"); // On utilise l'instance créée pour faire une requête
?>

<h1>Login</h1>

<label>
        Username :
</label>
    <input type="text" id="username" name="username" placeholder="Username">

    <br> <br>

    <label>
        Password :
    </label>
    <input type="password" id="password" name="password">

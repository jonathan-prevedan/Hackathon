<?php 

        $db = new PDO('mysql:host=localhost;dbname=game;charset=utf8', 'root', '');
      
    $username = $_POST['user'];

    $requete = "INSERT INTO users (user) VALUES ('$username')";
    $query= $db->prepare($requete);
    $query->execute();

    session_start();
    $_SESSION['user'] = $username;
    


?>
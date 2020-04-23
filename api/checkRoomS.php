<?php
    $id = $_POST['id'];
    $db = new PDO('mysql:host=localhost;dbname=game_db;charset=utf8', 'root', '');
    $query = $db->prepare("SELECT id FROM rooms WHERE uniqid = '$id'");
    $query->execute();
    $result = $query->rowCount();

    if($result == 0){
        $response = json_encode(true);
    }
    else{
        $response = json_encode(false);
    }
    echo $response;
?>
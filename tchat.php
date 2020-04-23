<?php

$db = new PDO('mysql:host=localhost;dbname=tchat;charset=utf8','root','', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$task = "list";
if(array_key_exists("task", $_GET))
{
    $task = $_GET['task'];
}

if($task == "write")
{
    postMessage();
}
else
{
    getMessages();
}

function getMessages()
{
    global $db;
    $resultats = $db->query("SELECT * FROM messages ORDER BY id");
    
    $messages = $resultats->fetchAll();
    echo json_encode($messages);
}

function postMessage()
{
    global $db;

    if(!array_key_exists('author', $_POST) || !array_key_exists('content', $_POST)){

        echo json_encode(["status" => "error", "message" => "One field or many have not been sent"]);
        return;
    
      }
    else if(empty($_POST["author"]) || empty($_POST["content"]))
    {
        return;
    }
    else
    {
    $author = $_POST['author'];
    $content = $_POST['content'];

    $tchat_query = $db->prepare('INSERT INTO messages SET author = :author, content = :content');

    $tchat_query->execute([
        "author" => $author,
        "content" => $content
    ]);

    echo json_encode(["status" => "success"]);
    }
}
?>
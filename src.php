<?php
class user{
    private $id ="";
    public $username="";

    private function connectdb(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=game;charset=utf8', 'root', '');
            return($db);
        }
        catch(PDOException $e)
        {
            print 'Erreur : '.$e->getMessage();
        }
    }

   

    public function disconnect(){
        session_destroy();
        header('Location: index.php');
    }
}
?>
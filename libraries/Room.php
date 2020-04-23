<?php
class Room{
    public $id = '';
    public $uniqid = '';
    public $players = '';

    private function connectdb(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=game_db;charset=utf8', 'root', '');
            return($db);
        }
        catch(PDOException $e){
            print "Error: ".$e->getMessage();
            die();
        }
    }
}
?>
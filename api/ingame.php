<?php 

$db = new PDO('mysql:host=localhost;dbname=game;charset=utf8','root','');

$username = $_SESSION['username'];

$i = $_GET['id'];

$requete = "SELECT * FROM partie WHERE 'id' = '$i'";
$query = $db->prepare($requete);
$query->execute();


while ($data = $req->fetch()) {
    echo '<li>';
echo $data['personne'];
    echo '</li>';
}
$req->closeCursor();

?>
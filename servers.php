<?php
    session_start();
    $db = new PDO('mysql:host=localhost;dbname=nightphase;charset=utf8', 'root', '');

    $query = $db->prepare("SELECT * FROM servers");
    $query->execute();
    $servers = $query->fetchAll(PDO::FETCH_OBJ);
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nightphase</title>
</head>
<body>
    <main>
        <div id="server_wrapper">
            <?php foreach($servers as $server){ ?>
                <div class="server" id="<?php echo $server->id; ?>">
                    <?php
                    if($server->status == 2){ ?>
                        <div class="status available"><span></span><p>Disponible</p></div>
                    <?php }elseif($server->status == 1){ ?>
                        <div class="status disavailable"><span></span><p>Complet</p></div>
                    <?php }elseif($server->status == 0){ ?>
                        <div class="status disavailable"><span></span><p>Indisponible</p></div>
                    <?php }elseif($server->status == 4){ ?>
                        <div class="status started"><span></span><p>En cours</p></div>
                    <?php } ?>
                    <p><?php echo $server->name; ?></p>
                    <p id="players"><?php echo $server->players; ?>/10 joueurs</p>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
<script src="libraries/jquery-3.5.0.min.js"></script>
<script src="libraries/servers.js"></script>
<script src="libraries/update.js"></script>
</html>
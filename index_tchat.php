<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/animations.css">
    <title>Notre jeu</title>
</head>
<body>
    <header>
        <h1> Chat </h1>
    </header>

    <section class="chat">
        <div class="messages">

        </div>
        <div class="user-inputs">
            <form action="tchat.php?task=write" method="POST">
                <input type="text" name="author" id="author" placeholder="Nickname ?">
                <input type="text" id="content" name="content" placeholder="Type in your message right here bro !">
                <button >🔥 Send !</button>
            </form>
        </div>
    </section>
</body>
<script src="jquery.js"></script>
<script src="tchat.js"></script>
</html>
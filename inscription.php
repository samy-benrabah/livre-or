<?php
// Faire ma connexion avec la base de donnée
$db = mysqli_connect('localhost', 'root', '', 'utilisateurs')
//  Connexion si les valeurs entrée sont les memes que dans la base de donnée

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Manag€uro</title>
</head>

<body>
    <header>
        <div>
            <a href="index.php">
                <h2>Manag€uro</h2>
            </a>
        </div>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="inscription.php"><u><b>Inscription</b></u></a>
            <a href="connexion.php">Connexion</a>
            <a href="commentaire.php">Les avis</a>
        </nav>
    </header>

    <main>
        <section class="section1">
            <div>
                <form action="" method="post">
                    <h3 id="red">MAN<span id="yellow">AGE</span><span id="green">URO</span></h3>
                    <h4>Inscription</h4>
                    <label for="username"></label>
                    <input type="text" name="username" id="username" placeholder="Username">
                    <br>
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe">
                    <br>
                    <label for="confirm_passe"></label>
                    <input type="password" name="confirm_passe" id="confirm_passe" placeholder="Confirmer le mot de passe">
                    <br>
                    <input type="submit" name="valider" value="Valider">
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>Copyright © All right reserved</p>
    </footer>
</body>

</html>

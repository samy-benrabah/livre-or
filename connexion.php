<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livreor";
$sql = mysqli_connect($servername, $username, $password, $dbname);
session_start();

    if (isset($_POST['valider'])) {
        $user = trim($_POST['username']);
        $pass = trim($_POST['password']);
        $query = "SELECT * FROM utilisateurs WHERE login = '$user' && password = '$pass'";
        
        if (mysqli_num_rows(mysqli_query($sql, $query)) > 0) {
            $_SESSION['login'] = $user;
            header("Location:profil.php");
    
        } else $wrong = "le login ou le mot de passe ou le username n'est pas correct";
        
    } elseif (isset($_SESSION['login'])) { // si deja connecter rederiction vers le profil.php
        header("Location:connexion.php");
    }

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
            <a href="inscription.php">Inscription</a>
            <a href="connexion.php"><u><b>Connexion</b></u></a>
            <a href="commentaire.php">Les avis</a>
        </nav>
    </header>

    <main>
        <section class="section1">
            <div>
                <form action="" method="post">
                    <h3 id="red">MAN<span id="yellow">AGE</span><span id="green">URO</span></h3>
                    <h4>Connexion</h4>
                    <span id="error"><?php echo $wrong ?></span>
                    <br>
                    <label for="username"></label>
                    <input type="text" name="username" id="username" placeholder="Username">
                    <br>
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe">
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
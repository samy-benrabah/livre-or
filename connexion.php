<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livreor";
$wrong = "";
$sql = mysqli_connect($servername, $username, $password, $dbname);
$connecter = "";
$deconnecter = "";
$let_comment = "";

// si une session deja ouverte renvoi vers la page profil
if (isset($_SESSION['login'])) {
    header("Location: profil.php");
    $connecter = '<a href="profil.php">Mon Profil</a>';
    $let_comment = '<a href="commentaire.php">Laissez un Commentaire</a>';

} else {
    $deconnecter = '<a href="inscription.php">Inscription</a>
                    <a href="connexion.php">Connexion</a>';
}

if (isset($_POST['valider'])) {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);
    $query = mysqli_query($sql, "SELECT password FROM utilisateurs WHERE login = '$user'");

    if ((mysqli_num_rows($query) > 0)) {
        $_SESSION['login'] = $user;
        $row = mysqli_fetch_assoc($query);
        header("Location:profil.php");
        ($row);
        if (password_verify($pass, $row['password'])) {
            header('Location:profil.php');
        }

    } else {
        $wrong = "le login ou le mot de passe ou le username n'est pas correct";
    }

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
            <a href="livre-or.php">Livre d'or</a>
            <?php echo $let_comment ?>
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
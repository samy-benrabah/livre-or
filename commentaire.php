<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livreor";
$sql = mysqli_connect($servername, $username, $password, $dbname);
$deconnecter = "";
$connecter = "";

if (isset($_SESSION['login'])) {
    $connecter = '
                    <a href="profil.php">Mon Profil</a>';

} else {
    $deconnecter = '<a href="inscription.php">Inscription</a>
                        <a href="connexion.php">Connexion</a>';
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
            <?php
echo $deconnecter;
echo $connecter;
?>
            <a href="livre-or.php">Livre d'or</a>
            <a href="commentaire.php"><u><b>Laissez un Commentaire</b></u></a>
        </nav>
    </header>
    <main>
        <section class="section1">
            <div>
                <form action="" method="post">
                    <h3 id="red">MAN<span id="yellow">AGE</span><span id="green">URO</span></h3>
                    <h4>Commentaire</h4>
                    <br>
                    <label for="text"></label>
                    <textarea name="text" id="text" cols="30" rows="10" placeholder="Rédiger un commentaire"></textarea>
                    <br>
                    <input type="submit" name="valider" value="Valider">

                    <?php

$login = $_SESSION['login'];
$connexion = mysqli_connect('localhost', 'root', '', 'livreor');
$query = "SELECT id FROM utilisateurs WHERE login = '$login'";
$requete = mysqli_query($connexion, $query);
$allresult = mysqli_fetch_assoc($requete);
($allresult);
$id = $allresult['id'];
$date = date('Y-m-d H:i:s');

if (empty($_POST['valider'])) {
    echo "compléter votre commentaire et cliquez sur valider";
}

if (isset($_POST['valider'])) {
    if (!empty(trim($_POST['text']))) {
        $commentaire = $_POST['text'];
        $query1 = "INSERT INTO commentaires ( commentaire, id_utilisateur,  date) VALUES ('$commentaire', '$id',  '$date')";
        $requete1 = mysqli_query($connexion, $query1);
        header('refresh:3;url=livre-or.php');
        echo "Merci votre commentaire à bien été ajouté";
    } else {
        echo "Merci de compléter le champ commentaires";
    }

}

?>
                </form>
            </div>
        </section>
     </main>
    <footer>
        <p>Copyright © All right reserved</p>
    </footer>
</body>

</html>
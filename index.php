<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livreor";
$sql = mysqli_connect($servername, $username, $password, $dbname);
$deconnecter = "";
$connecter = "";
$let_comment = "";

if (isset($_SESSION['login'])) {
    $connecter = '<a href="profil.php">Mon Profil</a>';
    $let_comment = '<a href="commentaire.php">Laissez un Commentaire</a>';

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
            <a href="index.php"><u><b>Accueil</b></u></a>
            <?php
echo $deconnecter;
echo $connecter;
?>
            <a href="livre-or.php">Livre d'or</a>
            <?php echo $let_comment ?>
        </nav>
    </header>

    <main>
        <section class="section1">
            <div class="divindex">
                <h1>Meilleur site internet <br>pour la gestion de votre <br>portefeuille</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro dignissimos placeat architecto nesciunt adipisci dolor, pariatur vel, culpa repudiandae illum officiis exercitationem doloribus recusandae! Vitae doloribus sint eum praesentium
                    magnam?
                </p>
            </div>
            <img src="assets/images/banner-img.png" alt="Photo smartphone">
        </section>
        <section class="section2">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, veritatis nobis rem in fugit nesciunt! Molestias, delectus esse at cum quo magnam sint nihil id totam, perferendis explicabo aperiam illo.</p>
        </section>
    </main>
    <footer>
        <p>Copyright © All right reserved</p>
    </footer>
</body>

</html>
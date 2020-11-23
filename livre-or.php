<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livreor";
$sql = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_SESSION['login'])) {
    $coucou = 'Coucou ' . $_SESSION['login'] . ' n\'hésite pas à laisser un commentaire';
    $connecter = '
                <a href="profil.php">Mon Profil</a>';
}
else $deconnecter = '<a href="inscription.php">Inscription</a>
                    <a href="connexion.php">Connexion</a>';








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
            <a href="commentaire.php"><u><b>Les Commentaires</b></u></a>
        </nav>
    </header>

    <main>
        <h3 class="h3" style="text-align: center; margin-top: 40px;" id="red">Comm<span id="yellow">ent</span><span id="green">aire</span></h3>
        <a href="commentaire.php"><p style="text-align: center; margin-top: 20px;"><?php echo $coucou ?></p></a>
        <section class="section4">
            <div class="comment">
                <h3>MOMO</h3>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptates facilis modi perspiciatis molestiae enim neque nobis, dolores sint recusandae minus architecto optio illum, doloremque, eos ea amet consectetur obcaecati.</p>
                <br>
                <h4>Le: 23/09/2020</h4>
            </div>
            <div class="comment">
                <h3>MOMO</h3>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptates facilis modi perspiciatis molestiae enim neque nobis, dolores sint recusandae minus architecto optio illum, doloremque, eos ea amet consectetur obcaecati.</p>
                <br>
                <h4>Le: 23/09/2020</h4>
            </div>
            <div class="comment">
                <h3>MOMO</h3>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptates facilis modi perspiciatis molestiae enim neque nobis, dolores sint recusandae minus architecto optio illum, doloremque, eos ea amet consectetur obcaecati.</p>
                <br>
                <h4>Le: 23/09/2020</h4>
            </div>
            <div class="comment">
                <h3>MOMO</h3>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptates facilis modi perspiciatis molestiae enim neque nobis, dolores sint recusandae minus architecto optio illum, doloremque, eos ea amet consectetur obcaecati.</p>
                <br>
                <h4>Le: 23/09/2020</h4>
            </div>
        </section>
    </main>
    <footer>
        <p>Copyright © All right reserved</p>
    </footer>
</body>

</html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livreor";
$login = $_SESSION['login'];
$sql = mysqli_connect($servername, $username, $password, $dbname);
$query = mysqli_query($sql, 'SELECT commentaire, date, login FROM `commentaires` INNER JOIN utilisateurs ON utilisateurs.id = commentaires.id_utilisateur ORDER BY date DESC');
$all_result = mysqli_fetch_all($query);
$coucou = "";
$let_comment = "";
$deconnecter = "";

if (isset($_SESSION['login'])) {
    $coucou = 'Coucou ' . $_SESSION['login'] . ' n\'hésite pas à laisser un commentaire';
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
            <a href="index.php">Accueil</a>
            <?php
echo $deconnecter;
echo $connecter;
?>
            <a href="livre-or.php"><u><b>Livre d'or</b></u></a>
            <?php echo $let_comment ?>
        </nav>
    </header>
    <main>
        <h3 class="h3" style="text-align: center; margin-top: 40px;" id="red">Comm<span id="yellow">ent</span><span id="green">aire</span></h3>
        <a href="commentaire.php"><p style="text-align: center; margin-top: 20px;"><?php echo $coucou ?></p></a>
        <section class="section4">


                <?php
for ($i = 0;isset($all_result[$i]); $i++) {
    $j = 0;
    echo "<div class='comment'>";
    while (isset($all_result[$i][$j])) {
        echo $all_result[$i][$j] . "<br>" . "<br>";
        $j++;
    }
    echo "</div>";
}
?>

        </section>
    </main>
    <footer>
        <p>Copyright © All right reserved</p>
    </footer>
</body>

</html>
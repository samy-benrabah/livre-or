
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
            <a href="commentaire.php">Les Commentaires</a>
        </nav>
    </header>

    <main>
        <?php
        if (isset($_SESSION['login'])){
            $connexion = mysqli_connect('localhost','root','','livreor');
            $requete = mysqli_query($connexion, 'SELECT * FROM utilisateurs');
            $login = $_SESSION['login']
        ?>
        <section class="section1">
            <div>
                <form action="" method="post">
                    <h3 id="red">MAN<span id="yellow">AGE</span><span id="green">URO</span></h3>
                    <h4>Commentaire</h4>
                    <span id="error"><?php echo $wrong ?></span>
                    <br>
                    <label for="text"></label>
                    <textarea name="text" id="text" cols="30" rows="10" placeholder="Rédiger un commentaire"></textarea>
                    <br>
                    <input type="submit" name="valider" value="Valider">
                </form>
            </div>
        </section>
            <?php
            if (isset($_POST['submit'])){
                $commentaire = $_POST['text'];
                $connexion = mysqli_connect('localhost','root','','livreor');
                $requete = mysqli_query($connexion, "SELECT id FROM utilisateurs WHERE login = '$login'");
            }

            ?>
        <?php
        }else echo "Merci de vous connecter"
        ?>
    </main>
    <footer>
        <p>Copyright © All right reserved</p>
    </footer>
</body>

</html>
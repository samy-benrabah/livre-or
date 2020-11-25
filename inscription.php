<?php include 'server.php';?>

<!DOCTYPE html>
<html lang="fr">
 
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
            <a href="livre-or.php">Livre d'or</a>
            <?php echo $let_comment ?>
        </nav>
    </header>

    <main>
        <section class="section1">
            <div>
                <form action="" method="post">
                <!-- Afficher message erreurs de validation -->

                    <h3 id="red">MAN<span id="yellow">AGE</span><span id="green">URO</span></h3>
                    <h4>Inscription</h4>
                    
                    <?php include 'errors.php';?>
                    <label for="login"></label>
                    <input type="text" name="login" id="login" placeholder="login">
                    <br>
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe">
                    <br>
                    <label for="confirm_pass"></label>
                    <input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirmer le mot de passe">
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

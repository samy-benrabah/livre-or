
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                    $connexion = mysqli_connect('localhost','root','','livreor');
                    $query = "SELECT id FROM utilisateurs";
                    $requete = mysqli_query($connexion, $query);
                    $allresult=mysqli_fetch_assoc($requete);
                    $id = $allresult['id'];
                    $date = date('Y-m-d H:i:s');

                    if (empty($_POST['valider'])){
                    echo "compléter votre commentaire et cliquez sur valider";
                    }

                    if (isset($_POST['valider'])){
                        if(!empty(trim($_POST['text']))){
                            var_dump($_POST['text']);
                            $commentaire = $_POST['text'];
                            $query1 = "INSERT INTO `commentaires`( commentaire, id_utilisateur, date) VALUES ('$commentaire', '$id', '$date')";
                            $requete1 = mysqli_query($connexion, $query1);
                            echo "Merci votre commentaire à bien été ajouté";
                        } else echo "Merci de compléter le champ commentaires";
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
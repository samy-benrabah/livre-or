
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
        <?php
        $wrong='';
        //if (isset($_SESSION['login'])){
          //  $connexion = mysqli_connect('localhost','root','','livreor');
            //$requete = mysqli_query($connexion, 'SELECT * FROM utilisateurs');

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

                    <?php
                    $connexion = mysqli_connect('localhost','root','','livreor');
                    $query = "SELECT id, login FROM utilisateurs";
                    $requete = mysqli_query($connexion, $query);
                    $allresult=mysqli_fetch_assoc($requete);
                    var_dump($allresult);
                    $id = $allresult['id'];
                    $login = $allresult['login'];
                    $date = date('Y-m-d H:i:s');

                    if (empty($_POST['valider'])){
                    echo "compléter votre commentaire et cliquez sur valider";
                    }
                    elseif ($_POST['valider']){
                        if(!empty(trim($_POST['text']))){
                            $commentaire = $_POST['text'];
                            var_dump($commentaire);
                            $query1 = "INSERT INTO commentaires( commentaire, id_utilisateur, date) VALUES ('$commentaire', '$id', '$date')";
                            $requete1 = mysqli_query($connexion, $query1);
                            echo "Merci votre commentaire à bien été ajouté:" . '<br>';
                            echo $commentaire;
                        } else echo "Merci de compléter le champ commentaires";
                    }
                    ?>
                </form>
            </div>
        </section>
            <?php
            $connexion = mysqli_connect('localhost','root','','livreor');
            $query = "SELECT id, login FROM utilisateurs";
            $requete = mysqli_query($connexion, $query);
            $allresult=mysqli_fetch_assoc($requete);
            var_dump($allresult);
            $id = $allresult['id'];
            $login = $allresult['login'];
            $date = date('Y-m-d H:i:s');

            if ($_POST['submit']){
                    if($_POST['text']){
                    var_dump($_POST['text']);
                    $commentaire = $_POST['text'];
                    $query1 = "INSERT INTO `commentaires`( `commentaire, id_utilisateur, date`) VALUES ('$commentaire', '$id', '$date')";
                    $requete = mysqli_query($connexion, $query1);
                    echo "Merci votre commentaire à bien été ajouté";
                } echo "Merci de compléter le champ commentaires";
                } echo "commentaire non ajouté";

            var_dump($commentaire);

            ?>


    </main>
    <footer>
        <p>Copyright © All right reserved</p>
    </footer>
</body>

</html>
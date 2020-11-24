<?php
$login = '';
$password = '';
$errors = array();

// Connexion base de donnée
$db = mysqli_connect('localhost', 'root', '', 'livreor');
// Si le subscriber click sur valider
if (isset($_POST['valider'])) {
    $login = mysqli_real_escape_string($db, $_POST['login']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_pass = mysqli_real_escape_string($db, $_POST['confirm_pass']);
    $doublon = "SELECT login FROM utilisateurs WHERE login = '$login'";
    $sqldoublon = mysqli_query($db, $doublon);

    // Verification de remplissage du formulaire
    if (empty($login)) {
        array_push($errors, "Entrée votre login"); // M'ajoute l'erreurs dans mon tableau erreurs

    }
    if (empty($password)) {
        array_push($errors, "Entrée votre mot de passe"); // M'ajoute l'erreurs dans mon tableau erreurs

    }if ($password != $confirm_pass) {
        array_push($errors, "Les mot de passe ne sont pas identiques lemok"); // M'ajoute l'erreurs dans mon tableau erreurs
    }if (mysqli_num_rows($sqldoublon) > 0) {
        array_push($errors, "Le login existe déjà");
        // Si tout est bon enregistré le login dans la database
    } elseif (count($errors) == 0) {
        $cryptedpass = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO utilisateurs (login, password) VALUES ('$login','$cryptedpass')";
        mysqli_query($db, $sql);
        header('Refresh:3;connexion.php');

        var_dump($sqldoublon);
    }

}

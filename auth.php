<?php

// Informations de la base de données
$servername = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName = "tuto_php";

/**
 * Étapes du développement :
 * 
 * - 1 - Traiter la soumission du formulaire
 * - 2 - Tester si les données envoyées sont correctes
 * - 3 - Rediriger vers la bonne page avec envoi d'une notification
 */

/** 1 - Traitement de la soumission du formulaire */
if (isset($_POST['username']) && isset($_POST["password"])) {
    // Initialisation des informations de connexion
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connection à la base de donnée
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $conn->query("SELECT * FROM user WHERE user.username = '" . $username . "' AND user.password = '" . $password . "'");

    if($query === false) {
        die("Erreur SQL");
    }

    $user = $query->fetch();

        /** 2 - Test si les données envoyées sont correctes */
    if($user){
        // Initialisation des informations de connexion
        $sessionInfos = [
            "current_user" => $user
        ];

        // Lancement de la session
        session_start();

        // Insertion des informations de session
        $_SESSION["active_session"] = $sessionInfos;
        $_SESSION["content_to_show"] = "dashboard.php";

        /** 3 - Redirection vers la page désirée */
        header("Location: index.php");
    } else {
        // Redirection vers la page désirée
        header("Location: loginForm.php");
    }
} else {
    // Redirection vers la page désirée
    header("Location: loginForm.php");
}

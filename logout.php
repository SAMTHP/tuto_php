<?php

session_start();
// Suppression de la session active
unset($_SESSION["active_session"]);

// Redirection vers la page de connexion
header("Location: loginForm.php");
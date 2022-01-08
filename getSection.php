<?php

session_start();
$_SESSION["content_to_show"] = $_GET["section"];

/** 3 - Redirection vers la page désirée */
header("Location: index.php");
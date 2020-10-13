<?php

session_start();
session_destroy();

session_start();
$_SESSION["messages"]["type"] = "success";
$_SESSION["messages"]["content"] = "Vous êtes bien déconnecté";

header('Location: index.php');

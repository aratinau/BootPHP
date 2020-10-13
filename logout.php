<?php

session_start();
session_destroy();

// TODO message deconnexion

header('Location: index.php');

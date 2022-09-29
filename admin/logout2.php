<?php
session_start();
unset($_SESSION['connecte']);
unset($_SESSION['connexion']);

header("Location:../index.php");
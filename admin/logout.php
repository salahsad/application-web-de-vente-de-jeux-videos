<?php

 session_start();
 unset($_SESSION['auth']);
 unset($_SESSION['connexion']);

 $_SESSION['flash']['success'] = "Vous êtes maintenant déconnecte";
 session_unset();
 header("Location:login.php");
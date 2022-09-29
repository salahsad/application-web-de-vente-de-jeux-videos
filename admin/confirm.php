<?php

 function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }  


$user_id  = checkInput($_GET['id']);
$token    = checkInput($_GET['token']);

require 'database.php';
  
$db = Database::connect();
  
  $statement = $db->prepare("SELECT * FROM users WHERE id = ?");
  $statement->execute(array($user_id));
  $user = $statement->fetch();
  
Database::disconnect();
  
session_start();

if($user && $user['confirmation_token'] == $token){
   
    
    $db = Database::connect();
    $db->prepare(' UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = ? ')->execute(array($user_id));
    $_SESSION['flash']['success'] = "Votre compte a bien été validé ";
    Database::disconnect();
    
    $_SESSION['auth'] = $user;
    header("Location:account.php");
    
    
}else{
    $_SESSION['flash']['danger'] = "Ce token n'est pas valide";
    header("Location: login.php");
}

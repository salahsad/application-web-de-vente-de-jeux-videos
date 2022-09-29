<?php

session_start();
 require 'admin/database.php';
$dateErr = $messageErr = "";
$date = $message =  "";
$isSuccess = 1;


if( isset($_POST)){
    
    if (empty($_POST["message"])) {
        $messageErr = "veuillez saisir un message";
        $isSuccess = 0;
    }
    
    else {
        $message = $_POST["message"];
    }
    
}
 function isEmail($var){
    return Filter_var($var,FILTER_VALIDATE_EMAIL);
}
if($isSuccess === 1){
  
   
    $id = $_SESSION['auth']['id'];
    $db = Database::connect();    
    $statement = $db->prepare("INSERT INTO `contact`(`date_cont`, `message_cont` ,`id` ) VALUES (?,?,?)"); 
    $isSuccess = $statement ->execute(array(date('Y-m-d',time()),$message,$id));
    $isSuccess = intval($isSuccess);
    
    $db = Database::disconnect();
    
    
}

header('location:contact.php?succes='.$isSuccess.'&message='.$messageErr);

    ?>
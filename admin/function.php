<?php

    function logged_only()
    {     
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
        if(isset($_SESSION['auth'])){
        header("Location: login.php");
    exit();
    }
   }
   
    function str_random($length)
    {
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet,$length)),0 , $length);
        
    }    
    function est_connecte():bool
    {
        if(session_status() === PHP_SESSION_NONE)
        {
           session_start();
        }
        return !empty($_SESSION['connecte']);    
    }
    function user_connect(): void
    {   
       
        if(!est_connecte())
        {
            header("Location: login.php");
            $_SESSION['flash']['danger'] = "Pour acceder a cet page vous devez vous identifier";
            exit();
        }    
    }

?>


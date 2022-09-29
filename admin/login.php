<?php

 $erreur = null;
 
 if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
    session_start(); 
   
    require 'database.php';
    $db = Database::connect();          
    $statement = $db->prepare("SELECT * from users  WHERE email = ? AND confirmed_at IS NOT NULL"); 
    $statement->execute(array($_POST['username']));
    $user = $statement->fetch();
    
   if(password_verify($_POST['password'],$user['password'])){
        
       
        $_SESSION['connexion'] = 1;
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = "Vous êtes maintenant connecté";
        header("Location: account.php");      
        exit();
    }else{
        $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrecte";
    }
    Database::disconnect();    
     
    if(!empty($_POST['password'] === "admin") && $_POST['username'] === "admin")
        {
           $_SESSION['connecte'] = 1;
           header("Location: index.php"); 
        }
        else
        {
           $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder a cet page";
        }
 }
 



?>
<?php require 'header.php';  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Supergiant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Pacifico&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/login.css">
    <!--Logo-->
    <link rel="stylesheet" href="../font/css/all.min.css">
    <!--SCRIPT-->
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   
</head>

<body>


   
     <style>
        #connecter input[type=text] , #connecter input[type=password]{
            color: #777;
            font-size: 15px;
        }
    </style>
    
    <section id="connecter">
        <div class="container">
            <div class="row">

                <div class="supergiant">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Supergiant <span class="jeux">Connect</span><span class="blue point">.</span>ci</h2>
                        </div>
                        <div class="col-md-6">
                            <h3 style="font-weight: normal">Se connecter</h3>
                        </div>
                        <div class="col-md-6">
                            <h4 style="font-size: 15px">ou <span class="blue"><a href="inscription.php"> Créer un compte</a></span></h4>
                        </div>
                    </div>

                </div>
 
            
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <form id="contact-form" method="POST" action="#" role="form">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 inputWidthIcon">
                                <input type="text" name="username" class="form-control btn-lg" placeholder="Adresse email ou pseudo">
                                <i class="far fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 inputWidthIcon">
                                <input type="password"  name="password" class="form-control btn-lg" placeholder="Mot de passe">
                                <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                          
                            <div class="col-xs-6 col-sm-6 col-md-12">
                                <br>
                                <p class="souvenir" style="font-size:15px;">Se souvenir de moi</p>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg" id="btn-connect">Se connecter</button>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a class="confidentialite" style="text-decoration: none"><span class="blue">Politique de Confidentialité</span></a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>









            <br><br><br><br><br>
            <br><br><br><br><br>

            <br><br><br><br><br>










    </section>
</body>

</html>

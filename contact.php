
<?php

require 'fonction.php';
if(!connexion()){
    header("Location:admin/login.php?destination=contact.php");
    exit();
}


$isSuccess = 0;

if(count($_GET) === 0){
   
    $message = ""; 
    $isSuccess = -100;
    
}else{
    $message = $_GET['message']; 
    $isSuccess = intval($_GET['succes']);
    
   
}

?>

<!DOCTYPE html>

<html>

<head>
    <title>Supergiant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/contact.css">
    <!--Logo-->
    <link rel="stylesheet" href="font/css/all.min.css">
    <!--SCRIPT-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/top-header.js"></script>
</head>

<body>


    <!--------  NAVBAR -------->

    <section id="navig">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                    <a href="index.html" class="navbar-brand" style="font-family: 'Chelsea Market', cursive;font-weight: bold">Supergiant<span class="pts">.</span><span class="aqua">Game</span></a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php" class="link-jsk active">Menus <span class="sr-only">(current)</span></a></li>
                        <li><a href="produits.php" class="link-jsk">Produits</a></li>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle link-jsk" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="contact.php">Contact</a></li>
                                
                                <li role="separator" class="divider"></li>
                                <li><a href="admin/index.php">Administration</a></li>
                            </ul>
                        </li>
                    </ul>

             <ul class="nav navbar-nav navbar-right">
                            <?php if(isset($_SESSION['auth'])): ?>
                            <li  style="font-size:15px;"><a href=""><i style="font-size: 20px;" class="fa fa-user-circle" aria-hidden="true"></i><span><?php echo '   '; ?><?=  $_SESSION['auth']['username']  ?></span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle link-jsk" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="">Mon compte  : <span style="font-weight: bold;"><?php echo '   '; ?><?=  $_SESSION['auth']['username']  ?></span></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="confidentialite.html" target="blank"><i class="fa fa-gavel" aria-hidden="true"></i>  Politique de confidentialité</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="admin/logout.php" target="blank"><i class="fas fa-user" style="font-size:17px;margin-right:7px;"></i> Se déconnecter</a></li>               
                                </ul>
                            </li>
                                      
                            <?php else: ?>
                            <li><a href="admin/login.php" class="btn-connect">Se connecter</a></li>
                            <li><a href="admin/inscription.php" class="btn-inscription">S'inscrire</a></li>
                            <?php endif; ?>
                        </ul>
                </div>
            </div>
        </nav>
    </section>




    <!-----------End navbar------------->

<style>

    .comments{
        color:#991111;
    }
</style>

    <section id="contact">
        <div class="container">
            <div class="titre">
                <h1>Contactez-Nous</h1>
                <div class="white-divider"></div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <form id="contact-form" method="POST" action="contactver.php" role="form">
                        <div class="row">

                            <div class="col-md-12 super">
                                <h2>Supergiant<span class="white">.</span><span class="jeux">Contact</span></h2>
                            </div>
                            
                            
                          
                            <div class="col-md-12 identite">
                                <label for="message">MESSAGE </label>
                                <textarea class="form-control btn-lg" name="message" id="message" placeholder="Votre message"></textarea>
                                <p class="comments"><?php  echo $message ?></p>
                            </div>
                            <div class="col-md-12 identite">
                                <button type="submit" class="btn btn-primary btn-lg" id="msg-btn" name="oui">Envoyer</button>
                            </div>
                            <p class="thank-you" style="color:green; font-size:16px; text-align:center"><?php if($isSuccess === 1){ echo 'Votre message a bien été envoyé'; } ?></p>
                            <p class="thank-you" style="color:red; font-size:16px; text-align:center"><?php  if($isSuccess === 0){ echo 'Votre message n\'a pas pu étre envoyé'; }  ?></p>
                            <div class="col-md-12">
                                <div class="divvv" style="border-bottom: 2px solid white;"></div>
                            </div>

                            <div class="last-element">
                                <h4 id="title">
                                    <strong>Informations De Contact</strong>
                                </h4>
                                <div class="contact-infos">
                                    <i class="fas fa-map-marker-alt"></i>

                                    <a href="#"> 
                                            SuperGiant & co <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Univercité Mouloud Mammery Tizi-Ouzou
                                        </a>

                                </div>
                                <div class="contact-infos">
                                    <i class="fas fa-phone-alt"></i>
                                    <a href="#">+45 71 99 77 07</a>
                                </div>
                                <div class="contact-infos">
                                    <i class="fas fa-envelope"></i>
                                    <a href="#">projetIHM01@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="ele">
                        <h1>Pouvons Nous Aider?</h1>
                        <p style="margin-top:20px;"> Selectionez un des topics si dessous ayant un rapport avec votre requete. Si vous ne trouves pas ceque vous recherchez, completez le formulaire de contact.</p>
                        <br>
                        <h3>Jeu</h3>
                        <small class="form-text text-muted"><a>&nbsp;&nbsp;&nbsp;Jeu non disponible chez nous?</a></small>
                        <hr>
                        <h3>Commande</h3>
                        <small class="form-text text-muted"><a>&nbsp;&nbsp;&nbsp;Vous n'arrivez pas a commander un jeu?</a></small>
                        <hr>
                        <h3>Devenir Partenaire</h3>
                        <small class="form-text text-muted"><a>&nbsp;&nbsp;&nbsp;Suivez notre programme de partenariat</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>




</body>

</html>





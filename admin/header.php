<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

?>

<!DOCTYPE html>
<html>
    <head>        
        <title>Supergiant</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">                    
        <link rel="stylesheet" href="../css/bootstrap.min.css">  
        <!--Font-->              
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" href="../css/nav.css">
        <link rel="stylesheet" href="style/style.css">
        <!--Logo-->
        <link rel="stylesheet" href="../font/css/all.min.css">
        <!--SCRIPT-->
        <script src="../js/jquery-1.11.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 
    </head>
    
    <body>
       
        
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
                        <a href="index.php" class="navbar-brand" style="font-family: 'Chelsea Market', cursive;font-weight: bold">Supergiant<span class="pts">.</span><span class="aqua">Game</span></a>
                    </div>


                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.php" class="link-jsk">Menus <span class="sr-only">(current)</span></a></li>  
                            
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <?php if(isset($_SESSION['auth'])): ?>
                           
                           
                            <li><a href="logout.php"><i class="fas fa-user" style="font-size:17px;margin-right:7px;"></i> Se déconnecter</a></li>                          
                            <?php else: ?>
                                <li><a href="login.php" class="btn-connect">Se connecter</a></li>
                                <li><a href="inscription.php" class="btn-inscription">S'inscrire</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>


    <?php if(isset($_SESSION['flash'])): ?>        
        <?php foreach($_SESSION['flash'] as $type => $message): ?>  
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
       

    </body>
</html>





<!DOCTYPE html>
<html>
    <head>
        <title>Supergiant</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">                    
        <link rel="stylesheet" href="css/bootstrap.min.css">  
        <!--Font-->              
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="admin/style/style.css">
        <!--Logo-->
        <link rel="stylesheet" href="font/css/all.min.css">
        <!--SCRIPT-->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
    </head>
    
    <body>
       
        
       
        
         <div class="container admin">
            <div class="row">
                <h1><strong>Commande d'un jeu séléctionné</strong></h1>
                <br>
             
              
                    <p class="alert alert-warning">Etes vous sur de vouloir precommander ce jeu ?</p>
                    
                    <div class="form-actions">
                    <form action="precommande.php" method="POST">
                        <button type="submit" name="envoye" class="btn btn-danger">OUI</button>
                        <?php
                        echo '<a class="btn btn-default" href="'.$_POST['page'].'"> NON </a>';    
                        echo '<input id="page" name="page" type="hidden" value="'.$_POST['page'].'">';
                        echo '<input id="nom_pre" name="nom_pre" type="hidden" value="'.$_POST['nom_pre'].'">';
                        ?>
                        </form>
                   </div>
                
            </div>
        </div>
        
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
    </body>
</html>
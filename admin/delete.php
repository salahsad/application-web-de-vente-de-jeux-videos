<?php
     
    require 'database.php';
 
 
    
    if(!empty($_POST))
    {
        
        $db = Database::connect();

        $statement = $db -> prepare("DELETE FROM orders WHERE id_item = ?"); 
        $tatement = $statement -> execute(array(intval($_POST['id'])));

        $statement = $db->prepare("DELETE FROM items WHERE id = ?");
        $statement = $statement->execute(array(intval($_POST['id'])));
        Database::disconnect();

        header('location:index.php');
    
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
       
        
       
        
         <div class="container admin">
            <div class="row">
                <h1><strong>Suppression d'un jeux séléctionné</strong></h1>
                <br>
                <form class="form" action="delete.php" role="form" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                    <p class="alert alert-warning">Etes vous sur de vouloir supprimer ce jeux ? (ca va supprimer toutes les commandes ou il est present)</p>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-danger">OUI</button>
                        <a class="btn btn-default" href="index.php"> NON</a>
                   </div>
                </form>
            </div>
        </div>
        
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
    </body>
</html>
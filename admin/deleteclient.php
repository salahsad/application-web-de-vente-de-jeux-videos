<?php


require 'database.php';

if(!empty($_POST)){
$db = database::connect();

$statement2 = $db -> prepare("DELETE FROM precommande WHERE id_user = ? ");
$statement2 = $statement2 -> execute(array(intval($_POST['id'])));

$statement3 = $db -> prepare("DELETE FROM orders WHERE id_user = ?");
$statement3 = $statement3 -> execute(array(intval($_POST['id'])));



$statement = $db -> prepare("DELETE FROM users WHERE id = ?");
$tatement = $statement -> execute(array(intval($_POST['id'])));




$db = database::disconnect();        
header('location:index.php');   }

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
                <h1><strong>Suppression d'un contact séléctionné</strong></h1>
                <br>
                <form class="form" action="deleteclient.php" role="form" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <p class="alert alert-warning">Etes vous sur de vouloir supprimer ce client ? (ca va supprimer touts(es) ses : contacts, commandes,precommande</p>
                
                    <div class="form-actions">
                   
                        <button type="submit" name="oui" value="oui" class="btn btn-danger">OUI</button>
                        <a class="btn btn-default" href="index.php">NON</a>
                        
                   </div>
                </form>
            </div>
        </div>
        
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
    </body>
</html>
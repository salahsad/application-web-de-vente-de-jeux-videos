<?php
    require 'database.php';
    require '../fonction.php';
session_start();


        
if(isset($_GET['succes'])) {
  if(intval($_GET['succes']) === 1){
    $_SESSION['flash']['success'] = "Votre commande a bien été effectué";}
  if(intval($_GET['succes']) === 0){
    $_SESSION['flash']['danger'] = "Votre commande n'as pas aboutit";
  }

}

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
     
    $db = Database::connect();
    $statement = $db->prepare("SELECT items.id, items.name, items.reduction, items.price, items.image, items.plateforme, categories.name_cat AS category FROM items LEFT JOIN categories ON items.category = categories.id_cat WHERE items.id = ?");
    $statement->execute(array($id));
    $item = $statement->fetch();
    Database::disconnect();

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    
     $new_price = $item['price']-$item['price']*$item['reduction']/100;

    //html et css pour afficher la reduction
    $redaff = '<span style="border: 2px solid orangered;color: orangered;padding:3px;font-weight: bold;box-shadow: 1px 1px 1px orangered;">'.$item['reduction'].'%</span>';
    
    //le prix barré
    $prix =number_format($item['price'], 2, '.', '')." DA";
    //si la reduction est egal a 0 on affiche pas le prix barré et la reduction
    if(intval($item['reduction']) === 0){
       $redaff="";
       $prix=null;      
    }

    $page;
    if(!empty($_GET['page'])){
         $page = "../".$_GET['page'];
    }else{
        $page = $_GET['pages'];
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
        <link rel="stylesheet" href="../css/produits.css">
        <link rel="stylesheet" href="style/style.css">
        <!--Logo-->
        <link rel="stylesheet" href="../font/css/all.min.css">
        <!--SCRIPT-->
        <script src="../js/jquery-1.11.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 
    </head>
    
    <body>
       
 
        
       
         <div class="container admin2">
            <div class="row">
               <div class="col-sm-8">
                    <h1><strong>Details du Jeux</strong></h1>
                    <br>
                    <form>
                      <div class="form-group">
                        <label>Nom : </label><?php echo '  '.$item['name'];?>
                      </div>
                      
                      <div class="form-group">
                        <label>Plateforme : </label><?php echo $item['plateforme'];?>
                      </div>  
                        
                      <div class="form-group">
                       <label>Prix :</label><?php echo ' ' . number_format($new_price, 2, '.', '')." DA"; ?>
                      </div>
                        
                      <div class="form-group">
                        <label>Reduction : </label><?php echo '  '.$item['reduction'] ."%";?>
                      </div>  
                        
                      <div class="form-group">
                        <label>Catégorie : </label><?php echo '  '.$item['category'];?>
                      </div>
                      <div class="form-group">
                        <label>Image : </label><?php echo '  '.$item['image'];?>
                      </div>
                      
                    </form>
                    <br>
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3">  
                      <div class="form-actions">
                     <?php echo '<a class="btn btn-primary" href='.$page.'><i class="fas fa-backward"></i> Retour</a>'; ?>
                      </div>
                    </div>
                    <?php 
                     if(connexion()){
                    echo '<div class="col-xs-6 col-sm-6 col-md-3">';
                    echo '<form method="POST" action="commandever.php">';
                       
                        echo '<input id="id_jeu" name="id_jeu" type="hidden" value="'.$_GET['id'].'">';    
                        echo '<input id="page" name="page" type="hidden" value="'.$_GET['page'].'">';
                        
                                                    
                       echo '<button type="submit"  class="rm26"><i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:17px;margin-right:7px;"></i> Commander</button>';                                                                    
                    echo '</form>';
                    echo '</div>';
                     }
                    ?> 
                  </div>
                    <br><br>
                </div> 
                
                
                   <div class="col-sm-4">
                    <div class="thumbnail" style="box-shadow:3px 3px 3px 3px #777">
                        <img src="<?php echo 'images/'.$item['image'];?>">
                        
                        <div class="PS4<?php echo ' '. $item['plateforme']; ?>"><?php echo $item['plateforme']; ?></div>
                        
                        <div class="bloque" style="padding-left:40px;padding-bottom: 20px;">  
                            <p style="margin-top:10px;width: 100%;font-weight: bold;height:15px;font-size: 15px;"><?php echo $item['name'] . ' '. $item['plateforme'] ; ?></p>                          
                            <div>
                                <p><span  style="font-size:16px;font-weight: bold;color: green"><?php echo number_format($new_price, 2, '.', '')." DA"; ?> </span><small style="font-weight: bold;font-size:11px;color: red;"><strike><?php echo $prix; ?></strike></small></p>
                            </div>

                            <div>
                                <?php
                                echo $redaff; 
                                ?>
                            </div>
                             <div style="margin-top:-20px;margin-bottom:20px;">
                                <div class="rating">
                                    <a href="#24" title="Donner 5 étoiles">☆</a>
                                    <a href="#23" title="Donner 4 étoiles">☆</a>
                                    <a href="#22" title="Donner 3 étoiles"><font color ="orange">☆</font></a>
                                    <a href="#21" title="Donner 2 étoiles"><font color ="orange">☆</font></a>
                                    <a href="#20" title="Donner 1 étoile"><font color ="orange">☆</font></a>
                                </div>
                            </div>
                        </div>     
                             
                                             
                    </div>
                </div> 
                
                
            </div>
        </div> 
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
    </body>
</html>


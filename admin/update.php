<?php
     
    require 'database.php';

    if(!empty($_GET['id']))
    {
        $id = checkInput($_GET['id']);
    }
    
    $nameError = $priceError = $plateformeErreur = $categoryError = $imageError = $name = $reduction = $price = $category = $image = $plateforme =  "";

    if(!empty($_POST)) 
    {
        $name               = checkInput($_POST['name']);        
        $price              = checkInput($_POST['price']);
        $reduction          = checkInput($_POST['reduction']);
        $plateforme         = checkInput($_POST['plateforme']);
        $category           = checkInput($_POST['category']); 
        $image              = checkInput($_FILES["image"]["name"]);
        $imagePath          = '../images/'. basename($image);
        $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess          = true;
       
        
        if(empty($name)) 
        {
            $nameError = 'Ce champ est obligatoire';
            $isSuccess = false;
        }
        
        if(empty($plateforme)) 
        {
            $plateformeErreur = 'Ce champ est obligatoire';
            $isSuccess = false;
        }
        
        if(empty($price)) 
        {
            $priceError = 'Ce champ est obligatoire';
            $isSuccess = false;
        } 
        if(empty($category)) 
        {
            $categoryError = 'Ce champ est obligatoire';
            $isSuccess = false;
        }
        if(empty($image)) 
        {
            $isImageUpdated = false;
        }
        else
        {
            $isImageUpdated  = true;
            $isUploadSuccess = true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" ) 
            {
                $imageError = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
                $isUploadSuccess = false;
            }
            if(file_exists($imagePath)) 
            {
                $imageError = "Le fichier existe deja";
                $isUploadSuccess = false;
            }
            if($_FILES["image"]["size"] > 500000) 
            {
                $imageError = "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
            }
            if(!$isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
                {
                    $imageError = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
        }
        
        if(($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated)) 
        {
            $db = Database::connect();
            if($isImageUpdated)
            {
                $statement = $db->prepare("UPDATE  items set name = ? , price = ? , reduction = ? , category = ? , image = ?, plateforme = ? WHERE id = ? ");
                $statement->execute(array($name,$price,$reduction,$category,$image,$plateforme,$id));
            }
            else
            {
                $statement = $db->prepare("UPDATE  items set name = ? , price = ? , reduction = ? , category = ? , plateforme = ? WHERE id = ? ");
                $statement->execute(array($name,$price,$reduction,$category,$plateforme,$id));     
            }
           
            Database::disconnect();
            header("Location: index.php");
        }
        else if($isImageUpdated && !$isUploadSuccess)
        {
            $db = Database::connect();
            
            $statement= $db->prepare("SELECT image FROM items WHERE id = ?");
            $statement->execute(array($id));
            $item = $statement->fetch();
            $image = $item['image'];
          
            Database::disconnect();
        }
    }
    else
    {
        $db = Database::connect();
        $statement= $db->prepare("SELECT * FROM items WHERE id = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        
        $name = $item['name'];
        $plateforme = $item['plateforme'];
        $price = $item['price'];
        $reduction = $item['reduction'];
        $category = $item['category'];
        $image = $item['image'];
        
       
        
        Database::disconnect();
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
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
       
      
        </style>
         <div class="container admin3">
            <div class="row">
                <div class="col-sm-6">
                    <h1><strong>Modifier un Jeux</strong></h1>
                    <br>
                    <form class="form" action="<?php echo 'update.php?id='. $id; ?>" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Nom" value="<?php echo $name;?>">
                            <span class="help-inline"><?php echo $nameError;?></span>
                        </div>


                        <div class="form-group">
                            <label for="plateforme">Plateforme : </label>
                            <input type="text" class="form-control input-lg" id="plateforme" name="plateforme" placeholder="plateforme" value="<?php echo $plateforme;?>">
                            <span class="help-inline"><?php echo $plateformeErreur;?></span>
                        </div>

                        <div class="form-group">
                            <label for="price">Prix: (en DA)</label>
                            <input type="number" step="100" class="form-control input-lg" id="price" name="price" placeholder="Prix" value="<?php echo $price;?>">
                            <span class="help-inline"><?php echo $priceError;?></span>
                        </div>

                        <div class="form-group">
                            <label for="reduction">Reduction: (en %)</label>
                            <input type="number" step="1" class="form-control input-lg" id="reduction" name="reduction" placeholder="Reduction" value="<?php echo $reduction;?>">

                        </div>

                        <div class="form-group">
                            <label for="category">Catégorie:</label>
                            <select class="form-control input-lg" id="category" name="category">
                            <?php
                               $db = Database::connect();
                               foreach ($db->query('SELECT * FROM categories') as $row) 
                               {
                                    if($row['id'] == $category)
                                    {
                                        echo '<option selected="selected" value="'. $row['id_cat'] .'">'. $row['name_cat'] . '</option>';
                                    }
                                    else
                                    {
                                        echo '<option value="'. $row['id_cat'] .'">'. $row['name_cat'] . '</option>';    
                                    }
                                   
                               }
                               Database::disconnect();
                            ?>
                            </select>
                            <span class="help-inline"><?php echo $categoryError;?></span>
                        </div>
                        <div class="form-group">
                            <label>Image:</label>
                            <p><?php echo $image; ?></p>
                            <label for="image">Sélectionner une image:</label>
                            <input type="file" class="input-lg" id="image" name="image"> 
                            <span class="help-inline"><?php echo $imageError;?></span>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fas fa-pen"></i> Modifer</button>
                            <a class="btn btn-primary" href="index.php"><i class="fas fa-backward"></i> Retour</a>
                       </div>
                        <br>
                    </form>
                </div>
                <div class="col-sm-6 latest">
                    <br><br><br>
                       <div class="thumbnail" style="box-shadow:3px 3px 3px 3px #777">
                        <img src="<?php echo 'images/'.$image;?>">
                 
                        <div class="bloque" style="padding-left:40px;padding-bottom: 20px;">  
                            <p style="margin-top:10px;width: 100%;font-weight: bold;height:15px;font-size: 15px;"><?php echo $name . ' '. $plateforme ; ?></p>                          
                            <div>
                                <p><span  style="font-size:16px;font-weight: bold;color: green"><?php echo number_format($price, 2, '.', '')." DA"; ?> </span></p>
                            </div>

                            <div>
                               
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
                        <br>     
                                             
                    </div>
                </div>
                
            </div>
        </div>
        
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
    </body>
</html>
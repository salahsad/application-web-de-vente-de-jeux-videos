<?php 
   
    require_once 'function.php'; 
   
 
    user_connect();
   

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


                    <div class="collapse navbar-collapse tab-pane" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.php" class="link-jsk">Menus <span class="sr-only">(current)</span></a></li>  
                            <li><a href="#1" data-toggle="tab"  class="nav-link">G-Jeux</a></li>
                            <li><a href="#2" data-toggle="tab" class="nav-link">G-Contacts</a></li>
                            <li><a href="#3" data-toggle="tab" class="nav-link">G-Clients</a></li>
                            <li><a href="#4" data-toggle="tab" class="nav-link">G-Abonnés</a></li>
                            <li><a href="#5" data-toggle="tab" class="nav-link">G-Commandes</a></li>
                            <li><a href="#6" data-toggle="tab" class="nav-link">G-Preommandes</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <?php if(est_connecte()): ?>
                           
                              <li><a href="logout2.php"><i class="fas fa-user" style="font-size:17px;margin-right:7px;"></i> Se déconnecter</a></li>                                                      
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>



               

       
        <section id="fear" class="tab-pane">
                              
            <div class="tab-content">

                <div class="tab-pane active" id="1"  style="border: none">
                    <div class="container admin">
                        <div class="row">
                            <h1><strong>Gestion des jeux </strong><a href="insert.php" class="btn btn-primary btn-lg btn-add" style="margin-left: 20px;"><span class="plus" style="font-size:20px;font-weight: bold">+</span> Ajouter</a></h1>
                            <br>
                           
                            <table class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                      <th>Nom</th>
                                      <th>plateforme</th>
                                      <th>Prix</th>
                                      <th>A-prix</th>
                                      <th>Reduction</th>
                                      <th>Catégorie</th>
                                      <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    require 'database.php';
                                    $db = Database::connect();
                                    $statement = $db->query('SELECT items.id, items.name, items.plateforme, items.price, items.reduction, categories.name_cat AS category_jeu FROM items LEFT JOIN categories ON items.category = categories.id_cat');
                                    

                                    while($item = $statement->fetch()) 
                                    {
                                        $new_price = $item['price']-$item['price']*$item['reduction']/100;
                                        echo '<tr>';
                                        echo '<td>'. $item['name'] .'</td>';
                                        echo '<td>'. $item['plateforme'] . '</td>';
                                        echo '<td>'. number_format($new_price, 2, '.', '')." DA". '</td>';
                                        echo '<td>'. number_format($item['price'], 2, '.', '') ." DA".'</td>';
                                        echo '<td>'. " -". $item['reduction'].' %'. '</td>';
                                        echo '<td>'. $item['category_jeu'] . '</td>';
                                        echo '<td width=300>';
                                       echo '<a class="b btn btn-default" href="view.php?id='.$item['id'].'&amp;page=admin/index.php"><i class="fas fa-eye"></i> <span class="tira">Voir</span></a>';
                                        echo ' '; 
                                       echo '<a class="b btn btn-success" href="update.php?id='.$item['id'].'"><i class="fas fa-pen"></i> <span class="tira">Modifier</span></a>';
                                        echo ' ';
                                        echo '<a class="b btn btn-danger" href="delete.php?id='.$item['id'].'"><i class="fas fa-trash"></i> <span class="tira">Supprimer</span></a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    Database::disconnect();
                                  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                
                
                
                
                <div class="tab-pane" id="2">
                    <div class="container admin">
                        <div class="row">
                           
                            <h1><strong>Gestion des Contact </strong></h1>
                            <br> </br>
                            <table class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                      <th>Message</th>
                                      <th>Date</th>
                                      <th>client</th>
                                      <th>Actions</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                   
                                    $db = Database::connect();
                                    $statement = $db->query('SELECT contact.id_cont, contact.date_cont, contact.message_cont , users.email AS user_mail FROM contact LEFT JOIN users ON users.id = contact.id');
                                    

                                    while($item = $statement->fetch()) 
                                    {
                                      echo '<tr>';
                                      echo '<td>'. $item['message_cont'] .'</td>';
                                      echo '<td>'. $item['date_cont'] .'</td>';
                                      echo '<td>'. $item['user_mail'] .'</td>';
                                      echo '<td><a class="b btn btn-danger" href="deletecont.php?id='.$item['id_cont'].'"><i class="fas fa-trash"></i> <span class="tira">Supprimer</span></a></td>';
                                      echo '/<tr>';
                                    }
                                    Database::disconnect();?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                      
                  <div class="tab-pane" id="3">
                    <div class="container admin">
                        <div class="row">
                           
                            <h1><strong>Gestion des Client </strong></h1>
                            <br> </br>
                            <table class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                      <th>Nom d'utilsateur</th>
                                      <th>Email</th>
                                      <th>Date de confirmation du compte</th>    
                                      <th>Actions</th>                                  
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                   
                                    $db = Database::connect();
                                    $statement = $db->query('SELECT id ,username, email, confirmed_at FROM users');
                                    

                                    while($item = $statement->fetch()) 
                                    {
                                      echo '<tr>';
                                      echo '<td>'. $item['username'] .'</td>';
                                      echo '<td>'. $item['email'] .'</td>';
                                      echo '<td>'. $item['confirmed_at'] .'</td>';
                                     
                                      echo '<td><a class="b btn btn-danger" href="deleteclient.php?id='.$item['id'].'"><i class="fas fa-trash"></i> <span class="tira">Supprimer</span></a></td>';
                                      echo '/<tr>';
                                    }
                                    Database::disconnect();?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
        
                  <div class="tab-pane" id="4">
                    <div class="container admin">
                        <div class="row">
                           
                            <h1><strong>Gestion des Abonées</strong></h1>
                            <br> </br>
                            
                            <table class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                      <th>Nom d'utilsateur</th>
                                      <th>Email</th>
                                      <th>Date de confirmation du compte</th>
                                      <th>Actions</th>                                     
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                   
                                    $db = Database::connect();
                                    $statement = $db->query('SELECT id ,username, email, confirmed_at FROM users WHERE isAbonne = 1');
                                    

                                    while($item = $statement->fetch()) 
                                    {
                                      echo '<tr>';
                                      echo '<td>'. $item['username'] .'</td>';
                                      echo '<td>'. $item['email'] .'</td>';
                                      echo '<td>'. $item['confirmed_at'] .'</td>';
                                     
                                      echo '<td><a class="b btn btn-danger" href="deleteabon.php?id='.$item['id'].'"><i class="fas fa-trash"></i> <span class="tira">Supprimer</span></a></td>';
                                      echo '/<tr>';
                                    }
                                    Database::disconnect();?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                
               

            </div>
            
            <div class="tab-pane" id="5">
                    <div class="container admin">
                        <div class="row">
                           
                            <h1><strong>Gestion des Commandes </strong></h1>
                            <br> </br>
                            <table class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                      <th>id</th>
                                      <th>Date</th>
                                      <th>jeu</th>
                                      <th>client</th>
                                      <th>actions</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                   
                                    $db = Database::connect();
                                    $statement = $db->query('SELECT orders.id_ord, orders.date_ord , orders.id_user , items.name AS item_name , users.email AS user_email FROM orders LEFT JOIN items ON orders.id_item = items.id LEFT JOIN users ON orders.id_user = users.id ');
                                    
                                    

                                    while($item = $statement->fetch()) 
                                    {
                                      echo '<tr>';
                                      echo '<td>'. $item['id_ord'] .'</td>';
                                      echo '<td>'. $item['date_ord'] .'</td>';
                                      echo '<td>'. $item['item_name'] .'</td>';
                                      echo '<td>'. $item['user_email'] .'</td>';
                                      echo '<td><a class="b btn btn-danger" href="deletecomm.php?id='.$item['id_ord'].'"><i class="fas fa-trash"></i> <span class="tira">Supprimer</span></a></td>';
                                      echo '/<tr>';
                                    }
                                    Database::disconnect();?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                
            <div class="tab-pane" id="6">
                    <div class="container admin">
                        <div class="row">
                           
                            <h1><strong>Gestion des Precommandes </strong></h1>
                            <br> </br>
                            <table class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                      <th>id</th>
                                      <th>nom</th>
                                      <th>date</th>
                                      <th>client</th>
                                      <th>actions</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php
                                   
                                    $db = Database::connect();
                                    $statement = $db->query('SELECT precommande.id_pre, precommande.name_pre , precommande.date_pre , users.email AS item_name , users.email AS user_email FROM precommande LEFT JOIN users ON users.id = precommande.id_user ');
                                    
                                    

                                    while($item = $statement->fetch()) 
                                    {
                                      echo '<tr>';
                                      echo '<td>'. $item['id_pre'] .'</td>';
                                      echo '<td>'. $item['name_pre'] .'</td>';
                                      echo '<td>'. $item['date_pre'] .'</td>';
                                      echo '<td>'. $item['item_name'] .'</td>';
                                      echo '<td><a class="b btn btn-danger" href="deletepre.php?id='.$item['id_pre'].'"><i class="fas fa-trash"></i> <span class="tira">Supprimer</span></a></td>';
                                      echo '/<tr>';
                                    }
                                    Database::disconnect();?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            
        </section>
        
        
        
        
        
        
        
        
        
        
        
        
        <br><br><br><br>
         <br><br><br><br>
          <br><br><br><br>
    
          
    
    </body>
</html>

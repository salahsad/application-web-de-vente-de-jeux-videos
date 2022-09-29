<!DOCTYPE html>
<html>
    <head>
        <title>Supergiant</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">                    
        <link rel="stylesheet" href="css/bootstrap.min.css">     
         <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
        <!--CSS-->       
        <link rel="stylesheet" href="css/produits.css"> 
        <link rel="stylesheet" href="css/nav.css">    
        <link rel="stylesheet" href="css/footer.css">
        <!--Logo-->
        <link rel="stylesheet" href="font/css/all.min.css">
        <!--SCRIPT-->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
        <script src="js/top-header.js"></script>  
    </head>
    <body>
       
        
        <!--------  NAVBAR -------->  
                
        
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
  
            <?php          
                session_start();
            ?>
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
        
        
      
    <!-----------End navbar------------->    
        
   
 
      
    <section id="general">
        <div class="container">                          
            <div class="row">              
                <div class="col-sm-4 col-md-3">
                    <div class="partieGauche">
                        <h3 class="cat">CATEGORIES  <i class="fas fa-angle-down" data-toggle="collapse" data-target="#MenuProduit"></i></h3>
                           
                            <div class="collapse navbar-collapse" id="MenuProduit">                          
                                <ul class="premiereListe">
                                   
                                    <li role="presentation" class="active"><a href="#1" data-toggle="tab">Jeux de Sport</a></li>
                                    <li role="presentation"><a href="#2" data-toggle="tab">FPS</a></li>
                                    <li role="presentation"><a href="#3" data-toggle="tab">Jeux d'Aventure</a></li>
                                    <li role="presentation"><a href="#4" data-toggle="tab">Jeux de Course</a></li>
                                    <li role="presentation"><a href="#5" data-toggle="tab">Jeux de Guerre</a></li> 
                                    <li role="presentation"><a href="#6" data-toggle="tab">Jeux de Socété</a></li>  
                                    <li role="presentation" style="padding-bottom: 20px;color: #000633">Nos jeux console
                                        <ul>
                                           
                                            <li><a href="#7" data-toggle="tab">PLAYSTATION 4</a></li>
                                            <li><a href="#8" data-toggle="tab">XBOX</a></li>
                                            <li><a href="#10" data-toggle="tab">PC</a></li>
                                        </ul>

                                    </li>    
                      
                                </ul>
                            </div>    
                    </div>
                    <div class="partieGauche2">
                        <div class="publicité">
                            <h4>Prochainement ...</h4>
                            <a href="#"><img src="image/produits/pub1.jpg"></a>
                            <a href="#"><img src="image/produits/pub2.jpg"></a>
                        </div>
                    </div>                    
                </div>
                
                
                             
                
                <div class="col-sm-8 col-md-9">                                       
                    <div class="tab-content">
                        
                        <div class="banner">
                            <img src="image/produits/pb.jpg">
                        </div>  
                        <br>
                       
                        <br>
                        <?php 
                        require 'admin/database.php';

                        $db=Database::connect();

                        //repartir les produits en categorie
                        foreach($db->query("SELECT * from categories") as $cat){
                            $id_cat=$cat['id_cat'];
                            $nom_cat=$cat['name_cat'];
                            $money =" DA";
                            $money2 =" DA";
                            //activer seulement le 1er tab 
                            $act="";
                            if(intval($id_cat)=== 1){
                                $act=" active";
                                
                            }
                                  
                            //pagination bootstrap
                            echo '<div class="tab-pane'.$act.'" id="'.$id_cat.'">';                                 
                            echo '<div class="leTop2" id="selectionner2">';
                            echo '<h3><i class="fas fa-home" style="font-size: 25px;"></i> - '.$nom_cat.'</h3>';
                            echo '</div>';
                            echo '<div class="row">';

                            //afficher les produits de chaque categorie
                            foreach($db->query("SELECT * from items,categories WHERE (category=id_cat)AND(name_cat='$nom_cat')") as $jeu) {
                                $id=$jeu['id'];
                                
                                $nom = $jeu['name'];
                                $plateforme = $jeu['plateforme'];
                                $prix = $jeu['price'];
                                $img = $jeu['image'];
                                $reduction = $jeu['reduction'];
                                $n_p = $prix-$prix*$reduction/100;
                                
                                //afficher une reduction si la valeur de la reduction <> 0 idem pour le prix barré
                                $redaff = '<span style="border: 2px solid orangered;color: orangered;padding:3px;font-weight: bold;box-shadow: 1px 1px 1px orangered;">'.$reduction.'%</span>';

                                if(intval($reduction) === 0){
                                    $redaff="";
                                   $prix=null;
                                   $money2 =" ";
                               }


                            
                             //le code pour afficher 1 produit
                            echo '<div class="col-xs-12 col-sm-6 col-md-4">';
                            echo '<div class="thumbnail">';
                            echo '<img src="admin/images/' .$jeu['image'] .'">';
                            
                            echo '<div class="row">';
                            echo '<div class="col-sm-12 col-md-12">';
                            echo '<p style="margin-bottom:10px;width: 100%;font-weight: bold;height:15px;font-size: 15px;">'.$nom.' '.$plateforme.'</p>';
                            echo '</div>';
                            echo '<div class="col-xs-8 col-sm-8 col-md-8 partie2">';
                            echo '<p style="margin-top: 20px;"><span  style="font-size:16px;font-weight: bold;color: green">'.$n_p. $money .'</span><small style="font-weight: bold;font-size:11px;color: red;"><strike>'.$prix. $money2 .'</strike></small></p>';
                            echo '</div>';                                 
                            echo '<div class="col-xs-4 col-sm-4 col-md-4" style="margin-top:11px;">';
                            echo $redaff;
                            echo '</div>';
                           
                            echo '<div class="col-xs-8 col-sm-8 col-md-8" style="float:right">';
                            echo '<div class="rating">';
                            echo '<a href="#24" title="Donner 5 étoiles">☆</a>';
                            echo '<a href="#23" title="Donner 4 étoiles">☆</a>';
                            echo '<a href="#22" title="Donner 3 étoiles"><font color ="orange">☆</font></a>';
                            echo '<a href="#21" title="Donner 2 étoiles"><font color ="orange">☆</font></a>';
                            echo '<a href="#20" title="Donner 1 étoile"><font color ="orange">☆</font></a>';
                            echo '</div>';
                            echo '</div>';
                            
                            echo '<div class="col-xs-4 col-xs-4 col-sm-4 col-md-4">';                                    
                            echo '<a href="admin/view.php?id='.$id.'&amp;page=produits.php"><button type="button"  class="btn-see btn btn-default"><i class="fas fa-eye"></i> Voire</button></a>';                                                                          
                            echo '</div>';
                            
                           
                            
                            
                            echo '</div>';
                            echo '</div>';                              
                            echo '</div>';


                            }
                            echo'</div></div>';

                        }

                        
                        
                        
                        
                        
                        
                           //jeux ps4


                            echo '<div class="tab-pane" id="7">';                                 
                            echo '<div class="leTop2" id="selectionner2">';
                            echo '<h3><i class="fas fa-home" style="font-size: 25px;"></i> - PS4</h3>';
                            echo '</div>';
                            echo '<div class="row">';

                            //afficher les produits de chaque categorie
                            foreach($db->query("SELECT * FROM items WHERE plateforme='PS4'") as $jeu ) {
                                $id=$jeu['id'];
                                
                                $nom = $jeu['name'];
                                $img = $jeu['image'];
                                $plateforme = $jeu['plateforme'];
                                $prix = $jeu['price'];
                                $reduction = $jeu['reduction'];
                                $n_p = $prix-$prix*$reduction/100;
                                
                                //afficher une reduction si la valeur de la reduction <> 0 idem pour le prix barré
                                $redaff = '<span style="border: 2px solid orangered;color: orangered;padding:3px;font-weight: bold;box-shadow: 1px 1px 1px orangered;">'.$reduction.'%</span>';

                                if(intval($reduction) === 0){
                                   $redaff="";
                                   $prix=null;
                                   $money2 =" ";
                               }


                            
                            //le code pour afficher 1 produit
                            echo '<div class="col-xs-12 col-sm-6 col-md-4">';
                            echo '<div class="thumbnail">';
                             echo '<img src="admin/images/' .$jeu['image'] .'">';
                            echo '<div class="row">';
                            echo '<div class="col-sm-12 col-md-12">';
                            echo '<p style="margin-bottom:10px;width: 100%;font-weight: bold;height:15px;font-size: 15px;">'.$nom.' '.$plateforme.'</p>';
                            echo '</div>';
                            echo '<div class="col-xs-8 col-sm-8 col-md-8 partie2">';
                            echo '<p style="margin-top: 20px;"><span  style="font-size:16px;font-weight: bold;color: green">'.$n_p. $money .'</span><small style="font-weight: bold;font-size:11px;color: red;"><strike>'.$prix. $money2 .'</strike></small></p>';
                            echo '</div>';                                 
                            echo '<div class="col-xs-4 col-sm-4 col-md-4" style="margin-top:11px;">';
                            echo $redaff;
                            echo '</div>';
                            
                            echo '<div class="col-xs-8 col-sm-8 col-md-8" style="float:right">';
                            echo '<div class="rating">';
                            echo '<a href="#24" title="Donner 5 étoiles">☆</a>';
                            echo '<a href="#23" title="Donner 4 étoiles">☆</a>';
                            echo '<a href="#22" title="Donner 3 étoiles"><font color ="orange">☆</font></a>';
                            echo '<a href="#21" title="Donner 2 étoiles"><font color ="orange">☆</font></a>';
                            echo '<a href="#20" title="Donner 1 étoile"><font color ="orange">☆</font></a>';
                            echo '</div>';
                            echo '</div>';
                             echo '<div class="col-xs-4 col-xs-4 col-sm-4 col-md-4">';                                    
                            echo '<a href="admin/view.php?id='.$id.'&amp;page=produits.php"><button type="button"  class="btn-see btn btn-default"><i class="fas fa-eye"></i> Voire</button></a>';                                                                          
                            echo '</div>';
                            
                           
                            echo '</div>';
                            echo '</div>';                              
                            echo '</div>';



                            }
                            echo'</div></div>';

                        

                            
                            
                            
                            
                            
    
                           //jeux XBOX 


                            echo '<div class="tab-pane" id="8">';                                 
                            echo '<div class="leTop2" id="selectionner2">';
                            echo '<h3><i class="fas fa-home" style="font-size: 25px;"></i> - XBOX</h3>';
                            echo '</div>';
                            echo '<div class="row">';

                            //afficher les produits de chaque categorie
                            foreach($db->query("SELECT * FROM items WHERE (plateforme='XBOX')") as $jeu ) {
                                $id=$jeu['id'];
                                
                                $nom = $jeu['name'];
                                  $prix = $jeu['price'];
                                $plateforme = $jeu['plateforme'];
                                $prix = $jeu['price'];
                                $reduction = $jeu['reduction'];
                                $n_p = $prix-$prix*$reduction/100;
                                
                                //afficher une reduction si la valeur de la reduction <> 0 idem pour le prix barré
                                $redaff = '<span style="border: 2px solid orangered;color: orangered;padding:3px;font-weight: bold;box-shadow: 1px 1px 1px orangered;">'.$reduction.'%</span>';

                                if(intval($reduction) === 0){
                                    $redaff="";
                                   $prix=null;
                                   $money2 =" ";
                               }


                            
                            //le code pour afficher 1 produit
                            echo '<div class="col-xs-12 col-sm-6 col-md-4">';
                            echo '<div class="thumbnail">';
                            echo '<img src="admin/images/' .$jeu['image'] .'">';
                           
                            echo '<div class="row">';
                            echo '<div class="col-sm-12 col-md-12">';
                            echo '<p style="margin-bottom:10px;width: 100%;font-weight: bold;height:15px;font-size: 15px;">'.$nom.' '.$plateforme.'</p>';
                            echo '</div>';
                            echo '<div class="col-xs-8 col-sm-8 col-md-8 partie2">';
                            echo '<p style="margin-top: 20px;"><span  style="font-size:16px;font-weight: bold;color: green">'.$n_p. $money .'</span><small style="font-weight: bold;font-size:11px;color: red;"><strike>'.$prix. $money2 .'</strike></small></p>';
                            echo '</div>';                                 
                            echo '<div class="col-xs-4 col-sm-4 col-md-4" style="margin-top:11px;">';
                            echo $redaff;
                            echo '</div>';
                            
                            echo '<div class="col-xs-8 col-sm-8 col-md-8" style="float:right">';
                            echo '<div class="rating">';
                            echo '<a href="#24" title="Donner 5 étoiles">☆</a>';
                            echo '<a href="#23" title="Donner 4 étoiles">☆</a>';
                            echo '<a href="#22" title="Donner 3 étoiles"><font color ="orange">☆</font></a>';
                            echo '<a href="#21" title="Donner 2 étoiles"><font color ="orange">☆</font></a>';
                            echo '<a href="#20" title="Donner 1 étoile"><font color ="orange">☆</font></a>';
                            echo '</div>';
                            echo '</div>';
                            
                            echo '<div class="col-xs-4 col-xs-4 col-sm-4 col-md-4">';                                    
                            echo '<a href="admin/view.php?id='.$id.'&amp;page=produits.php"><button type="button"  class="btn-see btn btn-default"><i class="fas fa-eye"></i> Voire</button></a>';                                                                          
                            echo '</div>';
                            
                           
                            echo '</div>';
                            echo '</div>';                              
                            echo '</div>';



                            }
                            echo'</div></div>';



                             //jeux PC


                           echo '<div class="tab-pane" id="10">';                                 
                           echo '<div class="leTop2" id="selectionner2">';
                           echo '<h3><i class="fas fa-home" style="font-size: 25px;"></i> - PC</h3>';
                           echo '</div>';
                           echo '<div class="row">';

                           //afficher les produits de chaque categorie
                           foreach($db->query("SELECT * FROM items WHERE plateforme='PC'") as $jeu ) {
                               $id=$jeu['id'];
                               
                               $nom = $jeu['name'];
                                 $prix = $jeu['price'];
                               $plateforme = $jeu['plateforme'];
                               $prix = $jeu['price'];
                               $reduction = $jeu['reduction'];
                               $n_p = $prix-$prix*$reduction/100;
                               
                               //afficher une reduction si la valeur de la reduction <> 0 idem pour le prix barré
                               $redaff = '<span style="border: 2px solid orangered;color: orangered;padding:3px;font-weight: bold;box-shadow: 1px 1px 1px orangered;">'.$reduction.'%</span>';

                               if(intval($reduction) === 0){
                                   $redaff="";
                                  $prix=null;
                                  $money2 =" ";
                              }


                           
                           //le code pour afficher 1 produit
                           echo '<div class="col-xs-12 col-sm-6 col-md-4">';
                           echo '<div class="thumbnail">';
                           echo '<img src="admin/images/' .$jeu['image'] .'">';
                           echo '<div class="row">';
                           echo '<div class="col-sm-12 col-md-12">';
                           echo '<p style="margin-bottom:10px;width: 100%;font-weight: bold;height:15px;font-size: 15px;">'.$nom.' '.$plateforme.'</p>';
                           echo '</div>';
                           echo '<div class="col-xs-8 col-sm-8 col-md-8 partie2">';
                           echo '<p style="margin-top: 20px;"><span  style="font-size:16px;font-weight: bold;color: green">'.$n_p. $money .'</span><small style="font-weight: bold;font-size:11px;color: red;"><strike>'.$prix. $money2 .'</strike></small></p>';
                           echo '</div>';                                 
                           echo '<div class="col-xs-4 col-sm-4 col-md-4" style="margin-top:11px;">';
                           echo $redaff;
                           echo '</div>';
                           
                            echo '<div class="col-xs-8 col-sm-8 col-md-8" style="float:right">';
                            echo '<div class="rating">';
                            echo '<a href="#24" title="Donner 5 étoiles">☆</a>';
                            echo '<a href="#23" title="Donner 4 étoiles">☆</a>';
                            echo '<a href="#22" title="Donner 3 étoiles"><font color ="orange">☆</font></a>';
                            echo '<a href="#21" title="Donner 2 étoiles"><font color ="orange">☆</font></a>';
                            echo '<a href="#20" title="Donner 1 étoile"><font color ="orange">☆</font></a>';
                            echo '</div>';
                            echo '</div>';
                           
                           
                            echo '<div class="col-xs-4 col-xs-4 col-sm-4 col-md-4">';                                    
                            echo '<a href="admin/view.php?id='.$id.'&amp;page=produits.php"><button type="button"  class="btn-see btn btn-default"><i class="fas fa-eye"></i> Voire</button></a>';                                                                          
                            echo '</div>';
                            
                           
                           echo '</div>';
                           echo '</div>';                              
                           echo '</div>';



                           }
                           echo'</div></div>';


                        

                           $db = Database::disconnect();



                        ?>
                  
                        
                        
                        
                        
                        
                        
                    </div>                                                            
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>    
    </section>
    
    
 <br><br><br><br> 
 <br><br><br><br> 
    
 
    
                         <footer class="footer">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="footer__about">
                                    <div class="footer__about__logo" style="font-size:60px;color: #000633;">
                                        <span style="  font-family: 'Pacifico', cursive; "><i class="fab fa-wolf-pack-battalion"></i> <span style="font-size:30px">Supergiant</span></span>
                                    </div>
                                    <p>Achetez vos jeux a des prix defiant toute concurance en restant chez vous protegez vous contre le covid-19 avec SUPERGIANT.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-1 col-md-6">
                                <div class="footer__address">
                                    <ul>
                                        <li>
                                            <span>Call Us:</span>
                                            <p>(+213) 065-678-910</p>
                                        </li>
                                        <li>
                                            <span>Email:</span>
                                            <p>Supergiant@gmail.com</p>
                                        </li>
                                        <li>
                                            <span>Fax:</span>
                                            <p>(+12) 345-678-910</p>
                                        </li>
                                        <li>
                                            <span>Contact Us:</span>
                                            <div class="footer__social">
                                                <a  href="https://www.facebook.com" style="color: black;text-decoration: none;"><i class="fab fa-facebook-f"></i></a>
                                                <a  href="https://www.skype.com" style="color: black;text-decoration: none;"><i class="fab fa-skype"></i></a>
                                                <a  href="https://www.twitter.com" style="color: black;text-decoration: none;"><i class="fab fa-twitter"></i></a>                                             
                                                <a  href="https://www.youtube.com" style="color: black;text-decoration: none;"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 offset-lg-1 col-md-6">
                                <div class="footer__widget">
                                    <ul>
                                        <li><a href="#">Acceuil</a></li>
                                        <li><a href="#">Support</a></li>

                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">soutenir $</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#">S'inscrire</a></li>
                                        <li><a href="#">acheter</a></li>
                                        <li><a href="#">Avantages</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer__copyright">
                                    <div class="footer__copyright__text">
                                        <p>
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            Copyright &copy;
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script> All rights reserved | SUPERGIANT
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        </p>
                                    </div>
                                    <div class="footer__copyright__links">
                                        <a href="#">Terms</a>
                                        <a href="#">Privacy Policy</a>
                                        <a href="#">Cookie Policy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </footer>    
    
    
    
    
    </body>
</html>

     
   
<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <title>Supergiant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/precom2.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">

    <!--Logo-->
    <link rel="stylesheet" href="font/css/all.min.css">
    <!--SCRIPT-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1.0.20/jquery.scrollify.js"></script>
   
</head>

<body>

    <!--------  NAVBAR -------->



    <section id="navig">
            <nav class="navbar navbar-default navbar-fixed-top">
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
                            <li><a href="index.php" class="link-jsk active">Menus <span class="sr-only">(current)</span></a></li>
                            <li><a href="produits.php" class="link-jsk">Produits</a></li>
                            <li><a href="#promotion" class="link-jsk">Promotion</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle link-jsk" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="#infos">Abonement</a></li>
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
            </nav>
        </section>




    <!-----------End navbar------------->

    <section id="precommande" style="margin-top: -80px;">

        <section id="pre-top" class="myscroll">
            <section style="padding-top:200px"></section>


            <div class="ribbon">
                Disponible à partir du 19 juin 2020
            </div>

            <div class="switch">SWITCH</div>

            <img src="image/precom2/xen.png" id="image-pre-top">

            <div id="redirection-links">
                <i class="far fa-play-circle"></i>
                <a href="#" class="my-link">VOIR TOUS LES MéDIAS</a>
            </div>

            <a href="#tab1" class="btn btn-primary" id="pre-btn" style="line-height:35px;transition: all 0.5s ease-in-out 0s;"><i class="fas fa-angle-double-right"></i> Je précommande</a>

            <section style="padding-top:100px"></section>

        </section>

        <section id="mid" class="myscroll">



            <section style="padding-top:140px;"></section>

            <img src="image/precom2/xen2.png" id="mid-img">

            <div class="row" style="width:100%">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div id="mid-text" style="margin-top: 70px;">
                        <h1 class="myh1" style="font-family: 'Pacifico', cursive;">Présentation</h1>
                        <br>
                        <p style="font-weight: bold;font-size: 16px;">Remake intégral, doublé d’un chapitre supplémentaire, Xenoblade Chronicles Definitive Edition marque larenaissance du RPG culte sorti originellement sur Wii en 2011. </p>
                        <p style="font-weight: bold;font-size: 16px;"> Vous incarnez Shulk, un jeune bricoleur Homz de la Colonie 9, très intrigué par le Monado, une arme mystérieuse dont la technologie est la seule capable de pourfendre les Mékons, des êtres robotiques agressifs issus de Mechonis.</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="gallery-image" class="myscroll">

            <div class="gallery-section">
                <div class="inner-width">
                    <h1>My Gallery</h1>
                    <div class="border"></div>
                    <div class="gallery">

                        <a href="image/precom2/1.png" class="image">
                            <img src="image/precom2/1.png" alt="">
                        </a>

                        <a href="image/precom2/2.png" class="image">
                            <img src="image/precom2/2.png" alt="">
                        </a>

                        <a href="image/precom2/3.jpg" class="image">
                            <img src="image/precom2/3.jpg" alt="">
                        </a>

                        <a href="image/precom2/4.jpg" class="image">
                            <img src="image/precom2/4.jpg" alt="">
                        </a>

                        <a href="image/precom2/5.jpg" class="image">
                            <img src="image/precom2/5.jpg" alt="">
                        </a>

                        <a href="image/precom2/6.jpg" class="image">
                            <img src="image/precom2/6.jpg" alt="">
                        </a>

                        <a href="image/precom2/7.jpg" class="image">
                            <img src="image/precom2/7.jpg" alt="">
                        </a>

                        <a href="image/precom2/8.jpg" class="image">
                            <img src="image/precom2/8.jpg" alt="">
                        </a>


                    </div>
                </div>
            </div>


            <script>
                $("#gallery-image .gallery").magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            </script>
        </section>




        <section id="pre-bot">
            <img src="image/precom2/bot.png">
        </section>


        <section id="bot" class="myscroll">

            <h1 style="text-align: center; color:#164094; font-weight:bold; font-size:40px; margin-bottom:30px">Plus qu’une épée, Devenez une légende! </h1>
            <div>
                <ul class="nav nav-pills" id="mynav">
                    <li class="active nav-item ">
                        <a href="#tab1" data-toggle="tab" class="nav-link">Standard</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#tab2" data-toggle="tab" class="nav-link">Collector</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#tab3" data-toggle="tab" class="nav-link">Special</a>
                    </li>

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active std" id="tab1">
                        <div class="row" class="width:90%">

                            <div class="col-md-4 col-sm-6 col-xs-7">
                                <img src="image/precom2/stdjpg.jpg" class="game-pic " height="240px">
                            </div>

                            <div class="col-md-4 col-sm-6 " style="padding-left:40px;">
                                <h3 class="thelast" style="text-transform: uppercase; font-weight:bold"> Xenoblade Chronicles</h3>
                                <p style="font-size:12px;margin-left:4px;text-transform: uppercase; font-weight:bold;color: #164094;">Sortie le : 29 mai 2020 </p>
                                <select name="plateforme" class="form-control" style=" width:83%;text-align:left;height:50px " id="plateforme">             
                                  <option value="PS4" class="form-control">SWITCH</option>
                              </select>
                            </div>
                            <div class="col-md-4 col-sm-6 part2" style="margin-top:20px; margin-bottom:20px;">
                                <h2 style="text-align: right; margin-right:15%; margin-top:10px; color: #164094;">69,99€</h2>
                                <h5 style="text-align: right; margin-right:15%;"><strong>700 PTS</strong> fidélité * </h5>
                                <p style="text-align:right; margin-right:15%; margin-left:30px; text-transform: uppercase; font-weight:bold;font-size:11px ">BÉNÉFICIEZ<span style="color:#8c4ff6"> jusqu'à -6%</span> avec nos promotions !
                                </p>
                                

                                <form method="POST" action="precommandever.php">
                                <?php 
                               
                              
                                  require 'fonction.php';
                                  require 'admin/database.php';
                              
                               if(!connexion()){
                                  echo '<button type="submit" class="btn btn-primary bot-btns disabled"><i class="fas fa-angle-double-right"></i> Je précommande</button>';
                                      
                                  echo '<p style="height:25px;color:red;margin-top:15px; text-align:center">Veuillez vous authentifier</p>';
                               }else{
                                $db = Database::connect();
                                $statement = $db -> query("SELECT id_pre FROM precommande WHERE name_pre='Xenoblade Chronicles' AND id_user =".intval($_SESSION['auth']['id']))->fetch();
                                
                                if($statement === false){
                                    echo '<button type="submit" class="btn btn-primary bot-btns "><i class="fas fa-angle-double-right"></i> Je précommande</button>';
                                }else{
                                echo '<button  type="button" class="btn btn-primary bot-btns disabled "><i class="fas fa-angle-double-right"></i>Deja precommandé</button>';
                                
                                }
                                  
                               }
                                   ?>
                              
                                  <input type="hidden" name="nom_pre" id="nom_pre" value="Xenoblade Chronicles">
                                  <input type="hidden" name="page" id="page" value="pre2.php">
                                
                                <button type="button" class="btn btn-primary bot-btns res-btn disabled"><i class="fas fa-angle-double-right"></i> RÉSERVEZ, payez à la sortie</button>
                                <p style="text-align: right; margin-right:15% "><sub>*Estimation</sub></p>
                            </form>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane std" id="tab2">
                        <div class="row" class="width:90%">

                            <div class="col-md-4 col-sm-6 ">
                                <img src="image/precom2/def.jpg" class="game-pic " height="240px">
                            </div>

                            <div class="col-md-4 col-sm-6 " style="padding-left:40px; margin-top:-70px">
                                <h3 class="thelast" style="text-transform: uppercase; font-weight:bold"> Xenoblade Chronicles</h3>
                                <p style="font-size:12px;margin-left:4px;text-transform: uppercase; font-weight:bold;color: #164094;">Sortie le : 29 mai 2020 </p>
                                <select name="plateforme" class="form-control" style=" width:83%;text-align:left;height:50px " id="plateforme">             
                                  <option value="PS4" class="form-control">SWITCH</option>
                                  </select>
                            </div>
                            <div class="col-md-4 col-sm-6 part2" style="margin-top:20px; margin-bottom:20px;">
                                <h2 style="text-align: right; margin-right:15%; margin-top:10px; color: #164094;">189,99€ </h2>
                                <h5 style="text-align: right; margin-right:15%;"><strong>1700 PTS</strong> fidélité * </h5>

                                <button class="btn btn-primary bot-btns"><i class="fas fa-bell"></i> Créez une alerte</button>

                                <p style="margin-top:20px;text-align: left; margin-left:5%; font-weight:bold">Le produit est épuisé 😫.</p>
                            </div>
                        </div>

                    </div>



                    <div class="tab-pane std" id="tab3">
                        <div class="row" class="width:90%">

                            <div class="col-md-4 col-sm-6 col-xs-7">
                                <img src="image/precom2/stdjpg.jpg" class="game-pic " height="240px">
                            </div>

                            <div class="col-md-4 col-sm-6 " style="padding-left:40px;">
                                <h3 class="thelast" style="text-transform: uppercase; font-weight:bold"> Xenoblade Chronicles</h3>
                                <p style="font-size:12px;margin-left:4px;text-transform: uppercase; font-weight:bold;color: #164094;">Sortie le : 29 mai 2020 </p>
                                <select name="plateforme" class="form-control" style=" width:83%;text-align:left;height:50px " id="plateforme">             
                                  <option value="PS4" class="form-control">SWITCH</option>
                                  </select>
                            </div>
                            <div class="col-md-4 col-sm-6 part2" style="margin-top:20px; margin-bottom:20px;">
                                <h2 style="text-align: right; margin-right:15%; margin-top:10px; color: #164094;">89,99€</h2>
                                <h5 style="text-align: right; margin-right:15%;"><strong>900 PTS</strong> fidélité * </h5>
                                <p style="text-align:right; margin-right:15%; margin-left:30px; text-transform: uppercase; font-weight:bold;font-size:11px ">BÉNÉFICIEZ<span style="color:#8c4ff6"> jusqu'à -6%</span> avec nos promotions !
                                </p>
                                <a class="btn btn-primary bot-btns" style="line-height: 35px"><i class="fas fa-angle-double-right"></i> Je précommande</a>
                                <a class="btn btn-primary bot-btns res-btn" style="line-height: 35px"><i class="fas fa-angle-double-right"></i> RÉSERVEZ, payez à la sortie</a>
                                <p style="text-align: right; margin-right:15% "><sub>*Estimation</sub></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section id="form-bot">

        </section>
        <section id="bot-bot" class="myscroll" style="max-width: 95%;">
            <h1 style="text-align: left; color:#164094; font-weight:bold; font-size:40px; margin-bottom:20px;">Les services SuperGiant</h1>
            <div class="row" style="margin:0;">
                <div class="col-md-3 col-sm-5 col-xs-12 col-12 service">
                    <div class="row">
                        <i class="fas fa-user-shield col-md-6 col-sm-6 col-xs-6 col-6" style="font-size:70px;"></i>
                        <p class="col-md-6 col-sm-6 col-xs-6 col-6">Paiment Securisé</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5 col-xs-12 col-12 service">
                    <div class="row">
                        <i class="far fa-address-card col-md-6 col-sm-6 col-xs-6 col-6" style="font-size:70px;"></i>
                        <p class="col-md-6 col-sm-6 col-xs-6 col-6">Votre Fidélité Récompensé</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5 col-xs-12 col-12 service">
                    <div class="row">
                        <i class="fas fa-hourglass-end col-md-6 col-sm-6 col-xs-6 col-6" style="font-size:70px;"></i>
                        <p class="col-md-6 col-sm-6 col-xs-6 col-6">Retrait 1H</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5 col-xs-12 col-12 service">
                    <div class="row">
                        <i class="fas fa-award col-md-6 col-sm-6 col-xs-6 col-6" style="font-size:70px;"></i>
                        <p class="col-md-6 col-sm-6 col-xs-6 col-6">Garantie SuperGiant</p>
                    </div>
                </div>
            </div>
        </section>


    </section>

    </section>
    <!-- Footer -->
    <footer class="footer myscroll">
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
                                    <a href="https://www.facebook.com" style="color: black;text-decoration: none;"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.skype.com" style="color: black;text-decoration: none;"><i class="fab fa-skype"></i></a>
                                    <a href="https://www.twitter.com" style="color: black;text-decoration: none;"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.youtube.com" style="color: black;text-decoration: none;"><i class="fab fa-youtube"></i></a>
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
                                </script> All rights reserved | SUPERGIANT </a>
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
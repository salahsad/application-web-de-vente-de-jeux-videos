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
    <link rel="stylesheet" href="css/precom4.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <!--Logo-->
    <link rel="stylesheet" href="font/css/all.min.css">
    <!--SCRIPT-->
    <script src="js/jquery-1.11.3.min.js"></script>
    
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
                            <li  style="font-size:15px;"><a href=""><i style="font-size:20px;" class="fa fa-user-circle" aria-hidden="true"></i><span><?php echo '   '; ?><?=  $_SESSION['auth']['username']  ?></span></a></li>
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


    <div style="margin-top: -100px;"></div>
    <section id="precommande">

        <section id="pre-top">
            <section style="padding-top:200px"></section>


            <div class="ribbon">
                Disponible à partir du 19 juil 2020
            </div>

            <div class="ps4">PS4</div>



            <div id="redirection-links">
                <i class="far fa-play-circle"></i>
                <a href="#" class="my-link">VOIR TOUS LES MéDIAS</a>
                <i class="fas fa-grip-lines-vertical" style="margin-left: 11px; margin-right: 11px;"></i>

                <i class="fas fa-circle"></i>
                <a href="#" class="my-link">DÉCOUVRIR L’UNIVERS</a>
            </div>

            <button class="btn btn-primary" id="pre-btn"><i class="fas fa-angle-double-right"></i> Je précommande</button>

            <section style="padding-top:100px"></section>

        </section>

        <section id="mid">
            <section style="padding-top:140px"></section>

            <img src="image/precom4/hey.png" id="mid-img">


            <div class="row" style="width:100%">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div id="mid-text" style="margin-top: -30px; padding-top: 400px;">
                        <h1 class="myh1" style="font-family: 'Pacifico', cursive">Présentation</h1>
                        <br>
                        <p style="font-weight: bold;font-size: 16px; color: white;">À la fin du 13e siècle, l'empire mongol a ravagé des nations entières lors de sa campagne visant à conquérir l'Orient. L'île de Tsushima est tout ce qui sépare le Japon de l'incroyable flotte mongole menée par un général rusé et
                            impitoyable, Khotun Khan. Alors que la première vague de l'assaut mongol embrase l'île, le samouraï Jin Sakai, dernier survivant de son clan, prend les armes. Il est déterminé à faire ce qu'il faut, quoi qu'il en coûte, pour
                            protéger son peuple et récupérer l'île. Il doit s'affranchir des traditions qui ont fait de lui un guerrier pour emprunter une nouvelle voie, celle du fantôme, et mener une guerre peu conventionnelle afin de libérer Tsushima.
                        </p>


                    </div>
                </div>
            </div>
        </section>


        <section id="gallery-image">
            <div class="gallery-section">
                <div class="inner-width">
                    <h1>My Gallery</h1>
                    <div class="border"></div>
                    <div class="gallery">

                        <a href="image/precom4/1.jpg" class="image">
                            <img src="image/precom4/1.jpg" alt="">
                        </a>

                        <a href="image/precom4/2.jpg" class="image">
                            <img src="image/precom4/2.jpg" alt="">
                        </a>

                        <a href="image/precom4/3.jpg" class="image">
                            <img src="image/precom4/3.jpg" alt="">
                        </a>

                        <a href="image/precom4/4.jpg" class="image">
                            <img src="image/precom4/4.jpg" alt="">
                        </a>

                        <a href="image/precom4/5.jpg" class="image">
                            <img src="image/precom4/5.jpg" alt="">
                        </a>

                        <a href="image/precom4/6.jpg" class="image">
                            <img src="image/precom4/6.jpg" alt="">
                        </a>

                        <a href="image/precom4/7.jpg" class="image">
                            <img src="image/precom4/7.jpg" alt="">
                        </a>

                        <a href="image/precom4/8.jpg" class="image">
                            <img src="image/precom4/8.jpg" alt="">
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
            <img src="image/precom4/bot.jpg">
        </section>

        <section id="bot">
            <h1 style="text-align: center; color:#164094; font-weight:bold; font-size:40px; margin-bottom:30px">Embarquez l'aventure GHOST OF Tsushima </h1>
            <div>
                <ul class="nav nav-pills" id="mynav">
                    <li class="active nav-item "><a href="#tab1" data-toggle="tab">Standard</a></li>
                    <li class="nav-item "><a href="#tab2" data-toggle="tab">Collector</a></li>
                    <li class="nav-item "><a href="#tab3" data-toggle="tab">Special</a></li>

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active std" id="tab1">
                        <div class="row" style="width:90%">
                            <!--    <img src="image/ribbon-std.png" class="ribbon-std col-md-12" width="290px"> -->
                            <div class="col-md-4 col-sm-6 col-xs-7">
                                <img src="image/precom4/stdjpg.jpg" class="game-pic " style="width: 140px">
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-5">
                                <h3 class="thelast" style="text-transform: uppercase; font-weight:bold"> GHOST OF TsushimaS</h3>
                                <p style="font-size:12px;margin-left:4px;text-transform: uppercase; font-weight:bold;color: #164094;">Sortie le : 19 juil 2020 </p>
                                <select name="plateforme" class="form-control" style="max-width:320px;height:50px" id="plateforme">             
                                    <option value="dog">PS4</option>
                                </select>
                            </div>

                            <div class="col-md-4 part2" style="margin-top:20px; margin-bottom:20px;">
                                <h2 style="text-align: right; margin-right:15%; margin-top:10px; color: #164094;">79,99€</h2>
                                <h5 style="text-align: right; margin-right:15%;"><strong>800 PTS</strong> fidélité * </h5>
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
                                $statement = $db -> query("SELECT id_pre FROM precommande WHERE name_pre='Ghost Of Tsushima' AND id_user =".intval($_SESSION['auth']['id']))->fetch();
                                
                                if($statement === false){
                                    echo '<button type="submit" class="btn btn-primary bot-btns "><i class="fas fa-angle-double-right"></i> Je précommande</button>';
                                }else{
                                echo '<button  type="button" class="btn btn-primary bot-btns disabled "><i class="fas fa-angle-double-right"></i>Deja precommandé</button>';
                                
                                }
                                  
                               }
                                   ?>
                              
                                  <input type="hidden" name="nom_pre" id="nom_pre" value="Ghost Of Tsushima">
                                  <input type="hidden" name="page" id="page" value="pre4.php">
                            
                            </form>
                            
                                <button class="btn btn-primary bot-btns disabled"><i class="fas fa-angle-double-right"></i> RÉSERVEZ, payez à la sortie</button>
                                <p style="text-align: right; margin-right:15% "><sub>*Estimation</sub></p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab2">Vous pouvez consulter le détail sur le public</div>
                    <div class="tab-pane" id="tab3">Vous pouvez consulter le détail des objectifs pédagogiques</div>

                </div>
            </div>
        </section>

    </section>

    <!-- Footer -->
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
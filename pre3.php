<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
    <title>Supergiant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/precom3.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <!--Logo-->
    <link rel="stylesheet" href="font/css/all.min.css">
    <!--SCRIPT-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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



    <section id="first-21">
        <div class="container-fluid">
            <br><br>

            <!----------- partie 1 ------------->

            <div class="first-elements">
                <div class="container sectionn">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="players">
                                <br>
                                <img src="image/fifa21/fty6.jpg">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="team-ses">
                                <img src="image/fifa21/fut.jpg" class="center-block">
                                <h2 style="font-family: 'Roboto', sans-serif;">ÉQUIPE DE LA SAISON JUSQU’ICI</h2>
                                <p style="text-align: center">De la lutte pour le titre à celle pour le maintien, la saison est loin d’être finie. Préparez-vous au retour du Jeu universel en célébrant les meilleurs joueurs de la saison 2020/21 avec l’Équipe de la saison jusqu’ici
                                    FIFA 21.
                                </p>
                                <a href="#buy" class="btn btn-lg btn-fifa center">En voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ligne"></div>

            <!----------- partie 2 ------------->

            <div id="copa">
                <div class="container">
                    <br><br><br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="image/fifa21/liv.jpg" class="center-block" style="width:94%;">
                            <h2 style="font-family: 'Roboto', sans-serif;">UEFA CHAMPIONS LIGUE</h2>
                            <p>
                                Vibrez avec la plus grande compétition de clubs d'Europe<br> grace a une mise a jour contenu gratuit * pour FIFA 21 sur <br> PLAYSTATION 4 , XBOX ONE , PC , des septembre 2021 .
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="image/fifa21/team.jpg" class="center-block" style="width:94%;">
                            <h2 style="font-family: 'Roboto', sans-serif;">TEAM OF THE YEAR</h2>
                            <p>
                                Le monde a parlé , le XI Ultime a été choisie , Découvrez qui a intégré<br> le Team of The Year FIFA 21 !
                            </p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div class="ligne"></div>

        <!----------- partie 3 ------------->


        <div id="access">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <h2 style=" font-family: 'Fjalla One', sans-serif;">LE MEILLEUR MOYEN DE JOUER À FIFA 21 !</h2>
                        <p style=" font-family: 'Fjalla One', sans-serif;"><span class="etoile">*  </span> Jouez à FIFA 21 et à d’autres grands jeux dès maintenant avec EA Access et Origin Access !</p>
                        <p style=" font-family: 'Fjalla One', sans-serif;"><span class="etoile">*  </span> Cette version est aussi disponible sur <span class="etoile">playstation 4</span> , <span class="etoile"> XBOX ONE </span> et <span class="etoile"> PC </span></p>
                        <p style=" font-family: 'Fjalla One', sans-serif;"><span class="etoile">*  </span> Pour utiliser FIFA 21 SUR PS4, XBOX ONE OU PC (VENDU SÉPARÉMENT), TOUTES SES MISES À JOUR ET UNE CONNEXION INTERNET.</p>
                        <a href="#buy" class="btn btn-lg btn-kyliant">Pré-commander</a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <img src="image/fifa21/mbap.jpg" class="img-thumbnail img-rounded center-block">
                    </div>
                </div>
            </div>
        </div>

        <!----------- partie 4 ------------->

        <div id="informations">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
        <br><br><br>
    </section>


    <section id="buy">
        <h1>Embarquez pour une nouvelle aventure FIFA !</h1>
        <p>Edition standard</p>

        <div class="container-fluid">
            <div class="ribbon-10">
                <img src="image/fifa21/ribbon-std.png">
            </div>
            <br>
            <div class="container img-rounded">
                <div class="row">
                    <div class="col-md-8">
                        <div class="block1">
                            <div class="row">
                                <div class="col-xs-5 col-sm-4 col-md-4 ellie">
                                    <img src="image/fifa21/lastOf.jpg">
                                </div>
                                <div class="col-sm-7 col-md-8 list">
                                    <h3 style="font-size: 25px;">EA SPORT FIFA 21</h3>
                                    <h5>Sortie le : 25 Septembre 2020</h5>
                                    <div class="select-container">
                                        <select>
                                                <option value="">PS4</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="block2">
                            <br>
                            <h3 style="font-weight: bold;">69,99€ <br> <span style="font-size: 12px;color: #333;"><strong>700 PTS</strong> FIDÉLITÉ </span></h3>

                            <h5 style="margin-top:70px; font-size: 15px;margin-left: 10px;" class="per2">BÉNÉFICIEZ <span class="violette">JUSQU'À -6%</span> AVEC LA MÉGACARTE ! <span class="petit">(Création de carte dans votre panier)</span></h5>
                            <br>
                            <form method="POST" action="precommandever.php">
                                <?php 
                               
                              
                                  require 'fonction.php';
                                  require 'admin/database.php';
                              
                               if(!connexion()){
                                  echo '<button type="submit" class="btn-bay disabled"><i class="fas fa-angle-double-right"></i> Je précommande</button>';
                                      
                                  echo '<p style="height:25px;color:red;margin-top:15px; text-align:center">Veuillez vous authentifier</p>';
                               }else{
                                $db = Database::connect();
                                $statement = $db -> query("SELECT id_pre FROM precommande WHERE name_pre='FIFA 21' AND id_user =".intval($_SESSION['auth']['id']))->fetch();
                                
                                if($statement === false){
                                    echo '<button type="submit" class="btn-bay bot-btns "><i class="fas fa-angle-double-right"></i> Je précommande</button>';
                                }else{
                                echo '<button  type="button" class="btn-bay disabled "><i class="fas fa-angle-double-right"></i>Deja precommandé</button>';
                                
                                }
                                  
                               }
                                   ?>
                              
                                  <input type="hidden" name="nom_pre" id="nom_pre" value="FIFA 21">
                                  <input type="hidden" name="page" id="page" value="pre3.php">
                            
                            </form>
                
                            <button type="submit" class="btn-bay"><i class="fas fa-angle-double-right disabled"></i> Réservez , payez à la sortie</button>
                            <h6>*Estimation</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
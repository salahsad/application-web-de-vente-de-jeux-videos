<?php
        session_start();
    require 'admin/database.php';
 

        if(isset($_POST['mybtn'])){
    
            
            $db = Database::connect();
            $statement = $db->prepare("UPDATE `users` SET `isAbonne`= 1 WHERE id = ?");
            $statement->execute(array(intval($_SESSION['auth']['id'])));
            Database::disconnect();
            unset($_POST['mybtn']);
        }

        if(isset($_POST['mybtn2'])){
            $db = Database::connect();
            $statement = $db->prepare("UPDATE `users` SET `isAbonne`= 0 WHERE id = ?");
            $statement->execute(array(intval($_SESSION['auth']['id'])));
            Database::disconnect();
            unset($_POST['mybtn2']);

        }
  
?>




<!DOCTYPE html>
<html>

<head>

    <title>Supergiant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <!--Logo-->
    <link rel="stylesheet" href="font/css/all.min.css">
    <!--SCRIPT-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/top-header.js"></script>

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



        <br><br><br>
        <!-----------End navbar------------->






        <!-- Carousel-->



        <section id="main-image">
            <div id="monCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#monCarousel" data-slide-to="1"></li>
                    <li data-target="#monCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="image/main_image/1.jpg" class="jsk1">
                        <img src="image/main_image/2.jpg" class="jsk2">
                        <img src="image/main_image/3.jpg" class="jsk3">
                        <img src="image/main_image/4.jpg" class="jsk4">
                        <img src="image/main_image/5.jpg" class="jsk5">
                        <img src="image/main_image/6.jpg" class="jsk6">
                        <img src="image/main_image/7.jpg" class="jsk7">
                        <img src="image/main_image/8.jpg" class="jsk8">
                        <img src="image/main_image/9.jpg" class="jsk9">
                        <img src="image/main_image/10.jpg" class="jsk10">
                        <div class="bande-annonce">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="disponibilité">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 eage">
                                                <h5>DISPONIBLE A PARTIR DU 5 SEPTEMBRE 2020</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 tomorrow">
                                        <h1 style="padding:20px 0;">Une cousre <br><span class="saut"></span>qui va <br><span class="saut"></span> jusqu'en <br><span class="saut"></span> enfer !</h1>
                                    </div>
                                    <br>
                                    <div class="col-md-12 button43 button45">
                                        <a href="produits.php" target="blank" class="btn btn-lg" style="text-transform: uppercase"><i class="fas fa-angle-double-right"></i>  Consulter produits</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/main_image/11.jpg" class="jsk1">
                        <img src="image/main_image/12.jpg" class="jsk2">
                        <img src="image/main_image/13.jpg" class="jsk3">
                        <img src="image/main_image/14.jpg" class="jsk4">
                        <img src="image/main_image/15.jpg" class="jsk5">
                        <img src="image/main_image/16.jpg" class="jsk6">
                        <img src="image/main_image/17.jpg" class="jsk7">
                        <img src="image/main_image/18.jpg" class="jsk8">
                        <img src="image/main_image/19.jpg" class="jsk9">
                        <img src="image/main_image/20.jpg" class="jsk10">
                        <div class="bande-annonce2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="disponibilité">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 eage2">
                                                <h5>DISPONIBLE A PARTIR DU 25 SEPTEMBRE 2020</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 tomorrow2" style="opacity: 0;padding-bottom:40px;">
                                        <h1 style="padding: 20px 0;">Devenez <br><span class="saut"></span> un legende <br><span class="saut"></span>du ballon <br><span class="saut"></span>rond !</h1>
                                    </div>

                                    <div class="col-md-12 button53 btn43">
                                        <a href="pre3.php" target="blank" class="btn btn-lg" style="text-transform: uppercase"><i class="fas fa-angle-double-right"></i>  Je le précommende</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/main_image/21.jpg" class="jsk1">
                        <img src="image/main_image/22.jpg" class="jsk2">
                        <img src="image/main_image/23.jpg" class="jsk3">
                        <img src="image/main_image/24.jpg" class="jsk4">
                        <img src="image/main_image/25.jpg" class="jsk5">
                        <img src="image/main_image/26.jpg" class="jsk6">
                        <img src="image/main_image/27.jpg" class="jsk7">
                        <img src="image/main_image/28.jpg" class="jsk8">
                        <img src="image/main_image/29.jpg" class="jsk9">
                        <img src="image/main_image/30.jpg" class="jsk10">
                        <div class="bande-annonce">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="disponibilité">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 eage">
                                                <h5>DISPONIBLE A PARTIR DU 5 SEPTEMBRE 2020</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 tomorrow3">
                                        <h1 style="padding: 20px 0;">Une <br><span class="saut"></span> Nouvelle<br> histoire <br><span class="saut"></span> qui commence !</h1>
                                    </div>
                                    <br>
                                    <div class="col-md-12 button44">
                                        <a href="pre1.php" target="blank" class="btn btn-lg" style="text-transform: uppercase"><i class="fas fa-angle-double-right"></i>  Je le précommende</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>

                <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" style="opacity: 0;"></span>
                </a>
                <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" style="opacity: 0;"></span>
                </a>
            </div>
        </section>

        <br><br>











        <!------- Begin NEW1 ------->


        <section id="new">
            <div class="container-fluid">
                <div class="white-divider"></div>
                <h2 class="titre" style="text-align: center;padding-bottom: 20px;font-weight: bold;">Latest Arrivals</h2>
                <div class="row">

                    <div class="miracle">
                        <div class="col-sm-6 col-md-3  image middle">
                            <div class="thumbnail">
                                <div class="nouveau">
                                    <h5 style="text-align: center;">NEW</h5>
                                </div>
                                <img src="image/accueil/img1.jpg">

                                <div class="card-body">
                                    <p class="card-text">Cyberpunk 2077 est un jeu vidéo d'action-RPG . profitez de notre offre excéptionnel a la sortie .</p>
                                    <div class="date">
                                        <div class="btn-group">
                                            <a href="#" type="button" class="btn btn-sm btn-default">View</a>
                                            <a href="#" type="button" class="btn btn-sm btn-default">Share</a>
                                        </div>
                                        <small class="text-muted">23 mai 2020</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="miracle">
                        <div class="col-sm-6 col-md-3 image middle">
                            <div class="thumbnail">
                                <div class="nouveau">
                                    <h5 style="text-align: center;">NEW</h5>
                                </div>
                                <img src="image/accueil/img2.jpg">

                                <div class="card-body">
                                    <p class="card-text">FIFA 21 est un jeu vidéo de football , profitez de notre offre excéptionnel a la sortie .</p>
                                    <div class="date">
                                        <div class="btn-group">
                                            <a href="#" type="button" class="btn btn-sm btn-default">View</a>
                                            <a href="#" type="button" class="btn btn-sm btn-default">Share</a>
                                        </div>
                                        <small class="text-muted">23 mai 2020</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="miracle">
                        <div class="col-sm-6 col-md-3  image middle">
                            <div class="thumbnail">
                                <div class="nouveau">
                                    <h5 style="text-align: center;">NEW</h5>
                                </div>
                                <img src="image/accueil/img3.jpg">

                                <div class="card-body">
                                    <p class="card-text">Resident Evil 3: Nemesis,jeu vidéo survival horror ,profitez de notre offre excéptionnel a la sortie.</p>
                                    <div class="date">
                                        <div class="btn-group">
                                            <a href="#" type="button" class="btn btn-sm btn-default">View</a>
                                            <a href="#" type="button" class="btn btn-sm btn-default">Share</a>
                                        </div>
                                        <small class="text-muted">23 mai 2020</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="miracle">
                        <div class="col-sm-6 col-md-3  image middle">
                            <div class="thumbnail">
                                <div class="nouveau">
                                    <h5 style="text-align: center;">NEW</h5>
                                </div>
                                <img src="image/accueil/img4.jpg">

                                <div class="card-body">
                                    <p class="card-text">The Last of Us Part II ,jeu vidéo d’action-aventure.profitez de notre offre excéptionnel a la sortie.</p>
                                    <div class="date">
                                        <div class="btn-group">
                                            <a href="#" type="button" class="btn btn-sm btn-default">View</a>
                                            <a href="#" type="button" class="btn btn-sm btn-default">Share</a>
                                        </div>
                                        <small class="text-muted">23 mai 2020</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>


        <!------- End NEW ------->





        <br><br><br><br><br>



        <!------------Begin Promotions------------>


        <section id="promotion">
            <div class="container">
                <div class="prom">
                    <div class="black-divider"></div>
                    <h2 class="tit" style="  font-family: 'Pacifico', cursive; ">Promotion Spécial</h2>
                </div>
                <div class="top">
                    <h2>INFOS FIFA 20</h2>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="part1">
                            <h2>FIFA 20 Champions Édition</h2>
                            <h4>Obtenez FIFA 20 Champions Édition et recevez :</h4>
                            <ul class="list">
                                <li><span class="no-color"> 10 packs Or rares</span></li>
                                <li><span class="no-color"> Choix prêt joueur Icône : choisissez 1 des 5 éléments Icônes (version intermédiaire) en prêt pour 5<br> matchs FUT</span></li>
                                <li><span class="no-color"> Maillots FUT en édition spéciale</span></li>
                            </ul>
                            <p class="p1"><span class="etoile">*</span> ACHAT DE L’ÉDITION Champions DISPONIBLE SUR <b class="yellow" style="font-style: italic"> PS4 </b>, <b style="font-style: italic" class="yellow"> PS3 </b> ,<b class="yellow" style="font-style: italic"> XBOX </b>                                ET <b class="yellow" style="font-style: italic"> PC </b> UNIQUEMENT,
                                <br> SUR LES 2 POINTS DE VENTE FIFA DANS LA VILLE DE TIZI-OUZOU. LES 2 BOUTIQUES ENFACE DU STADE 1 ER NOVEMBRE , DES CONDITIONS S'APPLIQUENT.
                                <a class="yellow" style="font-size: 18px;text-decoration: none;" href="https://www.ea.com/fr-fr/games/fifa/fifa-20/fifa-20-game-and-offer-disclaimers"> VOIR ICI </a>POUR TOUS LES DÉTAILS.
                            </p>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="part2">
                                <div class="edition">
                                    <div class="col-xs-4 col-sm-4" style="cursor: pointer;">
                                        <div>
                                            <div class="left-div1">
                                                <h4>Champions Édition</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                        <div class="left-div2">
                                            <h4>Non disponible</h4>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                        <div class="left-div3">
                                            <h4>Non disponible</h4>

                                        </div>
                                    </div>
                                </div>

                                <div class="detail">
                                    <div class="row">
                                        <div class="txt">
                                            <div class="diviseur"></div>
                                            <div class="col-xs-8 col-sm-8 zone1">
                                                <p class="paragraphe1"><b>FIFA 20 CHAMPIONS ÉDITION </b></p>
                                                <h4 class="titre1"><strike><strong>99,99 €</strong></strike></h4>
                                                <h4 class="titre2"><strong style="color: green">60.99 €</strong></h4>
                                                <p class="paragraphe2"><b style="font-weight:bold;">TÉLÉCHARGEMENT PC <br><span style="font-weight: normal;font-size:14px;">( Non disponible pour le moment )</span></b></p>
                                            </div>
                                            <div class="col-xs-3 col-md-4 zone2">
                                                <img src="image/accueil/cr8.jpg" style="height:150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="achat">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button type="button" class="btn btn-lg button2 disabled">Commander  <small><i class="fab fa-steam"></i></small></button>
                                        </div>

                                        <div class="col-xs-12">
                                            <button type="button" class="btn btn-lg button3">Commander  <small><i class="fab fa-playstation"></i></small></button>
                                        </div>

                                        <div class="col-xs-12">
                                            <button type="button" class="btn btn-lg button4">Commander  <small><i class="fab fa-xbox"></i></small></button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!------------End Promotions------------>



        <br>

        <!-----------Begin Precommandation--------->

        <section id="pre-commende">
            <div class="hit">
                <div class="black-divider"></div>
                <h2 style="margin-left: -5px; font-family: 'Pacifico', cursive;">Les hits à venir</h2>
                <br>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="pre-1">
                            <div class="thumbnail thumb1" style="margin: 0;padding: 0;">
                                <img src="image/accueil/prc1.jpg">
                                <a href="pre2.php" target="blank" class="button10 btn btn-lg" style="text-transform: uppercase;line-height: 25px;"><i class="fas fa-angle-double-right"></i> JE LE PRéCAMMANDE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="pre-2">
                            <div class="thumbnail thum2" style="margin:0;padding: 0;">
                                <img src="image/accueil/prc2.jpg" style="width: 100%;">
                                <div class="thumb2">
                                    <h3 style="font-size: 20px;color: black; text-align: center; letter-spacing:-1px; margin-top: 0;font-weight: bold;">THE LAST OF US <br><span class="part3" style="  margin-left:50px;font-size: 20px ;rgin-top:-5px;">PART II</span></h3>
                                </div>
                                <a href="pre1.php" target="blank" class="button11 btn btn-lg" style="text-transform: uppercase;line-height: 25px;"><i class="fas fa-angle-double-right"></i> JE LE PRéCAMMANDE</a>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="pre-3">
                            <div class="thumbnail thum3" style="margin:0;padding: 0;">
                                <img src="image/accueil/prc3.jpg" style="width: 100%;">
                                <div class="thumb3">
                                    <h3 style="font-size: 22px;color: black; text-align: center; letter-spacing:3px; margin-top: 0;font-weight: bold;padding-bottom:20px;">GHOST</h3>
                                </div>
                                <a href="pre4.php" target="blank" class="button11 btn btn-lg" style="text-transform: uppercase;line-height: 25px;"><i class="fas fa-angle-double-right"></i> JE LE PRéCAMMANDE</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-----------End Precommandation--------->
        <br>
        <br>

      
        <section id="possibilities"  style="margin-bottom:100px ;margin-left:100px">   
            <div class="container">
               <div class="row">
                    <div class="hit">
                        <div class="black-divider"></div>
                        <h2 style="margin-left: -5px; font-family: 'Pacifico', cursive;">Decouverte du mois </h2>
                        <br>
                    </div>
                    <div class=" col-xs-12 col-sm-6">
                        <div class="">
                          <h4 style="text-align:center;font-weight:bold;"> MASS EFFECT  </h4>
                          <p style="border-bottom : 2px solid #777;width : 250px;margin-bottom:40px;" class="center-block"></p>
                          <p   style ="text-align:center;font-size:19px; margin-top : 40px ; font-family :  'Oswald', sans-serif;"> <small> Decouvrez l'une des meilleurs Triology de l'histoire des jeux videos <br> Nommé plusieurs fois comme étant le meilleur jeu de l'année <br>   vous l'avez compris aujourd'hui on parle de la legendaire MASS EFFECT qui a boulevrsé l'histoire des jeux RPG  </small> </p>
                          <a href="normandy.php" class="btn btn-success center-block" style="width:50%;margin-top:20px;margin-bottom:80px;">Plus d'infos </a>
                       </div>
                    </div>
                    <div class=" col-xs-12 col-sm-6">
                        <img src="image/accueil/shepard.jpg" class="img-responsiv" style="max-width: 100%;height:400px;">
                    </div>
               </div>
            </div>
	</section>
        
        <!---------Begin  Abonement------------>

        <section id="infos">
            <div class="container">
                <br><br><br><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h2>ABONNEZ-VOUS A NOTRE SITE</h2>
                            <p style="margin-top: -40px">En nous envoyant vos coordonnées , vous accepté de recevoir des actualités, et des informations sur les événements et promotions de notre site SUPERGIANT par e-mail <span class="yellow">en accord avec la Politique relative à la protection des données personnelles et aux cookies </span><br>                                de SUPERGIANT .
                            </p>
                            <p>Vous pouvez nous rejoindre sur les points de vente les plus proche de la ville de <span class="yellow">TIZI-OUZOU</span>.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hello">
                            <form method="post" action="" role="form">
                                <div class="row">
                                    
                                    
                                    <?php
                                   
                                    require 'fonction.php';
                                    echo "<div class='col-md-5'>";
                                    if(!connexion()){
                                        
                                        
                                        echo '<button type="submit" name="mybtn" class="btn btn-success button5 disabled">S\'abonner</button>';
                                        
                                        echo '<p style="height:25px;color:red;margin-top:15px;">Veuillez vous authentifier</p>';
                                           
                                       }else{
                                          
                                           $db = Database::connect();
                                           $id =intval($_SESSION['auth']['id']);
                                           $statement3 = $db->query("SELECT isAbonne FROM users WHERE id =".$id);
                                           $statement3 = $statement3->fetch();
                                           
                                           
                                         
                                           if(intval($statement3['isAbonne']) === 1){
                                               echo '<button type="submit" name="mybtn2" class="btn btn-success button5">se desabonner</button>';
                                               echo '<p style="height:25px;color:red;margin-top:15px;">Deja abonné</p>';
                                           
                                           }
                                           else{
                                               echo '<button type="submit" name="mybtn" class="btn btn-success button5">S\'abonner</button>';
                                           }
                                          
                                       }
                                       echo "</div>";

                                    
                                    ?>
                                    
                                  



                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </section>


        <!----------End Abonement------------->


        <!----------Begin Option------------->

        <section id="option">

            <div class="container">
                <div class="sub-divis-top"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="opt">
                            <i class="fas fa-truck"></i>
                            <h3>Livraison nationale</h3>
                            <p>livraison gratuite 100KM</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="opt">
                            <i class="fas fa-sync"></i>
                            <h3>Accepte échange</h3>
                            <p>Jeux PS4 et XBOX ONE uniquement </p>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="opt">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <h3>Remboursement Garentie</h3>
                            <p>Dans les 30 jours ( cas client pas satisfait )</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="opt">
                            <i class="fas fa-gift"></i>
                            <h3>Obtenez des cadeaux</h3>
                            <p>Pour plus de 10 jeux acheter ( 3 offerts )</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!----------End Option------------->


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
                                    <p>Supergiant.game@gmail.com</p>
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
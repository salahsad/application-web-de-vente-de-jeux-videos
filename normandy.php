<!DOCTYPE html>
<html>
    <head>

        <title>Supergiant</title>
        <meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">                    
        <link rel="stylesheet" href="css/bootstrap.min.css">  
        <!--Font-->              
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" href="css/accueil.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/liara.css">
        <!--Logo-->
        <link rel="stylesheet" href="font/css/all.min.css">
        <!--SCRIPT-->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
         
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
              </ul>
  
            <?php          
                session_start();
            ?>
             <ul class="nav navbar-nav navbar-right">
                            <?php if(isset($_SESSION['auth'])): ?>
                            <li  style="font-size:15px;"><a href=""><i style="font-size: 20px;" class="fa fa-user-circle" aria-hidden="true"></i><span><?php echo '   '; ?><?=  $_SESSION['auth']['username']  ?></span></a></li>
                           
                                      
                            <?php else: ?>
                            <li><a href="admin/login.php" class="btn-connect">Se connecter</a></li>
                            <li><a href="admin/inscription.php" class="btn-inscription">S'inscrire</a></li>
                            <?php endif; ?>
                        </ul>
            </div>
          </div>
        </nav>
        
        
      
    <!-----------End navbar------------->    
        
   

        <!-----------End navbar------------->    

<section id="jeux" >
<div class="container">
<div class="row">

<div class="col-md-3">
<img class="game1" src="image/article/effect2.jpg" alt="Mass Effect 2 sur PC">
<div class="XBOX"><i class="fab fa-xbox"></i> XBOX</div>
<button class="btn1" disabled>je commande</button>
<div class="prix2">28,5 <i class="fas fa-euro-sign"></i> </div>


</div>
<div class="col-md-9">
<div class="eto">
<h4 > Mass Effect 2 sur PC est un jeu de rôle futuriste dans lequel vous créez un personnage que vous envoyez dans l'espace pour accomplir différentes quêtes. Ce deuxième volet se déroule après les événements du premier et vous pourrez reprendre votre sauvegarde pour retrouver le commandant Shepard, le Normandy ainsi que son équipage et faire face à une nouvelle menace !</h4>
     <span class="r">Sortie :28 janv. 2010</span>
	 <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2" ></li>
</ol>

<div class="carousel-inner" role="list-box">
<div class="item active" >
<h3> "Personnages attachants avec des dialogue dynamique" </h3>
<h4> jeuxvideo.com<h4/>
</div>

<div class="item">
<h3> "élu meilleur jeu de l'année en 2010"  </h3>
<h4>  Video Games Awards   <h4/>
</div>

<div class="item">
<h3> System de combat souple avec un magnifique environnement </h3>
<h4>Official Xbox Magazine <h4/>
</div>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
<span class="glyphicon glyphicon-arrow-left"></span>
</a>

<a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
<span class="glyphicon glyphicon-arrow-right"></span>
</a>

      
       </div>
</div>
</div>
   
</section>




  <!----------Personnages------------->
<section id="#personnage" >
<div class="heading">
<h2> Les personnages </h2>
</div>
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="cr7">
<h4>  Le joueur incarne le commandant Shepard, officier des forces armées spéciales (N7) de l'Alliance interstellaire. De ses actions et décisions à bord de la frégate Normandy dépendra le sort de l'espèce humaine et de toute la galaxie ,. En dehors du Normandy, Shepard est toujours accompagné de deux membres de son équipage, à choisir en fonction des personnes embauchées au cours de l'aventure ou déjà présentes sur le vaisseau au début du jeu. Chacun a une personnalité et une classe différente. Il est possible d'entretenir des relations approfondies avec ces membres de l'équipage y compris une relation amoureuse si le joueur pousse dans la bonne direction le bon personnage.</h4>
</div>
</div>



<div class="col-md-9">

 <div id="demo" class="carousel slide text-center" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#demo" data-slide-to="0" class="active"></li>
<li data-target="#demo" data-slide-to="1"></li>
<li data-target="#demo" data-slide-to="2" ></li>
<li data-target="#demo" data-slide-to="3" ></li>
<li data-target="#demo" data-slide-to="4" ></li>

</ol>

<div class="carousel-inner" role="list-box">
<div class="item active" >
<img src ="image/article/liara.jpg" width="770" height="100"  >

</div>

<div class="item">
<img src ="image/article/thane.jpg" width="770" height="100" >

</div>

<div class="item">
<img src ="image/article/wrex.jpg" width="770" height="100"    >

</div>

<div class="item">
<img src ="image/article/garus.jpg"  width="770" height="100" >

</div>

<div class="item">
<img src ="image/article/zaed.jpg" width="770" height="300" >
</div>
<a class="left carousel-control" href="#demo" data-slide="prev" role="button">
</a>
<a class="right carousel-control" href="#demo" data-slide="next" role="button">
</a>
</div>
</div>

       </div>
</section>
        <!-- MASS EFFECT 1 -->
		
		
		<section id="jeux1" >
<div class="container">
<div class="row">

<div class="col-md-3">
<img class="game1" src="image/article/mass.jpg"  height="500"    alt="Mass Effect 2 sur PC">
<div class="XBOX1"><i class="fab fa-xbox"></i> XBOX</div>
<button class="btn2" disabled>je commande</button>
<div class="prix1">18,9 <i class="fas fa-euro-sign"></i> </div>
</div>
<div class="col-md-9">
<div class="eto">
<h4 > Mass Effect sur PC est un jeu de rôle futuriste dans lequel vous créez votre personnage que vous lancez ensuite dans un scénario extrêmement riche et vaste à travers la galaxie entière. Naviguez entre les différentes planètes et les différentes races qui les peuplent pour accomplir des quêtes et participez à des batailles intergalactiques.</h4>
     <span class="r">Sortie :5 juin. 2008</span>
	<div class="er">
<span class="heading"><br>Note des utilisateurs</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p style="font-family:'Tenali Ramakrishna', sans-serif">4.3 sur 300 reviews .</p>

</div>
<hr style="border:3px solid gray">
<div class="row">
  <div class="side">
    <div>5 etoiles</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>180 votes</div>
  </div>
  <div class="side">
    <div>4 etoiles</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>75 votes</div>
  </div>
  <div class="side">
    <div>3 etoiles </div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>25 votes</div>
  </div>
  <div class="side">
    <div>2 etoiles</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>5 votes</div>
  </div>
  <div class="side">
    <div>1 etoile</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>15 votes</div>
  </div>
</div>
    
      
       </div>
</div>
</div>
   
</section>
<section id="graphisme">
<div class="heading">
<h2> Les Graphismes </h2>
</div>

<div class="row">

<div class="col-md-9">
<img  src="image/article/gra.jpg"  width="100%" height="500">
</div>
<div class="col-md-3">

<p> En dépit de quelques bugs, Mass Effect  jouit d'une réalisation graphique de très haute volée.
 <br>Mais plus encore que l'aspect technique, c'est le design qu'il faut honorer ici. Inspiré et varié, 
 l'univers de Mass Effect est décidément toujours aussi vivant.<br> sans oublier une bande-son proche de la perfection.
 Que l'on se penche sur les doublages, les effets ou les thèmes musicaux, tout colle, tout contribue à vous plonger dans l'ambiance.</p>


</div>


</div>
</section>

<section id="jeux3" >

<div class="container">
<div class="row">

<div class="col-md-3  ">
<img class="game1" src="image/article/effect3.jpg"  height="500"    alt="Mass Effect 2 sur PC">
<div class="PC"><i class="fas fa-desktop"></i> PC</div>

  <button class="btn" disabled>je commande </button>
<div class="prix">32 <i class="fas fa-euro-sign"></i> </div>


</div>
<div class="col-md-9">
<div class="eto">
<h4 > Mass Effect 3 est un jeu de rôle futuriste sur PC où vous devez lutter contre les troupes de Cerberus, une organisation pro-humaine, et les terribles Moissonneurs. En parcourant la galaxie vous êtes amené à effectuer des choix qui ont une incidence sur la suite de l'aventure et sur l'issue de la guerre.</h4>
     <span class="r">Sortie :8 mars 2012</span>
	 <div class="testPlusMoins">        
                                                        <div class="les_plus">
                        <span class="h2 typo_2">Les plus</span>
                        <ul>
                      	  <li><span>Un univers et des dialogues d'une profondeur inouïe.</span></li>
						  <li><span>Un mélange action, tactique et RPG appréciable</span></li>
						  <li><span>Réalisation impériale</span></li>
						  <li><span>Mise en scène bluffante</span></li>
						  <li><span>De plus en plus chouette visuellement…</span></li>
						  <li><span>Superbe musique</span></li>
						  <li><span>Gameplay solide</span></li>
						  <li><span>Évènements passés pris en compte</span></li>                      
						  </ul>
                    </div>
                                        <div class="les_moins">
                      <span class="h2 typo_2">Les moins</span>
                       <ul class="rectangle-list moins">
                    	<li><span>Une I.A. des alliés pas tip-top</span></li>
						<li><span>Trop peu de nouveautés par rapport aux versions concurrentes</span></li>
						<li><span>Politique de DLC discutable</span></li>
						<li><span>Commande multifonctions pénible</span></li>
						                   	
						</ul>
                     </div>
                                <br class="clear">
                           </div>
	
	 
	 </div>
	 </div>
	</section>
	</section>
<section id="gameplay">
<div class="heading">
<h2> Gameplay </h2>
</div>

<div class="row">

<div class="col-md-3">
<img  src="image/article/game.jpg"  width="100%" height="200">
</div>
<div class="col-md-9">

<p> 
 Bioware propose une version dynamisée du gameplay . Cet accent mis sur l'action, et une simplification de l'interface, pourra surprendre, voire en décevoir certains, mais il faut garder à l'esprit que la progression et la coopération des personnages restent indispensables. Par ailleurs, le système de dialogue encore plus poussé se charge de vous scotcher fermement dans l'univers du jeu. On salue la disparition des phases en véhicules pour mieux regretter l'apparition du scan des planètes.
</p>
</div>


</div>
<hr style="border:3px solid black">
<div class="row">

<div class="col-md-3">
<img  src="image/article/sc.jpg"  width="100%" height="200">
</div>
<div class="col-md-9">

<p>On l'a dit et redit, la force de Mass Effect, c'est son univers, riche et cohérent de bout en bout, un véritable océan dans lequel il est facile de se noyer. Nettement plus sombre que le premier opus, Mass Effect vous confronte à des personnages et des situations ou bien et mal sont difficiles à distinguer avec à la clef des choix moraux aux conséquences assez lourdes.


 <br></p>


</div>


</div>


</section>
        <br><br><br><br>
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

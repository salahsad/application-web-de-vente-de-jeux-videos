<?php

    session_start();
    $isSuccess = false;
   function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }  

   if(!empty($_POST)) 
    {
        require 'database.php';
        
        $username =checkInput($_POST['username']);
        $email = checkInput($_POST['email']);
        $password = checkInput($_POST['password']);
        $password_confirm =checkInput($_POST['password_confirm']);
        $isSuccess = true;
        $emailText="";
        $errors = array();       
           
        if(empty($username) ||  !preg_match('/^[a-zA-Z0-9_]+$/',$username)){
            $errors[$username] ="Votre pseudo n'est pas valide (Alphanumérique)";
            $isSuccess = false;
        }
        else
        {
            $db = Database::connect();
            $statement = $db->prepare("SELECT id FROM users WHERE username = ?");           
            $statement->execute(array($username));
            $user = $statement->fetch();
            if($user){
                $errors[$username] = "Ce pseudo est deja pris";
                $isSuccess = false;
            }
        
            Database::disconnect();
            $emailText .= "Username : $username\n";
        }
        
        if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors[$email] = "Votre email n'est pas valide";
            $isSuccess = false;
        } 
        else
        {
            $db = Database::connect();
            $statement = $db->prepare("SELECT id FROM users WHERE email = ?");           
            $statement->execute(array($email));
            $user = $statement->fetch();
            if($user){
                $errors[$email] = "Cet email est deja utilisé";
                $isSuccess = false;
            }
            Database::disconnect();
            $emailText .= "email : $email\n";
        }

        if(empty($password) || $password != $password_confirm){
            $errors[$password] = "Les coordonnées saisies sont incorrectes";
            $isSuccess = false;
        }

       
      
        function str_random($length)
        {
            $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
            return substr(str_shuffle(str_repeat($alphabet,$length)),0 , $length);
        
        }    
     
      if($isSuccess) 
      {
          $db = Database::connect();
          
          $statement = $db->prepare("INSERT INTO users (username, email, password , confirmation_token ,isAbonne) values(?, ?, ?, ? , ?)");
          $password2 = password_hash($_POST['password'],PASSWORD_BCRYPT);       
          $token = str_random(10);
          $statement->execute(array($username,$email,$password2 ,$token , false));
          $headers = "From: $username <$email>\r\nReplay-To: $email";
          $user_id = $db->lastInsertId();
          mail($email,'Confirmation de la creation du compte',$emailText ."\r\n". "Afin de valide votre compte veuillez cliquer sur ce lien\n\nhttp://localhost/CodeFinal/admin/confirm.php?id=$user_id&token=$token", $headers);
          $username = $email = $password = $password_confirm = "";
          $_SESSION['flash']['success'] = "Un email de confirmation vous a été envoyer pour valider votre compte";
          header("Location: login.php");
          exit();
          
          Database::disconnect();
      }

      
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
        <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Pacifico&family=Press+Start+2P&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" href="../css/nav.css">
        <link rel="stylesheet" href="../css/login.css">
        <!--Logo-->
        <link rel="stylesheet" href="../font/css/all.min.css">
        <!--SCRIPT-->
        <script src="../js/jquery-1.11.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    
    <body>
       
        
        
         
        <style>
            #inscription input[type=text] , #inscription input[type=password] , #inscription input[type=email]{
                color: #777;
                font-size: 15px;
            }
        </style>
            <section id="inscription">
        <div class="container">
            <div class="row">

                <div class="supergiant">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Supergiant <span class="jeux">inscription</span><span class="blue point">.</span>io</h2>
                        </div>
                        <div class="col-md-6">
                            <h3>Créer un compte</h3>
                        </div>
                        <div class="col-md-6">
                            <h4>ou <span class="blue"><a href="connecter.php">se connecter</a></span></h4>
                        </div>
                    </div>

                </div>
                

               <?php if(!empty($errors)): ?>
                
                   <div class="alert alert-danger" style="padding:10px 20px;background:	#DC143C;color:white">
                        <p>Les donnees entrees sont incorrectement</p>
                        <br>
                        <?php foreach($errors as $error): ?>
                            <ul>
                               <li><?= $error; ?></li>
                            </ul>
                        <?php endforeach; ?> 
                        <br>   
                   </div>
               
               <?php  endif;  ?>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <form id="contact-form" method="POST" action="" role="form">
                        <div class="row">
                            
                             <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="">Pseudo</label>
                                <input type="text" name="username" class="form-control btn-lg">                              
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="email">Email </label>
                                <input type="text" id="email" name="email" class="form-control btn-lg">                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="password">Mot de passe </label>
                                <input type="password" id="password" name="password" class="form-control btn-lg">                             
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="password_confirm">Confimer le mot de passe </label>
                                <input type="password" id="password_confirm" name="password_confirm" class="form-control btn-lg">                               
                            </div>
                            
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p class="code">En créant un compte vous acceptez les <span class="blue">Conditions Générales de Vente </span> et <span class="blue">la Politique de Confidentialité.</span>

                                </p>
                            </div>

                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg" id="creer-compte">Créer le compte</button>
                            </div>



                        </div>
                    </form>
                </div>
            </div>









            <br><br><br><br><br>
            <br><br><br><br><br>

            <br><br><br><br><br>










    </section>
        
        
        
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
    </body>
</html>
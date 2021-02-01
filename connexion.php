<?php
session_start();


$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_html', 'root', '');

if(isset($_POST['connexion']))
{
    $pseudo_connect = htmlspecialchars($_POST['pseudo_connect']);
    $mot_de_passe_cree_connect = md5($_POST['mot_de_passe_cree_connect']);
    
    if(!empty($pseudo_connect) AND !empty($mot_de_passe_cree_connect))
    {
       $requser = $bdd->prepare("SELECT * FROM inscrits WHERE pseudo = ? AND mot_de_passe = ?");
       $requser->execute(array($pseudo_connect, $mot_de_passe_cree_connect));
       $userexist = $requser->rowCount();
       if($userexist == 1)
       {
        //test
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        $_SESSION['email'] = $userinfo['email'];
         //fintest
         header("Location: site.php?id=".$_SESSION['id']);
       }
       else
       {
        $erreur = "Mauvais pseudo ou mot de passe !";
       }
    }
    else
    {
        $erreur = "Veuillez complétez tous les champs !";
    }
}



?>



<!DOCTYPE html>
    
<html lang="fr">
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="Style2.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="contact-title">
        <h1>EPSILON E-SPORT</h1>
        <h2>Connexion</h2>
      </div>
      <div class="contact-form">
      <form class="contact-form" method="post" action="connexion.php">
      <input type="text" name="pseudo_connect" class="form-control" placeholder="Votre pseudo" value="<?php if(isset($pseudo_connect)) { echo $pseudo_connect; } ?>"><br>
      
      <input type="password" name="mot_de_passe_cree_connect" class="form-control" placeholder="Votre mot de passe"><br>
      
      <input type="submit" value="Se connecter" class="form-control submit" name="connexion">
    
            </form>
      <span>
            <?php
      if(isset($erreur))
      {
        echo '<font color="red">'.$erreur.'</font>';
      }
      ?></span><br><br>
      <a href="index.php">S'inscrire !</a>
            
        </div>
        
    </body>
    
</html>
  
  
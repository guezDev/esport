<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_html', 'root', '');



if(isset($_POST['submit']))
{
  $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mot_de_passe_cree = md5($_POST['mot_de_passe_cree']);
        $confirmation = md5($_POST['confirmation']);
        
        
  
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['mot_de_passe_cree']) AND !empty($_POST['confirmation']))
    {
      $reqpseudo = $bdd->prepare("SELECT * FROM inscrits WHERE pseudo = ?");
          $reqpseudo->execute(array($pseudo));
          $mailpseudo = $reqpseudo->rowCount();
          if($mailpseudo == 0)
          {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          
            if(strlen($_POST['mot_de_passe_cree']) >= 12)
          
        {
            if($mot_de_passe_cree==$confirmation)
            {
              $requete = "INSERT INTO inscrits (nom, prenom, email, pseudo, mot_de_passe) VALUES ('$nom', '$prenom', '$email', '$pseudo', '$mot_de_passe_cree')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($nom, $prenom, $email, $pseudo, $mot_de_passe_cree));
              $error = "Votre compte a bien été créé, vous pouvez vous connecter !";
              
            }
            else
            {
              
               $erreur = "Les mots de passe doivent être identiques !";
            }
            
            
        }
        else
        {
          
           $erreur = "Le mot de passe doit contenir au moins 12 caractères !";  
            
        }
          
          
          
            
        }
        else
        {
            $erreur = "Cette adresse e-mail n'est pas valide !";
        }            
          }
          else{
            $erreur = "Pseudo déjà existant !";
          }
        
        
        
    }


    
}


?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <title>Page d'inscription</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style1.css">
</head>

<body>


    <div class="contact-title">
        <h1>EPSILON E-SPORT</h1>
        <h2>Inscription</h2>
    </div>
    <div class="contact-form">
        <form class="contact-form" method="post" action="index.php">
            <!--bla-->

            <input type="text" name="nom" class="form-control" placeholder="Nom" value="<?php if(isset($nom)) { echo $nom; } ?>" required><br>

            <input type="text" name="prenom" class="form-control" placeholder="Prénom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" required><br>

            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php if(isset($email)) { echo $email; } ?>" required><br>

            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" required><br>

            <input type="password" name="mot_de_passe_cree" class="form-control" placeholder="Mot de Passe" required><br>

            <input type="password" name="confirmation" class="form-control" placeholder="Confirmez mot de passe " required><br>

            <input type="submit" class="form-control submit" value="S'inscrire" name="submit">

        </form>

    </div>
    <span><?php
      if(isset($erreur))
      {
        echo '<font color="red" font-weight="bolder">'.$erreur.'</font>';
      }
      if(isset($error))
      {
        echo '<font color="green" font-weight="bolder">'.$error.'</font>';
      }
      
      
      ?><br></span>
    <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous !</a></p>



</body>

</html>

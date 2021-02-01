<?php
session_start();

$bdd = new PDO('mysql:host=db765173989.hosting-data.io;dbname=db765173989', 'dbo765173989', 'BD648KDH');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
  $getid = intval($_GET['id']);
  $requser = $bdd->prepare('SELECT * FROM inscrits WHERE id = ?');
  $requser->execute(array($getid));
  $userinfo = $requser->fetch();
}
?>

<?php

$bdd = new PDO('mysql:host=db765173989.hosting-data.io;dbname=db765173989', 'dbo765173989', 'BD648KDH');
if(isset($_POST['submit']))
{
    $jeu1 = htmlspecialchars($_POST['jeu1']);
    $jeu2 = htmlspecialchars($_POST['jeu2']);
    $jeu3 = htmlspecialchars($_POST['jeu3']);
    $niveau1 = htmlspecialchars($_POST['niveau1']);
    $niveau2 = htmlspecialchars($_POST['niveau2']);
    
    
    if(empty($jeu1) AND empty($jeu2) AND empty($jeu3))
    {
        $error="Vous devez choisir au moins un jeu et votre niveau";
    }
    else
    {
        $niveau3 = htmlspecialchars($_POST['niveau3']);
        if(!empty($niveau1) OR !empty($niveau2) OR !empty($niveau3))
        {
            //jeu1
            if($jeu1 == "LEAGUE OF LEGEND")           
            {
                if($niveau1 == "iron" OR $niveau1 == "bronze" OR $niveau1 == "silver" OR $niveau1 == "gold" OR $niveau1 == "platine" OR $niveau1 == "diamant" OR $niveau1 == "master" OR $niveau1 == "grandmaster" OR $niveau1 == "challenger")
                {
                    $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu1', '$niveau1')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu1, $niveau1));
              $erreur = "Le premier jeu a été envoyé";
                }
                else{
                    $error= "Erreur au 1";
                }
            }
            elseif($jeu1 == "CSGO")
            {
                if($niveau1 == "silver" OR $niveau1 == "gold nova" OR $niveau1 == "AK" OR $niveau1 == "sherif" OR $niveau1 == "eagle" OR $niveau1 == "eagle master" OR $niveau1 == "master guardian" OR $niveau1 == "global elite")
                {
                $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu1', '$niveau1')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu1, $niveau1));
              $erreur = "Le premier jeu a été envoyé";
                }
                else
                {
                    $error= "Erreur au 1";
                }
            }
            elseif($jeu1 == "OVERWATCH")
            {
                if($niveau1 == "bronze" OR $niveau1 == "silver" OR $niveau1 == "gold" OR $niveau1 == "platine" OR $niveau1 == "diamant" OR $niveau1 == "master" OR $niveau1 == "grandmaster")
                {
                    $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu1', '$niveau1')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu1, $niveau1));
              $erreur = "Le premier jeu a été envoyé";
                }
                else
                {
                   $error= "Erreur au 1"; 
                }
                
            }
            else
            {
                $error= "Erreur au 1";
            }
            ?><br>
            <?php
            //jeu2
            if($jeu2 == "LEAGUE OF LEGEND")
            {
                if($niveau2 == "iron" OR $niveau2 == "bronze" OR $niveau2 == "silver" OR $niveau2 == "gold" OR $niveau2 == "platine" OR $niveau2 == "diamant" OR $niveau2 == "master" OR $niveau2 == "grandmaster" OR $niveau2 == "challenger")
                {
                    $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu2', '$niveau2')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu2, $niveau2));
              $erreur = "Le deuxième jeu a été envoyé";
                }
                else
                {
                    $error= "Erreur au 2";
                }
                
            }
            elseif($jeu2 == "CSGO")
            {
                if($niveau2 == "silver" OR $niveau2 == "gold nova" OR $niveau2 == "AK" OR $niveau2 == "sherif" OR $niveau2 == "eagle" OR $niveau2 == "eagle master" OR $niveau2 == "master guardian" OR $niveau2 == "global elite")
                {
                   $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu2', '$niveau2')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu2, $niveau2));
              $erreur = "Le deuxième jeu a été envoyé";
                }
                else
                {
                    $error= "Erreur au 2";
                }
                
            }
            elseif($jeu2 == "OVERWATCH")
            {
                if($niveau2 == "bronze" OR $niveau2 == "silver" OR $niveau2 == "gold" OR $niveau2 == "platine" OR $niveau2 == "diamant" OR $niveau2 == "master" OR $niveau2 == "grandmaster")
                {
                    $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu2', '$niveau2')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu2, $niveau2));
              $erreur = "Le deuxième jeu a été envoyé";
                }
                else
                {
                    $error="Erreur au 2";
                }
                
            }
            elseif(empty($jeu2) AND empty($niveau2))
            {
                
            }
            else
            {
                $error= "Erreur au 2";
            }
            ?><br>
<?php

//jeu3
            if($jeu3 == "LEAGUE OF LEGEND")

            {
                if($niveau3 == "iron" OR $niveau3 == "bronze" OR $niveau3 == "silver" OR $niveau3 == "gold" OR $niveau3 == "platine" OR $niveau3 == "diamant" OR $niveau3 == "master" OR $niveau3 == "grandmaster" OR $niveau3 == "challenger")
                {
                    $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu3', '$niveau3')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu3, $niveau3));
              $erreur = "Le troisième jeu a été envoyé";
                }
                else
                {
                    $error= "Erreur au 3";
                }
                
            }
            elseif($jeu3 == "CSGO")
            {
                if($niveau3 == "silver" OR $niveau3 == "gold nova" OR $niveau3 == "AK" OR $niveau3 == "sherif" OR $niveau3 == "eagle" OR $niveau3 == "eagle master" OR $niveau3 == "master guardian" OR $niveau3 == "global elite")
                {
                    $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu3', '$niveau3')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu3, $niveau3));
              $erreur = "Le troisième jeu a été envoyé";
                }
                else
                {
                    $error= "Erreur au 3";
                }
                
            }
            elseif($jeu3 == "OVERWATCH")
            {
                if($niveau3 == "bronze" OR $niveau3 == "silver" OR $niveau3 == "gold" OR $niveau3 == "platine" OR $niveau3 == "diamant" OR $niveau3 == "master" OR $niveau3 == "grandmaster")
                {
                    $requete = "INSERT INTO jeux (jeu, niveau) VALUES ('$jeu3', '$niveau3')";
              $insert=$bdd->prepare($requete);
              $insert->execute(array($jeu3, $niveau3));
              $erreur = "Le troisième jeu a été envoyé";
                }
                else
                {
                    $error= "Erreur au 3";
                }
                
            }
            elseif(empty($jeu3) AND empty($niveau3))
            {
                
            }
            else
            {
                $error= "Erreur  au 3";
            }

        }
        else
        {
            $error= "Vous devez aussi indiquer votre niveau";
        }
    }
}
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>formulaire jeux</title>
            <link rel="stylesheet" href="Style3.css">
            <meta charset="utf-8">
        </head>
        <body>
            <div>
            <ul>
                <li>LEAGUE OF LEGEND (niveaux: iron, bronze, silver, gold, platine, diamant, master, grandmaster, challenger)</li>
                <li>CSGO (niveaux: silver, gold nova, AK, sherif, eagle, eagle master, master guardian, global elite)</li>
                <li>OVERWATCH (niveaux: bronze, silver, gold, platine, diamant, master, grandmaster)</li>
            </ul><br/>
            <p>Remplissez ce formulaire en tenant compte de la liste ci-dessus</p>
            <p>(Choisissez les jeux auxquels vous jouez et votre niveau à côté)</p>
            
            <form method="post" action="formjeux.php" >
            <table>
                <tr>
                    <td>
                        1. <input type="text" name="jeu1" placeholder="Jeu 1" value="<?php if(isset($jeu1)) { echo $jeu1; } ?>">
                    </td>
                    <td>
                        <input type="text" name="niveau1" placeholder="Niveau" value="<?php if(isset($niveau1)) { echo $niveau1; } ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        2. <input type="text" name="jeu2" placeholder="Jeu 2" value="<?php if(isset($jeu2)) { echo $jeu2; } ?>">
                        
                    </td>
                    <td>
                        <input type="text" name="niveau2" placeholder="Niveau" value="<?php if(isset($niveau2)) { echo $niveau2; } ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        3. <input type="text" name="jeu3" placeholder="Jeu 3" value="<?php if(isset($jeu3)) { echo $jeu3; } ?>">
                        
                    </td>
                    <td>
                        <input type="text" name="niveau3" placeholder="Niveau" value="<?php if(isset($niveau3)) { echo $niveau3; } ?>">
                    </td>
                </tr>
                
                    
                
                
            </table>
            <input type="submit" name="submit" value="Soumettre">
            </form><br/>
            <p>
            <?php
                    if(isset($error))
                    {
                        echo '<font color="red">'.$error.'</font>';
                    }
                    ?></p><br>
                    <p>
            <?php
                    if(isset($erreur))
                    {
                        echo '<font color="green">'.$erreur.'</font>';
                    }
                    ?>
                    </p>
            
            </div>
        </body>
    </html>
    
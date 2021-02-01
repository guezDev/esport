<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_html', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
  $getid = intval($_GET['id']);
  $requser = $bdd->prepare('SELECT * FROM inscrits WHERE id = ?');
  $requser->execute(array($getid));
  $userinfo = $requser->fetch();
}
?>


<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css" />
    <title> EpsiLon Esports </title>



</head>

<body>

    <h2 id="jeux-1"> Nouveautées:</h2>
    <h2 id="jeux-2"> Top Des Jeux:</h2>
    <h2 id="lan-1"> Prochaines LAN:</h2>
    <h2 id="lan-2"> Inscription LAN:</h2>
    <h2 id="discussion-1"> Questions/Réponse:</h2>
    <h2 id="discussion-2"> Messages:</h2>
    <div id="Vosjeux">
        <h2 id="profil-1"> Vos Jeux:</h2>
        <div class="Choixjeux">
            <img id="photojeux1" src="lol.jpg" alt="lol">
            <form id="choix1"  method="post" action="traitement.php">
                
            </form>
            <img id="photojeux2" src="over.jpg" alt="overwatch">
            <form id="choix2" method="post" action="traitement.php">
                
            </form>
            <img id="photojeux3" src="csgo.jpg" alt="csgo">
            <form id="choix3" method="post" action="traitement.php">
                
            </form><br>
            <a href="formjeux.php">Cliquez ici</a>

            
        </div>
    </div>
    <h2 id="profil-2"> Gestion:</h2>

    <div class="contener_slideshow">
            <div class="contener_slide">
                <div class="slid_1">
                    <img src="Imagelol.png" alt="lol">
                </div>
                <div class="slid_2">
                    <img src="ImageProjet2.jpg" alt="over">
                </div>
                <div class="slid_3">
                    <img src="ImageProjet3.jpg" alt="Hearthstone">
                </div>
                <div class="slid_4">
                    <img src="ImageProjet4.jpg" alt="Csgo">
                </div>
                <div class="gradient">
                    <img id="logo" src="LAN.jpg" alt="LAN">
                    <div class="dropdown">
                        <button id="a" class="dropbtn">Jeux</button>
                        <div id="a1" class="dropdown-content">
                            <a href="#jeux-1">Les nouveautées</a>
                            <a href="#jeux-2">Le TOP des Jeux</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button id="b" class="dropbtn">Lan</button>
                        <div id="b1" class="dropdown-content">
                            <a href="#lan-1">Les Prochaines LAN</a>
                            <a href="#lan-2">Inscription LAN</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button id="c" class="dropbtn">Discussion</button>
                        <div id="c1" class="dropdown-content">
                            <a href="#discussion-1">Questions/Réponses</a>
                            <a href="#discussion-2">Messages</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button id="d" class="dropbtn">Profil</button>
                        <div id="d1" class="dropdown-content">
                            <a href="#profil-1">Vos Jeux</a>
                            <a href="#profil-2">Gestion</a>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</body>
</html>

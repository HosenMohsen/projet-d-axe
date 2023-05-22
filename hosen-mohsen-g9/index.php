<?php


$pdo = new PDO('mysql:host=localhost;dbname=esport-blog', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if (session_status() === PHP_SESSION_NONE){
  session_start();
};

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - MyEsportBlog</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-32x32.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>




<body id="Body">

  <div class="logo_pen">
    <i id="Pen" class="fa-solid fa-pen-to-square pen"></i>
  </div>

  <main>
    <div id="sideNavigation" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="/index.php">Accueil</a>
      <a href="#">Notifications</a>
      <a href="#"> Messages</a>
      <a href="/profil.php"> Profil</a>
      <a href="index2.php"> PHP</a>
    </div>
    <nav class="topnav">
      <a href="#" onclick="openNav()">
        <svg width="30" height="30" id="icoOpen" class="svg">
          <path d="M0,5 30,5" stroke="#000" stroke-width="5" />
          <path d="M0,14 30,14" stroke="#000" stroke-width="5" />
          <path d="M0,23 30,23" stroke="#000" stroke-width="5" />
        </svg>
      </a>
    </nav>

    <div>
      <img class="logo_MEB" src="./images/MyEsportBlog.png" alt="logo MyEsportBlog">
    </div>


    <div class="grande_parti">
      <div class="parti_gauche">
        <div>
          <ul id="Nav" class="nav flex-column">
            <li class="nav-item">
              <div class="nav_slide">
                <i class="fa-solid fa-house"></i>
                <a class="nav-link active" href="index.php">Accueil</a>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav_slide">
                <i class="fa-solid fa-bell"></i>
                <a class="nav-link" href="#">Notifications</a>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav_slide">
                <i class="fa-solid fa-message"></i>
                <a class="nav-link" href="#">Messages</a>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav_slide">
                <i class="fa-solid fa-user"></i>
                <a class="nav-link" href="profil.php"> Profil</a>
              </div>
          </ul>
        </div>
      </div>


      <div class="parti_centrale">




        <form action="" method='POST'>
        <input type="text" name="recherche" placeholder="Rechercher des tweets">
        <button type="submit" name="envoyer"> rechercher</button>
        </form>
        <div>
          <img class="avatar avatar_big" src=" ./images/yone.jpg" alt="Logo Karmine Corp">
          <?php
          if(isset($_SESSION['id_utilisateur'])){
            echo "Bienvenue " .$_SESSION['pseudo'] . " sur MyEsportBlog " . "<br> <br>" ;
            echo "<a href='deconnexion.php' class='btn btn-secondary'> Déconnexion  </a>";
          };
          ?>
        </div>
        <div class="center banner">
          <p> Pour toi </p> 
        </div>
        <br> <br>
        <ul id="tag_list">
        <li id="btn1" class="btn btn-secondary" data-tag="League_of_legends">  League of Legends </li>
        <li id="btn2" class="btn btn-secondary" data-tag="LEC">   LEC </li>
        <li id="btn3" class="btn btn-secondary" data-tag="Valorant">   Valorant </li>
        <li id="btn4" class="btn btn-secondary" data-tag="Europe">   Europe  </li>
        <li id="btn5" class="btn btn-secondary" data-tag="VCT">  VCT </li>
        <li id="btn6" class="btn btn-secondary" data-tag="Karmine Corp">   Karmine Corp </li>
        </ul>

        <ul id="reset_list">
        <li id="btn7" class="btn btn-secondary" data-tag="Reset">  Reset </li>
        </ul>

        <div class="card_container">
          <div class="card_avatar karmine_logo">
            <img class="avatar_karmine" src="./images/Karmine.svg" alt="Logo Karmine Corp">
          </div>
          <div class="card_text">
            <h2 id="H2" class="h2">
              Karmine Kcorp
            </h2>
            <p>
              Aujourd'hui match à 21h00 contre LDLC. Soutenez-nous avec #Kcorp
            </p>


            <div class="card_logo">
              <i id="Heart" class="fa-regular fa-heart heart"></i>
              <i class="fa-regular fa-comment comment"></i>
              <i class="fa-regular fa-share-from-square share"></i>
            </div>
          </div>
          <div class="card_img">
            <img src="./images/KcMatch.jpeg" alt="Dessin de la Karmine Corp">
          </div>
        </div>


        <div class="card_container">
          <div class="card_avatar karmine_logo">
            <img class="avatar_karmine" src="./images/Karmine.svg" alt="Logo Karmine Corp">
          </div>
          <div class="card_text">
            <h2 class="h2">
              La meilleure bot lane de la LEC ?
            </h2>
            <p>
              Avec leurs performances sont-ils la meilleur botlane de la LEC ? En tout cas j'ai hâte de les voir jouer
              ce week-end
            </p>
            <div class="card_logo">
              <i id="Heart2" class="fa-regular fa-heart heart"></i>
              <i class="fa-regular fa-comment comment"></i>
              <i class="fa-regular fa-share-from-square share"></i>
            </div>
          </div>
          <div class="card_img">
            <img src="./images/Hans_Mikyx.jpg" alt="Photo de Hans Sama et Mikyx">
          </div>
        </div>

        <div class="card_container">
          <div class="card_avatar karmine_logo">
            <img class="avatar_karmine" src="./images/Karmine.svg" alt="Logo Karmine Corp">
          </div>
          <div class="card_text">
            <h2 class="h2">
              New Zeri Skin - Zeri rose fanée
            </h2>
            <p>
              Voici un tout nouveau skin sur le champion zeri. Il s'agit de zeri rose fanée.
            </p>
            <div class="card_logo">
              <i id="Heart3" class="fa-regular fa-heart heart"></i>
              <i class="fa-regular fa-comment comment"></i>
              <i class="fa-regular fa-share-from-square share"></i>
            </div>
          </div>
          <div class="card_img">
            <img src="./images/zeri.jpg" alt="Skin league of legends de zeri">
          </div>
        </div>

        <?php

if (isset($_POST['tweet'])){


  $maxsize = 2000000;
  if($_FILES['upload']['error'] > 0)
  {
    echo "une erreur";
    die;
  }
 
  $filesize = $_FILES['upload']['size'];
/*   echo $filesize; */

  if ($filesize > $maxsize) {
    echo "le fichier est trop volumineux";
    die;
  }

  $filename = $_FILES['upload']['name'];
  /* echo $filename; */
  $tmpname = $_FILES['upload']['tmp_name'];
  $filesotck = "./images/" . $filename;
  $resultat = move_uploaded_file($tmpname, $filesotck);


  $_POST['message'] = addslashes($_POST['message']); 
 $pdo->exec("INSERT INTO tweet (message, date_heure_message, tag, image) VALUES ('$_POST[message]', NOW(), '$_POST[tag]', '$filesotck')");


  

}

if (isset($_GET['idtweet'])){
$pdo->exec("DELETE FROM tweet WHERE id_tweet= '$_GET[idtweet]'");
}

      if (isset($_POST['envoyer'])){
 $r = $pdo->query("SELECT * FROM tweet WHERE message LIKE '%$_POST[recherche]%' ORDER BY date_heure_message DESC");
 while($message = $r->fetch(PDO::FETCH_ASSOC)){

  echo "<div class='card_container card_avatar'>";
  echo $_SESSION['pseudo'] . ' :<br>' . $message['message'] . '<br> <br>';
  echo $message['date_heure_message'] . '<br>';
  echo "<a href='index.php?idtweet= ". $message['id_tweet'] ."'<i class='fa-solid fa-trash'></i> </a>";

  echo "</div>";
}

}  
else {
$r = $pdo->query('SELECT * FROM tweet ORDER BY date_heure_message DESC');
while($message = $r->fetch(PDO::FETCH_ASSOC)){

    echo "<div class='card_container ".$message['tag'] . "'>";
    echo "<div class='card_text'>";
    echo $_SESSION['pseudo'] . ' :<br>' . $message['message'] . '<br>';
    echo "<div class='card_logo'>";
    echo "<i class='fa-regular fa-heart heart'></i>";
    echo "<i class='fa-regular fa-comment comment'></i>";
    echo "<i class='fa-regular fa-share-from-square share'></i>";
    echo "<a href='index.php?idtweet= ". $message['id_tweet'] ."'<i class='fa-solid fa-trash'></i> </a>" . "<br>";
    echo "</div>";
    echo "</div>";
    echo "<div class='card_img'>";
    if ($message['image'] != NULL){
      echo '<img src="'.$message['image'].'">'; 
      }
    echo "</div>";
    
    echo "<div class='light'>";
    echo $message['date_heure_message'] . '<br>';
    
    echo "</div>";
    echo "<br>";
    echo $message['tag'];
    echo "</div>";

    

 }
}

?>

      </div>


      <div class="parti_droite">
        <ul class="nav flex-column nav_droite">
          <li class="nav-item">
            <a class="nav-link active" href="#">LEC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hans Sama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">G2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Bo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Vitality</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Karmine Corp</a>
        </ul>
      </div>
    </div>



    <div id="Modal" class="modal">

      <div class="contenu_modal">
        <div class="avatar">
          <img class="avatar_small logo_form" src="./images/Karmine.svg" alt="Logo Karmine Corp">
          <p class="p_form"> Karmine Corp</p>
        </div>
        <span class="close">&times;</span>
        <form method="post" enctype="multipart/form-data"> 
          <label for="text"> Une histoire à raconter en 300 caractères max ?</label>
          <textarea name="message" id="Message" cols="30" rows="20" placeholder="Raconte ton histoire" minlength="1" required="required" ></textarea>
          <label for=""> Choissez tag</label>
          <select name="tag" id="nav_tag">
          <option value="League_of_legends">League of Legends </option>
          <option value="LEC"> LEC</option>
          <option value="Valorant"> Valorant</option>
          <option value="Europe"> Europe</option>
          <option value="VCT"> VCT</option>
          <option value="Karmine Corp"> Karmine Corp</option>
          </select>
          </label>
          <input type="file" name="upload"  accept = " .jpeg, .png, .jpg, .gif"> 
          <br>
          <input type="submit" value="Poster" name="tweet">
        </form>
      </div>
    </div>

    <?php if(!isset($_SESSION['id_utilisateur'])){
    ?>
    <div id="Pop_up" class="pop_up">
      <div class="contenu_modal">
        <h2> Pas encore connectés</h2>
        <form action="./connection.php">
          <button class="form_button" type="submit"> Connexion</button>
        </form>
        <form action="./inscription.php">
          <button class="form_button" type="submit"> Inscription</button>
        </form>
      </div>
    </div> <?php } ?>
     

  </main>

  <footer>
  </footer>
  <script src="https://kit.fontawesome.com/30e89f8594.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
  <script src="./js/index.js"></script>
</body>



</html>


 <?php

 $erreur = null;

 if (isset($_POST['inscription'])){ 

  $_POST['nom'] = addslashes($_POST['nom']);
  $_POST['pseudo'] = addslashes($_POST['pseudo']);
  $_POST['adresse_mail'] = addslashes($_POST['adresse_mail']);
  $_POST['mot_de_passe'] = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
  $pdo->exec("INSERT INTO utilisateur (nom, pseudo, adresse_mail, age, mot_de_passe) VALUES ('$_POST[nom]', '$_POST[pseudo]', '$_POST[adresse_mail]', '$_POST[age]', '$_POST[mot_de_passe]')");
} 




?> 




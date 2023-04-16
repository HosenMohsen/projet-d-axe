<?php
$pdo = new PDO('mysql:host=localhost;dbname=esport-blog', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil - MyEsportBlog</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-32x32.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


  <div id="sideNavigation" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/index.php">Accueil</a>
    <a href="#">Notifications</a>
    <a href="#"> Messages</a>
    <a href="/profil.php"> Profil</a>
  </div>
  <nav class="topnav">
    <a href="#" onclick="openNav()">
      <svg width="30" height="30" id="icoOpen" class="svg2">
        <path d="M0,5 30,5" stroke="#000" stroke-width="5" />
        <path d="M0,14 30,14" stroke="#000" stroke-width="5" />
        <path d="M0,23 30,23" stroke="#000" stroke-width="5" />
      </svg>
    </a>
  </nav>


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
              <a class="nav-link" href="./profil.php"> Profil</a>
            </div>
        </ul>
      </div>
    </div>
    <div class="parti_centrale_profil">
      <div class="banner">
        <div class="banner_img">
          <img class="banner_img" src="./images/banner_jv.png" alt="banière de la Karmine Corp">
        </div>
        <div class="banner_avatar">
          <img class="banner_logo" src="./images/yone.jpg" alt="personnage de league of legends Yone">
        </div>
        <div class="banner_text">
        <?php
          if(isset($_SESSION['id_utilisateur'])){
            echo "Bienvenue " .$_SESSION['pseudo'] . " sur MyEsportBlog" ;
            echo "<a href='deconnexion.php' class='btn btn-primary'> Déconnexion  </a>";
          };
          
          ?>
          <p> 20 ans </p>
          <p> Fan de la Karmine Corp</p>
          <p> J'aime aussi les chats</p>
          <p> <strong> 50 </strong> abonnement <strong> 15</strong> abonnés</p>
        </div>
      </div>

      <div class="card_container">
        <div class="card_avatar karmine_logo">
          <img class="avatar_profil" src="./images/yone.jpg" alt="personnage de league of legends yone ">
        </div>
        <div class="card_text">
          <h2 class="h2">
            La meilleur bot lane de la LEC ?
          </h2>
          <p>
            Avec leurs performances sont-ils la meilleur botlane de la LEC ? En tout cas j'ai hâte de les voir jouer
            ce week-end
          </p>
          <div class="card_logo">
            <i class="fa-regular fa-trash-can trash"></i>
            <i class="fa-regular fa-heart heart"></i>
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
          <img class="avatar_profil" src="./images/yone.jpg" alt="Logo Karmine Corp">
        </div>
        <div class="card_text">
          <h2 class="h2">
            DK Kia Deft
          </h2>
          <p>
            Le champion du monde 2022 à rejoins Damwon kai !
            C'est potentiellement la prochaine équipe qui va gagner les Worlds.
          </p>
          <div class="card_logo">
            <i class="fa-regular fa-trash-can trash"></i>
            <i id="Heart3" class="fa-regular fa-heart heart"></i>
            <i class="fa-regular fa-comment comment"></i>
            <i class="fa-regular fa-share-from-square share"></i>
          </div>
        </div>
        <div class="card_img">
          <img src="./images/deft.jpg" alt="Joueur professionnel de league of legends">
        </div>
      </div>
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


  <div id="Supp" class="supp">
    <div class="contenu_supp">
      <div>
        <p class="croix">&times;</p>
      </div>
      <p> Voulez-vous supprimez ce post ?</p>
      <button id="Btn_oui" class="btn  btn-secondary m-4"> Oui </button>
      <button id="Btn_non" class="btn btn-secondary  m-4"> Non </button>
    </div>
  </div>




  <script src="https://kit.fontawesome.com/30e89f8594.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="./js/profil.js"> </script>

</body>

</html>



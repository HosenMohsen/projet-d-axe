<?php
$pdo = new PDO('mysql:host=localhost;dbname=esport-blog', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

session_start();
if (isset($_GET['idtweet'])){
  $pdo->exec("DELETE FROM tweet WHERE id_tweet= '$_GET[idtweet]'");
  }
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
              <?php
                if (isset($_SESSION['pseudo'])){
                echo  "<a class='ul_pseudo' href='profil.php?pseudo=". $_SESSION['pseudo'] ."' >" . "Profil" . "</a>";  
                }
                ?>
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
        <p> 20 ans </p>
          <p> Fan de la Karmine Corp</p>
          <p> J'aime aussi les chats</p>
          <p> <strong> 50 </strong> abonnement <strong> 15</strong> abonnés</p>
        </div>
      </div>
        <?php
          if(isset($_SESSION['id_utilisateur'])){
            echo "Vous êtes sur la page de : " .$_GET['pseudo'] . " sur MyEsportBlog" ;
            echo "<a href='deconnexion.php' class='btn btn-primary'> Déconnexion  </a>";
          };

          if (isset($_POST['tweet'])){


            $maxsize = 2000000;
            if($_FILES['upload']['error'] > 0)
            {
              echo "une erreur";
            }
           
            $filesize = $_FILES['upload']['size'];
          /*   echo $filesize; */
          
            if ($filesize > $maxsize) {
              echo "le fichier est trop volumineux";
            }
          
            $filename = $_FILES['upload']['name'];
            /* echo $filename; */
            $tmpname = $_FILES['upload']['tmp_name'];
            $filesotck = "./images/" . $filename;
            $resultat = move_uploaded_file($tmpname, $filesotck);
          
          
            $_POST['message'] = addslashes($_POST['message']); 
           $pdo->exec("INSERT INTO tweet (message, date_heure_message, tag, image, id_utilisateur) VALUES ('$_POST[message]', NOW(), '$_POST[tag]', '$filesotck', '$_SESSION[id_utilisateur]')");
            
          
          }

          if (isset($_GET['idtweet'])){
            $pdo->exec("DELETE FROM tweet WHERE id_tweet= '$_GET[idtweet]'");
            }
            
                  if (isset($_POST['envoyer'])){
             $r = $pdo->query("SELECT * FROM tweet  WHERE message LIKE '%$_POST[recherche]%' ORDER BY date_heure_message DESC");
             while($message = $r->fetch(PDO::FETCH_ASSOC)){
            
              echo "<div class='card_container card_avatar'>";
              echo $_SESSION['pseudo'] . ' :<br>' . $message['message'] . '<br> <br>';
              echo $message['date_heure_message'] . '<br>';
              echo "<a href='index.php?idtweet= ". $message['id_tweet'] ."'<i class='fa-solid fa-trash'></i> </a>";
            
              echo "</div>";
            }
            
            }  
          

            if (isset($_GET['pseudo'])){
              $r = $pdo->query("SELECT id_tweet, message, date_heure_message, tag, image, pseudo FROM tweet t, utilisateur u 
            WHERE t.id_utilisateur = u.id_utilisateur
            AND u.pseudo = '$_GET[pseudo]'  ORDER BY date_heure_message DESC");
            while($message = $r->fetch(PDO::FETCH_ASSOC)){
            
                echo "<div class='card_container ".$message['tag'] . "'>";
                echo "<div class='card_text'>";
                echo $message['pseudo'] . ' :<br>' . $message['message'] . '<br>';
                echo "<div class='card_logo'>";
                echo "<i class='fa-regular fa-heart heart'></i>";
                echo "<i class='fa-regular fa-comment comment'></i>";
                echo "<i class='fa-regular fa-share-from-square share'></i>";
                if( $_SESSION['pseudo'] == $message['pseudo']){
                echo "<i class='fa-solid fa-trash trash'></i>" . "<br>";
                }
                echo "</div>";
                echo "</div>";
                echo "<div class='card_img'>";
                if ($message['image'] == "./images/" ){
                  }
                else{
                  echo '<img src="'.$message['image'].'">'; 
                }
                echo "</div>";
                
                echo "<div class='light'>";
                echo $message['date_heure_message'] . '<br>';
                
                echo "</div>";
                echo "<br>";
                echo $message['tag'];
                echo "</div>";




                
               echo "<div id='Supp' class='supp'>";
               echo "<div class='contenu_supp'>";
              echo "<div>";
              echo "<p class='croix'>&times;</p>";
              echo "</div>";
              echo "<p> Voulez-vous supprimez ce post ? </p>";
              echo "<a id='Btn_oui' href='index.php?idtweet=". $message['id_tweet'] ."'>"."  OUI" .  " </a>" . "<br>";
            echo "<button id='Btn_non' class='btn btn-secondary  m-4'> Non </button>";
            echo "</div>";
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

    </main>
  <script src="https://kit.fontawesome.com/30e89f8594.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="./js/profil.js"> </script>
         
</body>

</html>



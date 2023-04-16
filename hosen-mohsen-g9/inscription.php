<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-32x32.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>MyEsportBlog - Inscription </title>
</head>

<body id="Body1">
    <main>
        <div class="form_inscription">
            <div>
                <img class="form_logo" src="./images/MyEsportBlog.png" alt="Logo MyEsportBlog">
            </div>
            <div class="form_titre">MyEsportBlog</div>
            <div class="inputs_inscription">
                <form method="post" action="./index.php"> 
                    <label> NOM </label>
                    <input  class="form-control" name="nom" type="text" placeholder="Nom" minlength="1"  required />
                    <label> Pseudo </label>
                    <input  class="form-control" name="pseudo" type="text" placeholder="Ident123" minlength="1"  required />
                    <label> ADRESSE MAIL</label>
                    <input  class="form-control" name="adresse_mail" type="email" placeholder="example@gmail.com" minlength="6" required />
                    <label> AGE </label>
                    <input  class="form-control" name="age" type="number" placeholder="22" minlength="1" required />
                    <label>MOT DE PASSE</label>
                    <input class="form-label" name="mot_de_passe" type="password" placeholder="Min 6 caractères" minlength="6" required />
                    <!-- <button class="form_button button_submit" type="submit" name="inscription"> CONNEXION</button> -->
                    <input class="form_button " type="submit" name="inscription">
                </form>
            </div>
        </div>
               


    </main>
    <script src="https://kit.fontawesome.com/30e89f8594.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>


<?php

$pdo = new PDO('mysql:host=localhost;dbname=esport-blog', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


?>

<!-- MOHSEN HOSEN G9 -->



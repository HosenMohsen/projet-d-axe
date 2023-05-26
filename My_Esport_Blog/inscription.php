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
            <div>
                <img class="form_logo" src="./images/MyEsportBlog.png" alt="Logo MyEsportBlog">
            </div>
            <div class="form_titre">MyEsportBlog</div>

                <form method="post" action="./index.php">
                <div class="container">
                    <div class="inputs">
                        <div class="row mb-3">
                            <label class="form-label"> NOM </label>
                            <input  class="form-control" type="text" placeholder="Nom" name="nom" minlength="1" required />
                        </div>
                    <div class="row mb-3">
                        <label class="form-label"> PSEUDO </label>
                        <input  class="form-control" type="text" placeholder="Ident123" name="pseudo" minlength="2" required />
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail1" class="form-label"> ADRESSE MAIL</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" name="adresse_mail"  required>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label"> AGE </label>
                        <input  class="form-control" type="number" placeholder="22" name="age"  required />
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" placeholder="Min 6 caractères" minlength="6" name="mot_de_passe" class="form-control" id="exampleInputPassword1" required>
                    </div>
                        <button type="submit" class="btn btn-primary form_button button_submit" name="inscription">Submit</button>
                    </div>
                    </div>
            </form>
               


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



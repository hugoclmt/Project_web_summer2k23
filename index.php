<?php ?>
<!DOCTYPE html>
<html>
<head>
    <title>Ephelide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="lib/css/menu_css.css">
    <link rel="stylesheet" href="lib/css/footer_css.css">
    <link rel="stylesheet" href="lib/css/accueil_css.css">
</head>
<body>
    <header>
        <?php
        if (file_exists('nav/header/menu.php')) {
            include 'nav/header/menu.php';}
        ?>
    </header>
    <main>
        <?php
        if(!isset($_SESSION['page'])){ //on vient d'arriver sur le site
            $_SESSION['page']='accueil.php'; //on initialise la page à accueil
        }
        if(isset($_GET['page'])) { //on a cliqué sur un lien
            $_SESSION ['page'] = $_GET['page']; //on récupère la page
        }
        $path = "./pages/" .$_SESSION['page']; //on définit le chemin

        if(file_exists($path)){ //si le fichier existe
            include $path; //on l'inclut
        }
        else{
            include 'pages/404erreur.php'; //sinon on affiche une erreur
        }
        ?>
    </main>
    <footer>
    <?php
        if (file_exists('nav/footer/footer.php')) {
            include 'nav/footer/footer.php';}
        ?>
    </footer>
</body>
</html>
<?php

$bdd = new PDO("mysql:host=127.0.0.1;dbname=OCA;charset=utf8", "root", "Ereul9Aeng");

$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_publication DESC');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités - Ollivier Carles de Caudemberg</title>

    <meta name="description" content="Ollivier Carles de Caubemberg : Avocat au barreau de Nice. Vous trouverez ici toutes les informations relatives à mon activité avant de me contacter">

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <link href="https://fonts.googleapis.com/css?family=Euphoria+Script|Quicksand:400,500,700|Gotu|Roboto+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <input id="menu1Toggle" ,="," type="checkbox"/>
            <div class="page-wrapper">
            <div class="page-content"></div>
                <label class="menu-toggle menu-1-toggle" alt="Menu" for="menu1Toggle"><span class="menu-label">Menu </span><span class="close-label">Fermer</span></label>
                <div class="sidebar menu-1">
                    <a href="./index.php"><img class="side-logo" src="../assets/logo2.png" alt=""></a>
                    <div class="link"><a href="./#presentation"> Présentation</a></div>
                    <div class="link"><a href="./#domainesexpertise">Domaines d'expertise</a></div>
                    <div class="link"><a href="./#contact">Contact</a></div>
                    <div class="link"><a href="./#localisation">Localisation</a></div>
                    <div class="link"><a href="./actualite.php">Actualités</a></div>

                    <div class="bottom">
                    <p class="doctrine-pres">Retrouvez nos dernières décisions sur</p>
                    <a href="https://www.doctrine.fr/p/avocat/LBD17B3CA201EE31736A5" target="_blank"><img class="doctrine" src="../assets/doctrine.png" alt="Avocat-Ollivier-Carles-De-Caudemberg-Nice-Dernières-Décisions"></a>

                        <p class="credits"><?= date('Y') ?> &copy; Site internet créé par <a class="link" href="https://www.linkedin.com/in/benjaminstraub-web/" alt="linkedin-Benjamin-Straub">Benjamin Straub</a><br>
                        Tous droits réservés</p><br>
                        <a class="link" href="mentionslegales.php" alt="mentions-légales">Mention légales</a>
                    </div>
                </div>
            </div>
    </header>

    <main>

    <div>
        <a href="./index.php"><img class="main-logo" src="../assets/logo.jpg" alt=""></a>
        <p class="main-name">Cabinet de Maître Ollivier Carles de Caudemberg</p>
        <p class="main-tag">Avocat au barreau de Nice</p>
        <div class="main-justice">
        </div>
    </div>

        <ul>
            <?php while($a = $articles->fetch()) { ?>
            <li><a href="article.php?id=<?= $a['id'] ?>"><?= $a['titre'] ?></a></li>
            <?php } ?>
        </ul>
    </main>
    
</body>
</html>
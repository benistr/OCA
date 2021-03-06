<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre message a bien été envoyé !</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <link href="https://fonts.googleapis.com/css?family=Euphoria+Script|Quicksand:400,500,700&display=swap" rel="stylesheet">
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
                    <!--div class="link"><a href="./actualite.php">Actualités</a></div-->

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
            <div class="main-justice"></div>
        </div>
        <article class="article-part">
            <div class="article-leftpart">
                <h1 id="presentation" class="article-h1">Merci</h1>
                <p class="article-presentation">Votre message a bien été envoyé. Il sera traité dans les plus brefs délais.
                </p>
            </div>
            <div class="article-rightpart">
                <div class="article-marteau"></div>
            </div>
        </article>

        <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de ocavocats.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Telephone : </b>' . $_POST['telephone'] . '<br><br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

            $retour = mail('benjamin.str@gmail.com', 'Envoi depuis la page Contact', $message, $entete);
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre message a bien été envoyé !</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Euphoria+Script|Quicksand:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="index.php"><img class="header-logo" src="../assets/Logo-OCA.png" alt=""></a>
        <p class="header-name"><span class="header-name-maj">O</span>llivier <span class="header-name-maj">C</span>arles de <span class="header-name-maj">C</span>audemberg</p>
        <ul class="header-list">
            <li><a href=../#presentation>Présentation</a></li>
            <li><a href=../#domainesexpertise>Domaines d'expertise</a></li>
            <li><a href=../#contact>Contact</a></li>
        </ul>
    </header>
    <main>
        <div>
            <p class="main-name">Ollivier Carles de Caudemberg</p>
            <p class="main-tag">Avocat au barreau de Nice</p>
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
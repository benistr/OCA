<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Olliver Carles de Caudemberg</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Euphoria+Script|Quicksand:400,500,700|Gotu|Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <ul class="header-list">
            <li><a href=#presentation>Présentation</a></li>
            <li><a href=#domainesexpertise>Domaines d'expertise</a></li>
            <li><a href=#contact>Contact</a></li>
        </ul>
    </header>
    <main>
        <div>
            <a href="index.php"><img class="main-logo" src="../assets/Logo-OCA.png" alt=""></a>
            <p class="main-name">Cabinet de Maître Ollivier Carles de Caudemberg</p>
            <p class="main-tag">Avocat au barreau de Nice</p>
            <div class="main-justice">
            </div>
        </div>

        <article class="article-part">
            <div class="article-leftpart">
                <h1 id="presentation" class="article-h1">Présentation</h1>
                <p class="article-presentation">Maître Ollivier CARLES de CAUDEMBERG est inscrit au Barreau de NICE depuis près de 14 ans, pour avoir prêté serment le 4 janvier 2006.
                ​<br><br>
                Il est membre du Conseil de l'Ordre des Avocats du Barreau de Nice depuis le 1er  janvier 2018.
                ​
                Il dispose d'un Diplôme en Etudes Approfondies de Droit Immobilier Privé et Public.
                
                L'activité du Cabinet est généraliste, et porte sur de nombreuses matières.
                <br><br>
                Pour chaque domaine d'activité, le Cabinet dispose d'une solide expérience et s'appuie sur la meilleure base de données en ligne d'ouvrages juridiques et de Jurisprudence.
                <br><br>
                À l'occasion de chaque consultation, il vous sera donné une information complète et claire sur toutes vos demandes, avec un éclairage sur la Jurisprudence actuelle applicable à votre dossier.
                <br><br>
                Pour chaque dossier, un devis vous sera établi, et par la suite, une convention d'honoraires conformément à la Loi.
                </p>
            </div>
            <div class="article-rightpart">
                <div class="article-marteau"></div>
            </div>
        </article>

        <section id="images">
            <h1 id="domainesexpertise" class="article-h1">Domaines d'expertise</h1>
                <div class="picture-container">
                    <article class="picture">
                        <img src="../assets/immobilier.jpg" alt="Droit Immobilier" />
                        <h2>Droit Immobilier</h2>
                    </article>
                    <article class="picture">
                        <img src="../assets/routier.jpg" alt="Droit Routier">
                        <h2>Droit Routier</h2>
                    </article>
                    <article class="picture">
                        <img src="../assets/famille.jpg" alt="Droit Civil et de la Famille">
                        <h2>Droit Civil et Droit de la Famille</h2>
                    </article>
                    <article class="picture">
                        <img src="../assets/penal.jpg" alt="Droit Pénal">
                        <h2>Droit Pénal</h2>
                    </article>
                    <article class="picture">
                        <img src="../assets/commercial.jpg" alt="Droit Commercial">
                        <h2>Droit Commercial</h2>
                    </article>
                    <article class="picture">
                        <img src="../assets/social.jpg" alt="Droit Social">
                        <h2>Droit Social</h2>
                    </article>
                    <article class="picture">
                        <img src="../assets/administratif.jpg" alt="Droit Administratif">
                        <h2>Droit Administratif et Droit de l'Urbanisme</h2>
                    </article>
                </div>
        </section>

        <section class="contact-part">
            <div class="contact-part">
                <div class="contact-leftpart">
                <h1 id="contact" class="contact-h1">Contactez-moi</h1>
                <div class="contact-form">
                <form method="post" action="mail.php">
                    <label>E-mail</label>
                    <input class="contact-area" type="email" name="email" placeholder="Votre e-mail" required>
                    <br><br>
                    <label>Nom</label>
                    <input class="contact-area" type="text" name="nom" placeholder="Votre nom" required>
                    <br><br>
                    <label>Téléphone</label>
                    <input class="contact-area" type="tel" name="telephone" placeholder="Votre numéro" pattern="[0-9]{10}" required>
                    <br><br>
                    <label>Message</label>
                    <textarea class="contact-area-text" name="message" placeholder="Votre demande" required></textarea>
                    <br><br><br><br>
                    <input class="submit-button" type="submit">
                    </div>
                <?php
                    if (isset($_POST['message'])) {
                        $position_arobase = strpos($_POST['email'], '@');
                        $entete  = 'MIME-Version: 1.0' . "\r\n";
                        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                        $entete .= 'From: ' . $_POST['email'] . "\r\n";

                        $message = '<h1>Message envoyé depuis la page Contact de ocavocats.fr</h1>
                        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
                        <b>Email : </b>' . $_POST['email'] . '<br>
                        <b>Telephone : </b>' . $_POST['telephone'] . '</br>
                        <b>Message : </b>' . $_POST['message'] . '</p>';

                            $retour = mail('benjamin.str@gmail.com', 'Envoi depuis la page Contact', $message, $entete);
                            if($retour) {
                                echo '<p>Votre message a été envoyé.</p>';
                            }
                        }
                ?>
                </div>
                <div class="contact-rightpart">
                    <div class="aside-rightpart">
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer></footer>
</body>
</html>

<?php
// Lien vers le fichier qui connecte à la base de données
include("connexion.php");
//Création de variable qui permet d'utiliser la requete plus rapidement
 //execution de la requete
$requetepays = $db->query(" SELECT * FROM pays");
//Le fetchall permet de recuperer tous les champs de ma table
$recupfetch = $requetepays->fetchall(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPASIA</title>

    <!------ Lien vers autres pages --------->
    <link rel="stylesheet" href="../css/expeditions.css">
    <link rel="" href="index.html">
    <link rel="" href="pays.html">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <!------ ...--------->

    <!------ les fonts --------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!------ ...--------->
</head>

<body>

    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->

    <!------ HEADER --------->

    <!------ ICONE NAV --------->
    <header>

        <!------ NAVIGATION --------->
        <nav>
            <a href="index.html" class="logo">
                <img class="icone_logo" src="img/logo_expasia.png" />
            </a>
            <ul>
                <li><a href="expeditions.php">Nos expéditions</a></li>
                <li><a href="apropos.html">Qui sommes nous ?</a></li>
            </ul>
            <div class="bloc_icone">
                <a href="search_bar.php">
                    <img class="icone_loupe" src="https://img.icons8.com/external-becris-lineal-becris/64/ffffff/external-loupe-mintab-for-ios-becris-lineal-becris.png" />
                </a>
                <a href="contact.php">
                    <img class="icone_mail" src="https://img.icons8.com/material-outlined/48/ffffff/mail.png" />
                </a>
            </div>
        </nav>

        <!------  fin navigation --------->

        <!------  TITRE --------->

        <div class="bloc_titre_pays">
            <h1 class="titre_principal_pays">LES PAYS A VISITER</h1>

            <h3 class="sous_titre_pays">Découvrez la culture asiatique à travers 8 pays différents, nous vous proposons 2 types d'expéditions par pays. Une expédition qui vous permettra de découvrir les endroits les plus connus d'une nouvelle façon mais aussi une expédition qui
                regroupe les endroits les moins connus vous permettant ainsi de découvrir une nouvelle facette de ces régions.</h3>
        </div>
        <!------  fin titre --------->

        <!------  FLECHE --------->
        <a href="#fleche_redirection">
            <div class="bloc_fleche">
                <svg xmlns="http://www.w3.org/2000/svg" class="fleche" viewBox="0 0 24 24" stroke-width="0.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </div>
        </a>
        <!------  fin fleche--------->
    </header>
    <!------ FIN HEADER --------->


    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->

    <!------ SECTION AVEC TOUS LES PAYS --------->

    <section id="fleche_redirection">
        <div class="container_image_pays">
        <ul class="lespays">

            <?php foreach ($recupfetch as $p) { ?>
                <li class="pays">

                <!-- on fait un echo en utilisant le recup fetch -->
                <a class="nom_pays" href="pays.php?nom_pays=<?= $p['nom_pays']; ?>"> <h1><?= $p['nom_pays']; ?></h1></a>

                    <a href="pays.php?nom_pays=<?= $p['nom_pays']; ?>"><img class="img-pays" alt="image pays" src="<?= $p['cover_pays']; ?>"></a>
                </li>
            <?php } ?>

        </ul>
    </section>
    <!------ fin de section --------->

    <!------ FOOTER --------->
    <footer>

        <!------ Column gauche --------->
        <div class="footer_contact">
            <a href="contact.php">
                <p>Nous contacter</p>
            </a>

            <a href="apropos.html">
                <p>Qui sommes nous ?</p>
            </a>

            <a href="faq.html">
                <p>F.A.Q</p>
            </a>
        </div>
        <!------ fin Column gauche --------->

        <!------ Début Column Milieu --------->
        <div class="footer_mentions_legales">
            <a href="mentions.html">
                <p>Mentions légales</p>
            </a>
        </div>
        <!------ fin Column Milieu --------->

        <!------ Début Column droite --------->
        <div class="reseaux">
            <p class="titre_reseau">Nos réseaux</p>
            <div class="img_reseau">
                <a href="https://www.instagram.com">
                <img class="reseau" alt="icone instagram" src="https://img.icons8.com/nolan/64/ffffff/instagram-new.png" />
                </a>

                <a href="https://www.twitter.com">
                <img class="reseau" alt="icone twitter" src="https://img.icons8.com/ios/100/ffffff/twitter--v1.png" />
                </a>

                <a href="https://www.facebook.com">
                <img class="reseau" alt="icone facebook" src="https://img.icons8.com/ios/100/ffffff/facebook--v1.png" />
                </a>

            </div>
        </div>
        <!------ fin Column droite --------->
    </footer>
    <!------ fin footer --------->
</body>

</html>
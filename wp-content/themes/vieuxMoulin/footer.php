<?php
?>


<!doctype HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <meta name="description" content="site web client fait sur wordpresse sur le vieux moulin de starichamps ">
    <meta name="keywords" content="DW, Projet-web, Julien, Vieux moulin, formation hepl, "/>
    <meta name="author" content="Julien Gaspar"/>
         <link rel="stylesheet" href="./src/css/reset.css">
		<link rel="stylesheet" href="./src/css/footer.css">
    <title>footer</title>
</head>
<body>

<footer class="footer">
    <section class="footer__elements">
        <h2>Titre invisible</h2>
        <section class="footer__navigations">
            <img src="<?php get_field("logo_vieux_moulin")  ?>" alt="icone du logo du vieux moulin" class="logo__vieux__moulin">
            <h3>Adresse</h3>
            <section class="coordonees">
                <h4>Le vieux Moulin</h4>
               <!-- <p>Strainchamps
                    Rue Des Vennes, 1  6637 Fauvillers </p>-->
                <p>
                    <?php the_field("coordonee__vieux__moulin"); ?>
                </p>
            </section>
            <nav class="navigation">
                <label for="liste__redirections"></label>
                <select id="liste__redirections" name="liste__redirections">
                    <option selected>Qui sommes-nous ?</option>
                    <option><a href="<?php the_field("maisons__rediretion"); ?> ">Nos maisons</a></option>
                    <option><a href="<?php the_field("nos__valeurs__redirection"); ?> ">Nos Valeurs</a></option>
                    <option><a href="<?php the_field("activitees__redirections"); ?> ">Activitée</a></option>
                    <option><a href="<?php the_field("educatif__redirection"); ?> ">Administrations</a></option>
                </select>
                <ul class="redirection__navigation">
                    <li>Qui sommes-nous ?</li>
                    <li>Nos maisons</li>
                    <li>Nos valeurs</li>
                    <li>Le cadre</li>
                    <li>Projet éducatif</li>
                </ul>
                <ul class="redirection__navigation">
                    <li><a href="<?php the_field("dons__rediection"); ?>">
                            nous aider
                        </a></li>
                </ul>
                <ul class="redirection__navigation">
                    <li>
                        <a href="<?php the_field("contacte__redirections"); ?>">
                            Nous contacter
                        </a></li>
                </ul>
            </nav>
        </section>
        <section class="partenaires">
            <h3>partenariats</h3>
            <!--<img src="src/img/federation-wallonnie-bx-logo.png" alt="logo represenrant leurs partenaria qui les aides financiereement federation walonnie bruxelle " class="logo__partenaire" id="federation__walonnie__bruxelle">
            <img src="src/img/aide-jeunesse-logo.png" alt="logo represenrant leurs partenaria qui les aides financiereement aide a la jeunesse" class="logo__partenaire" id="aide__a__la__jeunesse">-->
            <img src="<?php the_field("logo__federation__walonie__bruxelle");?>" alt="logo represenrant leurs partenaria qui les aides financiereement federation walonnie bruxelle " class="logo__partenaire" id="federation__walonnie__bruxelle">
            <img src="<?php the_field("logo__aide__a__la__jeunesse");?>" alt="logo represenrant leurs partenaria qui les aides financiereement aide a la jeunesse" class="logo__partenaire" id="aide__a__la__jeunesse">
        </section>
    </section>
    <section class="fotter__copyrinthe">
        <h2>Copyright Le Vieux-moulin  © 2025  ASBL  | Vieux-moulin  | SRG</h2>
        <img src="./src/image/logo-vieux-moulin-fond-blanc.png" class="mini__logo__srg">

    </section>
</footer>
</body>
</html>

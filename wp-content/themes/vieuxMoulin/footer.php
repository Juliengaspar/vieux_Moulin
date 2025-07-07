<?php /* Template name: Template "footer"*/ ?>
<?php get_header(); ?>


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
	        <?php
	        $image = get_field('logo_vieux_moulin');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image) :
	        ?>
            <div class="logo_footer">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="logo__vieux__moulin">
            </div>
            <?php
            endif;
            ?>
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
                <ul class="redirection__navigation">
                    <li><a  href="">Qui sommes-nous ?</a></li>
                    <li><a  href="<?php the_field("maisons__rediretion"); ?>">Nos maisons</a></li>
                    <li><a  href="<?php the_field("nos__valeurs__redirection"); ?>">Nos valeurs</a></li>
                    <li><a  href="<?php the_field("activitees__redirections"); ?>">Le cadre</a></li>
                    <li><a  href="<?php the_field("educatif__redirection"); ?>">Projet éducatif</a></li>
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
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="partenaires">
            <h3>partenariats</h3>
            <!--<image src="src/image/federation-wallonnie-bx-logo.png" alt="logo represenrant leurs partenaria qui les aides financiereement federation walonnie bruxelle " class="logo__partenaire" id="federation__walonnie__bruxelle">
            <image src="src/image/aide-jeunesse-logo.png" alt="logo represenrant leurs partenaria qui les aides financiereement aide a la jeunesse" class="logo__partenaire" id="aide__a__la__jeunesse">-->
	        <?php
	        $image_logo__federation__wallonie__bruxelle = get_field('logo__federation__walonie__bruxelle');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image_logo__federation__wallonie__bruxelle) :
		        ?>
                <div class="logo__federation__walonie__bruxelle" style="flex: 1;">
                    <img class="logo__partenaire" id="federation__walonnie__bruxelle" src="<?php echo esc_url($image_logo__federation__wallonie__bruxelle['url']); ?>" alt="<?php echo esc_attr($image_logo__federation__wallonie__bruxelle['alt']); ?> " style="width: 100%; max-width: 600px;">
                </div>
	        <?php endif; ?>

	        <?php
	        $image__logo__aide__a__la__jeunesse = get_field('logo__aide__a__la__jeunesse');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image__logo__aide__a__la__jeunesse) :
		        ?>
                <div class="logo__federation__walonie__bruxelle" style="flex: 1;">
                    <img class="logo__partenaire" id="aide__a__la__jeunesse" src="<?php echo esc_url($image__logo__aide__a__la__jeunesse['url']); ?>" alt="<?php echo esc_attr($image__logo__aide__a__la__jeunesse['alt']); ?>">
                </div>
	        <?php endif; ?>

        </section>
    </section>
    <section class="fotter__copyrinthe">
        <h2><?php get_field('description__copyright') ?></h2>
        <img src="src/image/logo-vieux-moulin-fond-blanc.png" class="mini__logo__srg" alt="logo du vieux moulin fond blanc officel">
    </section>
</footer>
</body>
</html>

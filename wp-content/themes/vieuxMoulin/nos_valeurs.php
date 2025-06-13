<?php
/*
Template Name: Nos Valeurs
*/
get_header();
?>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premiers pages aceuille du projet clien vieux moulin fait avec woordpresse ">
    <meta name="keywords" content="clien, Projet-web, Julien, woordpresse, formation hepl, vieux moulin"/>
    <meta name="author" content="Julien Gaspar"/>
    <link rel="icon" type="image/png" sizes="16x16" href="../image/icones/vieux__moulin__icone__small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../image/icones/vieux__moulin__icone__medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="../image/icones/vieux__moulin__icone__large.png">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/vosValeurs.css">
    <title>Nos Valeurs</title>
</head>
<body>
<header class="title__valeurs" style="text-align: center; padding: 50px;"">
    <h1>Nos valeurs</h1>
        <p><?php the_field('text__page'); ?></p>
    <!--<p>Le Vieux Moulin est un service résidentiel général agréé par la Fédération Wallonie-Bruxelles.&nbsp;</p>-->
        <?php get_template_part('partials/scroll'); ?>
</header>
<section class="about__vieux__moulin" style="display: flex; flex-wrap: wrap; align-items: center; gap: 20px; max-width: 1000px; margin: 50px auto;">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2>Titre</h2>
    <div class="image" style="flex: 1;">
        <img src="<?php the_field('picture__parc'); ?>" alt="Image principale">
    </div>
    <!--<div>
        <p>Au Vieux-Moulin SRG, chaque jeune est accueilli dans un cadre stable, bienveillant et sécurisant.</p>
        <p>Tout est pensé pour répondre à ses besoins essentiels :
            un accueil matériel adapté,
            un accompagnement éducatif solide et un véritable soutien au quotidien.</p>
        <p>Dans cet environnement de confiance, chacun peut se découvrir, grandir, s’ouvrir au monde et devenir pleinement soi-même.</p>
        <a>La vie aux Vieux Moulin</a>
    </div>-->
    <div class="text" style="flex: 1;">
        <p><?php the_field('autours__vieux__moulin'); ?></p>
	    <?php if (get_field('link__page')) : ?>
            <a href="<?php the_field('link__page'); ?>" class="button">La vie au Vieux Moulin</a>
	    <?php endif; ?>
    </div>
</section>
<section>
    <!--<h2>Les valeurs que nous portons sont le reflet de notre mission et de notre engagement auprès des jeunes.</h2>-->
    <h2><?php the_field('titles__of__contenus'); ?></h2>
    <!-- Sections dynamiques avec champ répéteur -->
    <section class="valeurs__vieux__moulin" style="max-width: 1000px; margin: 60px auto;">
		<?php if (have_rows('valeurs')): ?>
			<?php while (have_rows('valeurs')): the_row(); ?>
                <div class="bloc" style="margin-bottom: 50px;">
                    <h3><?php the_sub_field('valeurs_title'); ?></h3>
                    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 20px;">
                        <div class="image" style="flex: 1;">
                            <img src="<?php the_sub_field('valeurs_image'); ?>" alt="Bloc image" style="width: 100%;">
                        </div>
                        <div class="texte" style="flex: 1;">
                            <p><?php the_sub_field('description_valeurs'); ?></p>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </section>
    <!--
    <section class="valeurs__vieux__moulin">
        <h3>Éducation</h3>
        <p>À leur arrivée, chaque jeune apporte ses ressources, ses compétences, mais aussi ses fragilités. Grâce à un accompagnement fondé sur le respect mutuel et la bientraitance, nous les aidons à se développer en intégrant des valeurs essentielles comme la politesse, le respect de soi et des autres.</p>
        <img src="./src/img/logo-vieux-moulin.png">
    </section>
    <section class="valeurs__vieux__moulin">
        <h3>Socialisation</h3>
        <p>Pour grandir et s’épanouir, chaque jeune a besoin de développer un réseau social en accord avec son modèle éducatif. Tout au long de la prise en charge, notre institution veille à préserver et renforcer ses liens sociaux, en maintenant son environnement scolaire et ses activités. Nous proposons également des activités individuelles ainsi que des stages et camps pendant les vacances scolaires.</p>
        <img src="./src/img/logo-vieux-moulin.png">
    </section>
    <section class="valeurs__vieux__moulin">
        <h3>Responsabilisation</h3>
        <p>Nous souhaitons à chaque jeune d’évoluer, de grandir et pour ce faire nous mettons l’accent sur la responsabilisation face à ses actes, face à ses choix, face à ses décisions pour lui permettent d’être ACTEUR de sa propre vie.</p>
        <img src="./src/img/logo-vieux-moulin.png">
    </section>
    <section class="valeurs__vieux__moulin">
        <h3>Autonomie</h3>
        <p>L’enfant, le jeune se construit à partir de son vécu et développe ses propres compétences.
            Au Vieux-Moulin SRG, nous encourageons l’autonomie à travers les gestes du quotidien et l’apprentissage de la prise de décision, en tenant compte de l’âge et des capacités de chacun.</p>
        <img src="./src/img/logo-vieux-moulin.png">
    </section>-->
</section>
<!-- Titre de fin de page -->
<section>
    <!--<h2>La qualité de nos infrastructures, l’équipement mis à disposition, l’épanouissement de chacun sont au cœur de ses préoccupations.</h2>-->
    <h2><?php the_field('text__end__page'); ?></h2>
</section>
<?php
endwhile;
endif;
get_footer();
?>
</body>
</html>
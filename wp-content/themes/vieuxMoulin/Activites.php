<?php
/*
Template Name: Activités
*/
get_header();
?>

<?php
echo '<!-- fichier.php chargé -->';
?>

<?php if (!defined('ABSPATH')) exit; ?>
<p>Fichier bien chargé</p>


<html lang="fr">
<head>

    <link rel="stylesheet" href="../css/reset.css">
	 <link rel="stylesheet" href="../css/activitees.css">
    <!--<link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./index.css">-->
    <title>Activités</title>
</head>
<body>
<header class="title__page">
    <h1>Activités</h1>
    <img src="<?php the_field('icone__activitee'); ?>">
    <p style="margin-top: 20px;">↓ scroll ↓</p>
    <div id="balloon-div">
        <div class="svg__content">
            <div id="ballon__creation"></div>

            <svg id="ballon" data-name="ballon" class="ballon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.46 92.75" style="display: none">
                <defs>
                    <style>
                        .cls-1 {
                            fill: lime;
                        }
                    </style>
                </defs>
                <path d="M12.33,92.75h0c-1.8,0-3.26-1.46-3.26-3.26l9.34-22.27-9.34-24.94c0-1.8,1.46-3.26,3.26-3.26h0c1.8,0,3.26,1.46,3.26,3.26l9.34,24.94-9.34,22.27c0,1.8-1.46,3.26-3.26,3.26Z"/>
                <ellipse class="cls-1" cx="13.23" cy="24.32" rx="13.23" ry="24.32"/>
            </svg>

        </div>

    </div>
	<?php get_template_part('partials/scroll'); ?>
</header>
<section class="activitees">
    <h2>Viens découvrir tout ce qu’on fait au Vieux Moulin </h2>
    <!--<p>Découvrez sur cette page une sélection d’activités et d’événements organisés
        avec les jeunes au Vieux Moulin pour partager de bons moments.</p>-->
    <p>
        <?php
            get_field("description__page__activitee");
        ?>
    </p>

	<?php if (have_rows('activites')) : ?>
        <section class="liste__projets" style="max-width: 1000px; margin: auto; padding: 20px;">
			<?php while (have_rows('activites')) : the_row(); ?>
                <article class="projet">
                    <div>
                    <img src="<?php the_sub_field('image-activitee'); ?>" alt="">

                    </div>
                    <h3><?php the_sub_field('title__activitee'); ?></h3>
                    <p><?php the_sub_field('description-actvitee'); ?></p>
                </article>
			<?php endwhile; ?>
        </section>
	<?php else : ?>
        <p>Aucun projet n’a été ajouté.</p>
	<?php endif; ?>
<!--
    <section class="activitee">
        <h3>🎵En avant la musique !</h3>
        <p>Tu aimes la musique ? Des bénévoles viennent spécialement pour t’aider à découvrir la musique et peut-être même te donner envie d’en faire plus tard !</p>
        <div>
            <img src="./src/img/img-rotate.png" class="exemple__of__activitee">
        </div>
    </section>
    <section class="activitee">
        <h3>🎅La magie de Saint-Nicolas</h3>
        <p>En février, une grande surprise nous attend ! Saint Nicolas et son fidèle ami, le Père Fouettard, viennent nous rendre visite. Les enfants sages reçoivent des cadeaux, et tout le monde passe un bon moment plein de rires et de joie.</p>
        <div>
            <img src="./src/img/img-rotate.png" class="exemple__of__activitee">
        </div>
    </section>-->
</section>
<section class="activitees">
    <h2>Des sorties Incroyables pour s’amuser</h2>
    <p>Aux Vieux Moulins, on part en excursion pour découvrir de nouveaux endroits et passer des journées inoubliables !</p>
    <!-- VOYAGES (RÉPÉTEUR) -->
	<?php if (have_rows('voyages')): ?>
        <section style="max-width: 1000px; margin: auto; padding: 20px;">
			<?php while (have_rows('voyages')): the_row(); ?>
                <div style="display: flex; align-items: flex-start; margin-bottom: 40px; gap: 20px;">
                    <img src="<?php the_sub_field('picture_voyage'); ?>" alt="" style="width: 150px; height: auto;">
                    <div>
                        <h3><?php the_sub_field('title_voyage'); ?></h3>
                        <p><?php the_sub_field('description_voyage'); ?></p>
                    </div>
                </div>
			<?php endwhile; ?>
        </section>
	<?php endif; ?>
    <!--
    <section class="activitee">
        <h3> 🎡Au Parc Merveilleux</h3>
        <p>on rencontre des animaux, on joue et on explore un monde magique.</p>
        <div>
            <img src="./src/img/img-rotate.png" class="exemple__of__activitee">
        </div>
    </section>
    <section class="activitee">
        <h3> 🎢À Walibi,</h3>
        <p>on fait le plein de sensations fortes avec des manèges et des attractions géniales ! </p>
        <div>
            <img src="./src/img/img-rotate.png" class="exemple__of__activitee">
        </div>
    </section>
    <section class="activitee">-
        <h3>🚶Des balades pour explorer ! </h3>
        <p>On adore partir en balade pour découvrir la nature, respirer le grand air et profiter d’un moment avec les copains.!</p>
        <div>
            <img src="./src/img/img-rotate.png" class="exemple__of__activitee">
        </div>
    </section>
    <section class="activitee">
        <h3>🏕️Cap sur l’Ardèche</h3>
        <p>On part ensemble en voyage en Ardèche ! Là-bas, on découvre la nature, on fait des activités géniales et on passe du temps bord de la piscine avec les copains. C’est une aventure qu’on n’oubliera jamais !</p>
        <div>
            <img src="./src/img/img-rotate.png" class="exemple__of__activitee">
        </div>
    </section>-->
</section>
<a href="<?php get_field("link__button")?>" class="redirection">Nous aider à faire plus d’activités</a>
<?php get_footer(); ?>
</body>
</html>

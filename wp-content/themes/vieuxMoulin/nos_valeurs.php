<?php /* Template name: Template "nos-valeurs*/ ?>
<?php get_header(); ?>
<html lang="fr-be" xmlns="http://www.w3.org/1999/html">
<head>

    <title>Nos Valeurs</title>
    <style>
        body{
            background-color: white;
            font-size: 16px;
            font-family: Helvetica;
        }
        a{
            cursor: pointer;
        }
        .title__valeurs__page{
            background-color: #BDFAEA;
            text-align: center;
        }
        .title__valeurs__page>h1{
            font-family: "cavea";
            font-size: 4rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
            padding: 5% 0;
        }
        .title__valeurs__page>p{
            font-family: "cavea";
            font-style: italic;
            font-size: 2.5rem;
            text-align: center;
            width: 50%;
            color: #013BB3;
            margin: auto;

        }

        .scroll__animation{
            width: 10%;
            height: auto;
            margin: -1% auto;

            animation: mouvement-vertical 2s ease-in-out infinite;

            /* Pour un rendu plus net */
            transform: translateZ(0);
            backface-visibility: hidden;
            perspective: 1000px;
        }

        @keyframes mouvement-vertical {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(10px); /* Ajustez cette valeur pour la hauteur du mouvement */
            }
        }

        .about__vieux__moulin{
            display: flex;
            margin: 5% 10%;
        }


        #images__parc{
            width: 85%;
            height: auto;
            margin: 5% 0;
        }

        .text__nos__valeurs{
            margin: 5% 0;
            font-size: 1.5rem;
            width: 50%;
        }

        .rediretion__valleurs{
            text-decoration: none;
            background-color: #0466F3;
            font-size: 1.5rem;
            color: white;
            padding: 1.5rem;
            margin: 5% 0;
            border-radius: 10px;
            -webkit-box-shadow: 5px 8px 13px 0 rgba(0,0,0,0.53);
            box-shadow: 5px 8px 13px 0 rgba(0,0,0,0.53);
        }
        .rediretion__valleurs:hover{
            background-color: #013073;
        }

        .citation{
            text-align: center;
            font-size: 1.5rem;
            font-weight: 200;
            margin: 5% auto;
            width: 50%;
        }


        .contenus__espace__enfants{
            grid-column: 2;
            margin-top: 10%;
        }

        .valeurs__vieux__moulin{

        }

        .valeurs__vieux__moulin:nth-child(2n){
            float: right;
        }


        .contenus__espace__enfants>h2{
            margin-bottom: 5%;
        }
        .contenus__espace__enfants>p{
            margin: 5% 0;
            line-height: 2.5vh;
        }

        .bloc{
            display: flex;
            margin: 5% 10%;
            align-items: center; /* Alignement vertical au centre */
            gap: 2rem; /* Espacement entre l'image et le texte */
            margin-bottom: 2rem;
        }
        /* Sections impaires (1, 3...) : image à gauche, texte à droite */
        .bloc:nth-child(odd) {
            flex-direction: row; /* Par défaut, pas besoin de le préciser */
        }

        /* Sections paires (2, 4...) : image à droite, texte à gauche */
        .bloc:nth-child(even) {
            flex-direction: row-reverse; /* Inverse l'ordre */
        }

        /* Styles optionnels pour les sous-éléments */
        .image__valleurs>img {
            flex: 1; /* Prend 1 partie de l'espace */
        }

        .texte {
            flex: 1; /* Prend 1 partie de l'espace */
        }

        img {
            max-width: 100%;
            border-radius: 8px; /* Optionnel */
        }
        .bloc>.image__valleurs{
            max-width: 400px;
            width: 50%;
            height: auto;
            padding: 1rem;
        }
        .valeurs__title{
            font-size: 2rem;
            font-weight: 200;
        }
        .description__valeurs>p{
            font-size: 1rem;
            margin-left: 10%;
            width: 50%;
        }


        .valeur__img>img{
            width: 50%;
            height: auto;
        }
        .valeur__img>img{
            margin-top: -25%;

        }

    </style>
</head>
<body>
<section class="title__valeurs__page">
    <h1>Nos valeurs</h1>
        <p><?php the_field('text__page'); ?></p>
   <!--<p>Le Vieux Moulin est un service résidentiel général agréé par la Fédération Wallonie-Bruxelles.&nbsp;</p>-->
    <div class="scroll__animation">
        <?php get_template_part('partials/scroll'); ?>
    </div>
</section>
<section class="about__vieux__moulin">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2 style="display: none">Titre invicible</h2>
	<?php
	$image__parc = get_field('picture__parc');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__parc) :
		?>
    <div class="image__rotate">
            <img class="image__parc" id="images__parc" src="<?php echo esc_url($image__parc['url']); ?>" alt="<?php echo esc_attr($image__parc['alt']); ?>">
    </div>
	<?php endif; ?>

    <div class="text">
        <p class="text__nos__valeurs" id="text__nos__valeurs"><?php the_field('autours__vieux__moulin'); ?></p>
	    <?php if (get_field('link__page')) : ?>
            <a href="<?php the_field('link__page'); ?>" class="rediretion__valleurs">La vie au Vieux Moulin</a>
	    <?php endif; ?>
    </div>
</section>
<section>
    <h2 class="citation" id="citation__debut__page"><?php the_field('titles__of__contenus'); ?></h2>
    <section class="valeurs__vieux__moulin" >
	    <?php if (have_rows('valeurs')): ?>
		    <?php while (have_rows('valeurs')): the_row(); ?>
                <div class="bloc">
					    <?php
					    $image__Valeurs = get_sub_field('valeurs_image');
					    if ($image__Valeurs) :
						    ?>
                            <div class="image__valleurs">
                                <img class="images" src="<?php echo esc_url($image__Valeurs['url']); ?>" alt="<?php echo esc_attr($image__Valeurs['alt']); ?>">
                            </div>
					    <?php endif; ?>
                        <section class="texte">
                            <h3 class="valeurs__title"><?php the_sub_field('valeurs_title'); ?></h3>
                            <p class="description__valeurs"><?php the_sub_field('description_valeurs'); ?></p>
                        </section>
                </div>
		    <?php endwhile; ?>
	    <?php endif; ?>
    </section>
</section>
<!-- Titre de fin de page -->
<section>
    <h2 class="citation" id="citation__fin__page"><?php the_field('text__end__page'); ?></h2>
</section>
<?php
endwhile;
endif;
get_footer();
?>

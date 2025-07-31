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
        .title__valeurs__page>h2{
            font-family: "cavea";
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
            padding: 5% 0;
        }
        .title__valeurs__page>p{
            font-family: "cavea";
            font-style: italic;
            font-size: 2.5rem;
            text-align: center;
            width: 30%;
            color: #013BB3;
            margin: auto;

        }

        h2{
            font-size: 2rem;
        }

        .valeurs_title

        .valeurs__vieux__moulin{
           display: flex;
        }
        .contenus__espace__enfants{
            grid-column: 2;
            margin-top: 10%;
        }
        .contenus__espace__enfants>h2{
            margin-bottom: 5%;
        }
        .contenus__espace__enfants>p{
            margin: 5% 0;
            line-height: 2.5vh;
        }
        .rediretion{
            background-color: #0466F3;
            color: white;
            padding:  1.5rem;
            margin: 5% 0;
        }

        .img__rotate__autours{
            grid-column: 1;
        }
        .img__rotate__autours{
            margin-top: -30%;

        }

        .valeurs{
            margin: 5%;
        }
        .valeurs>h2{
            text-align: center;
            margin: 5% 0;
        }

        .valeur{
            display: flex;
        }
        .valeur>h3{
            grid-column: 2;
            margin-left: 25%;
        }
        .valeur>p{
            margin-left: 25%;
            grid-column: 2;
            width: 50%;
        }

        .valeur__img{
            grid-column: 1;
        }

        .valeur__img>img{
            width: 50%;
            height: auto;
        }
        .valeur__img>img{
            margin-top: -25%;

        }
        h2:last-of-type{
            font-style: italic;
            text-align: center;
            font-size: 1rem;
            font-weight: 100;
            width: 75%;
            margin: 5% auto;
        }
    </style>
</head>
<body>
<section class="title__valeurs__page">
    <h2>Nos valeurs</h2>
        <p><?php the_field('text__page'); ?></p>
   <!--<p>Le Vieux Moulin est un service résidentiel général agréé par la Fédération Wallonie-Bruxelles.&nbsp;</p>-->
        <?php get_template_part('partials/scroll'); ?>
</section>
<section class="about__vieux__moulin">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h3>Titre invicible</h3>
	<?php
	$image__parc = get_field('picture__parc');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__parc) :
		?>
    <div class="image__rotate">
            <img class="image__parc" src="<?php echo esc_url($image__parc['url']); ?>" alt="<?php echo esc_attr($image__parc['alt']); ?>">
    </div>
	<?php endif; ?>

    <div class="text">
        <p><?php the_field('autours__vieux__moulin'); ?></p>
	    <?php if (get_field('link__page')) : ?>
            <a href="<?php the_field('link__page'); ?>" class="button">La vie au Vieux Moulin</a>
	    <?php endif; ?>
    </div>
</section>
<section>
    <h2><?php the_field('titles__of__contenus'); ?></h2>
    <section class="valeurs__vieux__moulin" >
	    <?php if (have_rows('valeurs')): ?>
		    <?php while (have_rows('valeurs')): the_row(); ?>
                <div class="bloc">
                    <h3 class="valeurs__title"><?php the_sub_field('valeurs_title'); ?></h3>
                    <div>
					    <?php
					    $image__Valeurs = get_sub_field('valeurs_image');
					    if ($image__Valeurs) :
						    ?>
                            <div class="image">
                                <img class="images__valeurs" src="<?php echo esc_url($image__Valeurs['url']); ?>" alt="<?php echo esc_attr($image__Valeurs['alt']); ?>">
                            </div>
					    <?php endif; ?>
                        <div class="texte">
                            <p><?php the_sub_field('description_valeurs'); ?></p>
                        </div>
                    </div>
                </div>
		    <?php endwhile; ?>
	    <?php endif; ?>
    </section>
</section>
<!-- Titre de fin de page -->
<section>
    <h2><?php the_field('text__end__page'); ?></h2>
</section>
<?php
endwhile;
endif;
get_footer();
?>

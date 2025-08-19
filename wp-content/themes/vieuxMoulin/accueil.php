<?php
/*
Template name: Template "accueil
*/
?>
<?php get_header(); ?>
    <!--<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/aceuil.css">-->

	<title>Aceuille</title>
<style>

    .acceuille__haut__page{
        background-color: #BDFAEA;
        text-align: center;
        margin: 5% 0;
    }
    .acceuille__haut__page>h1{
        margin-top: 5%;
        margin-bottom: 5%;
        padding: 2% 0;
        font-size: 5rem;
        text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
        font-style: italic;
    }

    .welcome__page>img{
        float: right;
        margin-left: 20px; /* optionnel : pour éviter que le texte colle à l'image */
        max-width: 100%;
        height: auto;
        margin-top: 2.5%;
    }

    .welcome__page>p{
        text-align: center;
        width: auto;
        margin: -8% 30% 5%;
        padding: 2% 0;
        font-size: 2.5rem;
        color: #013BB3;
    }
    header>p:last-of-type{
        margin-top: 1%;
    }

    .img__Vieux__moulin{
    }
    .img__Vieux__moulin>img{
        width: 100%;
        height: auto;
        margin-top: -5%;
    }
    .titile__contenus{
        font-weight: 100;
        width: 61%;
    }
    h2{
        text-align: center;
        font-size: 2rem;
        margin: 0 25%;
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


    .image_contenu>img{
        width: 75%;
        height: auto;
    }

    h3{
        font-size: 1.5rem;
    }

    .image-text-section{
        display: flex;
        flex-wrap: wrap;
        max-width: 1000px;
        margin: 5% auto;
    }

    .about__vieux__moulin>div:first-of-type,
    .about__vieux__moulin>a{
        margin-left: 75%;
        margin-right: 5%;
    }
    .about__vieux__moulin>div>p{
        margin-bottom: 2%;
    }

    .text__page{
        text-align: left;
    }
    .about__vieux__moulin>div>a{
        background-color: #006EFE;
        color: white;
        padding: 1% 2%;
    }

    .valeurs__vieux__moulin{
        display: flex;
    }
    .valeurs__vieux__moulin>p{
        width: 25%;
        margin: 0 5% 0 70%;
    }
</style>
<section class="acceuille__haut__page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1>Le Vieux Moulin</h1>
    <!-- Image d'introduction -->
	<?php
	$image_welcome = get_field('welcome__page');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_welcome) :
		?>
        <div class="welcome__page">
            <img src="<?php echo esc_url($image_welcome['url']); ?>" alt="<?php echo esc_attr($image_welcome['alt']); ?>" class="header__background">
            <p class="header__text"><?php the_field('description__page'); ?></p>
        </div>
	<?php endif; ?>

    <div class="scroll__animation">
	<?php get_template_part('partials/scroll'); ?>
    </div>

</section>
<section>
	<h2 style="display: none;">text invisible</h2>
    <!-- Image d'introduction -->
    <!-- Image d'introduction -->
	<?php
	$image_vieux__moulin = get_field('vieux__moulin');
	// var_dump($image_vieux__moulin); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_vieux__moulin) :
		?>
        <div class="img__Vieux__moulin">
            <img src="<?php echo esc_url($image_vieux__moulin['url']); ?>" alt="<?php echo esc_attr($image_vieux__moulin['alt']); ?>"  class="header__background" id="img__Vieux__moulin">
        </div>
	<?php endif; ?>
    <!-- Image d'introduction -->
</section>
<section class="center-title" style="text-align: center; margin: 60px 0 20px;">
	<?php if (get_field('description__contenus')) : ?>
        <h2 class="titile__contenus"><?php the_field('description__contenus'); ?></h2>
	<?php endif; ?>
    <!--
	<h2>Nos maisons, Le Vieux Moulin et Edelweiss,
		bien plus qu’un lieu d’accueil :
		un véritable foyer pour grandir et se reconstruire.</h2>
	<p></p>
	<image src="">-->
    <div class="image-text-section" style="">
        <div class="image" style="flex: 1;">
            <!-- Image d'introduction -->
	        <?php
	        $image_contenus = get_field('image_contenu');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image_contenus) :
		        ?>
                <div class="image_contenu">
                    <img src="<?php echo esc_url($image_contenus['url']); ?>" alt="<?php echo esc_attr($image_contenus['alt']); ?>">
                </div>
	        <?php endif; ?>
        </div>


        <div class="text__page" style="flex: 1;">
	        <?php if (get_field('contenus__page')) : ?>
                <p class="contenus__page"><?php the_field('contenus__page'); ?></p>
	        <?php endif; ?>
        </div>
    </div>
</section>
<?php
endwhile;
endif;
?>
<?php
get_footer();

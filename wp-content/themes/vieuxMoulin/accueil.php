<?php
/*
Template name: Template "accueil
*/
?>
<?php get_header(); ?>
    <!--<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/aceuil.css">-->
<style>

    body{
        background-color: white;
        font-family: cavea;
    }
    header{
        background-color: #BDFAEA;
        text-align: center;
        margin: 5% 0;
    }
    header>h1{
        margin-top: 5%;
        margin-bottom: 5%;
        padding: 2% 0;
        font-size: 3rem;
        text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
        font-style: italic;
    }

    .welcome__page>p{
        text-align: center;
        width: 30%;
        margin: 5% 35% 0;
        padding: 2% 0;
        font-size: 2.5rem;
        color: #013BB3;
    }
    header>p:last-of-type{
        margin-top: 1%;
    }
    h2{
        text-align: center;
        font-size: 2rem;
        width: 50%;
        margin: 0 25%;
    }

    h3{
        font-size: 1.5rem;
    }


    .about__vieux__moulin>div:first-of-type,
    .about__vieux__moulin>a{
        margin-left: 75%;
        margin-right: 5%;
    }
    .about__vieux__moulin>div>p{
        margin-bottom: 2%;
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

	<title>Aceuille</title>
<body>
<header>
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
	<?php if (get_field('description__page')) : ?>
            <p class="header__text"><?php the_field('description__page'); ?></p>
	<?php endif; ?>
        </div>
	<?php endif; ?>

	<?php get_template_part('partials/scroll'); ?>

</header>
<section>
	<h2 style="display: none">test invisible</h2>
<?php
$image_maison = get_field('img__Vieux__moulin');
    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

    if ($image_maison) :
    ?>
    <div class="img__Vieux__moulin">
        <img src="<?php echo esc_url($image_maison['url']); ?>" alt="<?php echo esc_attr($image_welcome['alt']); ?>" class="header__background">
    </div>
    <?php
    endif;
    ?>

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
    <div class="image-text-section" style="display: flex; flex-wrap: wrap; align-items: center; gap: 20px; max-width: 1000px; margin: auto;">
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


        <div class="text" style="flex: 1;">
	        <?php if (get_field('contenus__page')) : ?>
                <p class="contenus__page"><?php the_field('contenus__page'); ?></p>
	        <?php endif; ?>
        </div>
    </div>
</section>
<?php
endwhile;
endif;
get_footer();
?>
</body>

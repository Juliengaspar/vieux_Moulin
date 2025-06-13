<?php
/*
Template Name: Accueil
*/
get_header();
?>
<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/aceuil.css">
	<title>Aceuille</title>
<body>
<header>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1>LE Vieux Moulin</h1>
	<?php if (get_field('welcome__page')) : ?>
        <img src="<?php the_field('welcome__page'); ?>" alt="Image d’accueil" class="header-image" style="max-width: 100%;">
	<?php endif; ?>

	<?php if (get_field('description__page')) : ?>
        <div class="header-text">
            <p style="max-width: 800px; margin: 20px auto;"><?php the_field('description__page'); ?></p>
        </div>
	<?php endif; ?>
	<?php get_template_part('partials/scroll'); ?>

</header>
<section>
	<h2></h2>
	<?php if (get_field('img__Vieux__moulin')) : ?>
        <img src="<?php the_field('img__Vieux__moulin'); ?>" alt="Image pleine largeur" class="full-width-image" style="width: 100%;">
	<?php endif; ?>


</section>
<section class="center-title" style="text-align: center; margin: 60px 0 20px;">
	<?php if (get_field('description__contenus')) : ?>
        <h2><?php the_field('description__contenus'); ?></h2>
	<?php endif; ?>
    <!--
	<h2>Nos maisons, Le Vieux Moulin et Edelweiss,
		bien plus qu’un lieu d’accueil :
		un véritable foyer pour grandir et se reconstruire.</h2>
	<p></p>
	<img src="">-->
    <div class="image-text-section" style="display: flex; flex-wrap: wrap; align-items: center; gap: 20px; max-width: 1000px; margin: auto;">
        <div class="image" style="flex: 1;">
	        <?php if (get_field('image_contenu')) : ?>
                <img src="<?php the_field('image_contenu'); ?>" alt="Image latérale" style="width: 100%;">
	        <?php endif; ?>
        </div>


        <div class="text" style="flex: 1;">
	        <?php if (get_field('contenus__page')) : ?>
                <p><?php the_field('contenus__page'); ?></p>
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

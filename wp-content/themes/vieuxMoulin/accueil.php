<?php /* Template name: Template "accueil*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/aceuil.css">

	<title>Aceuille</title>
<body>
<header>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1>LE Vieux Moulin</h1>
    <!-- Image d'introduction -->
	<?php
	$image_welcome = get_field('welcome__page');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_welcome) :
		?>
        <div class="welcome__page">
            <img src="<?php echo esc_url($image_welcome['url']); ?>" alt="<?php echo esc_attr($image_welcome['alt']); ?>">
        </div>
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
    <!-- Image d'introduction -->
	<?php
	$image_maison = get_field('img__Vieux__moulin');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_maison) :
		?>
        <div class="img__Vieux__moulin">
            <img src="<?php echo esc_url($image_maison['url']); ?>" alt="<?php echo esc_attr($image_maison['alt']); ?>">
        </div>
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

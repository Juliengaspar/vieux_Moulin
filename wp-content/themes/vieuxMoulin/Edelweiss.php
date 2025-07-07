<?php /* Template name: Template "edelweiss*/ ?>
<?php get_header(); ?>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/edelweisse.css">
    <title>Edelweiss</title>
</head>
<body>
<header class="edelweiss-header">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1>Edelweiss</h1>
    <!--<image src="./src/image/imh__edelweiss.png">-->
    <img src="<?php the_field('picture__edelweiss__home'); ?>" alt="Image Edelweiss" style="width: 100%; max-height: 400px; object-fit: cover;">
	<?php
	$image_edelweiss__home = get_field('picture__edelweiss__home');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_edelweiss__home) :
		?>
        <div class="picture__edelweiss__home">
            <img class="images" src="<?php echo esc_url($image_edelweiss__home['url']); ?>" alt="<?php echo esc_attr($image_edelweiss__home['alt']); ?>">
        </div>
	<?php endif; ?>
    <?php get_template_part('partials/scroll'); ?>

</header>
<section class="info__edelweiss" style="padding: 50px 20px;">
    <h2>Info</h2>
    <!--<p>L’Edelweiss est un service résidentiel général accueillant et accompagnant 15 enfants âgés de 4 à 18 ans, placés par les services d’aide à la jeunesse et de protection de la jeunesse.
        Son objectif est d’offrir à ces jeunes, retirés de leur milieu familial, un cadre sécurisant leur permettant de se stabiliser, de se reconstruire et de préparer leur réintégration sociale.
        L’accompagnement inclut l’hébergement, le suivi éducatif et l’exploration des solutions adaptées à l’évolution de leur situation.</p>
    <section class="contacte__edelweisse">-->
    <p><?php the_field('description__edelweisse__home'); ?></p>
    <section class="contacte__edelweisse" style="display: flex; flex-wrap: wrap; gap: 30px; margin-top: 30px;">
    <!--
        <p>Madame Dominique GAUCHE</p>
        <p>Directrice</p>
        <a>Nous envoyer un message</a>
        <image src="">-->
        <h3>Contact</h3>
        <p><?php the_field('contact__direction'); ?></p>
        <a href="<?php the_field('redirection__contacte__page'); ?>" class="button" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background: #333; color: #fff; text-decoration: none;">Nous envoyer un message</a>
	<?php
	$image_edelweiss_flower = get_field('edelweiss__picture');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_edelweiss_flower) :
		?>
        <div class="edelweiss__picture" style="flex: 1;">
            <img class="images" src="<?php echo esc_url($image_edelweiss_flower['url']); ?>" alt="<?php echo esc_attr($image_edelweiss_flower['alt']); ?> " style="width: 100%; max-width: 400px;">
        </div>
	<?php endif; ?>
    </section>
</section>
<!-- SECTION CARTE -->
<section class="maps" style="padding: 50px 20px; text-align: center;">
    <h2>Titre invible</h2>
   <!-- <image src="/src/image/carte__edelweiss.png"  class="carte" alt="carte qui montre edelweiss">
    <a lang="fr" href="https://www.google.be/maps/place/Rue+de+la+Gare+210,+6637+Fauvillers/@49.9056328,5.6810892,17z/data=!3m1!4b1!4m6!3m5!1s0x47c01fb380e1dbd1:0x65feeca13600b131!8m2!3d49.9056294!4d5.6836641!16s%2Fg%2F11l75fxk5s?entry=ttu&g_ep=EgoyMDI1MDQxNi4xIKXMDSoASAFQAw%3D%3D">Voir sur maps</a>-->
    <div style="margin-bottom: 20px;">
		<?php the_field('carte__edelweiss'); ?>
    </div>
    <a href="<?php the_field('redirection__maps'); ?>" target="_blank" style="display: inline-block; padding: 10px 20px; background: #0073e6; color: #fff; text-decoration: none;">Voir sur Maps</a>
</section>
<section class="galerie__picture">
    <h2>Galerie de photo</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-top: 20px;">
	    <?php
	    $galeries = get_field('photo__edelweiss_home');
	    if ($galeries):
		    foreach ($galeries as $galerie): ?>
                <img src="<?php echo $galerie['url']; ?>" alt="<?php echo esc_attr($galerie['alt']); ?>" style="width: 200px; height: 150px; object-fit: cover;">
		    <?php endforeach;
	    endif;
	    ?>
    </div>
    <div>
        <img src="">
    </div>
    <!--<a class="rediretion">Allers sur la page du vieux Moulin</a>-->
    <div style="text-align: center; margin-top: 30px;">
        <a href="<?php the_field('redirection__page'); ?>" class="rediretion"  style="text-decoration: underline; color: #444;">Aller vers le Vieux Moulin</a>
    </div>
</section>
<?php
endwhile;
endif;
get_footer();

?>
</body>
</html>

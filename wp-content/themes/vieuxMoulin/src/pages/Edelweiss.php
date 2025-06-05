<?php
/*
Template Name: Edelweiss
*/
get_header();
?>
<html lang="fr">
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
    <link rel="stylesheet" href="../css/edelweisse.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Edelweiss</h1>
    <!--<img src="./src/img/imh__edelweiss.png">-->
    <img src="<?php the_field('picture__edelweiss__home'); ?>" alt="Image Edelweiss" style="width: 100%; max-height: 400px; object-fit: cover;">
</header>
<section class="info__edelweiss">
    <h2>Info</h2>
    <!--<p>L’Edelweiss est un service résidentiel général accueillant et accompagnant 15 enfants âgés de 4 à 18 ans, placés par les services d’aide à la jeunesse et de protection de la jeunesse.
        Son objectif est d’offrir à ces jeunes, retirés de leur milieu familial, un cadre sécurisant leur permettant de se stabiliser, de se reconstruire et de préparer leur réintégration sociale.
        L’accompagnement inclut l’hébergement, le suivi éducatif et l’exploration des solutions adaptées à l’évolution de leur situation.</p>
    <section class="contacte__edelweisse">-->
    <p><?php the_field('description__edelweisse__home'); ?></p>
    <div style="flex: 1;">
        <h3>Contact</h3>
    <!--
        <p>Madame Dominique GAUCHE</p>
        <p>Directrice</p>
        <a>Nous envoyer un message</a>
        <img src="">-->
        <p><?php the_field('contact__direction'); ?></p>
        <a href="<?php the_field('redirection__contacte__page'); ?>" class="button" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background: #333; color: #fff; text-decoration: none;">Contacter</a>
    </div>
    <div style="flex: 1;">
        <img src="<?php the_field('edelweiss__picture'); ?>" alt="Image contact" style="width: 100%; max-width: 400px;">
    </div>
    </section>
</section>
<!-- SECTION CARTE -->
<section class="maps" style="padding: 50px 20px; text-align: center;">
    <h2>Titre invible</h2>
   <!-- <img src="/src/img/carte__edelweiss.png"  class="carte" alt="carte qui montre edelweiss">
    <a lang="fr" href="https://www.google.be/maps/place/Rue+de+la+Gare+210,+6637+Fauvillers/@49.9056328,5.6810892,17z/data=!3m1!4b1!4m6!3m5!1s0x47c01fb380e1dbd1:0x65feeca13600b131!8m2!3d49.9056294!4d5.6836641!16s%2Fg%2F11l75fxk5s?entry=ttu&g_ep=EgoyMDI1MDQxNi4xIKXMDSoASAFQAw%3D%3D">Voir sur maps</a>-->
    <div style="margin-bottom: 20px;">
		<?php the_field('carte__edelweiss'); ?>
    </div>
    <a href="<?php the_field('lredirection__maps'); ?>" target="_blank" style="display: inline-block; padding: 10px 20px; background: #0073e6; color: #fff; text-decoration: none;">Voir sur Maps</a>
</section>
<section class="galerie__picture">
    <h2>Galerie de photo</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-top: 20px;">
		<?php
		$galeries = get_field(' photo__edelweiss_home');
		if ($galeries):
			foreach ($galeries as $galerie): ?>
                <img src="<?php echo $galerie['url']; ?>" alt="<?php echo $galerie['alt']; ?>" style="width: 200px; height: 150px; object-fit: cover;">
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

</body>
</html>

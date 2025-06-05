<?php
/*
Template Name: Sample-page
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
	<link rel="stylesheet" href="../css/aceuil.css">
	<title>Aceuille</title>
</head>
<body>
<header>
	<h1>LE Vieux Moulin</h1>
    <img src="<?php the_field('welcome__page'); ?>" alt="Image header" style="max-width: 100%;">
    <div class="header-text" style="max-width: 800px; margin: 20px auto;">
        <p><?php the_field('description__page'); ?></p>
    </div>
</header>
<section>
	<h2></h2>
    <div class="full-width-image">
        <img src="<?php the_field('img__Vieux__moulin'); ?>" alt="Image pleine largeur" style="width: 100%;">
    </div>
</section>
<section class="center-title" style="text-align: center; margin: 60px 0 20px;">
    <h2><?php the_field('description__contenus'); ?></h2>
    <!--
	<h2>Nos maisons, Le Vieux Moulin et Edelweiss,
		bien plus qu’un lieu d’accueil :
		un véritable foyer pour grandir et se reconstruire.</h2>
	<p></p>
	<img src="">-->
    <div class="image-text-section" style="display: flex; flex-wrap: wrap; align-items: center; gap: 20px; max-width: 1000px; margin: auto;">
        <div class="image" style="flex: 1;">
            <img src="<?php the_field('image__contenus'); ?>" alt="Image latérale" style="width: 100%;">
        </div>
        <div class="text" style="flex: 1;">
            <p><?php the_field('contenus__page'); ?></p>
        </div>
    </div>
</section>
<?php

get_footer();
?>
</body>
</html>

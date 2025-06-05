<?php
/*
Template Name: etablissement
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
    <link rel="stylesheet" href="../css/etablisement.css">
	<title>etablisement</title>
</head>
<body>
<header style="background: url('<?php the_field('etablisements__header__background'); ?>') center/cover no-repeat; padding: 100px 20px; color: white; text-align: center;">
	<section class="header__page">
		<h2 class="header__title">
			Nos maisons
		</h2>
		<!--<p>Le Vieux Moulin ou  Edelweiss  </p>-->
        <p style="max-width: 800px; margin: auto;"><?php the_field('text__of__page'); ?></p>
        <div>scroll</div>
	</section>
</header>
<section class="etablisments">
	<section class="etalisement">
		<h2>Edelweiss</h2>
		<section>
			<h3>Coordonées</h3>
            <ul>
                <li></li>
            </ul>
		</section>
		<section>
			<h3>Contact</h3>
            <ul>
                <li></li>
            </ul>
		</section>
		<a></a>
	    </section>
        <!-- EDELWEISS -->
		<section class="etalisement">
		<h2>EDELWEISS</h2>
            <img src="<?php the_field('image_ew'); ?>" alt="Image Vieux Moulin" style="width: 100%; max-width: 600px;">
			<section>
            <h3>Coordonées</h3>
            <ul>
                <li> <?php the_field('coordonnee_ew'); ?></li>
                <li><a><?php the_field('email_ew'); ?></a></li>
                <li><a href="<?php the_field('facebook_ew'); ?>" target="_blank">Suivez la page Facebookk</a></li>
            </ul>
            </section>

		<section>
			<h3>Contact</h3>
            <p><?php the_field('name_directeur_ew'); ?></p>
            <p><strong>Email :</strong> <a href="mailto:<?php the_field('email_directeur_ew'); ?>"></a></p>

            <a href="<?php the_field('lien_page_ew'); ?>" class="button">Le Vieux Moulin</a>
        </section>
            <!--Le Vieux Moulin -->
            <section style="padding: 50px;">
                <h2>Le Vieux Moulin</h2>
                <img src="<?php the_field('image_vm'); ?>" alt="Image Edelweiss" style="width: 100%; max-width: 600px;">
               <section>
                <h3>Coordonnées</h3>

                <ul>
                    <li><?php the_field('coordonnee_vm'); ?></li>
                    <li><strong>Email :</strong> <?php the_field('email_vm'); ?></li>
                    <li><a href="<?php the_field('facebook_vm'); ?>" target="_blank">Suivez la page Facebookk</a></li>
                </ul>
               </section>

                <h3>Contact</h3>
                <p><?php the_field('name_directeur_vm'); ?></p>
                <p><a href="mailto:<?php the_field('email_directeur_vm'); ?>"></a></p>

                <a href="<?php the_field('lien_page_vm'); ?>" class="button" style="display: inline-block; padding: 10px 20px; background: #444; color: white; text-decoration: none; margin-top: 20px;">Edelweiss</a>
            </section>

        </section>

</section>

</body>
</html>

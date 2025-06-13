<?php
/*
Template Name: etablissement
*/
get_header();
?>
<html lang="fr-be">
<head>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/etablisement.css">
	<title>etablisement</title>
</head>
<body>
<header style="background: url('<?php the_field('etablisements__header__background'); ?>') center/cover no-repeat; padding: 100px 20px; color: white; text-align: center;">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="header__page" style="background: url('<?php the_field('etablisements__header__background'); ?>') center/cover no-repeat;">
		<h2 class="header__title">
			Nos maisons
		</h2>
		<!--<p>Le Vieux Moulin ou  Edelweiss  </p>-->
        <p style="max-width: 800px; margin: auto;"><?php the_field('text__of__page'); ?></p>
	    <?php get_template_part('partials/scroll'); ?>

    </section>
</header>
<section class="etablisments">
        <!-- EDELWEISS -->
		<section class="etalisement">
		    <h2>EDELWEISS</h2>
            <img src="<?php the_field('image_ew'); ?>" alt="Image Vieux Moulin" style="width: 100%; max-width: 600px;">
			<section>
            <h3>Coordonées</h3>
            <ul>
                <li> <?php the_field('coordonnee_ew'); ?></li>
                <li>Email:<a><?php the_field('email_ew'); ?></a></li>
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
                <p>Email:<a href="mailto:<?php the_field('email_directeur_vm'); ?>"></a></p>

                <a href="<?php the_field('lien_page_vm'); ?>" class="button" style="display: inline-block; padding: 10px 20px; background: #444; color: white; text-decoration: none; margin-top: 20px;">Edelweiss</a>
            </section>

        </section>

</section>
<?php
endwhile;
endif;
get_footer();
?>
</body>
</html>

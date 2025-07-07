<?php /* Template name: Template "administration*/ ?>
<?php get_header(); ?>
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
    <link rel="stylesheet" href="../css/administration.css">
    <title>Administration</title>
</head>
<body>
<header class="header__projet__educatif">
    <h1 class="titile__page">Projet éducatif</h1>
    <!-- Image d'introduction -->
	<?php
	$image_administrations = get_field('icone__projet__educatif');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_administrations) :
		?>
        <div class="icone__projet__educatif">
            <img src="<?php echo esc_url($image_administrations['url']); ?>" alt="<?php echo esc_attr($image_administrations['alt']); ?>">
        </div>
	<?php endif; ?>
    <?php get_template_part('partials/scroll'); ?>

</header>
<section class="organisation__regles">
    <!--<p>Organisation, Fonctionnement et Vie Communautaire&nbsp;</p>-->

    <!-- SOMMAIRE -->
    <section style="max-width: 800px; margin: auto; padding: 40px 20px;">
        <h2><em>Le Vieux Moulin SRG</em></h2>
        <p>
		    <?php  get_field("description__page") ?>
        </p>
        <ul style="list-style: none; padding-left: 0;">
			<?php if (have_rows('sommaire')): ?>
				<?php while (have_rows('sommaire')): the_row(); ?>
                    <li style="display: flex; justify-content: space-between; border-bottom: 1px dotted #ccc; padding: 5px 0;">
                        <span><?php the_sub_field('title'); ?></span>
                        <span><?php the_sub_field('page'); ?></span>
                    </li>
				<?php endwhile; ?>
			<?php endif; ?>
        </ul>
        <!--
    <ul class="liste__organisation__regles">
        <li class="chapitre__regles">Le pouvoir organisateur <span>p5</span></li>
        <li class="chapitre__regles">LLe personnel <span>p6</span></li>
        <li class="chapitre__regles">La procédure d’admission <span>p8</span></li>
        <li class="chapitre__regles">Les modalités des missions du SRG <span>p12</span></li>

        <ul>
            <li class="sous__chapitre__regles">L’offre du Vieux-Moulin SRG <span>p12</span></li>
            <li class="sous__chapitre__regles">Les forces du Vieux-Moulin <span>p14</span></li>
            <li class="sous__chapitre__regles">Déroulement d’une journée type <span>p17</span></li>
            <li class="sous__chapitre__regles">L’individu au sein du Vieux-Moulin <span>p24</span></li>
            <li class="sous__chapitre__regles">La famille au sein du Vieux-Moulin <span>p26</span></li>
            <li class="sous__chapitre__regles">Reprise de la vie commune les moyens  <span>p36</span></li>
        </ul>
        <li class="chapitre__regles">Les moyens <span>p36</span></li>
        <li class="chapitre__regles">Les locaux <span>p5</span>2</li>
        <li class="chapitre__regles">Les fonction Direction, coordinateur, assistant social, éducateur, ... <span>p56</span></li>
        <li class="chapitre__regles">Règlement d’ordre intérieur (ROI) <span>p76</span></li>
    </ul>
    <a class="file__telechargement">Télécharger le pdf</a>
    -->
        <!-- BOUTON TÉLÉCHARGEMENT -->
	    <?php $pdf = get_field('pdf_a_telecharger'); if ($pdf): ?>
            <a href="<?= $pdf['url']; ?>" target="_blank" style="display:inline-block; margin-top:20px; padding:12px 20px; background:#007bff; color:white; text-decoration:none; border-radius:5px;">
                Télécharger le PDF 📥
            </a>
	    <?php endif; ?>
    </section>
</section>
<section class="partenariats">
    <h2 class="partenariats__title">Nos partenaires</h2>
    <!--<image src="./src/image/icone-partenaria.png" alt="image representant 2 mais qui se sert">-->
    <!-- Image d'introduction -->
	<?php
	$image_administrations_partenaria = get_field('icone__partenaria');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_administrations_partenaria) :
		?>
        <div class="icone__partenaria">
            <img src="<?php echo esc_url($image_administrations_partenaria['url']); ?>" alt="<?php echo esc_attr($image_administrations_partenaria['alt']); ?>">
        </div>
	<?php endif; ?>
    <section class="logo__partenariats">
        <h3 class="logo__parteariats">Aide a la jeunesse</h3>
        <div class="liste__logo__partenariats">
            <!--<image class="logo__partenariat" src="./src/image/aide-jeunesse-logo.png" alt="logo representant l'un des des partenaria qui les aides">
            <image class="logo__partenariat" src="./src/image/logo-jeunesse.png" alt="logo representant l'un des des partenaria qui les aides">-->
            <img class="logo__partenariat" src="<?php get_field("logo__partenaria") ?>" alt="logo representant l'un des des partenaria qui les aides">
            <!-- Image d'introduction -->
	        <?php
	        $image_administrations_logo_1 = get_field('logo__partenaria');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image_administrations_logo_1) :
		        ?>
                <div class="image_administrations_logo_2">
                    <img class="logo__partenariat" src="<?php echo esc_url($image_administrations_logo_1['url']); ?>" alt="<?php echo esc_attr($image_administrations_logo_1['alt']); ?>">
                </div>
	        <?php endif; ?>


            <img class="logo__partenariat" src="<?php get_field("logo__partenaria_2") ?>" alt="logo representant l'un des des partenaria qui les aides">
            <!-- Image d'introduction -->
	        <?php
	        $image_administrations_logo_2 = get_field('logo__partenaria_2');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image_administrations_logo_2) :
		        ?>
                <div class="logo__partenaria_2">
                    <img class="logo__partenariat" src= "<?php echo esc_url($image_administrations_logo_2['url']); ?>" alt="<?php echo esc_attr($image_administrations_logo_2['alt']); ?>">
                </div>
	        <?php endif; ?>

        </div><!--
        <p>Services d'aide à la Jeunesse : le travail a repris - RTBF Actus</p>
        <a href="https://www.aidealajeunesse.cfwb.be/" hreflang="fr" lang="fr">Voire le site oficiel</a>-->
        <p><?php get_field("description__of__partenarias")?></p>
        <a href="<?php get_field("redirection__url__partenarias") ?>" hreflang="fr" lang="fr">Voire le site oficiel</a>
    </section>
    <section class="logo__partenariats">
        <h3 class="logo__parteariats">Fedération wallonie-bruxelles</h3>
        <img class="logo__parteariat" src="<?php get_field("logo__Federation__W__BX") ?>" alt="logo representant l'un des des partenaria qui les aides">
        <p><?php get_field("description__logo__partenariats") ?></p>
        <a href="<?php get_field("site__offciel__federation__wallonie__bruxelles")?>" hreflang="fr" lang="fr">Voire le site oficiel</a>
    </section>
</section>
</body>
</html>

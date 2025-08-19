<?php
/* Template name: Template "administration" */
get_header();
?>

	<head>
		<title>Administration</title>

		<style>
            body{
                font-family: cavea;
                font-size: 16px;
            }

            .header__projet__educatif{
                background-color: #BDFAEA;
            }
            .titile__page__educatif,
            .partenariats__title{
                text-align: center;
                font-size: 3rem;
                font-weight: 800;
                text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
                padding: 5% 0;
            }

            .icone__projet__educatif{
                margin: 5% 30%;
                width: 75%;
                height: auto;

            }

            .icone__projet__educatif>img {
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
            .title__sommaire{
                font-size: 2rem;
                font-weight: 700;
                font-style: italic;
            }
            .description__somaire{
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            .liste__somaire{
                display: flex;
                justify-content: space-between;
                padding: 5px 0;
            }

            .telechargement__pdf{
                display:inline-block;
                margin-top:20px;
                padding:12px 20px;
                background:#007bff;
                color:white;
                text-decoration:none;
                border-radius:5px;
                -webkit-box-shadow: 11px 19px 18px -6px rgba(0,0,0,0.26);
                box-shadow: 11px 19px 18px -6px rgba(0,0,0,0.26);
            }
            .telechargement__pdf:hover{
                background-color: #004597;
            }
            .icone__partenaria>img{
                width: 25%;
                height: auto;
                margin: 0 37%;
            }
            .liste__img{
                display: flex;
            }

            .title__partenaria{
                font-size: 2rem;
                text-align: center;
                width: auto;
                text-shadow: 5px 5px 4px rgba(47,109,236,0.64);

            }

            .logo__partenaria img{
                width: 60%;
                margin: 5% 48%;
            }

            .info__partenariats{
                margin-bottom: 5%;
                margin-left: 5%;

            }

            .redirection__administrations{
                font-size: 1rem;
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen-Sans', 'Ubuntu', 'Cantarell', 'Helvetica Neue', sans-serif;
                border-bottom: 1px solid black;
            }

		</style>
	</head>
	<body>
	<?php
	if (have_posts()) :
	while (have_posts()) : the_post();
	?>
<section class="header__projet__educatif">
	<h1 class="titile__page__educatif">Projet éducatif</h1>
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
    <div class="scroll__animation">
	<?php get_template_part('partials/scroll'); ?>
    </div>

</section>
<section class="organisation__regles">
	<!--<p>Organisation, Fonctionnement et Vie Communautaire&nbsp;</p>-->

	<!-- SOMMAIRE -->
	<section style="max-width: 800px; margin: auto; padding: 40px 20px;">
		<h2 class="title__sommaire">Le Vieux Moulin SRG</h2>
		<p class="description__somaire">
			<?php  the_field("description__page") ?>
		</p>
		<ul style="list-style: none; padding-left: 0;">
			<?php if (have_rows('sommaire')): ?>
				<?php while (have_rows('sommaire')): the_row(); ?>
					<li class="liste__somaire">
						<span class="titile__page"><?php the_sub_field('title'); ?></span>
						<span class="name__page"><?php the_sub_field('page'); ?></span>
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
			<a class="telechargement__pdf" href="<?= $pdf['url']; ?>" target="_blank">
				Télécharger le PDF
			</a>
		<?php endif; ?>
	</section>
</section>
<section class="partenariats">
	<h2 class="partenariats__title">Nos partenaires</h2>
	<!--<image src="./src/image/icone-partenaria.png" alt="image representant 2 mais qui se sert">-->
	<!-- Image d'introduction -->
	<?php
	$icone_partenaria = get_field('icone__partenaria');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($icone_partenaria) :
		?>
		<div class="icone__partenaria">
			<img src="<?php echo esc_url($icone_partenaria['url']); ?>" alt="<?php echo esc_attr($icone_partenaria['alt']); ?>">
		</div>
	<?php endif; ?>
	<section>
		<h3 class="title__partenaria">Aide a la jeunnesse</h3>
		<div class="liste__img">
			<?php
			$logo1 = get_field('icone__partenaria_logo');
			// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

			if ($logo1) :
				?>
				<div class="logo__partenaria">
					<img src="<?php echo esc_url($logo1['url']); ?>" alt="<?php echo esc_attr($logo1['alt']); ?>">
				</div>
			<?php endif; ?>

			<?php
			$logo2 = get_field('logo__partenaria_logo_2');
			// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

			if ($logo2) :
				?>
				<div class="logo__partenaria">
					<img src="<?php echo esc_url($logo2['url']); ?>" alt="<?php echo esc_attr($logo2['alt']); ?>">
				</div>
			<?php endif; ?>
		</div>
		<div class="info__partenariats">
			<?php $site_url__aide__jeunesse = get_field("redirection__url__partenarias"); ?>
			<?php if ($site_url__aide__jeunesse): ?>
				<a href="<?php echo esc_url($site_url__aide__jeunesse); ?>" hreflang="fr" lang="fr" target="_blank" class="redirection__administrations">Voir le site officiel</a>
			<?php endif; ?>

		</div>
	</section>

	<section class="logo__partenariats">
		<h3 class="title__partenaria">Fédération Walonnie-Bruxelles</h3>
		<div class="liste__logo__partenariats">
            <?php
            $image_activites__header = get_field('icone__activitee');

            if ($image_activites__header) :
                ?>
                <div class="icone__activitee">
                    <img src="<?php echo esc_url($image_activites__header['url']); ?>" alt="<?php echo esc_attr($image_activites__header['alt']); ?>" class="icone__people">
                </div>
            <?php endif; ?>

			<?php
			$logo_fw_bx = get_field('logo__Federation__W__BX');
			//var_dump($logo_fw_bx); // temporaire pour voir ce qu'il y a dans le fichiers

			if ($logo_fw_bx) :
				?>
				<div class="icone__partenaria">
					<img src="<?php echo esc_url($logo_fw_bx['url']); ?>" alt="<?php echo esc_attr($logo_fw_bx['alt']); ?>">
				</div>
			<?php endif; ?>

			<div class="info__partenariats">
				<?php $site_url = get_field("site__offciel__federation__wallonie__bruxelles"); ?>
				<?php if ($site_url): ?>
					<a href="<?php echo esc_url($site_url); ?>" hreflang="fr" lang="fr" target="_blank" class="redirection__administrations">Voir le site officiel</a>
				<?php endif; ?>
			</div>
		</div>
	</section>
</section>
	<?php
	endwhile;
	endif;
	?>
<?php get_footer(); ?>
    </body>

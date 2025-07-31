<?php
/*
Template Name: Template "activités"
*/
?>
<?php get_header(); ?>
<head>
    <title>Activités</title>
    <style>
        .title__page{
            background-color: #BDFAEA;
        }
        .title__page>h1{
            margin:5% 50%;
        }
        .title__page>.icone__activitee{
            margin:5% 50%;

        }
        .scroll__animation{
            width: 10%;
            height: auto;
            margin: auto;
        }

        .activitees>h2,
        .activitees>p{
            margin-left: 15%;
        }
        .activitees>h2{
            font-size: 2rem;
            font-style: italic;
            font-weight: 700;
        }
    .picture_voyage>img,
    .image-activitee>img{
        height: auto;
        width: 50%;
    }

        .redirection{
            background-color: #BDFAEA;
            color: black;
            text-decoration: none;
            padding: 2%;
            margin-bottom: 5%;
            -webkit-box-shadow: 5px 5px 12px 6px rgba(0,0,0,0.25);
            box-shadow: 5px 5px 12px 6px rgba(0,0,0,0.25);
        }
        .redirection:hover{
            background-color: #2a688f;
            color: white;
        }

        .link__navigations{
            margin: 5%;
        }


    </style>
</head>
<body>
<section class="title__page">
    <h1>Activités</h1>
    <!-- Image d'introduction -->
	<?php
	$image_activites__header = get_field('icone__activitee');

	if ($image_activites__header) :
		?>
        <div class="icone__activitee">
            <img src="<?php echo esc_url($image_activites__header['url']); ?>" alt="<?php echo esc_attr($image_activites__header['alt']); ?>">
        </div>
	<?php endif; ?>
    <p style="margin-top: 20px;"></p>
    <div id="balloon-div">
        <div class="svg__content">
            <div id="ballon__creation"></div>

            <svg id="ballon" data-name="ballon" class="ballon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.46 92.75" style="display: none">
                <defs>
                    <style>
                        .cls-1 {
                            fill: lime;
                        }
                    </style>
                </defs>
                <path d="M12.33,92.75h0c-1.8,0-3.26-1.46-3.26-3.26l9.34-22.27-9.34-24.94c0-1.8,1.46-3.26,3.26-3.26h0c1.8,0,3.26,1.46,3.26,3.26l9.34,24.94-9.34,22.27c0,1.8-1.46,3.26-3.26,3.26Z"/>
                <ellipse class="cls-1" cx="13.23" cy="24.32" rx="13.23" ry="24.32"/>
            </svg>

        </div>

    </div>
    <div class="scroll__animation">
	<?php get_template_part('partials/scroll'); ?>
    </div>
</section>
<section class="activitees">
    <h2>Viens découvrir tout ce qu’on fait au Vieux Moulin </h2>
    <!--<p>Découvrez sur cette page une sélection d’activités et d’événements organisés
        avec les jeunes au Vieux Moulin pour partager de bons moments.</p>-->
    <p><?php the_field("description__page__activitee"); ?></p>

	<?php if (have_rows('activites')) : ?>
        <section class="liste__projets" style="max-width: 1000px; margin: auto; padding: 20px;">
			<?php while (have_rows('activites')) : the_row(); ?>
                <section class="projet">
                    <div class="activitees__listes" style="display: flex; align-items: flex-start; margin-bottom: 40px; gap: 20px;">	                    <?php
	                    $image_activites = get_sub_field('image-activitee');
	                    if ($image_activites) :
		                    ?>
                            <div class="image-activitee">
                                <img src="<?php echo esc_url($image_activites['url']); ?>" alt="<?php echo esc_attr($image_activites['alt']); ?>">
                            </div>
	                    <?php endif; ?>
                    </div>
                    <h3><?php the_sub_field('title__activitee'); ?></h3>
                    <p><?php the_sub_field('description-actvitee'); ?></p>
                </section>
			<?php endwhile; ?>
        </section>
	<?php else : ?>
        <p>Aucun projet n’a été ajouté.</p>
	<?php endif; ?>
<!--
    <section class="activitee">
        <h3>🎵En avant la musique !</h3>
        <p>Tu aimes la musique ? Des bénévoles viennent spécialement pour t’aider à découvrir la musique et peut-être même te donner envie d’en faire plus tard !</p>
        <div>
            <image src="./src/image/image-rotate.png" class="exemple__of__activitee">
        </div>
    </section>
    <section class="activitee">
        <h3>🎅La magie de Saint-Nicolas</h3>
        <p>En février, une grande surprise nous attend ! Saint Nicolas et son fidèle ami, le Père Fouettard, viennent nous rendre visite. Les enfants sages reçoivent des cadeaux, et tout le monde passe un bon moment plein de rires et de joie.</p>
        <div>
            <image src="./src/image/image-rotate.png" class="exemple__of__activitee">
        </div>
    </section>-->
</section>
<section class="activitees">
    <h2>Des sorties Incroyables pour s’amuser</h2>
    <p>Aux Vieux Moulins, on part en excursion pour découvrir de nouveaux endroits et passer des journées inoubliables !</p>
    <p><?php the_sub_field('voyages__description') ?></p>
    <!-- VOYAGES (RÉPÉTEUR) -->
	<?php if (have_rows('voyages')): ?>
        <section style="max-width: 1000px; margin: auto; padding: 20px;">
			<?php while (have_rows('voyages')): the_row(); ?>
                <section class="voyages__listes" style="display: flex; align-items: flex-start; margin-bottom: 40px; gap: 20px;">
	                <?php
	                $image_voyages = get_sub_field('picture_voyage');
	                if ($image_voyages) :
		                ?>
                        <div class="picture_voyage">
                            <img src="<?php echo esc_url($image_voyages['url']); ?>" alt="<?php echo esc_attr($image_voyages['alt']); ?>">
                        </div>
	                <?php endif; ?>

                    <div>
                        <h3><?php the_sub_field('title_voyage'); ?></h3>
                        <p><?php the_sub_field('description_voyage'); ?></p>
                    </div>
                </section>
			<?php endwhile; ?>
        </section>
	<?php endif; ?>
    <!--
    <section class="activitee">
        <h3> 🎡Au Parc Merveilleux</h3>
        <p>on rencontre des animaux, on joue et on explore un monde magique.</p>
        <div>
            <image src="./src/image/image-rotate.png" class="exemple__of__activitee">
        </div>
    </section>
    <section class="activitee">
        <h3> 🎢À Walibi,</h3>
        <p>on fait le plein de sensations fortes avec des manèges et des attractions géniales ! </p>
        <div>
            <image src="./src/image/image-rotate.png" class="exemple__of__activitee">
        </div>
    </section>
    <section class="activitee">-
        <h3>🚶Des balades pour explorer ! </h3>
        <p>On adore partir en balade pour découvrir la nature, respirer le grand air et profiter d’un moment avec les copains.!</p>
        <div>
            <image src="./src/image/image-rotate.png" class="exemple__of__activitee">
        </div>
    </section>
    <section class="activitee">
        <h3>🏕️Cap sur l’Ardèche</h3>
        <p>On part ensemble en voyage en Ardèche ! Là-bas, on découvre la nature, on fait des activités géniales et on passe du temps bord de la piscine avec les copains. C’est une aventure qu’on n’oubliera jamais !</p>
        <div>
            <image src="./src/image/image-rotate.png" class="exemple__of__activitee">
        </div>
    </section>-->
    <div class="link__navigations">
<a href="<?php the_field("link__button")?>" class="redirection">Nous aider à faire plus d’activités</a>
    </div>
</section>
<?php get_footer(); ?>
</body>

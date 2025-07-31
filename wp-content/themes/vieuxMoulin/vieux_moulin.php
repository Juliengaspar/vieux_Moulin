<?php 
/* 
Template name: Template "vieux_moulin
*/
?>
<?php get_header(); ?>

<head>

    <title>Vieux Moulin</title>
    <style>
        body{
            background-color: white;
            font-size: 16px;
        }
        a{
            cursor: pointer;
        }
        .header__vieuxMoulin{
            background-color: #BDFAEA;
            color: black;
            text-align: center;
        }
        .vieux__moulin__title{
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
        }

        .vieux__moulin{

        }

        .info__vieux__moulin>h2{
            font-size: 2.5rem;
            text-align: center;
            width: 40%;
            height: auto;
            margin: auto;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
        }
        .info__vieux__moulin>p{
            width: 70%;
            margin: 2% auto;
        }

        .contacte__vieux__moulin{
            margin: 5%;
            display: flex;
        }

        .contacte__vieux__moulin>h3{
            font-size: 2.5rem;
            margin: 2% 5%;
        }

        .contacte__vieux__moulin>p{
            width: 30%;
            font-size: 1rem;
            margin-bottom: 1%;
            line-height: 2.5vh;
            margin-left: 5%;
        }

        .contacte__vieux__moulin>a{
            padding: 1rem 0.5rem;
            background-color: #0466F3;
            color: white;
            margin: 2% 5%;
        }
        .contacte__vieux__moulin>img{
        }
        .maps{

        }
        .maps>img{
            width: 80%;
            margin: 0 10%;
            height: auto;
        }
        .maps>a{
            background-color: #0466F3;
            color: white;
            margin: 10%;
            padding: 0.5rem 1rem;
        }

        .autours__vieux__moulin{
            margin-top: 5%;
            display: grid;
            grid-template-columns: auto auto;
        }
        .autours__vieux__moulin>h2,
        .autours__vieux__moulin>p{
            grid-column: 2;
            margin-top: 5%;
            margin-left: 5%;
        }


        .picture__foret{
            grid-column: 1;
            margin-top: -10%;
            width: 70%;
            height: auto;
            margin-left: 25%;
        }

        .vie__communautee{
            margin: 5% 10%;
        }
        .vie__communautee>p{
            margin: 5% 0;
            line-height: 5vh;
        }
        .slider-container {
            overflow: hidden;
            width: 100%;
            background-color: #f8f8f8;
        }

        .slider-track {
            display: flex;
            width: fit-content;
            animation: scroll-left 20s linear infinite;
        }

        .slider-image {
            flex: 0 0 auto;
            height: 150px; /* Choisis la hauteur souhaitée */
            margin-right: 20px;
        }

        .slider-image img {
            height: 100%;
            width: auto;
            display: block;
            object-fit: contain;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        .legend{
            text-align: center;
            font-style: italic;
            color: #006DFF;
        }
        .button{
            font-size: 1rem;
            background-color: #0466F3;
            color: white;
        }

        .button:hover{
            background-color: #003481;
        }

        #button__contacte{
            padding:  2% 5%;
            margin: 5% 0;
        }
        #button__maps{
            padding: 1% 5%;
            margin-left: 2%;
        }

        .autours__vieux__moulin__text{
            margin-top: 5%;
        }

        .autours__vieux__moulin__img{
            width: 100px;
            height: auto;
            max-width: 50%;
            max-height: 100%;
            margin: 10% 0;
        }

    </style>
</head>
<body>
<section class="header__vieuxMoulin">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1 class="vieux__moulin__title">Le Vieux Moulin</h1>
    <!--<image src="./src/image/maison__vieux__moulin.jpg" alt="vue de la maison de vieux moulin" class="vieux__moulin">-->
	<?php
	$image__vieux__moulin = get_field('picture__vieux__moulin__home');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__vieux__moulin) :
		?>
        <div class="image">
            <img class="image__vieux__moulin"  src="<?php echo esc_url($image__vieux__moulin['url']); ?>" alt="<?php echo esc_attr($image__vieux__moulin['alt']); ?>">
        </div>
	<?php endif; ?>
    <?php get_template_part('partials/scroll'); ?>

</section>
<section class="info__vieux__moulin">
    <h2>Info</h2>
    <!--<p>Le Vieux Moulin est un Service Résidentiel Général qui accueille et héberge des enfants et adolescents de 0 à 18 ans, placés par les services d'aide et de protection de la jeunesse. Sa mission est d'assurer un cadre sécurisant et éducatif aux jeunes en difficulté, dont la santé, la sécurité ou les conditions de vie sont compromises en raison de leur situation ou de leur entourage. L'accompagnement repose sur une approche basée sur la confiance.</p>-->
	<p>
    <?php the_field('description__home'); ?>
    </p>
    <section class="contacte__vieux__moulin">
        <div>
        <h3>Contact</h3>
	<p>
        <?php the_field('contact__directeur'); ?>
    </p>
    <p>Email:<?php the_field('email__redirection__direction'); ?></p>
         <p>

             <a href="<?php echo esc_url(get_field('redirecton__page__contacte')); ?>" class="button" id="button__contacte">Nous envoyer un message</a>
        </p>
        </div>
	    <?php $icone = get_field('icone__people'); ?>
	    <?php if ($icone): ?>
        <div>
        <img src="<?php echo esc_url($icone['url']); ?>" alt="<?php echo esc_attr($icone['alt']); ?>">
        </div>
	    <?php endif; ?>
    </section>
</section>
<section class="maps">
    <h2 class="sr-only" style="display: none">Titre invible</h2>
    	<?php
	$image__carte__vieux__moulin = get_field('carte__vieux__moulin');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__carte__vieux__moulin) :
		?>
        <div class="image" >
            <img class="carte__vieux__moulin"  src="<?php echo esc_url($image__carte__vieux__moulin['url']); ?>" alt="<?php echo esc_attr($image__carte__vieux__moulin['alt']); ?>">
        </div>
	<?php endif; ?>
                <a href="<?php echo esc_url(get_field('redirection__page__maps')); ?>" class="button" id="button__maps">Voir sur maps</a>

</section>

<section class="autours__vieux__moulin">
    <h2>Environnement</h2>
        <?php the_field('environement__home'); ?>
	<?php
	$image__picture__foret = get_field('picture__foret');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__picture__foret) :
		?>
        <div class="image">
            <img class="picture__foret"  src="<?php echo esc_url($image__picture__foret['url']); ?>" alt="<?php echo esc_attr($image__picture__foret['alt']); ?>">
        </div>
	<?php endif; ?>
</section>
<section class="vie__communautees">
    <h2>La vie en communauté</h2>
    <!--<p>Vivre en communauté n’est pas toujours facile, surtout lorsque l’adolescent traverse les bouleversements liés à son évolution.
        Tandis que les plus jeunes jouent et s’expriment bruyamment, l’adolescent cherche un espace où il peut se retrouver avec ses pairs en toute tranquillité.

        L’aménagement des espaces de vie de la maison est conçu en fonction de l’âge et des besoins des jeunes accueillis. Chaque lieu est pensé pour favoriser leur bien-être, leur épanouissement et leur réassurance, tout en permettant l’observation et l’accompagnement éducatif. Un espace modulable peut ainsi faire office de salon TV pour les plus jeunes, mais aussi d’atelier créatif ou d’aire de jeux vidéo.

        La cuisine, véritable cœur de la maison, est un lieu de partage et d’échange où tous se retrouvent pour les repas, renforçant ainsi le lien communautaire.
         </p>-->
    <p>
        <?php get_field('vie__communautee'); ?>
    </p>
    <!--<div>
        <image src="">
    </div>-->
    <div class="slider-container">
        <div class="slider-track">
			<?php
			$images = get_field('interrieur__home__animation');
			if( $images ):
				// On double la boucle pour faire l'effet d'infini
				for ($i = 0; $i < 2; $i++):
					foreach( $images as $image ): ?>
                        <div class="slider-image">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
					<?php endforeach;
				endfor;
			endif; ?>
        </div>
    </div>
    <!--<p >Le jeu ouvre toutes les portes. Pour un professionnel, il constitue la plus belle fenêtre d’observation de l’état psychique d’un enfant. Le jeu est aussi un moyen privilégié d’entrer en relation avec l’enfant, en particulier lorsque le lien avec l’adulte est fragile ou rompu.</p>-->
    <p><?php the_field('vie__comunautee__part2') ?></p>
    <p class="legend"><?php the_field('citation__vieux__moulin') ?></p>
    <a href="<?php echo esc_url(get_field('redirecton__page__activitees')); ?>" class="button" id="button__Activitees">Parcourir nos activités et nos sorties</a>


    <div>
        <p class="autours__vieux__moulin__text"><?php the_field('vie__comunautee') ?></p>
        <div>
		    <?php
		    $galeries__activitees = get_field('activitee__home');
		    if ($galeries__activitees):
			    foreach ($galeries__activitees as $galerie__activitee): ?>
                    <img src="<?php echo $galerie__activitee['url']; ?>" alt="<?php echo $galerie__activitee['alt']; ?>">
			    <?php endforeach;
		    endif;
		    ?>
        <a href="<?php echo esc_url(get_field('redirection____page__el')); ?>" class="button" id="button__Edelweiss">Aller vers Edelweiss</a>
<!--	       /*?php var_dump(get_field('redirection____page__el')); ?>*/-->
        </div>
    </div>
</section>
<?php
endwhile;
endif;
get_footer();
?>

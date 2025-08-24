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
        body, a, button {
            cursor: url('src/image/icones/vieux__moulin__icone__small.png'), auto;
        }

        a:hover, button:hover {
            cursor: url('src/image/icones/vieux__moulin__icone__small.png'), pointer;
        }
        a{
            cursor: pointer;
        }
        .header__vieuxMoulin{
            background-color: #BDFAEA;
            color: black;
            text-align: center;
            margin-top: 6%;
        }
        .vieux__moulin__title{
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
        }

        .vieux__moulin{

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

        .info__vieux__moulin>h2{
            font-size: 2.5rem;
            text-align: center;
            width: 40%;
            height: auto;
            margin: auto;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
        }
        h2{
            font-size: 2rem;
        }
        .info__vieux__moulin>p{
            width: 70%;
            margin: 5% auto;
        }

        .contacte__vieux__moulin{
            width: 100%;

            margin: 5%;
            display: grid;
            grid-template-columns: auto auto;
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
        .button__vieux__moulin{
            width: 200%;
            font-size: 1rem;
            padding: 0.5rem 0.2rem;
            background-color: #0466F3;
            color: white;
            margin: 4% 0;
            text-decoration: none;
        }
        .button__vieux__moulin:hover{
            background-color: #003a83;
        }

        .people{
            margin-left: 70%;
        }
        .people>img{
            height: auto;
        }
        .maps__vieux__moulin{
            margin: 5% auto;
        }
        .maps__vieux__moulin>img{
            width: 100%;
            height: auto;
        }
        .maps__vieux__moulin>a{
            background-color: #0466F3;
            color: white;
            margin: 10%;
            padding: 0.5rem 1rem;
        }

        .autours__vieux__moulin{
                margin: 10%;
                display: grid;
            grid-template-columns: auto auto;
        }
        .autours__vieux__moulin>h2,
        .autours__vieux__moulin>p{
            margin-top: 5%;
            margin-left: 5%;
        }

        .environement__text {
            grid-column: 2;
        }
        .environement__images{
            grid-column: 1;
            width: 125%;
            height: auto;
        }
        .picture__foret{
            grid-column: 1;
            margin-top: -25%;
            width: 70%;
            height: auto;
            margin-left: -15%;
        }


        .communautees__tile{
            margin-left: 5%;
            font-size: 2rem;
        }
        .tous__texte__communautee{
            margin: 5%;
            width: 75%;
            height: auto;
        }
        #text__activitee{
            margin: -5% 2.5%;
        }
        #tous__texte__communautee{
            margin: 2% 2.5%;
        }

        .slider-container {
            overflow: hidden;
            width: 100%;
            margin: 10% 0;
        }

        .slider-track {
            display: flex;
            width: fit-content;
            animation: scroll-left 20s linear infinite;
            margin-bottom: 5%;
        }

        .slider-image {
            flex: 0 0 auto;
            height: auto;
            margin-right: 2%;
        }
        .galeries{
            margin-right: 2%;
            margin-bottom: 1%;

        }
        .galeries>img{
            flex: 0 0 auto;
            height: auto;
            margin-right: 2%;
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


        .button__activites{
            font-size: 1rem;
            background-color: #0466F3;
            color: white;
            margin-top: 5%;
            text-decoration:none;
            padding: 1rem;
            border-radius: 5px;
            -webkit-box-shadow: 3px 5px 13px 3px rgba(0,0,0,0.23);
            box-shadow: 3px 5px 13px 3px rgba(0,0,0,0.23)
        }

        .text__activitee{
            margin: -5% auto;
            width: 75%;
        }
        #citation{
            text-align: center;
            font-style: italic;
            color: #006DFF;
            margin: 2%  auto;
        }
        .button__vm{
            font-size: 1rem;
            background-color: #0466F3;
            color: white;
            padding: 1rem;
            border-radius: 5px;
            -webkit-box-shadow: 3px 5px 13px 3px rgba(0,0,0,0.23);
            box-shadow: 3px 5px 13px 3px rgba(0,0,0,0.23);
        }

        #button__Edelweiss{
            font-size: 1rem;
            background-color: #0466F3;
            color: white;
            margin: 5% 2.5% 10% 2.5%;
            padding: 1rem;
            border-radius: 5px;
            -webkit-box-shadow: 3px 5px 13px 3px rgba(0,0,0,0.23);
            box-shadow: 3px 5px 13px 3px rgba(0,0,0,0.23);
        }

        .button__vm:hover,
        #button__Edelweiss:hover{
            background-color: #003481;
        }


        #button__maps{
            padding: 1% 5%;
            margin-left: 3%;
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
    <div class="scroll__animation">
		<?php get_template_part('partials/scroll'); ?>
    </div>

</section>
<section class="info__vieux__moulin">
    <h2></h2>
    <!--<p>Le Vieux Moulin est un Service Résidentiel Général qui accueille et héberge des enfants et adolescents de 0 à 18 ans, placés par les services d'aide et de protection de la jeunesse. Sa mission est d'assurer un cadre sécurisant et éducatif aux jeunes en difficulté, dont la santé, la sécurité ou les conditions de vie sont compromises en raison de leur situation ou de leur entourage. L'accompagnement repose sur une approche basée sur la confiance.</p>-->
	<p class="citation__vieux__moulin">
    <?php the_field('description__home'); ?>
    </p>
    <section class="contacte__vieux__moulin">
        <div>
        <h3>Contact</h3>
	<p>
        <?php the_field('contact__directeur'); ?>
    </p>
    <p>Email:<span class="email__vieux__moulin"><?php the_field('email__redirection__direction'); ?></span></p>
         <p>

             <a href="<?php echo esc_url(get_field('redirecton__page__contacte')); ?>" class="button__vieux__moulin" id="button__contacte">Nous envoyer un message</a>
        </p>
        </div>
	    <?php $icone = get_field('icone__people'); ?>
	    <?php if ($icone): ?>
        <div class="people">
        <img class="images__people" src="<?php echo esc_url($icone['url']); ?>" alt="<?php echo esc_attr($icone['alt']); ?>">
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
        <div class="maps__vieux__moulin" >
            <img class="carte__vieux__moulin"  src="<?php echo esc_url($image__carte__vieux__moulin['url']); ?>" alt="<?php echo esc_attr($image__carte__vieux__moulin['alt']); ?>">
        </div>
	<?php endif; ?>
                <a href="<?php echo esc_url(get_field('redirection__page__maps')); ?>" class="button__vm" id="button__maps">Voir sur maps</a>

</section>

<section class="autours__vieux__moulin">
    <div class="environement__text">
    <h2 class="title__environement">Environnement</h2>

    <p>
        <?php the_field('environement__home'); ?>&nbsp;
    </p>
    </div>
	<?php
	$image__picture__foret = get_field('picture__foret');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__picture__foret) :
		?>
        <div class="environement__images">
            <img class="picture__foret"  src="<?php echo esc_url($image__picture__foret['url']); ?>" alt="<?php echo esc_attr($image__picture__foret['alt']); ?>">
        </div>
	<?php endif; ?>
</section>
<section class="vie__communautees">
    <h2 class="communautees__tile">La vie en communauté</h2>
    <!--<p>Vivre en communauté n’est pas toujours facile, surtout lorsque l’adolescent traverse les bouleversements liés à son évolution.
        Tandis que les plus jeunes jouent et s’expriment bruyamment, l’adolescent cherche un espace où il peut se retrouver avec ses pairs en toute tranquillité.

        L’aménagement des espaces de vie de la maison est conçu en fonction de l’âge et des besoins des jeunes accueillis. Chaque lieu est pensé pour favoriser leur bien-être, leur épanouissement et leur réassurance, tout en permettant l’observation et l’accompagnement éducatif. Un espace modulable peut ainsi faire office de salon TV pour les plus jeunes, mais aussi d’atelier créatif ou d’aire de jeux vidéo.

        La cuisine, véritable cœur de la maison, est un lieu de partage et d’échange où tous se retrouvent pour les repas, renforçant ainsi le lien communautaire.
         </p>-->
    <div class="tous__texte__communautee">
    <p class="communautees__description" id="communautees__vie__description">
        <?php the_field('vie__communautee'); ?>
    </p>
    </div>
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
    <div class="tous__texte__communautee" id="text__activitee">
    <p><?php the_field('vie__comunautee__part2') ?></p>
    <p class="legend" id="citation"><?php the_field('citation__vieux__moulin') ?></p>
    <a href="<?php echo esc_url(get_field('redirecton__page__activitees')); ?>" class="button__activites" id="button__Activitees">Parcourir nos activités et nos sorties</a>
    </div>


    <div class="slider-container">
        <div class="tous__texte__communautee" id="tous__texte__communautee">
<!--        <p class="autours__vieux__moulin__text">--><?php //the_field('vie__comunautee') ?><!--</p>-->
        </div>
        <div class="slider-track">
		    <?php
		    $galeries__activitees = get_field('activitee__home');
		    if ($galeries__activitees):
			    foreach ($galeries__activitees as $galerie__activitee): ?>
                <div class="galeries">
                    <img class="galeries__activitees" src="<?php echo $galerie__activitee['url']; ?>" alt="<?php echo $galerie__activitee['alt']; ?>">
                </div>
			    <?php endforeach;
		    endif;
		    ?>

            <!--            --><?php //var_dump(get_field('redirection____page__el')); ?>
        </div>
            <a href="<?php echo esc_url(get_field('redirection____page__el')); ?>" class="button__vm" id="button__Edelweiss">Aller vers Edelweiss</a>
    </div>
</section>
<?php
endwhile;
endif;
get_footer();
?>

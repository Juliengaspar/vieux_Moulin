<?php
/*
Template name: Template "edelweiss
*/
?>
<?php get_header(); ?>
<head>
    <title>Edelweiss</title>
    <style>
        body{
            background-color: white;
            font-size: 16px;
        }
        a{
            cursor: pointer;
        }
        .edelweiss-header{
            background-color: #BDFAEA;
            color: black;
            text-align: center;
            padding: 1rem;
        }
        h1{
            text-align: center;
            font-size: 5rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
            margin: 5% 0;
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
        .edelweiss{
            width: 40%;
            height: auto;
            margin: 5%;
        }

        .info__edelweiss>h2{
            font-size: 2.5rem;
            margin: 2% 10%;
        }
        .info__edelweiss>p{
            width: auto;
            margin: 2% 10%;
        }

        .contacte__edelweisse{
           display: grid;
           grid-template-columns: auto auto;
           grid-gap: 10px;
           margin: 5%;
        }

        #contact__info__text{
            grid-column: 1;
        }
        #contact__info__image{
            grid-column: 2;

        }

        .redirection__contacte{
            background-color: #0466F3;
            font-size: 1rem;
            color: white;
            padding: 2% 3%;
            text-decoration: none;
            text-align: center;
            align-content: center;
        }

        .edelweiss__picture{
            margin: 5% auto;

        }

            .edelweiss__picture>img{
                width: 40%;
                height: auto;
                margin:-20% 30% 0 30%;
            }
        .contacte__edelweisse>h3{
            font-size: 2rem;
        }

        .contacte__edelweisse>p{
            width: auto;
            font-size: 1rem;
            margin-bottom: 1%;
            line-height: 2.5vh;
            margin-left: 5%;
        }


        .maps{
            width: 90%;
            height: auto;
            margin:5%;
        }
        .redirection__maps{
            text-decoration: none;
            color: white;
            background-color: #0466F3;
            margin: 0 7%;
            padding: 0.2rem 2rem;
            -webkit-box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.44);
            box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.44);
        }
        .redirection__maps:hover{
            background-color: #00398c;
            color: white;
        }

        .galerie__picture{
            margin: 10%;
        }
        .galerie__picture>h2{
            margin: 2.5% 5% ;
            font-size: 2rem;
            font-weight: 700;
        }
        .rediretion__button>a{
            background-color: #0466F3;
            text-decoration: none;
            color: white;
            padding:  1.5rem;
        }

        .liste__pieces {
            display: grid;
            grid-auto-rows: auto auto;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 16px;
            padding: 20px;
        }

        .liste__pieces img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .rediretion__vieuxMoulin{
            text-decoration: none;
            color: white;
            background-color: #0466F3;
            margin: 0 2%;
            padding: 0.5rem 1rem;
            -webkit-box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.44);
            box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.44);
        }
        .rediretion__vieuxMoulin:hover{
            background-color: #00398c;
            color: white;
        }

    </style>
</head>
<body>
<section class="edelweiss-header">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1>Edelweiss</h1>
	<?php
	$image_edelweiss__home = get_field('picture__edelweiss__home');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_edelweiss__home) :
		?>
        <div class="picture__edelweiss__home">
            <img class="images__edelweisse__home" src="<?php echo esc_url($image_edelweiss__home['url']); ?>" alt="<?php echo esc_attr($image_edelweiss__home['alt']); ?>">
        </div>
	<?php endif; ?>
<div class="scroll__animation">
    <?php get_template_part('partials/scroll'); ?>
</div>

</section>
<section class="info__edelweiss">
    <h2></h2>
    <!--<p>L’Edelweiss est un service résidentiel général accueillant et accompagnant 15 enfants âgés de 4 à 18 ans, placés par les services d’aide à la jeunesse et de protection de la jeunesse.
        Son objectif est d’offrir à ces jeunes, retirés de leur milieu familial, un cadre sécurisant leur permettant de se stabiliser, de se reconstruire et de préparer leur réintégration sociale.
        L’accompagnement inclut l’hébergement, le suivi éducatif et l’exploration des solutions adaptées à l’évolution de leur situation.</p>
    <section class="contacte__edelweisse">-->
    <p><?php the_field('description__edelweisse__home'); ?></p>
    <section class="contacte__edelweisse">
    <!--
        <p>Madame Dominique GAUCHE</p>
        <p>Directrice</p>
        <a>Nous envoyer un message</a>
        <image src="">-->
        <h3>Contact</h3>
        <div class="contact__info" id="contact__info__text">
        <p><?php the_field('contact__direction'); ?></p>
        <a href="<?php the_field('redirection__contacte__page'); ?>" class="redirection__contacte">Nous envoyer un message</a>
            
        </div>
	<?php
	$image_edelweiss_flower = get_field('edelweiss__picture');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_edelweiss_flower) :
		?>
        <div class="edelweiss__picture" id="contact__info__image">
            <img class="fleur__edelweisse" src="<?php echo esc_url($image_edelweiss_flower['url']); ?>" alt="<?php echo esc_attr($image_edelweiss_flower['alt']); ?> ">
        </div>
	<?php endif; ?>
    </section>
</section>
<!-- SECTION CARTE -->
<section class="maps">
    <h2></h2>
   <!-- <image src="/src/image/carte__edelweiss.png"  class="carte" alt="carte qui montre edelweiss">
    <a lang="fr" href="https://www.google.be/maps/place/Rue+de+la+Gare+210,+6637+Fauvillers/@49.9056328,5.6810892,17z/data=!3m1!4b1!4m6!3m5!1s0x47c01fb380e1dbd1:0x65feeca13600b131!8m2!3d49.9056294!4d5.6836641!16s%2Fg%2F11l75fxk5s?entry=ttu&g_ep=EgoyMDI1MDQxNi4xIKXMDSoASAFQAw%3D%3D">Voir sur maps</a>-->
    <div>
	    <?php
	    $image_carte__edelweisse = get_field('carte__edelweiss');
	    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	    if ($image_carte__edelweisse) :
		    ?>
            <div class="maps__edelweisse">
                <img class="maps" src="<?php echo esc_url($image_carte__edelweisse['url']); ?>" alt="<?php echo esc_attr($image_carte__edelweisse['alt']); ?>">
            </div>
	    <?php endif; ?>
    </div>
    <a href="<?php the_field('redirection__maps'); ?>" target="_blank" class="redirection__maps">Voir sur Maps</a>
</section>
<section class="galerie__picture">
    <h3>Galerie de photos</h3>
    <div class="liste__pieces">
	    <?php
	    $galeries = get_field('photo__edelweiss_home');
	    if ($galeries):
		    foreach ($galeries as $galerie): ?>
                <img class="images__pieces" src="<?php echo $galerie['url']; ?>" alt="<?php echo esc_attr($galerie['alt']); ?>">
		    <?php endforeach;
	    endif;
	    ?>
    </div>
    <!--<a class="rediretion">Allers sur la page du vieux Moulin</a>-->
    <div class="rediretion__button">
        <a href="<?php the_field('redirection__page'); ?>" class="rediretion__vieuxMoulin">Aller vers le Vieux Moulin</a>
    </div>
</section>
<?php
endwhile;
endif;
get_footer();

?>
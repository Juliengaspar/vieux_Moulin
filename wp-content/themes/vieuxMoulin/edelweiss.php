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
        }
        h1{
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
            padding: 5% 0;
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
            width: 80%;
            margin: 2% 10%;
        }

        .contacte__edelweisse{
            display: grid;
            grid-template-columns: auto auto;
            grid-gap: 10px;
            margin: 5%;
        }

        .contacte__edelweisse>h3{
            font-size: 2.5rem;
            margin:  5%;
        }

        .contacte__edelweisse>p{
            width: 30%;
            font-size: 1rem;
            margin-bottom: 1%;
            line-height: 2.5vh;
            margin-left: 5%;
        }


        .maps{
            width: 90%;
            height: auto;
            margin: 5% auto;
        }
        .redirection__maps{
            text-decoration: none;
            color: white;
            background-color: #0466F3;
            margin: 0 2%;
            padding: 0.5rem 1rem;
            -webkit-box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.44);
            box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.44);
        }
        .redirection__maps:hover{
            background-color: #00398c;
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
            margin: 5%;
        }

        .liste__pieces {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 16px;
            padding: 20px;
        }

        .liste__pieces img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

    </style>
</head>
<body>
<section class="edelweiss-header">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1>Edelweiss</h1>
    <img src="<?php the_field('picture__edelweiss__home'); ?>" alt="Image Edelweiss">
	<?php
	$image_edelweiss__home = get_field('picture__edelweiss__home');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_edelweiss__home) :
		?>
        <div class="picture__edelweiss__home">
            <img class="images__edelweisse__home" src="<?php echo esc_url($image_edelweiss__home['url']); ?>" alt="<?php echo esc_attr($image_edelweiss__home['alt']); ?>">
        </div>
	<?php endif; ?>
    <?php get_template_part('partials/scroll'); ?>

</section>
<section class="info__edelweiss">
    <h2>Info</h2>
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
        <p><?php the_field('contact__direction'); ?></p>
        <a href="<?php the_field('redirection__contacte__page'); ?>" class="redirection__contacte">Nous envoyer un message</a>
	<?php
	$image_edelweiss_flower = get_field('edelweiss__picture');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_edelweiss_flower) :
		?>
        <div class="edelweiss__picture">
            <img class="fleur__edelweisse" src="<?php echo esc_url($image_edelweiss_flower['url']); ?>" alt="<?php echo esc_attr($image_edelweiss_flower['alt']); ?> ">
        </div>
	<?php endif; ?>
    </section>
</section>
<!-- SECTION CARTE -->
<section class="maps">
    <h2>Carte</h2>
   <!-- <image src="/src/image/carte__edelweiss.png"  class="carte" alt="carte qui montre edelweiss">
    <a lang="fr" href="https://www.google.be/maps/place/Rue+de+la+Gare+210,+6637+Fauvillers/@49.9056328,5.6810892,17z/data=!3m1!4b1!4m6!3m5!1s0x47c01fb380e1dbd1:0x65feeca13600b131!8m2!3d49.9056294!4d5.6836641!16s%2Fg%2F11l75fxk5s?entry=ttu&g_ep=EgoyMDI1MDQxNi4xIKXMDSoASAFQAw%3D%3D">Voir sur maps</a>-->
    <div>
	    <?php
	    $image_carte__edelweisse = get_field('carte__edelweiss');
	    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	    if ($image_carte__edelweisse) :
		    ?>
            <div class="edelweiss__picture">
                <img class="maps" src="<?php echo esc_url($image_carte__edelweisse['url']); ?>" alt="<?php echo esc_attr($image_carte__edelweisse['alt']); ?>">
            </div>
	    <?php endif; ?>
    </div>
    <a href="<?php the_field('redirection__maps'); ?>" target="_blank" class="redirection__maps">Voir sur Maps</a>
</section>
<section class="galerie__picture">
    <h3>Galerie de photo</h3>
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
        <a href="<?php the_field('redirection__page'); ?>" class="rediretion">Aller vers le Vieux Moulin</a>
    </div>
</section>
<?php
endwhile;
endif;
get_footer();

?>
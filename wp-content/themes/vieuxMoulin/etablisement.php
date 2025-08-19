<?php
/*
Template name: Template "etablissement
*/
?>
<?php get_header(); ?>
<html lang="fr-be">
<head>

	<title>etablisement</title>
    <style>
        body{
            font-family: Helvetica;
        }

        a{
            color: black;
            cursor: pointer;
            margin: 2% 0;
        }

        .header__page__etablisement{
            background-color: #BDFAEA;
            height: auto;
        }
        .header__title{
            font-style: italic;
            text-align: center;
            font-size: 4rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
            padding: 5% 0;
        }
        .header__description>p{
            font-family: cavea;
            font-size: 3rem;
            margin-left: -20%;
            color: #013BB3;
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

        h2{
            font-size: 2.5rem;
            margin-bottom: 2%;
            margin-top: 2%;
            font-family: cavea;
        }

        .background__header__images>img{
            float: right;
            margin-left: 20px; /* optionnel : pour éviter que le texte colle à l'image */
            margin-top: -19%;
            max-width: 100%;
            height: auto;
            overflow: hidden;
        }

        .header__description__text{
            text-align: center;
            width: auto;
            margin: -8% 30% 5%;
            padding: 2% 0;
            font-size: 2.5rem;
            color: #013BB3;
        }

        .images_maison{
            width: 25%;
            height: auto;
        }

        .etablisments{
            display: grid;
            grid-template-columns: auto auto;
            margin: 5%;
            width: 100%;
            height: auto;
        }

        .etablisment>h2{
            grid-column: 2;
        }
        .etablisment__coordonees>h3,
        .etablisment__contacte>h3{
            grid-column: 2;
            font-size: 1.5rem;
            font-weight: 700;
            width: 75%;
            line-height: 1vh;
        }
        .name__directeur{
            margin 5%;
        }
        .etablisment__coordonees>ul{
            grid-column: 2;
            font-size: 1rem;
            font-weight: 200;
            list-style-type: none;
        }
        .etablisment__coordonees>ul>li{
            margin-bottom: 2%;
            font-size: 1rem;
            list-style-type: none;
        }
        .etablisment__coordonees>ul>li>a{
            color: black;
            font-size: 1rem;
        }
        .etablisment__contacte>h3{
            margin-bottom: 5%;
        }
        .etablisment>p{
            margin-left: 25%;
            grid-column: 2;
            width: 50%;
        }
        .organisation__regles>p{
            font-size: 1rem;
            margin-bottom: 5%;
        }
        .organisation__regles>ul{
            font-size: 1rem;
        }
        .liste__organisation__regles>li>span{
            text-align: right;
        }

        .email__directeur>a{
            color: black;
            font-size: 1rem;

        }

        .etablisment__contacte>h3{
            margin-bottom: 5%;
        }

        .redirection__page{
            text-decoration: none;
            color: white;
            background-color: #006EFE;
            margin: 10% 0;
            padding: 1% 2%;
            -webkit-box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.34);
            box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.34);
            font-size: 1rem;
            border-radius: 5px ;
        }
        .redirection__page:hover{
            background-color: #06428e;
        }

    </style>
</head>
<section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="header__page__etablisement" >
		<h1 class="header__title">
			Nos maisons
		</h1>
        <div class="header__info">
            <div class="header__description">
               <p class="header__description__text">
                <?php the_field('text__of__page'); ?>
               </p>
            </div>
	        <?php
	        $image_header = get_field('background__header');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image_header) :
		        ?>
                <div class="background__header__images" >
                    <img class="images__welcome" src="<?php echo esc_url($image_header['url']); ?>" alt="<?php echo esc_attr($image_header['alt']); ?> ">
                </div>
        </div>
	    <?php endif; ?>
        <div class="scroll__animation" >
	    <?php get_template_part('partials/scroll'); ?>
        </div>

    </section>
</section>

<section class="etablisments">
            <!-- EDELWEISS -->
    		<section class="etablisment" id="edelweiss">
    		    <h2>Edelweiss</h2>
    			<?php
    			$image_ew_home = get_field('image_ew');
    			// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

    			if ($image_ew_home) :
    				?>
                    <div class="image_ew" >
                        <img class="images_maison" id="image_ew" src="<?php echo esc_url($image_ew_home['url']); ?>" alt="<?php echo esc_attr($image_ew_home['alt']); ?> " >
                    </div>
    			<?php endif; ?>
                <section class="etablisment__coordonees">
                <h3>Coordonnées</h3>
                <ul>
                    <li> <?php the_field('coordonnee_ew'); ?></li>
                    <li>Email : <a><?php the_field('email_ew'); ?></a></li>
                    <li><a href="<?php the_field('facebook_ew'); ?>" target="_blank">Suivez la page Facebook</a></li>
                </ul>
                <section class=etablisment__contacte" id="etablisment__contacte__ew">
    			<h3>Contact</h3>
                <p class="name__directeur" id="name__directeur__ew"><?php the_field('name_directeur_ew'); ?></p>
<!--                <p class="email__directeur" id="email__directeur__ew"><strong>Email :</strong> <a href="mailto:--><?php //the_field('email_directeur_ew'); ?><!--"></a></p>-->

                <a href="<?php the_field('lien_page_ew'); ?>" class="redirection__page">Edelweiss</a>
                </section>
            </section>
            </section>
                <!--Le Vieux Moulin -->
            <section class="etablisment" id="vieux_moulin">
                    <h2>Le Vieux Moulin</h2>
    	            <?php
    	            $image_vm_home = get_field('image_vm');
    	            // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

    	            if ($image_vm_home) :
    		            ?>
                        <div class="image_vm">
                            <img class="images_maison" id="images_vieux_moulin" src="<?php echo esc_url($image_vm_home['url']); ?>" alt="<?php echo esc_attr($image_vm_home['alt']); ?> ">
                        </div>
    	            <?php endif; ?>

                   <section class="etablisment__coordonees">
                    <h3>Coordonnées</h3>
                    <ul>
                        <li><?php the_field('coordonnee_vm'); ?></li>
                        <li>Email : <?php the_field('email_vm'); ?></li>
                        <li><a href="<?php the_field('facebook_vm'); ?>" target="_blank">Suivez la page Facebook</a></li>
                    </ul>
                   </section>
                    <section class=etablisment__contacte" id="etablisment__contacte__vm">
                    <h3>Contact</h3>
                    <p class="name__directeur" id="name__directeur__vm"><?php the_field('name_directeur_vm'); ?></p>
                    <p class="email__directeur" id="email__directeur__vm">Email : <a href="mailto:<?php the_field('email_directeur_vm'); ?>"><?php the_field("email_directeur_vm");?></a></p>

                    <a href="<?php the_field('lien_page_vm'); ?>" class="redirection__page" >Le Vieux Moulin</a>
                    </section>
            </section>
</section>
<?php
endwhile;
endif;
get_footer();
?>
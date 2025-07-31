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
            background-color: white;
            font-family: Helvetica;
        }

        a{
            color: black;
            cursor: pointer;
            margin: 2% 0;
        }

        .header__page__etablisement{
            background-color: #BDFAEA;
        }
        .header__title{
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
            padding: 5% 0;
        }
        .header__description>p{
            font-family: cavea;
            font-size: 3rem;
            margin-left: 10%;
            color: #013BB3;
        }

        .images__welcome{
            margin-left: 60%;
        }
        .header__page__etablisement>img{
            align-items: center;
            margin: 0 25%;
        }

        h2{
            font-size: 2.5rem;
            margin-bottom: 2%;
            margin-top: 2%;
            font-family: cavea;
        }

        .images_maison{
            width: 25%;
            height: auto;
        }

        .etablisments{
            display: grid;
            grid-template-columns: auto auto;
            margin: 5%;
        }

        .organisation__regles>p{
            font-size: 2rem;
            margin-bottom: 5%;
        }
        .organisation__regles>ul{
            font-size: 1rem;
        }
        .liste__organisation__regles>li>span{
            text-align: right;
        }

        .redirection__page{
            text-decoration: none;
            color: white;
            background-color: #006EFE;
            margin: 5%;
            padding: 2% 3%;
            -webkit-box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.34);
            box-shadow: 9px 7px 29px 5px rgba(0,0,0,0.34);

        }
    </style>
</head>
<header>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="header__page__etablisement" >
		<h2 class="header__title">
			Nos maisons
		</h2>
        <div class="header__description">
            <?php the_field('text__of__page'); ?>
        </div>
	    <?php
	    $image_header = get_field('background__header');
	    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	    if ($image_header) :
		    ?>
            <div class="background__header__images" >
                <img class="images__welcome" src="<?php echo esc_url($image_header['url']); ?>" alt="<?php echo esc_attr($image_header['alt']); ?> ">
            </div>
	    <?php endif; ?>
	    <?php get_template_part('partials/scroll'); ?>

    </section>
</header>

<section class="etablisments">
            <!-- EDELWEISS -->
    		<section class="etablisment">
    		    <h2>EDELWEISS</h2>
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
                <h3>Coordonées</h3>
                <ul>
                    <li> <?php the_field('coordonnee_ew'); ?></li>
                    <li>Email:<a><?php the_field('email_ew'); ?></a></li>
                    <li><a href="<?php the_field('facebook_ew'); ?>" target="_blank">Suivez la page Facebookk</a></li>
                </ul>
                <section class=etablisment__contacte">
    			<h3>Contact</h3>
                <p><?php the_field('name_directeur_ew'); ?></p>
                <p><strong>Email :</strong> <a href="mailto:<?php the_field('email_directeur_ew'); ?>"></a></p>

                <a href="<?php the_field('lien_page_ew'); ?>" class="redirection__page">Le Vieux Moulin</a>
                </section>
            </section>
            </section>
                <!--Le Vieux Moulin -->
            <section class="etablisment" >
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
                        <li><strong>Email :</strong> <?php the_field('email_vm'); ?></li>
                        <li><a href="<?php the_field('facebook_vm'); ?>" target="_blank">Suivez la page Facebookk</a></li>
                    </ul>
                   </section>
                    <section class=etablisment__contacte">
                    <h3>Contact</h3>
                    <p><?php the_field('name_directeur_vm'); ?></p>
                    <p>Email:<a href="mailto:<?php the_field('email_directeur_vm'); ?>"></a></p>

                    <a href="<?php the_field('lien_page_vm'); ?>" class="redirection__page" >Edelweiss</a>
                    </section>
            </section>
</section>
<?php
endwhile;
endif;
get_footer();
?>
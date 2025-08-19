<?php
?>



<head>
    <title>footer</title>
    <style>

       footer{
            font-family: cavea, 'arial',sans-serif;
            background-color: #000000;
            color: #ffffff;

        }

       .footer__navigations{
           display: flex;
       }


        .logo_footer{

            width: 40%;
            height: auto;
            margin: 5%;
            grid-column: 1;
        }

        #coordonees{
            display: flex;
            margin: 5% auto;
        }


        .footer__bloc{
            display: grid;
            grid-template-columns: auto auto auto;
            grid-gap: 5rem;
            
        }

        .redirection__navigation{
            width: 200%;
        }

        .redirection__navigation p{
            width: auto;
        }
        
        .redirection__footer{
            font-family: cavea, 'arial', sans-serif;
            font-style: italic;
            text-decoration: none;
            color: white;
        }
         .redirection__footer:hover{
             border-bottom: 1px solid white;
        }

       #federation__walonnie__bruxelle{
            margin-bottom: 5%;
        }

       .partenaires{
           margin: 5% 0;
       }
       .partenaires h3{
           margin-left: 5%;
       }

       .partenaires .partenaires__logos{
           margin 5% 25%;
       }

       .partearias__logo{
           display: inline;

       }

       .partearias__logo img{
           width: 15%;
           height: auto;
           margin:5%;
       }

        .fotter__copyrinthe{
            background-color: #BDFAEA;
            display: flex;
            height: auto;

        }

        .fotter__copyrinthe>h2{
            margin: 2.5% 5%;
        }
        .fotter__copyrinthe__description{
            width: 200%;
            margin-left: 5%;
            font-size: 0.8rem;
            color: black;
            max-width: 80%;
        }

       .small__logo__vieux__moulin {
            width: 10%;
            height: auto;
           max-width: 60px;
           display: block;
       }


    </style>
</head>
<?php
$options_page = get_page_by_path('footer');
?>

<footer class="footer">
    <section class="footer__elements">
        <h2 class="invisible" style="display:none;">Titre invisible</h2>
        <section class="footer__navigations">
            <div>
            <h3 class="invisible" style="display:none;">Titre invisible</h3>
            <section class="footer__bloc" id="coordonees">
                <?php

                $image__logo__vieux__moulin = get_field('logo_vieux_moulin', $options_page->ID); // Notez le 'option' pour les options du thème

                if ($image__logo__vieux__moulin) :
                    ?>
                    <div class="logo_footer">
                        <a href="<?php echo esc_url(get_field("logo__redirection__aceuille", $options_page->ID)); ?>">
                            <img src="<?php echo esc_url($image__logo__vieux__moulin['url']); ?>"
                                 alt="<?php echo esc_attr($image__logo__vieux__moulin['alt']); ?>"
                                 class="logo__vieux__moulin">
                        </a>
                    </div>
                <?php endif; ?>
                <div>
                <h4 class="coordonees__title">Le vieux Moulin</h4>
                <p><?php the_field("coordonee__vieux__moulin", $options_page->ID); ?></p>
                </div>
            <div class="footer__bloc" id="navigation">
                <div class="redirection__navigation">
                    <p><a href="" class="redirection__footer">Qui sommes-nous ?</a></p>
                    <p><a href="<?php echo esc_url(get_field("maisons__rediretion", $options_page->ID)); ?>" class="redirection__footer">Nos maisons</a></p>
                    <p><a href="<?php echo esc_url(get_field("nos__valeurs__redirection", $options_page->ID)); ?>" class="redirection__footer">Nos valeurs</a></p>
                    <p><a href="<?php echo esc_url(get_field("activitees__redirections", $options_page->ID)); ?>" class="redirection__footer">Nos activités</a></p>
                    <p><a href="<?php echo esc_url(get_field("educatif__redirection", $options_page->ID)); ?>" class="redirection__footer">Projet éducatif</a></p>
                </div>
                <div class="redirection__navigation">
                    <p><a href="<?php echo esc_url(get_field("dons__rediection", $options_page->ID)); ?>" class="redirection__footer">nous aider</a></p>
                </div>
                <div class="redirection__navigation">
                    <p><a href="<?php echo esc_url(get_field("contacte__redirections", $options_page->ID)); ?>" class="redirection__footer">Nous contacter</a></p>
                </div>
            </div>
            </section>
        </section>
        <section class="partenaires">
            <h3 class="partenaires__title">Partenariats</h3>
                <div class="partenaires__logos">
                     <?php
                     $image__logo__federation__walonie__bruxelle = get_field('logo__federation__walonie__bruxelle', $options_page->ID);
                     if ($image__logo__federation__walonie__bruxelle) :
                         ?>
                         <div class= "partearias__logo" id="logo__federation__walonie__bruxelle">
                             <img class="logo__partenaire" id="federation__walonie__bruxelle"
                                  src="<?php echo esc_url($image__logo__federation__walonie__bruxelle['url']); ?>"
                                  alt="<?php echo esc_attr($image__logo__federation__walonie__bruxelle['alt']); ?>">
                         </div>
                     <?php endif; ?>
                     <?php
                     $image__logo__aide__a__la__jeunesse = get_field('logo__aide__a__la__jeunesse', $options_page->ID);
                     if ($image__logo__aide__a__la__jeunesse) :
                         ?>
                         <div class= "partearias__logo" id="logo__aide__a__la__jeunesse">
                             <img class="logo__partenaire" id="aide__a__la__jeunesse"
                                  src="<?php echo esc_url($image__logo__aide__a__la__jeunesse['url']); ?>"
                                  alt="<?php echo esc_attr($image__logo__aide__a__la__jeunesse['alt']); ?>">
                         </div>
                     <?php endif; ?>

                </div>

        </section>
    </section>
    <section class="fotter__copyrinthe">
        <div class="fotter__copyrinthe__description">
            <?php echo wp_kses_post(get_field('description__copyright', $options_page->ID)); ?>
        </div>

        <?php
        $image__small__logo__vieux__moulin = get_field('small__logo__vieux__moulin', $options_page->ID);
        if ($image__small__logo__vieux__moulin) :
            ?>
            <div class="logo__vieux__moulin__small">
                <img class="small__logo__vieux__moulin" id="small__vieux__moulin"
                     src="<?php echo esc_url($image__small__logo__vieux__moulin['url']); ?>"
                     alt="<?php echo esc_attr($image__small__logo__vieux__moulin['alt']); ?>">
            </div>
        <?php endif; ?>
    </section>
</footer>

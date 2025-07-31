<?php
/*
Template name: Template "footer"
*/
?>


<!doctype HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <meta name="description" content="site web client fait sur wordpresse sur le vieux moulin de starichamps ">
    <meta name="keywords" content="DW, Projet-web, Julien, Vieux moulin, formation hepl, "/>
    <meta name="author" content="Julien Gaspar"/>
         <link rel="stylesheet" href="./src/css/reset.css">
		<link rel="stylesheet" href="./src/css/footer.css">
    <title>footer</title>
    <style>
        footer{
            font-family: cavea, 'arial',sans-serif;
            background-color: #000000;
            color: #ffffff;
        }
        .redirection__footer{
            text-decoration: none;
            color: white;
            cursor: pointer;
        }
        .redirection__footer:hover{
            border-bottom: 1px solid white;
        }
        .logo__partenaire{
            width: 20%;
            height: auto;
        }
        .logo_footer{
            width: 10%;
            height: auto;
            margin: 5% 2%;
        }
        .footer__navigations{
            display: flex;
            padding: 2rem;

        }
        .coordonees{

        }

        .navigation{
            display: grid;
            grid-template-columns: auto auto auto;
            grid-gap:5rem;
        }
        .logo__vieux__moulin{
            width: 100%;
            height: auto;
            mmargin-left:5%;
        }

        h3{
            font-size: 3rem;
            margin: 0;
        }
        .navigation > ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .navigation ul li {

        }

        .partenaires>div{
            display: inline;
        }
        .partenaires>div>img{
            width: 15%;
            height: auto;
        }

        .partenaires__title>p{

        }
        .logo__partenaire{
            margin-left: 5%;
        }
        #federation__walonnie__bruxelle{
            margin-bottom: 5%;
        }
        .fotter__copyrinthe{
            background-color: #BDFAEA;
            color: #000000;
            display: flex;
            padding: 1rem;
        }
        .fotter__copyrinthe>h2{
            margin: 2.5% 1%;
        }
        .fotter__copyrinthe>img{
            width: 5%;
            height: auto;
            margin-left: 60%;

        }
        .fotter__copyrinthe__description>p{
            width: 200%;
            margin-left: 5%;
            font-size: 1rem;
        }
        .small__logo__vieux__moulin{
            width: 10%;
            height: auto;
            margin-left: 60%;
        }

    </style>
</head>
<body>

<footer class="footer">
    <section class="footer__elements">
        <h2 style="display:none;">Titre invisible</h2>
        <section class="footer__navigations">
            <h3>Adresse</h3>
	        <?php
	        $image__logo__vieux__moulin = get_field('logo_vieux_moulin');
            //var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image__logo__vieux__moulin) :
	        ?>
            <div class="logo_footer">
                <a href="<?php the_field("logo__redirection__aceuille"); ?>">
               <img src="<?php echo esc_url($image__logo__vieux__moulin['url']); ?>" alt="<?php echo esc_attr($image__logo__vieux__moulin['alt']); ?>" class="logo__vieux__moulin">
                </a>
            </div>
            <?php
            endif;
            ?>
            <section class="coordonees">
                <h4>Le vieux Moulin</h4>
               <!-- <p>Strainchamps
                    Rue Des Vennes, 1  6637 Fauvillers </p>-->
                <p>
                    <?php the_field("coordonee__vieux__moulin"); ?>
                </p>
            </section>
            <nav class="navigation">
                <ul class="redirection__navigation">
                    <li><a  href="" class="redirection__footer">Qui sommes-nous ?</a></li>
                    <li><a  href="<?php the_field("maisons__rediretion"); ?>" class="redirection__footer">Nos maisons</a></li>
                    <li><a  href="<?php the_field("nos__valeurs__redirection"); ?>" class="redirection__footer">Nos valeurs</a></li>
                    <li><a  href="<?php the_field("activitees__redirections"); ?>" class="redirection__footer">Le cadre</a></li>
                    <li><a  href="<?php the_field("educatif__redirection"); ?>" class="redirection__footer">Projet éducatif</a></li>
                </ul>
                <ul class="redirection__navigation">
                    <li><a href="<?php the_field("dons__rediection"); ?>" class="redirection__footer">
                            nous aider
                        </a></li>
                </ul>
                <ul class="redirection__navigation">
                    <li>
                        <a href="<?php the_field("contacte__redirections"); ?>" class="redirection__footer">
                            Nous contacter
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="partenaires">
            <h3 class="partenaires__title">partenariats</h3>
            <!--<image src="src/image/federation-wallonnie-bx-logo.png" alt="logo represenrant leurs partenaria qui les aides financiereement federation walonnie bruxelle " class="logo__partenaire" id="federation__walonnie__bruxelle">
            <image src="src/image/aide-jeunesse-logo.png" alt="logo represenrant leurs partenaria qui les aides financiereement aide a la jeunesse" class="logo__partenaire" id="aide__a__la__jeunesse">-->

	        <?php
	        $image__logo__aide__a__la__jeunesse = get_field('logo__aide__a__la__jeunesse');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image__logo__aide__a__la__jeunesse) :
		        ?>
                <div class="logo__aide__a__la__jeunesse">
                    <img class="logo__partenaire" id="aide__a__la__jeunesse" src="<?php echo esc_url($image__logo__aide__a__la__jeunesse['url']); ?>" alt="<?php echo esc_attr($image__logo__aide__a__la__jeunesse['alt']); ?>">
                </div>
	        <?php endif; ?>
            <?php
	        $image__logo__federation__walonie__bruxelle = get_field('logo__federation__walonie__bruxelle');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($image__logo__federation__walonie__bruxelle) :
		        ?>
                <div class="logo__federation__walonie__bruxelle">
                    <img class="logo__partenaire" id="federation__walonie__bruxelle" src="<?php echo esc_url($image__logo__federation__walonie__bruxelle['url']); ?>" alt="<?php echo esc_attr($image__logo__federation__walonie__bruxelle['alt']); ?>">
                </div>
	        <?php endif; ?>

        </section>
    </section>
    <section class="fotter__copyrinthe">
        <h3 class="fotter__copyrinthe__description">
        <?php the_field('description__copyright')?>
        </h3>
	    <?php
	    $image__small__logo__vieux__moulin = get_field('small__logo__vieux__moulin');
	    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	    if ($image__small__logo__vieux__moulin) :
		    ?>
            <div class="logo__vieux__moulin" >
                <img class="small__logo__vieux__moulin" id="small__vieux__moulin" src="<?php echo esc_url($image__small__logo__vieux__moulin['url']); ?>" alt="<?php echo esc_attr($image__small__logo__vieux__moulin['alt']); ?>">
            </div>
	    <?php endif; ?>
    </section>
</footer>
</body>
</html>

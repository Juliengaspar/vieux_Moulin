<?php
/*
Template Name: header
*/
?>
<!doctype html>
<html lang="fr" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premières pages accueil du projet client Vieux Moulin fait avec WordPress">
    <meta name="keywords" content="client, Projet-web, Julien, wordpress, formation hepl, vieux moulin"/>
    <meta name="author" content="Julien Gaspar"/>
<!--    <link rel="icon" type="image/png" sizes="16x16" href="--><?php //echo get_template_directory_uri(); ?><!--/src/image/icones/vieux__moulin__icone__small.png">-->
<!--    <link rel="icon" type="image/png" sizes="32x32" href="--><?php //echo get_template_directory_uri(); ?><!--/src/image/icones/vieux__moulin__icone__medium.png">-->
<!--    <link rel="icon" type="image/png" sizes="162x162" href="--><?php //echo get_template_directory_uri(); ?><!--/src/image/icones/vieux__moulin__icone__large.png">-->
    <link rel="icon" type="image/png" sizes="16x16" href="./src/image/icones/vieux__moulin__icone__small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/image/icones/vieux__moulin__icone__medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="./src/image/icones/vieux__moulin__icone__large.png">
    <style>
        .header__description{
            background-color: #ffffff;
        }
        .navigation__pricipal{
            margin: 0 15%;
        }
        a{
            text-decoration: none;
            color: black;
            font-size: 3rem;
            font-style: italic;
        }
        a:hover{
            border-bottom: 1px solid black;
        }
        .redirections>.redirection__vieux_moulin{
            display: inline;
            margin: 0 0 5% 5%;
            font-size: 3rem;
            align-items: baseline;
            width: auto;
        }
        .logo__vieux__moulin{
            width: 30%;
            height: auto;
            margin-top: -5%;
            margin-left: 35%;
        }
        select{
            background-color: white;
            border: none;
            font-size: 3rem;
            width: auto;
            margin-right: -10%;
        }
        .menu-principal {
            padding: 10px;
        }

        .menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .menu li {
            position: relative;
        }

        .menu a {
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            transition: background 0.3s ease;
        }

        .menu a:hover {
            border-radius: 5px;
            color: black;
        }

        .sous-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 200px;
            z-index: 1000;
            border-radius: 5px;
            overflow: hidden;
        }

        .sous-menu li {
            width: 100%;
        }

        .menu-deroulant:hover .sous-menu {
            display: block;
        }

    </style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">


    <nav class="menu-principal">
        <h2 style="display: none;">titire invisible</h2>
        <ul class="menu">
            <li>
	            <?php
	            $image__logo__vieux__moulin__header = get_field('logo_image');
	            //var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	            if ($image__logo__vieux__moulin__header) :
		            ?>
                    <div class="logo_header">
                        <a  href="<?php echo home_url(); ?>">
                            <img src="<?php echo esc_url($image__logo__vieux__moulin__header['url']); ?>" alt="<?php echo esc_attr($image__logo__vieux__moulin__header['alt']); ?>" class="logo__vieux__moulin">
                        </a>
                    </div>
	            <?php
	            endif;
	            ?>
            </li>
            <li class="menu-deroulant">
                <a href="#">Qui sommes-nous</a>
                <ul class="sous-menu">
                    <li><a href="<?php the_field('lien_maison'); ?>">Nos maisons</a></li>
                    <li><a href="<?php the_field('lien_valeurs'); ?>">Nos valeurs</a></li>
                    <li><a href="<?php the_field('lien_activites'); ?>">Nos activités</a></li>
                    <li><a href="<?php the_field('lien_projet_educatif'); ?>">Projet éducatif</a></li>
                </ul>
            </li>
            <li><a href="<?php the_field('lien_dons'); ?>">Nous aider</a></li>
            <li><a href="<?php the_field('lien_contact'); ?>">Nous contacter</a></li>
        </ul>
    </nav>
</header>

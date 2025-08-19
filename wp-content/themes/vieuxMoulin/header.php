<?php
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


        .redirection__header {
            text-decoration: none;
            color: black;
            font-size: 2rem;
            margin: 0 -15%;
            font-style: italic;
        }
        .sous-menu .redirection__header{
            font-size: 1.5rem;
        }

        .logo_header{
            width: 70%;
            height: auto;
            float: left;
        }

        .last__li:last-of-type{
            margin-left: 5%;
        }

        .redirection__header:hover{
            border-bottom: 1px solid black;
        }
        .redirections>.redirection__vieux_moulin{
            display: inline;
            margin: 0 0 5% 2.5%;
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
            z-index: 1000;
            list-style: none;

        }

        .sous-menu li {
        }

        .menu-deroulant:hover .sous-menu {
            display: block;
        }

    </style>
	<?php wp_head(); ?>
</head>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
    $options_page = get_page_by_path('header');
?>

<header class="header">


    <nav class="menu-principal">
        <h2 style="display: none;">titire invisible</h2>
        <ul class="menu">
            <li>
	            <?php
	            $image__logo__vieux__moulin__header = get_field('logo_image', $options_page->ID);
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
                <a href="#"  class="redirection__header">Qui sommes-nous?</a>
                <div class="sous-menu">
                    <p><a href="<?php echo esc_url(get_field("lien_maison", $options_page->ID))?>" class="redirection__header">&nbsp;Nos maisons</a></p>
                    <p><a href="<?php echo esc_url(get_field("lien_valeurs", $options_page->ID))?>" class="redirection__header">&nbsp;Nos valeurs</a></p>
                    <p><a href="<?php echo esc_url(get_field("lien_activites", $options_page->ID))?>" class="redirection__header">&nbsp;Nos activités</a></p>
                    <p><a href="<?php echo esc_url(get_field("lien_projet_educatif", $options_page->ID))?>" class="redirection__header">&nbsp;Projet éducatif</a></p>
                </div>
            </li>
            <li><a href="<?php echo esc_url(get_field("bouton_1_lien", $options_page->ID))?>" class="redirection__header"><?php the_field("bouton_1_texte", $options_page->ID)?></a></li>
            <li class="last__li"><a href="<?php echo esc_url(get_field("bouton_2_lien", $options_page->ID))?>" class="redirection__header"><?php the_field("bouton_2_texte", $options_page->ID)?></a></li>
        </ul>
    </nav>
</header>
<?php
endwhile;
endif;
?>
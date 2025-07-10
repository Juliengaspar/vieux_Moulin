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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/src/image/icones/vieux__moulin__icone__small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/src/image/icones/vieux__moulin__icone__medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="<?php echo get_template_directory_uri(); ?>/src/image/icones/vieux__moulin__icone__large.png">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<?php
	$image = get_field('logo_image');
	if ($image && is_array($image)) :
		$image_url = isset($image['url']) ? esc_url($image['url']) : '';
		$image_alt = isset($image['alt']) && $image['alt'] !== '' ? esc_attr($image['alt']) : 'Logo du site';
		?>
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
            </a>
        </div>
	<?php endif; ?>

    <nav class="menu-principal">
        <ul class="menu">
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

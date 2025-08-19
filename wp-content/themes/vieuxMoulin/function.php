<?php
/*ici va se trouver tous les function php qu'on développera pour plus tard */
// Charger les champs ACF exportés :

// ----------------------------------------------------
// FICHIER FUNCTIONS.PHP - Chargement du thème WordPress
// ----------------------------------------------------

include_once(get_template_directory() . '/fields.php');
//activer la sesion php
if (session_status()===PHP_SESSION_NONE){
	session_start();
}

// Gutenberg est le nouvel éditeur de contenu propre à Wordpress
// il ne nous intéresse pas pour l'utilisation du thème que nous
// allons créer. On va donc le désactiver :

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );
// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
// Disable default front-end styles.
add_action( 'wp_enqueue_scripts', function() {
	// Remove CSS on the front end.
	wp_dequeue_style( 'wp-block-library' );
	// Remove Gutenberg theme.
	wp_dequeue_style( 'wp-block-library-theme' );
	// Remove inline global CSS on the front end.
	wp_dequeue_style( 'global-styles' );
}, 20 );
function mon_vieuxMoulin_styles() {
	// 1. Fichier reset.css pour toutes les pages
	wp_enqueue_style('reset-css', get_template_directory_uri() . '/src/css/reset.css' , [], time());

	// 2. Styles selon les templates ou fichiers
	if (is_page_template('accueil.php')) {
		wp_enqueue_style('accueil-css', get_template_directory_uri() . '/src/css/aceuil.css' , [], time());
	}

	if (is_page_template('contact.php')) {
		wp_enqueue_style('contact-css', get_template_directory_uri() . '/src/css/contact.css' , [], time());
	}

	if (is_page_template('activites.php')) {
		wp_enqueue_style('activitees-css', get_template_directory_uri() . '/src/css/activitees.css' , [], time());
	}

	if (is_page_template('administration.php') || is_singular('project')) {
		wp_enqueue_style('administration-css', get_template_directory_uri() . '/src/css/administration.css' , [], time());
	}
	if (is_page_template('dons.php') || is_singular('project')) {
		wp_enqueue_style('dons-css', get_template_directory_uri() . '/src/css/dons.css' , [], time());
	}
	if (is_page_template('edelweisse.php') || is_singular('project')) {
		wp_enqueue_style('edelweisse-css', get_template_directory_uri() . '/src/css/edelweisse.css' , [], time());
	}
	if (is_page_template('etablisement.php') || is_singular('project')) {
		wp_enqueue_style('etablisement-css', get_template_directory_uri() . '/src/css/etablisement.css' , [], time());
	}
	if (is_page_template('vieux_moulin.php') || is_singular('project')) {
		wp_enqueue_style('vieuxMoulin-css', get_template_directory_uri() . '/src/css/vieuxMoulin.css' , [], time());
	}
	if (is_page_template('nos_valeurs.php') || is_singular('project')) {
		wp_enqueue_style('vosValeurs-css', get_template_directory_uri() . '/src/css/vosValeurs.css' , [], time());
	}
}
add_action('wp_enqueue_scripts', 'mon_vieuxMoulin_styles');


function dw_get_navigation_links(string $location): array
{
	// Récupérer l'objet WP pour le menu à la location $location
	$locations = get_nav_menu_locations();

	if(! isset($locations[$location])) {
		return [];
	}

	$nav_id = $locations[$location];
	$nav = wp_get_nav_menu_items($nav_id);

	// Transformer le menu en un tableau de liens, chaque lien étant un objet personnalisé

	$links = [];

	foreach ($nav as $post) {
		$link = new stdClass();
		$link->href = $post->url;
		$link->label = $post->title;
		$link->icon = get_field('icon', $post);

		$links[] = $link;
	}

	// Retourner ce tableau d'objets (liens).

	return $links;
}
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Options du thème',
		'menu_title' => 'Options du thème',
		'menu_slug' => 'theme-options',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}






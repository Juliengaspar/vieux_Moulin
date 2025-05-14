<?php

// Charger les champs ACF exportés :
include_once('fields.php');

//activer la sesion php
if (session_status()===PHP_SESSION_NONE){
	session_start();
}
function hepl_trad_load_textdomain(): void
{
	load_theme_textdomain('hepl-trad', get_template_directory() . '/locales');
}

add_action('after_setup_theme', 'hepl_trad_load_textdomain');

/**
 * Récupère la valeur d'un champ ACF d'une page d'option pour la langue courante.
 *
 * Cette fonction utilise Advanced Custom Fields PRO (ACF) et Polylang
 * pour récupérer la valeur d'un champ d'option spécifique en fonction
 * de la langue active sur le site.
 *
 * @param string $field Le nom du champ ACF à récupérer.
 * @return mixed La valeur du champ, ou `false` si le champ n'existe pas.
 *
 *
 */
function get__option($field): mixed
{
	return get_field($field, pll_current_language('slug'));
}

function __hepl(string $translation, array $replacements = [])
{
// 1. Récupérer la traduction de la phrase présente dans $translation
	$base = __($translation, 'hepl-trad');

// 2. Remplacer toutes les occurrences des variables par leur valeur
	foreach ($replacements as $key => $value) {
		$variable = ':' . $key;
		$base = str_replace($variable, $value, $base);
	}

// 3. Retourner la traduction complète.
	return $base;
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

// Ajoute notre fonction de filtrage à l'action 'upload_mimes' pour permettre l'upload des fichiers SVG.
add_filter('upload_mimes', 'my_own_mime_types');

// Activer l'utilisation des vignettes (image de couverture) sur nos post types:
add_theme_support('post-thumbnails', ['recipe','travel']);

// Enregistrer de nouveaux "types de contenu", qui seront stockés dans la table
// "wp_posts", avec un identifiant de type spécifique dans la colonne "post_type":

register_post_type('recipe', [
	'label' => 'Recettes',
	'description' => 'Les recettes liées à nos voyages',
	'menu_position' => 7,
	'menu_icon' => 'dashicons-carrot',
	'public' => true,
	'has_archive' => true,
	'rewrite' => [
		'slug' => 'recettes',
	],
	'supports' => ['title','excerpt','editor','thumbnail'],
]);

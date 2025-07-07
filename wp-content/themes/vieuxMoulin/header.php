<?php
/*
Template Name: header
*/
?>

<!doctype HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premiers pages aceuille du projet clien vieux moulin fait avec woordpresse ">
    <meta name="keywords" content="clien, Projet-web, Julien, woordpresse, formation hepl, vieux moulin"/>
    <meta name="author" content="Julien Gaspar"/>
    <link rel="icon" type="image/png" sizes="16x16" href="src/image/icones/vieux__moulin__icone__small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/image/icones/vieux__moulin__icone__medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="src/image/icones/vieux__moulin__icone__large.png">
	<title>header</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--<nav class="navigation__pricipal">-->
<!--	<ul class="redirections">-->
<!--		<li class="redirection__vieux_moulin" id="logo__vieux__moulin__SRG">-->
<!--            <!--<img src="src/img/logo-vieux-moulin_fond_blanc.png" class="img__vieux__moulin"-->
<!--			--><?php
//			$img = get_field('image_accueil');
//			if ($img): ?>
<!--                <a href="--><?php //echo home_url(); ?><!--">-->
<!--                    <img src="--><?php //echo esc_url($img['url']); ?><!--" alt="Logo">-->
<!--                </a>-->
<!--			--><?php //endif; ?>
<!--        </li>-->
<!--		<li class="redirection__vieux_moulin">-->
<!--            -->
<!--			<label for="Vieux__Moulin__redirection"></label>-->
<!---->
<!--			<select name="Vieux__Moulin__redirection" id="Vieux__Moulin__redirection">-->
<!--				<option value="maisons"> qui sommes-nous</option>-->
<!--				<option value="maisons">Nos maison</option>-->
<!--				<option value="valeurs">Nos valeurs</option>-->
<!--				<option value="activitees">Nos activités</option>-->
<!--				<option value="educatifs">Projet éducatif</option>-->
<!--			</select>-->
<!--			-->
<!--			--><?php //$lien_select = get_field('liens_navigation'); ?>
<!--			--><?php //if ($lien_select): ?>
<!--			<label for="Vieux__Moulin__redirection"></label>-->
<!--                <select id="Vieux__Moulin__redirection" onchange="if(this.value) window.location.href=this.value;">-->
<!--                    <option value="--><?php //echo esc_url(home_url('/qui sommes-nous')); ?><!--">qui sommes-nous</option>-->
<!--                    <option value="--><?php //echo esc_url(home_url('/etablisement')); ?><!--">Maisons</option>-->
<!--                    <option value="--><?php //echo esc_url(home_url('/nos_valeurs')); ?><!--">Valeurs</option>-->
<!--                    <option value="--><?php //echo esc_url(home_url('/activites')); ?><!--">Activités</option>-->
<!--                    <option value="--><?php //echo esc_url(home_url('/Administratif')); ?><!--">Educatif</option>-->
<!--                </select>-->
<!--			--><?php //endif; ?>
<!---->
<!--		</li>-->
<!--         REDIRECTIONS URL -->
<!--        <li class="redirection__vieux_moulin">-->
<!--	        --><?php //if ($url1 = get_field('lien_custom_1')): ?>
<!--                <a href="--><?php //echo esc_url($url1); ?><!--">Nous aider</a>-->
<!--	        --><?php //endif; ?>
<!--        </li>-->
<!--        <li class="redirection__vieux_moulin">-->
<!--	        --><?php //if ($url2 = get_field('lien_custom_2')): ?>
<!--                <a href="--><?php //echo esc_url($url2); ?><!--">Nous contacter</a>-->
<!--	        --><?php //endif; ?>
<!--        </li>-->
<!--	</ul>-->
<!--</nav>-->
<header>
    <!-- Logo avec lien -->

	<?php
	$image = get_field('logo_image'); // Assure-toi que ce champ ACF est de type "image" avec "tableau" comme retour

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


    <!-- Menu principal -->
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
</body>
<script>
    document.getElementById('redirectionPage-select').addEventListener('change', function () {
        const url = this.value;
        if (url) {
            window.location.href = url;
        }
    });
</script>

</html>


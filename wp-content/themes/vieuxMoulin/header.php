<?php
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
	<link rel="stylesheet" href="./src/css/header.css">
	<title>header</title>
</head>
<body>
<nav class="navigation__pricipal">
	<ul class="redirections">
		<li class="redirection__vieux_moulin" id="logo__vieux__moulin__SRG">
            <!--<img src="src/img/logo-vieux-moulin_fond_blanc.png" class="img__vieux__moulin">-->
			<?php
			$img = get_field('image_accueil');
			if ($img): ?>
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo esc_url($img['url']); ?>" alt="Logo">
                </a>
			<?php endif; ?>
        </li>
		<li class="redirection__vieux_moulin">
            <!--
			<label for="Vieux__Moulin__redirection"></label>

			<select name="Vieux__Moulin__redirection" id="Vieux__Moulin__redirection">
				<option value="maisons"> qui sommes-nous</option>
				<option value="maisons">Nos maison</option>
				<option value="valeurs">Nos valeurs</option>
				<option value="activitees">Nos activités</option>
				<option value="educatifs">Projet éducatif</option>
			</select>
			-->
			<?php $lien_select = get_field('liens_navigation'); ?>
			<?php if ($lien_select): ?>
			<label for="Vieux__Moulin__redirection"></label>
                <select id="Vieux__Moulin__redirection" onchange="if(this.value) window.location.href=this.value;">
                    <option value="<?php echo esc_url(home_url('/qui sommes-nous')); ?>">qui sommes-nous</option>
                    <option value="<?php echo esc_url(home_url('/maisons')); ?>">Maisons</option>
                    <option value="<?php echo esc_url(home_url('/valeurs')); ?>">Valeurs</option>
                    <option value="<?php echo esc_url(home_url('/activites')); ?>">Activités</option>
                    <option value="<?php echo esc_url(home_url('/educatif')); ?>">Educatif</option>
                </select>
			<?php endif; ?>

		</li>
        <!-- REDIRECTIONS URL -->
        <li class="redirection__vieux_moulin">
	        <?php if ($url1 = get_field('lien_custom_1')): ?>
                <a href="<?php echo esc_url($url1); ?>">Nous aider</a>
	        <?php endif; ?>
        </li>
        <li class="redirection__vieux_moulin">
	        <?php if ($url2 = get_field('lien_custom_2')): ?>
                <a href="<?php echo esc_url($url2); ?>">Nous contacter</a>
	        <?php endif; ?>
        </li>
	</ul>
</nav>
</body>
</html>


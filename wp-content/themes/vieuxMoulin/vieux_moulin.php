<?php /* Template name: Template "vieux_mouli*/ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<html lang="fr">
<head>

    <title>Vieux Moulin</title>
</head>
<body>
<header>

    <h1>Le Vieux Moulin</h1>
    <!--<image src="./src/image/maison__vieux__moulin.jpg" alt="vue de la maison de vieux moulin" class="vieux__moulin">-->
	<?php
	$image__vieux__moulin = get_field('picture__vieux__moulin__home');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__vieux__moulin) :
		?>
        <div class="image" style="flex: 1;">
            <img class="image__vieux__moulin"  src="<?php echo esc_url($image__vieux__moulin['url']); ?>" alt="<?php echo esc_attr($image__vieux__moulin['alt']); ?>">
        </div>
	<?php endif; ?>
    <?php get_template_part('partials/scroll'); ?>

</header>
<section class="info__vieux__moulin">
    <h2>Info</h2>
    <!--<p>Le Vieux Moulin est un Service Résidentiel Général qui accueille et héberge des enfants et adolescents de 0 à 18 ans, placés par les services d'aide et de protection de la jeunesse. Sa mission est d'assurer un cadre sécurisant et éducatif aux jeunes en difficulté, dont la santé, la sécurité ou les conditions de vie sont compromises en raison de leur situation ou de leur entourage. L'accompagnement repose sur une approche basée sur la confiance.</p>-->
	<p>
    <?php the_field('description__home'); ?>
    </p>
    <section class="contacte__vieux__moulin">
        <h3>Contact</h3>
        <!--<p>Monsieur Jean-François SCHMIT</p>
        <p>Emai : <a href="direction@levm.be">direction@levm.be</a></p>
        <p>DirecteurE</p>
        <a>Nous envoyer un message</a>
        <image src="">-->
	<p>
        <?php the_field('contact__directeur'); ?>
    </p>
    <p>Email:
        <?php the_field('email__redirection__direction'); ?>
    </p>
         <p>
        <?php the_field('email__redirection__direction'); ?>
             <a href="<?php the_field('redirection__page'); ?>" class="button">Nous envoyer un message</a>
    </p>
        <img src="<?php the_field('icone__people'); ?>" alt="vue de 3 persone de plus petit aux plus grand" class="icone__people">
	    <?php
	    $image__icone__people = get_field('icone__people');
	    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	    if ($image__icone__people) :
		    ?>
            <div class="image" style="flex: 1;">
                <img class="image__vieux__moulin"  src="<?php echo esc_url($image__icone__people['url']); ?>" alt="<?php echo esc_attr($image__icone__people['alt']); ?>">
            </div>
	    <?php endif; ?>
    </section>
</section>
<section class="maps">
    <h2 class="sr-only">Titre invible</h2>
    <!--<image src="./src/image/carte__vieux__moulin.png" class="carte" alt="carte qui montre le vieux moulin">
    <a lang="fr" href="https://www.google.be/maps/place/Strainchamps+1,+6637+Fauvillers/@49.8761339,5.6751361,17z/data=!3m1!4b1!4m5!3m4!1s0x47eaa07e4546d339:0x197c28fdda915cae!8m2!3d49.8761305!4d5.677711?entry=ttu&g_ep=EgoyMDI1MDQxNi4xIKXMDSoASAFQAw%3D%3D">Voir sur maps</a>-->
        <img src="<?php the_field('carte__vieux__moulin'); ?>" alt="representation d'un plan qui represente la ville du vieux__moulin" class="carte__vieux__moulin">
	<?php
	$image__carte__vieux__moulin = get_field('carte__vieux__moulin');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__carte__vieux__moulin) :
		?>
        <div class="image" style="flex: 1;">
            <img class="carte__vieux__moulin"  src="<?php echo esc_url($image__carte__vieux__moulin['url']); ?>" alt="<?php echo esc_attr($image__carte__vieux__moulin['alt']); ?>">
        </div>
	<?php endif; ?>
             <a href="<?php the_field('redirection__page__maps'); ?>" class="button">Voir sur maps</a>
</section>

<section class="autours__vieux__moulin">
    <h2>Environnement</h2>
    <!--<p>Le Vieux Moulin est situé dans le petit village de Strainchamps. Il bénéficie d’un bel espace extérieur, calme et verdoyant. Ce cadre idyllique permet à l’enfant de se développer dans les meilleures conditions possibles.</p>
    <image src="./src/image/loupe-Foret.png">

    -->
        <?php the_field('environement__home'); ?>
        <img src="<?php the_field('picture__foret'); ?>" alt="representation d’une foret qui est autours du vieux moulin" class="picture__foret">
	<?php
	$image__picture__foret = get_field('picture__foret');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__picture__foret) :
		?>
        <div class="image" style="flex: 1;">
            <img class="picture__foret"  src="<?php echo esc_url($image__picture__foret['url']); ?>" alt="<?php echo esc_attr($image__picture__foret['alt']); ?>">
        </div>
	<?php endif; ?>
</section>
<section class="vie__communautee">
    <h2>La vie en communauté</h2>
    <!--<p>Vivre en communauté n’est pas toujours facile, surtout lorsque l’adolescent traverse les bouleversements liés à son évolution.
        Tandis que les plus jeunes jouent et s’expriment bruyamment, l’adolescent cherche un espace où il peut se retrouver avec ses pairs en toute tranquillité.

        L’aménagement des espaces de vie de la maison est conçu en fonction de l’âge et des besoins des jeunes accueillis. Chaque lieu est pensé pour favoriser leur bien-être, leur épanouissement et leur réassurance, tout en permettant l’observation et l’accompagnement éducatif. Un espace modulable peut ainsi faire office de salon TV pour les plus jeunes, mais aussi d’atelier créatif ou d’aire de jeux vidéo.

        La cuisine, véritable cœur de la maison, est un lieu de partage et d’échange où tous se retrouvent pour les repas, renforçant ainsi le lien communautaire.
         </p>-->
    <p>
        <?php the_field('vie__communautee'); ?>
    </p>
    <!--<div>
        <image src="">
    </div>-->
    <div class="slider-container">
        <div class="slider-track">
			<?php
			$images = get_field('interrieur__home__animation');
			if( $images ):
				// On double la boucle pour faire l'effet d'infini
				for ($i = 0; $i < 2; $i++):
					foreach( $images as $image ): ?>
                        <div class="slider-image">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
					<?php endforeach;
				endfor;
			endif; ?>
        </div>
    </div>
    <!--<p >Le jeu ouvre toutes les portes. Pour un professionnel, il constitue la plus belle fenêtre d’observation de l’état psychique d’un enfant. Le jeu est aussi un moyen privilégié d’entrer en relation avec l’enfant, en particulier lorsque le lien avec l’adulte est fragile ou rompu.</p>-->
    <p>
        <?php get_field('vie__comunautee__part2') ?>
    </p>
    <p class="legend">
        <?php get_field('citation__vieux__moulin') ?>
    </p>
    <!--<p class="legend">"Montre-moi comment tu joues, et je te dirai comment tu grandis."></p>-->
    <!--<a class="rediretion">Parcourir nos activités et nos sorties</a>-->
    <a href="<?php the_field('redirecton__page__activitees'); ?>" class="button">Parcourir nos activités et nos sorties</a>

    <div>
        <!--<p class="autours__vieux__moulin__text">La Cabane des Gnomes offre un espace sécurisé propice aux rencontres pour nos jeunes tout en préservant leur lieu de vie quotidien. Cet espace a permis d’organiser des entretiens psychologiques individuels dans des conditions optimales.</p>
        <image src="/src/image/ardeche.png" class="autours__vieux__moulin__img">
        <a class="rediretion">Aller vers Edelweiss</a>
        -->
        <p class="autours__vieux__moulin__text"><?php get_field('vie__comunautee') ?></p>
        <div>
		    <?php
		    $galeries__activitees = get_field('activitee__home');
		    if ($galeries__activitees):
			    foreach ($galeries__activitees as $galerie__activitee): ?>
                    <img src="<?php echo $galerie__activitee['url']; ?>" alt="<?php echo $galerie__activitee['alt']; ?>">
			    <?php endforeach;
		    endif;
		    ?>
        </div>
    <a href="<?php the_field('redirection__Edelweiss__page'); ?>" class="button">Aller vers Edelweiss</a>
    </div>
</section>
<?php
endwhile;
endif;
get_footer();

?>
</body>
</html>

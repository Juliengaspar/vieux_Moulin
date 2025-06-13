<?php
/*
Template Name: Dons
*/
get_header();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premiers pages aceuille du projet clien vieux moulin fait avec woordpresse ">
    <meta name="keywords" content="clien, Projet-web, Julien, woordpresse, formation hepl, vieux moulin"/>
    <meta name="author" content="Julien Gaspar"/>
    <link rel="icon" type="image/png" sizes="16x16" href="../image/icones/vieux__moulin__icone__small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../image/icones/vieux__moulin__icone__medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="../image/icones/vieux__moulin__icone__large.png">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/dons.css">
    <title>Dons</title>
</head>
<body>
<header class="header">
    <h1>Offrez un avenir meilleur aux enfants!</h1>
    <img src="<?php the_field("picture__icons__dons") ?>" alt="coeur degrader de orange sur une une main de profile">
	<?php get_template_part('partials/scroll'); ?>

</header>
<section class="dons">
    <h2></h2>
    <section class="exemple__dons">
        <h3>Chaque don change une vie. </h3>
        <!--<p>Les dons permettent de répondre à des besoins essentiels des enfants. Ils offrent un cadre de vie plus chaleureux et propice à leur épanouissement.
            Soutenir, c’est offrir de l’espoir et des opportunités à ceux qui en ont le plus besoin.

            Merci à tous nos bienfaiteurs.</p>-->
        <p>
            <?php the_field("exemple__dons__changement") ?>
        </p>
        <img src="<?php the_field("dons__img");?>" alt="velo__dons">
    </section>
    <section class="exemple__dons">
        <h3>1001 projets </h3>
        <!--<p>Grâce à votre générosité, des projets voient le jour et des sourires renaissent.

            Nous avons eu la chance d’offrir aux enfants une expérience inoubliable en Ardèche, entre nature, jeux et découvertes.

            Chaque espace —aire de jeu ou lieu de vie — est repensé pour répondre à leurs besoins et assurer leur sécurité au quotidien.

            Ces avancées, c’est à vous que nous les devons. </p>-->
        <p>
            <?php  the_field("exemple__of__project"); ?>
        </p>
        <img src=<?php the_field("projet__img");?>>
    </section>
</section>
<section class="coordonee__dons">
    <h2 class="iban"><?php the_field("number__conte__dons"); ?></h2>
    <section class="dons__numero__cart">
        <section class="dons__info">
            <h3>Nom</h3>
            <p><?php the_field("number__name__dons"); ?></p>
        </section>
        <section class="dons__info">
            <h3>Communications</h3>
            <p><?php the_field("name__of__don__COM"); ?></p>
        </section>
        <p class="donation__note"><?php the_field("info__important__don"); ?></p>
    </section>
</section>
<form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="post">
    <h2>Comment souhaitez-vous payer ?</h2>
    <section class="type__payments">
        <section class="type__payment">
            <h3>Payer par QRcpde</h3>
            <p>Ouvrez l’application sur votre téléphone, cliquez sur ‘Payer’ et scanner le QR code.</p>
            <img src="<?php get_field("image__qrcode") ?>">
        </section>
        <div>OU</div>
        <section class="type__payment">
            <h3>Payer par Carte</h3>
            <section class="type__of__carte">
                <h4>Sélectionner votre moyen de paiement</h4>

                <div>
                    <input type="radio" id="bancontact" name="bancontact" value="bancontact" checked />
                    <label for="bancontact">Bancontact</label>
	                <?php if(isset($errors['bancontact'])): ?>
                        <p class="field__error"><?= $errors['bancontact']; ?></p>
	                <?php endif; ?>
                </div>

                <div>
                    <input type="radio" id="masteracrt" name="masteracrt" value="masteracrt" />
                    <label for="masteracrt">Masteracrt</label>
	                <?php if(isset($errors['masteracrt'])): ?>
                        <p class="field__error"><?= $errors['masteracrt']; ?></p>
	                <?php endif; ?>
                </div>

                <div>
                    <input type="radio" id="visa" name="visa" value="visa" />
                    <label for="visa">Visa</label>
	                <?php if(isset($errors['visa'])): ?>
                        <p class="field__error"><?= $errors['visa']; ?></p>
	                <?php endif; ?>
                </div>
                <div>
                    <input type="radio" id="america__ewpresse" name="america__ewpresse" value="america__ewpresse" />
                    <label for="america__ewpresse">America Ewpresse</label>
	                <?php if(isset($errors['america__ewpresse'])): ?>
                        <p class="field__error"><?= $errors['america__ewpresse']; ?></p>
	                <?php endif; ?>
                </div>
            </section>

        </section>

    </section>
    <section class="info__carte">
        <h3>Vos coordonnées de la carte</h3>
        <div>
            <label for="carte__number">N° de carte</label>
            <input type="number" id="carte__number" name="carte__number" placeholder=".... .... .... ....">
	        <?php if(isset($errors['carte__number'])): ?>
                <p class="field__error"><?= $errors['carte__number']; ?></p>
	        <?php endif; ?>
        </div>
        <div>
            <label for="carte__expiration">date d’expiration</label>
            <input type="date" id="carte__expiration" name="carte__expiration">
	        <?php if(isset($errors['carte__expiration'])): ?>
                <p class="field__error"><?= $errors['carte__expiration']; ?></p>
	        <?php endif; ?>
        </div>

        <div>
            <label for="carte__titulaire">Tituraire de la carte</label>
            <input type="text" id="carte__titulaire" name="carte__titulaire">
	        <?php if(isset($errors['carte__titulaire'])): ?>
                <p class="field__error"><?= $errors['carte__titulaire']; ?></p>
	        <?php endif; ?>
        </div>

    </section>
    <button type="submit" id="submite" name="submite">Valider</button>

</form>
<!--  affiche le contenu -->
<div><?php the_content() ?></div>
<?php
get_footer();

?>
</body>
</html>

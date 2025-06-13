<?php
/*
Template Name: Contacte
*/
get_header();
?>

<html lang="fr">
<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contacte</title>
</head>
<body>
<header>
    <h1>Contacter</h1>
    <img src="<?php get_field("icone__contact__directeur") ?>">
	<?php get_template_part('partials/scroll'); ?>

</header>
<section class="coordonnee__info">
    <h2>Coordonnés</h2>
    <!--<p>ASBL ​Le Vieux Moulin
        Service Résidentiel Général
        Adresse : ​Rue des Vennes, n°1   Strainchamps
        6637 Fauviller</p>-->
    <p>
        <?php get_field("info__addresse__direction") ?>
    </p>
    <p>
        <?php get_field("info__contact__direction") ?>
    </p>
    <p>
        emai:<?php get_field("email__direction") ?>
    </p>
    <p>
        Directeur:<?php get_field("name__dirrecteur") ?>
    </p>
    <p>
        Coordinatrice:<?php get_field("name__coordinatrice") ?>
    </p>
    <!--<p>Téléphone : ​063/60.11.50
        Fax : ​​063/60.22.37
    </p>
    <p>Mail : ​​saaelevieux.moulin@gmail.com</p>
    <p>Directeur : ​SCHMIT Jean-François
        Mail : direction@levm.be
        GSM : 0488/774.850</p>
    <p>Coordinatrice : GASPART Vanessa</p>-->
</section>
<h2>Nous contacter</h2>
<form>
    <section class="contacte">

        <div class="contate__type">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Nom">
	        <?php if(isset($errors['name'])): ?>
                <p class="field__error"><?= $errors['name']; ?></p>
	        <?php endif; ?>
        </div>
        <div class="contate__type">
            <label for="firstName">Prenom</label>
            <input type="text" id="firstName" name="firstName" placeholder="Prénom">
	        <?php if(isset($errors['firstName'])): ?>
            <p class="field__error"><?= $errors['firstName']; ?></p>
	        <?php endif; ?>
        </div>


        <div class="contate__type">
            <label for="email">email</label>
            <input type="text" id="email" name="email" placeholder="nom@gmail.com">
	        <?php if(isset($errors['email'])): ?>
            <p class="field__error"><?= $errors['email']; ?></p>
	        <?php endif; ?>
        </div>
        <div class="contate__type">
            <label for="type__message">Motif</label>
            <select id="type__message" name="type__message">
                <option> Premier contact / Demande d’informations</option>
                <option> Candidature pour un poste / Stage</option>
                <option> Prendre des nouvelles d’un enfant</option>
                <option> Demande de rendez-vous avec un membre de l’équipe</option>
                <option> Demande liée à un dossier en cours</option>
                <option> Proposer un partenariat ou une collaboration</option>
                <option> Faire un don ou proposer une aide matérielle</option>
                <option> Faire un don ou proposer une aide matérielle</option>
                <option> Autre demande</option>
            </select>
	        <?php if(isset($errors['type__message'])): ?>
            <p class="field__error"><?= $errors['type__message']; ?></p>
	        <?php endif; ?>
        </div>
        <div class="contate__type">
            <label for="message">Message</label><br>
            <input type="text" id="message" name="message">
	        <?php if(isset($errors['message'])): ?>
            <p class="field__error"><?= $errors['message']; ?></p>
	        <?php endif; ?>
            </div>
        <button type="submit" class="submit__button">
            Envoyer
        </button>
        <!--  affiche le contenu -->
        <div><?php the_content() ?></div>
    </section>
</form>

</body>
</html>

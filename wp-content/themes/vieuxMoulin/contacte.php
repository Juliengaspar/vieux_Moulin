<?php
/* Template name: Template "contacte
*/
?>
<?php get_header(); ?>

<html lang="fr">
<head>
    <title>Contacte</title>
    <style>
        body{
            background-color: white;
            font-size: 16px;
            font-family: cavea;
        }
        a{
            cursor: pointer;
            text-decoration: none;
            border: none;
            color: black;
        }
        .header__contacte{
            background-color: #BDFAEA;
            color: black;
            text-align: center;
        }
        .header__contacte>h1{
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
            padding: 5% 0;
        }
        .scroll__animation{
            width: 10%;
            height: auto;
            margin: -1% auto;

            animation: mouvement-vertical 2s ease-in-out infinite;

            /* Pour un rendu plus net */
            transform: translateZ(0);
            backface-visibility: hidden;
            perspective: 1000px;
        }

        @keyframes mouvement-vertical {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(10px); /* Ajustez cette valeur pour la hauteur du mouvement */
            }
        }

        .info__contacte p,
        .info__contacte a{
            font-size: 1rem;
        }

        .title__contacte__info{
            font-size: 2.5rem;
            margin-bottom: 2.5%;
        }

        #coordonnes::before{
            content: url("./src/image/icone-corrdonée.png");
        }

        .coordonnee__info{
            margin-left: 5%;

        }

        .coordonnee__info>p{
            width: 30%;
            font-size: 1rem;
            margin-bottom: 1%;
            line-height: 2.5vh;
        }

        form{
            background-color: #0466F3;
            color: white;
            margin: 1% 25%;
            height: auto;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 7px 7px 20px 8px rgba(0,0,0,0.50);

        }

        .contacte{
            display: flex;
            flex-wrap: wrap;
        }
        #contacte::before{
            content: url("./src/image/icone__contacte2.png");
        }

        .contate__type{
            display: flex;
            flex-direction: column;
            margin-bottom: 10%;
            margin-left: 10%;

        }
        label{
            color: white;
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
        }
        input, select, textarea {

        }
        input,
        select{
            box-shadow: 5px 5px 4px 0 rgba(0,0,0,0.50);
            padding: 0.8rem;
            border: none;
            border-radius: 10px;
            background-color: #f4f4f4;
            font-size: 1rem;

        }
        input:focus{
           border: 5px solid red;
        }
        #message{
            width: 250%;
            height: 100%;
            padding: 20%;
        }
        button{
            background-color: white;
            color: black;
            border: none;
            font-size: 1rem;
            width: 60%;
            padding: 2% 5%;
            margin: 0 25%;
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.2);

            transition: background 0.3s ease;
        }

        button::before{
            content: url(./src/image/iconne__message.png);
        }

        button:hover {
            background-color: #0466F3;
            color: white;
        }


    </style>
</head>
<body>
<?php
if (have_posts()) :while (have_posts()) : the_post();
		?>
<section class="header__contacte">
    <h1 class="title__contacte" >Contacter</h1>
    <!-- Image d'introduction -->

	<?php
	$image__header__page = get_field('icone__contact__directeur');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image__header__page) :
		?>
        <div class="image__contacte">
            <img src="<?php echo esc_url($image__header__page['url']); ?>" alt="<?php echo esc_attr($image__header__page['alt']); ?>">
        </div>
	<?php endif; ?>
    <div class="scroll__animation">
		<?php get_template_part('partials/scroll'); ?>
    </div>

</section>
<section class="coordonnee__info">
    <h2 class="title__contacte__info" id="coordonnes">Coordonnés</h2>
    <!--<p>ASBL ​Le Vieux Moulin
        Service Résidentiel Général
        Adresse : ​Rue des Vennes, n°1   Strainchamps
        6637 Fauviller</p>-->
    <div class="info__contacte">
    <p>
        <?php the_field("info__addresse__direction") ?>
    </p>
    <p>
        <?php the_field("info__contact__direction") ?>
    </p>
    <p>
        Email : <?php the_field("email__direction") ?>
    </p>
    <p>
        Directeur : <?php the_field("name__dirrecteur") ?>
    </p>
    <p>
        Coordinatrice : <?php the_field("name__coordinatrice") ?>
    </p>
    </div>
</section>
<section class="coordonnee__info">

<h2 class="title__contacte__info" id="contacte">Nous contacter</h2>
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
            <label for="firstName">Prénom</label>
            <input type="text" id="firstName" name="firstName" placeholder="Prénom">
	        <?php if(isset($errors['firstName'])): ?>
            <p class="field__error"><?= $errors['firstName']; ?></p>
	        <?php endif; ?>
        </div>


        <div class="contate__type">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="nom@gmail.com">
	        <?php if(isset($errors['email'])): ?>
            <p class="field__error"><?= $errors['email']; ?></p>
	        <?php endif; ?>
        </div>
        <div class="contate__type">
            <label for="tel">Numéro de téléphone</label>
            <input type="tel" id="tel" name="tel" placeholder="+32 486 11 22 33">
	        <?php if(isset($errors['tel'])): ?>
            <p class="field__error"><?= $errors['tel']; ?></p>
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
</section>
<?php

endwhile;
endif;

get_footer();
?>
<?php
/*
Template name: Template "dons
*/
?>
<?php get_header(); ?>
<head>
    <title>Dons</title>
    <style>
        body{
            background-color: white;
            font-size: 16px;
        }
        .header__dons{
            background-color: #BDFAEA;
            text-align: center;
        }
        .header__dons>h1{
            font-size: 3rem;
            margin: 2% 0;
            text-align: center;
            font-weight: 800;
            text-shadow: 5px 5px 4px rgba(47,109,236,0.64);
            padding: 5% 0;
        }
        img{
            width: 20%;
            height: auto;
        }
        .images__dons{
            width: 500px;
            height: auto;
        }

        .dons{
            margin: 5%;
        }

        .exemple__dons__img>img{
            width: 50%;
            height: auto;
            margin 0 5%;
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
        .dons{
        }
        .dons>h2{
            display: none;
        }

        .exemple__dons{
            display: grid;
            grid-template-columns: auto auto;
        }

        .coordonee__dons{
            text-align: left;
            margin: 5%;
        }

        .coordonee__dons{
            width: 100%;
            background-color: #BDFAEA;
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem auto;
            color: black;
            height: auto;
            box-shadow: 7px 7px 20px 8px rgba(0,0,0,0.49);

        }
        .iban{
            font-weight: 700;
            font-size: 5rem;
            letter-spacing: 1.3rem;
            text-align: left;
            margin-top: 2%;
        }
        .coordonee__dons>h2{
        }
        .dons__numero__cart>h3{
            font-size: 3rem;
            margin-left: 5%;
        }

/*
        .dons__info{
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1rem;
        }
*/
        form{
            margin: 5%;
        }
        .dons__numero__cart{
            display: grid;
            grid-template-columns: auto auto;

        }


        .dons__info>h3{
            font-size: 2rem;
            margin-bottom: 0.3rem;
        }
        .donation__note>p{
            margin-left: 5%;
        }
        .dons__numero__cart>.donation__note>p {
            font-size: 0.9rem;
            color: #333;
            margin-top: 1.5rem;
            margin-left: 5%;
        }
        h2,
        .dons__titile,{
            margin-left: 5%;
        }
        h2>p{
            margin-left: 5%;

        }

        .qrCode{
            width: 100%;
            height: auto;
        }

        .type__payments{
            display: grid;
            grid-template-columns: auto auto auto;
            margin: 0 15%;
        }

        .dons__info{
            margin-bottom: -5%;
        }

        .type__payment>h3{
            font-size: 2rem;
        }
        .type__payment>p{
            width: 100%;
            margin: 5% 0;
        }

        .type__of__carte{
            background-color: white;
            color: black;
            border: #0466F3 solid 10px;
            border-radius: 10px;
            width: 150%;
            height: auto;
            padding: 5%;
        }


        .info__cartes{
            background-color: #0466F3;
            padding: 1%;
            color: white;
            width:65%;
            border-radius: 10px;
            margin: 1% auto;
            -webkit-box-shadow: 5px 7px 12px 1px rgba(0,0,0,0.64);
            box-shadow: 5px 7px 12px 1px rgba(0,0,0,0.64);
        }
        .info__cartes>div{
            background-color: white;
            color: black;
            margin: 10% 0;
            border-radius: 5px;
        }
        .info__cartes>input{
            display: block;
            margin-right: 50%;
        }
        .info__cartes label{
            display: flex;
        }

        .type__payment{
           margin: 0 5%;
        }

        #bancontact{

        }
        #bancontact:after{
            content: url("../vieuxMoulin/src/image/Bancontact_logo.svg.png");
        }
        label{
            color: #000000;
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
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
            border: 1px solid red;
        }
        button{
            border: none;
            font-size: 1rem;
            width: 60%;
            border-radius: 10px;

            transition: background 0.3s ease;

            text-align: center;
            background-color: #0466F3;
            color: white;
            padding: 1% 4%;
            margin: 0 20%;
            -webkit-box-shadow: 10px 11px 15px 5px rgba(0,0,0,0.25);
            box-shadow: 10px 11px 15px 5px rgba(0,0,0,0.25);
        }

        button::before{
            content: url(./src/image/iconne__message.png);
        }

        button:hover {
            background-color: #0466F3;
            color: white;
        }





        input{
            margin-bottom: 5%;
        }
/*
        button{
            text-align: center;
            background-color: #0466F3;
            color: white;
            padding: 1% 5%;
            border-radius: 10px;
            margin: 0 45%;
            -webkit-box-shadow: 10px 11px 15px 5px rgba(0,0,0,0.25);
            box-shadow: 10px 11px 15px 5px rgba(0,0,0,0.25);
        }

 */
        button:hover{
            background-color: #004db6;

        }
    </style>
</head>
<body>
<?php
if (have_posts()) :while (have_posts()) : the_post();
?>
<section class="header__dons">
    <h1>Offrez un avenir meilleur aux enfants!</h1>
    <!-- Image d'introduction -->
	<?php
	$image_dons = get_field('picture__icons__dons');
	// var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	if ($image_dons) :
		?>
        <div class="picture__icons__dons">
            <img class="images" src="<?php echo esc_url($image_dons['url']); ?>" alt="<?php echo esc_attr($image_dons['alt']); ?>">
        </div>
	<?php endif; ?>
    <div class="scroll__animation">
		<?php get_template_part('partials/scroll'); ?>
    </div>

</section>
<section class="dons">
    <h2>Titre invisible</h2>
    <section class="exemple__dons">
        <div>
        <h3 class="dons__titile">Chaque don change une vie. </h3>
        <p>
            <?php the_field("exemple__dons__changement") ?>
        </p>
        </div>
        <div class="exemple__dons__img">
	    <?php
	    $image_dons_Exemple = get_field('dons__img');
	    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	    if ($image_dons_Exemple) :
		    ?>
            <div class="dons__img">
                <img class="images__dons" id="exemple__dons" src="<?php echo esc_url($image_dons_Exemple['url']); ?>" alt="<?php echo esc_attr($image_dons_Exemple['alt']); ?>">
            </div>
	    <?php endif; ?>
        </div>
    </section>
    <section class="exemple__dons">
        <div>
	    <?php
	    $image_projet_Exemple = get_field('projet__img');
	    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	    if ($image_projet_Exemple) :
		    ?>
            <div class="projet__img">
                <img class="images__dons" id="exemple__projet" src="<?php echo esc_url($image_projet_Exemple['url']); ?>" alt="<?php echo esc_attr($image_projet_Exemple['alt']); ?>">
            </div>
	    <?php endif; ?>
        </div>
        <div>
        <h3 class="dons__titile">1001 projets </h3>
        <p>
            <?php  the_field("exemple__of__project"); ?>
        </p>
        </div>
    </section>
</section>
<section class="coordonee__dons">
    <h2 class="iban"><?php the_field("number__conte__dons"); ?></h2>
    <section class="dons__numero__cart">
        <section class="dons__info">
            <h3 class="title__info__dons" id="nom__dons">Nom</h3>
            <p><?php the_field("number__name__dons"); ?></p>
        </section>
        <section class="dons__info">
            <h3 class="title__info__dons" id="communications__dons">Communications</h3>
            <p><?php the_field("name__of__don__com"); ?></p>
        </section>
        <p class="donation__note"><?php the_field("info__important__don"); ?></p>
    </section>
</section>
<form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="post">
    <h2>Comment souhaitez-vous payer ?</h2>
    <section class="type__payments">
        <section class="type__payment">
            <h3>Payer par QRcode</h3>
            <p>Ouvrez l’application sur votre téléphone, cliquez sur ‘Payer’ et scanner le QR code.</p>
	        <?php
	        $img__qrCoode = get_field('image__qrcode');
	        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

	        if ($img__qrCoode) :
		        ?>
                <div class="img__qrCode">
                    <img class="qrCode" id="qrCode" src="<?php echo esc_url($img__qrCoode['url']); ?>" alt="<?php echo esc_attr($img__qrCoode['alt']); ?> ">
                </div>
	        <?php endif; ?>
        </section>
        <div>OU</div>
        <section class="type__payment">
            <h3>Payer par carte</h3>
            <section class="type__of__carte">
                <fieldset>
                    <legend>Sélectionner votre moyen de paiement</legend>
                <div class="type__pailemet">
                    <input type="radio" id="bancontact" name="bancontact" value="bancontact" />
                    <label for="bancontact">Bancontact</label>
	                <?php if(isset($errors['bancontact'])): ?>
                        <p class="field__error"><?= $errors['bancontact']; ?></p>
	                <?php endif; ?>
                </div>

                <div class="type__pailemet">
                    <input type="radio" id="masteracrt" name="masteracrt" value="masteracrt" />
                    <label for="masteracrt">mastercard</label>
	                <?php if(isset($errors['masteracrt'])): ?>
                        <p class="field__error"><?= $errors['masteracrt']; ?></p>
	                <?php endif; ?>
                </div>

                <div class="type__pailemet">
                    <input type="radio" id="visa" name="visa" value="visa" />
                    <label for="visa">Visa</label>
	                <?php if(isset($errors['visa'])): ?>
                        <p class="field__error"><?= $errors['visa']; ?></p>
	                <?php endif; ?>
                </div>
                <div class="type__pailemet">
                    <input type="radio" id="america__ewpresse" name="america__ewpresse" value="america__ewpresse" />
                    <label for="america__ewpresse">american express</label>
	                <?php if(isset($errors['america__ewpresse'])): ?>
                        <p class="field__error"><?= $errors['america__ewpresse']; ?></p>
	                <?php endif; ?>
                </div>
                </fieldset>

            </section>

        </section>

    </section>
    <section class="info__cartes">
        <h3>Informations de la carte </h3>

        <div class="info__cartes">
            <label for="montant">Montant de votres de dons</label>
            <input type="number" id="montant" name="montant" placeholder=" ..€" value=" €" min="1" max="10000">
        </div>

        <div class="info__carte">
            <label for="carte__number">N° de carte</label>
            <input type="number" id="carte__number" name="carte__number" placeholder=".... .... .... ....">
	        <?php if(isset($errors['carte__number'])): ?>
                <p class="field__error"><?= $errors['carte__number']; ?></p>
	        <?php endif; ?>
        </div>
        <div class="info__carte">
            <label for="carte__expiration">date d’expiration</label>
            <input type="date" id="carte__expiration" name="carte__expiration">
	        <?php if(isset($errors['carte__expiration'])): ?>
                <p class="field__error"><?= $errors['carte__expiration']; ?></p>
	        <?php endif; ?>
        </div>

        <div class="info__carte">
            <label for="carte__titulaire">Titulaire de la carte</label>
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
endwhile;
endif;
?>

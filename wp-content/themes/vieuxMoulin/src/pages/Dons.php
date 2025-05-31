<?php
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/dons.css">
    <title>Dons</title>
</head>
<body>
<header class="header">
    <h1>Offrez un avenir meilleur aux enfants!</h1>
    <img src="./src/img/icone-coeur-main-2.png" alt="coeur degrader de orange sur une une main de profile">
    <div>Scrool</div>
</header>
<section class="dons">
    <h2></h2>
    <section class="exemple__dons">
        <h3>Chaque don change une vie. </h3>
        <p>Les dons permettent de répondre à des besoins essentiels des enfants. Ils offrent un cadre de vie plus chaleureux et propice à leur épanouissement.
            Soutenir, c’est offrir de l’espoir et des opportunités à ceux qui en ont le plus besoin.

            Merci à tous nos bienfaiteurs.</p>
        <img src="./src/img/velo__dons.png" alt="velo__dons">
    </section>
    <section class="exemple__dons">
        <h3>1001 projets </h3>
        <p>Grâce à votre générosité, des projets voient le jour et des sourires renaissent.

            Nous avons eu la chance d’offrir aux enfants une expérience inoubliable en Ardèche, entre nature, jeux et découvertes.

            Chaque espace —aire de jeu ou lieu de vie — est repensé pour répondre à leurs besoins et assurer leur sécurité au quotidien.

            Ces avancées, c’est à vous que nous les devons. </p>
        <img src="/src/img/ardeche.png">
    </section>
</section>
<section class="coordonee__dons">
    <h2 class="iban">BE.. ..... .... .....</h2>
    <section class="dons__numero__cart">
        <section class="dons__info">
            <h3>Nom</h3>
            <p>Le Vieux Moulin</p>
        </section>
        <section class="dons__info">
            <h3>Communications</h3>
            <p>Don + Numéro de registre national.</p>
        </section>
        <p class="donation__note">Depuis le 01.01.2024 (SPF Finances - art 323/3 CIR92), le numéro de Registre National devient obligatoire pour pouvoir établir votre attestation fiscale pour tout don de plus de 40€.</p>
    </section>
</section>
<form>
    <h2>Comment souhaitez-vous payer ?</h2>
    <section class="type__payments">
        <section class="type__payment">
            <h3>Payer par QRcpde</h3>
            <p>Ouvrez l’application sur votre téléphone, cliquez sur ‘Payer’ et scanner le QR code.</p>
            <img src="">
        </section>
        <div>OU</div>
        <section class="type__payment">
            <h3>Payer par Carte</h3>
            <section class="type__of__carte">
                <h4>Sélectionner votre moyen de paiement</h4>

                <div>
                    <input type="radio" id="bancontact" name="bancontact" value="bancontact" checked />
                    <label for="bancontact">Bancontact</label>
                </div>

                <div>
                    <input type="radio" id="masteracrt" name="masteracrt" value="masteracrt" />
                    <label for="masteracrt">Masteracrt</label>
                </div>

                <div>
                    <input type="radio" id="visa" name="visa" value="visa" />
                    <label for="visa">Visa</label>
                </div>
                <div>
                    <input type="radio" id="america__ewpresse" name="america__ewpresse" value="america__ewpresse" />
                    <label for="america__ewpresse">America Ewpresse</label>
                </div>
            </section>

        </section>

    </section>
    <section class="info__carte">
        <h3>Vos coordonnées de la carte</h3>
        <div>
            <label for="carte__number">N° de carte</label>
            <input type="number" id="carte__number" name="carte__number" placeholder=".... .... .... ....">`
        </div>
        <div>
            <label for="carte__expiration">date d’expiration</label>
            <input type="date" id="carte__expiration" name="carte__expiration">
        </div>

        <div>
            <label for="carte__titulaire">Tituraire de la carte</label>
            <input type="text" id="carte__titulaire" name="carte__titulaire">
        </div>

    </section>
    <button type="submit" id="submite" name="submite">Valider</button>

</form>

</body>
</html>

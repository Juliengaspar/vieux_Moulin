<?php
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contacte</title>
</head>
<body>
<header>
    <h1>Contacter</h1>
    <img src="./src/img/icone-contacte.png">
</header>
<section class="coordonnee__info">
    <h2>Coordonnés</h2>
    <p>ASBL ​Le Vieux Moulin
        Service Résidentiel Général
        Adresse : ​Rue des Vennes, n°1   Strainchamps
        6637 Fauviller</p>
    <p>Téléphone : ​063/60.11.50
        Fax : ​​063/60.22.37
    </p>
    <p>Mail : ​​saaelevieux.moulin@gmail.com</p>
    <p>Directeur : ​SCHMIT Jean-François
        Mail : direction@levm.be
        GSM : 0488/774.850</p>
    <p>Coordinatrice : GASPART Vanessa</p>
</section>
<h2>Nous contacter</h2>
<form>
    <section class="contacte">

        <p class="contate__type">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Nom">
        </p>
        <p class="contate__type">
            <label for="firstName">Prenom</label>
            <input type="text" id="firstName" name="firstName" placeholder="Prénom">
        </p>


        <p class="contate__type">
            <label for="email">email</label>
            <input type="text" id="email" name="email" placeholder="nom@gmail.com">
        </p>
        <p class="contate__type">
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
        </p>
        <p class="contate__type">
            <label for="message">Message</label><br>
            <input type="text" id="message" name="message">
        </p>
        <button type="submit" class="submit__button">
            Envoyer
        </button>
    </section>
</form>

</body>
</html>

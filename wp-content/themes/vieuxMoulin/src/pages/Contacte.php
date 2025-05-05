<?php
?>

<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contacte</title>
</head>
<body>
<header>
	<h1>Nous contacter</h1>
	<img src="">
</header>
<section>
	<h2>Coordonnés</h2>
	<p></p>
</section>
<form>
	<h2>Nous contacter</h2>
    <div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Nom">

        <label for="firstName">Prenom</label>
        <input type="text" id="firstName" name="firstName" placeholder="Prénom">

        <label for="email">email</label>
        <input type="text" id="email" name="email" placeholder="nom@gmail.com">

        <label for="email">Motif</label>
        <select id="email" name="email">
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

        <label for="message">Message</label>
        <input type="text" id="message" name="message">

        <input type="submit">
        <button>Envoyer</button>
    </div>
</form>

</body>
</html>

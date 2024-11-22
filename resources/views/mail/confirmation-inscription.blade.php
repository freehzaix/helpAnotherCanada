<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Confirmation d'inscription</h2>
    <p>
        Bonjour et bienvenu(e) sur <a href="http://pwoi.ca">pwoi.ca</a>.
    </p>
    <p>
        Vous inscription a bien été effectué. Vous pouvez vous connection sur le portail membre.
    </p>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
        <li><strong>Nom</strong> : {{ $user['nom'] }}</li>
        <li><strong>Email</strong> : {{ $user['email'] }}</li>
    </ul>

</body>

</html>

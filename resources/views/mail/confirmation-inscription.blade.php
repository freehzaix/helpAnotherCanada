<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Confirmation d'inscription</h2>
    <p>
        Bonjour {{ $user['nom'] }} et bienvenu(e) sur <a href="http://pwoi.ca">pwoi.ca</a>.
    </p>
    <p>
        Votre inscription a bien été effectué. Vous pouvez vous connection sur le portail membre avec votre adresse mail {{ $user['email'] }} et le mot de passe que vous avez défini.
    </p>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
        <li><strong>Nom</strong> : {{ $user['nom'] }}</li>
        <li><strong>Email</strong> : {{ $user['email'] }}</li>
    </ul>

</body>

</html>

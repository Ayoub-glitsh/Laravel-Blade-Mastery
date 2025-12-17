<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>
    <h2>Bonjour {{ $nom }}</h2>
    <p>Profession : {{ $metter }}</p>

    <a href="{{ route('home') }}">Retour à l'accueil</a>
</body>
</html>

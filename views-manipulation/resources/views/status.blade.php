<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Statut</title>
</head>
<body>
    <h1>Statut de connexion</h1>

    @auth
        <p style="color: green;">Utilisateur connecté</p>
    @endauth

    @guest
        <p style="color: red;">Utilisateur non connecté</p>
    @endguest

    <a href="{{ route('home') }}">Accueil</a>
</body>
</html>

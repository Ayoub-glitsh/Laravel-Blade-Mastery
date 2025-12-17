<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des stagiaires</title>
</head>
<body>
    <h1>Liste des stagiaires</h1>

    <ul>
        @foreach($stagiaires as $stagiaire)
            <li>{{ $stagiaire }}</li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Accueil</a>
</body>
</html>

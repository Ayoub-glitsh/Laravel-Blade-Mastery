<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; }
        header { background: #333; color: white; padding: 1rem; }
        footer { background: #333; color: white; padding: 1rem; text-align: center; margin-top: 2rem; }
        .content { padding: 2rem; min-height: 70vh; }
        nav a { color: white; margin-right: 1rem; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('profile') }}">Profil</a>
            <a href="{{ route('admin.dashboard') }}">Admin</a>
            <a href="{{ route('status') }}">Statut</a>
            <a href="{{ route('stagiaires') }}">Stagiaires</a>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} - ISTA QUARZAZATE - DEVOWFS</p>
        <p>Module : Développement Back-End</p>
    </footer>
</body>
</html>

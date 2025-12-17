@extends('layouts.app')

@section('title', 'Page d\'Accueil')

@section('content')
    <h1>Bienvenue sur notre site</h1>
    <p>Ce contenu est placé dans la section dynamique du layout.</p>

    <div style="margin-top: 2rem; padding: 1rem; background: #f5f5f5;">
        <h3>Informations :</h3>
        <p>Ce site est un exemple d'application Laravel utilisant :</p>
        <ul>
            <li>Layout avec héritage Blade</li>
            <li>Sections dynamiques</li>
            <li>Routes nommées</li>
            <li>Transmission de données aux vues</li>
        </ul>
    </div>
@endsection 

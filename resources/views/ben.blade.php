<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="DITT Team">
    <title>Gestion des Services</title>

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('images/ditt.jpg') }}">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            margin: 10px 0;
        }
        nav a {
            color: #007bff;
            text-decoration: none;
            padding: 10px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        nav a:hover {
            background: #0056b3;
            color: white;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s;
        }
        .card img {
            width: 100%;
            border-radius: 5px;
            height: auto;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #343a40;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .title-gray {
            color: grey ; /* Couleur gris pour le titre */
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1>DIRECTION DE L'INFORMATIQUE ET DE TRACES TECHNOLOGIQUES</h1>
</header>

<nav>
    <a class="{{ request()->is('sous-directions') ? 'active' : '' }}" href="{{ url('sous-directions') }}">Sous-directions</a>
    <a class="{{ request()->is('agents') ? 'active' : '' }}" href="{{ url('agents') }}">Agents</a>
    <a class="{{ request()->is('services') ? 'active' : '' }}" href="{{ url('services') }}">Services</a>
    <a class="{{ request()->is('pointages') ? 'active' : '' }}" href="{{ url('pointages') }}">Pointages</a>
    <a class="{{ request()->is('utilisateurs') ? 'active' : '' }}" href="{{ url('utilisateurs') }}">Utilisateurs</a>
</nav>

<div class="container">
    <h2 class="text-center title-gray">SERVICES:</h2> <!-- Ajout de la classe title-gray -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center;">
    <div class="card">
    <img src="{{ asset('images/cc.png') }}" alt="Service 1" style="width: 65%; height: auto;">
    <h3>PLCC</h3>
    <p>Description du Service 1.</p>
    <a href="{{ route('service1') }}">Accéder</a>
</div>
        <div class="card">
            <img src="{{ asset('images/bb.png') }}" alt="Service 2">
            <h3>E-COMPLAINT</h3>
            <p>Description du Service 2.</p>
            <a href="{{ route('service2') }}">Accéder</a>
        </div>
        <div class="card">
            <img src="{{ asset('images/c.png') }}" alt="Service 3">
            <h3>CCO</h3>
            <p>Description du Service 3.</p>
            <a href="{{ route('service3') }}">Accéder</a>
        </div>
        <div class="card">
            <img src="{{ asset('images/dd.png') }}" alt="Service 4">
            <h3>DCTT</h3>
            <p>Description du Service 4.</p>
            <a href="{{ route('service4') }}">Accéder</a>
        </div>
    </div>
</div>

<footer style="background-color: transparent; border: none; padding: 20px;">
    <div style="text-align: center;">
        <img src="{{ asset('images/dittt.png') }}" width="50" height="50" alt="DITT Logo">
    </div>
    <p style="color: grey;">&copy; DITT 2019</p>
    <p style="color: grey;">{{ date('d/m/Y') }}</p>
</footer>

</body>
</html>
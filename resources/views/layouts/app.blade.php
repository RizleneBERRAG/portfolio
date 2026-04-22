@php($profile = config('profile'))
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $profile['name'].' — Portfolio')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script defer src="{{ asset('assets/js/app.js') }}"></script>
</head>
<body class="site">
<header class="header">
    <div class="container header-inner">
        <a href="{{ route('home') }}" class="brand">
            {{ $profile['name'] }}<span>.</span>
        </a>

        <nav class="nav">
            <a href="{{ route('projects.index') }}">Projets</a>
            <a href="{{ route('cv') }}">CV</a>
            <a href="{{ route('motivation') }}">Motivation</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <div class="head-actions">
            <a class="btn" href="{{ route('download.cv') }}">CV PDF</a>
            <a class="cta" href="{{ route('contact') }}">Me contacter</a>
        </div>
    </div>
</header>

<main class="main site-main">
    <div class="container page-wrap">
        @yield('content')
    </div>
</main>

<footer class="footer">
    <div class="container footer-inner">
        <p>© {{ date('Y') }} — {{ $profile['name'] }} • Laravel / Blade</p>

        <div class="footer-links">
            <a href="{{ $profile['links']['linkedin'] }}" target="_blank" rel="noopener">LinkedIn</a>
            <a href="{{ $profile['links']['github'] }}" target="_blank" rel="noopener">GitHub</a>
            <a href="mailto:{{ $profile['email'] }}">Email</a>
        </div>
    </div>
</footer>
</body>
</html>

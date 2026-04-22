@php($profile = config('profile'))
    <!DOCTYPE html>
<html lang="en">
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
        <a href="{{ route('home.en') }}" class="brand">
            {{ $profile['name'] }}<span>.</span>
        </a>

        <nav class="nav">
            <a href="{{ route('projects.en.index') }}">Projects</a>
            <a href="{{ route('cv.en') }}">Resume</a>
            <a href="{{ route('motivation.en') }}">Cover Letter</a>
            <a href="{{ route('contact.en') }}">Contact</a>
        </nav>

        <div class="head-actions">
            <a class="btn" href="{{ route('download.cv') }}">Resume PDF</a>
            <a class="cta" href="{{ route('contact.en') }}">Contact me</a>
        </div>

        <div class="lang-switch">
            <a href="@yield('lang_fr', route('home'))" class="lang-btn">FR</a>
            <a href="@yield('lang_en', route('home.en'))" class="lang-btn active">EN</a>
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

@php($profile = config('profile'))
@extends('layouts.app-en')
@section('title', 'Home')
@section('lang_fr', route('home'))
@section('lang_en', route('home.en'))

@section('content')
    <section class="card hero">
        <div class="hero-grid">
            <div>
                <div class="kicker">{{ $profile['role'] }} • {{ $profile['city'] }}</div>

                <h1 class="h1">
                    I build <span class="accent">robust</span> and <span class="accent">maintainable</span> web products.
                </h1>

                <p class="p">
                    A portfolio designed like a professional showcase: real projects, working methods,
                    and a strong focus on quality, structure, and delivery.
                </p>

                <div class="actions">
                    <a class="btn primary" href="{{ route('projects.index') }}">View my projects</a>
                    <a class="btn" href="{{ route('cv') }}">Read my resume</a>
                    <a class="btn" href="{{ route('motivation') }}">Read my cover letter</a>
                </div>

                <div class="tags">
                    @foreach (['Laravel','Blade','MySQL','Docker','API','Security','CI/CD'] as $tag)
                        <span class="tag">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            <aside class="panel">
                <h3>What I bring to a team</h3>
                <ul>
                    <li>✅ Structured code (MVC, services, validation)</li>
                    <li>✅ Quality mindset: performance, security, logs</li>
                    <li>✅ Business-oriented thinking: maintainability and scalability</li>
                    <li>✅ Ownership: I deliver useful features</li>
                </ul>

                <div class="metrics">
                    <div class="metric"><b>3+</b><span>Projects</span></div>
                    <div class="metric"><b>Laravel</b><span>Stack</span></div>
                    <div class="metric"><b>Pro</b><span>Method</span></div>
                </div>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="section-head">
            <h2 class="h2">Approach & Method</h2>
            <p class="muted">A professional mindset: clarity, impact, quality, and strong communication.</p>
        </div>

        <div class="grid2">
            <div class="card pad">
                <h3 class="h3">I work with a delivery mindset</h3>
                <p class="p">
                    I start from the business need, structure the architecture, then deliver through short iterations.
                    I document key decisions and keep the code readable for the team.
                </p>

                <div class="tags">
                    @foreach (['MVC Architecture','Separation of concerns','Logs & Errors','SQL Optimization'] as $t)
                        <span class="tag">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

            <div class="card pad">
                <h3 class="h3">Typical workflow</h3>
                <ol class="steps">
                    <li><b>1.</b> Business need analysis</li>
                    <li><b>2.</b> Design (data, routes, components)</li>
                    <li><b>3.</b> Clean Laravel implementation</li>
                    <li><b>4.</b> Checks (security, performance, errors)</li>
                    <li><b>5.</b> Production / iterations</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section-head">
            <h2 class="h2">Quick access</h2>
            <p class="muted">A recruiter should be able to open everything in under 30 seconds.</p>
        </div>

        <div class="grid2">
            <a class="card pad quick" href="{{ route('download.cv') }}">
                <div class="quick-title">Download my resume (PDF)</div>
                <div class="muted">File: public/assets/cv.pdf</div>
            </a>

            <a class="card pad quick" href="{{ route('motivation') }}">
                <div class="quick-title">Read my cover letter</div>
                <div class="muted">Web version available directly on the site</div>
            </a>
        </div>
    </section>
@endsection

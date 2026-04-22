@extends('layouts.app-en')
@section('title', 'Projects')
@section('lang_fr', route('projects.index'))
@section('lang_en', route('projects.en.index'))

@section('content')
    <section class="section">

        <div class="section-head">
            <h1 class="h2">Projects</h1>
        </div>

        <div class="section-head" style="margin-top:10px;">
            <h2 class="h3">Case studies</h2>
            <p class="muted" style="margin-top:6px;">
                Selected projects explained with business logic and measurable impact.
            </p>
        </div>

        <div class="grid2">
            @foreach($projects as $p)
                <a class="card pad project-card" href="{{ route('projects.en.show', $p['slug']) }}">
                    <div class="project-top">
                        <div>
                            <div class="kicker">{{ $p['company']['en'] }}</div>
                            <h3 class="h3">{{ $p['title']['en'] }}</h3>
                        </div>
                        <span class="badge badge-strong">Case study</span>
                    </div>

                    <p class="p">{{ $p['summary']['en'] }}</p>

                    <div class="tags">
                        @foreach($p['stack'] as $s)
                            <span class="tag">{{ $s }}</span>
                        @endforeach
                    </div>

                    <div class="project-bottom">
                        <span class="muted"><b>Impact:</b> {{ $p['impact']['en'] }}</span>
                        <span class="arrow">→</span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="card pad callout" style="margin-top:28px;">
            <div class="callout-top">
                <div>
                    <h3 class="h3" style="margin-bottom:6px;">Ongoing projects & upcoming launches</h3>
                    <p class="p" style="margin-top:0;">
                        Product vision and roadmap: what I’m currently building and what’s coming next.
                    </p>
                </div>
                <span class="pill pill-live">IN PROGRESS</span>
            </div>

            <div class="grid2" style="margin-top:14px;">
                <div class="card pad inner">
                    <div class="row-between">
                        <b>WordPress showcase website — Infiny Environnement</b>
                        <span class="pill pill-soon">Coming soon</span>
                    </div>
                    <p class="p">
                        Finalizing content, responsive design, performance/SEO optimization, and production deployment.
                    </p>
                    <div class="tags">
                        <span class="tag">WordPress</span>
                        <span class="tag">SEO</span>
                        <span class="tag">Responsive</span>
                        <span class="tag">Deployment</span>
                    </div>
                </div>

                <div class="card pad inner">
                    <div class="row-between">
                        <b>Ticketing system + online payment</b>
                        <span class="pill pill-date">End of March</span>
                    </div>
                    <p class="p">
                        Attractive & colorful interface, conversion funnel, secure payment system and ticket management.
                    </p>
                    <div class="tags">
                        <span class="tag">UI/UX</span>
                        <span class="tag">Payment</span>
                        <span class="tag">Security</span>
                        <span class="tag">Conversion</span>
                    </div>
                </div>
            </div>

            <div class="card pad inner" style="margin-top:14px;">
                <div class="row-between">
                    <b>Technical projects (courses / R&D)</b>
                    <span class="pill pill-note">Skills</span>
                </div>
                <p class="p">
                    APIs, advanced SQL, CI/CD, Docker, business logic, code quality, and documentation.
                </p>
                <div class="tags">
                    <span class="tag">API</span>
                    <span class="tag">SQL</span>
                    <span class="tag">CI/CD</span>
                    <span class="tag">Docker</span>
                    <span class="tag">Architecture</span>
                    <span class="tag">Quality</span>
                </div>
            </div>
        </div>

    </section>
@endsection

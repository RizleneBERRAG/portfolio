@extends('layouts.app')
@section('title', 'Projets')

@section('content')
    <section class="section">

        <div class="section-head">
            <h1 class="h2">Projets</h1>

        </div>

        {{-- CASE STUDIES --}}
        <div class="section-head" style="margin-top:10px;">
            <h2 class="h3">Case studies</h2>
            <p class="muted" style="margin-top:6px;">
                Sélection de projets expliqués avec logique métier et impact mesurable.
            </p>
        </div>

        <div class="grid2">
            @foreach($projects as $p)
                <a class="card pad project-card" href="{{ route('projects.show', $p['slug']) }}">
                    <div class="project-top">
                        <div>
                            <div class="kicker">{{ $p['company'] }}</div>
                            <h3 class="h3">{{ $p['title'] }}</h3>
                        </div>
                        <span class="badge badge-strong">Case study</span>
                    </div>

                    <p class="p">{{ $p['summary'] }}</p>

                    <div class="tags">
                        @foreach($p['stack'] as $s)
                            <span class="tag">{{ $s }}</span>
                        @endforeach
                    </div>

                    <div class="project-bottom">
                        <span class="muted"><b>Impact :</b> {{ $p['impact'] }}</span>
                        <span class="arrow">→</span>
                    </div>
                </a>
            @endforeach
        </div>

        {{-- PROJETS EN COURS EN BAS --}}
        <div class="card pad callout" style="margin-top:28px;">
            <div class="callout-top">
                <div>
                    <h3 class="h3" style="margin-bottom:6px;">Projets en cours & lancements</h3>
                    <p class="p" style="margin-top:0;">
                        Vision produit et roadmap : ce que je livre actuellement et ce qui arrive bientôt.
                    </p>
                </div>
                <span class="pill pill-live">EN COURS</span>
            </div>

            <div class="grid2" style="margin-top:14px;">
                <div class="card pad inner">
                    <div class="row-between">
                        <b>Site vitrine WordPress — Infiny Environnement</b>
                        <span class="pill pill-soon">Bientôt en ligne</span>
                    </div>
                    <p class="p">
                        Finalisation contenu, responsive, optimisation performance/SEO et mise en production.
                    </p>
                    <div class="tags">
                        <span class="tag">WordPress</span>
                        <span class="tag">SEO</span>
                        <span class="tag">Responsive</span>
                        <span class="tag">Mise en prod</span>
                    </div>
                </div>

                <div class="card pad inner">
                    <div class="row-between">
                        <b>Billetterie + paiement en ligne</b>
                        <span class="pill pill-date">Fin mars</span>
                    </div>
                    <p class="p">
                        Interface attractive & colorée, tunnel de conversion, paiement sécurisé et gestion des tickets.
                    </p>
                    <div class="tags">
                        <span class="tag">UI/UX</span>
                        <span class="tag">Paiement</span>
                        <span class="tag">Sécurité</span>
                        <span class="tag">Conversion</span>
                    </div>
                </div>
            </div>

            <div class="card pad inner" style="margin-top:14px;">
                <div class="row-between">
                    <b>Projets techniques (cours / R&D)</b>
                    <span class="pill pill-note">Compétences</span>
                </div>
                <p class="p">
                    API, SQL avancé, CI/CD, Docker, logique métier, qualité de code, documentation.
                </p>
                <div class="tags">
                    <span class="tag">API</span>
                    <span class="tag">SQL</span>
                    <span class="tag">CI/CD</span>
                    <span class="tag">Docker</span>
                    <span class="tag">Architecture</span>
                    <span class="tag">Qualité</span>
                </div>
            </div>
        </div>

    </section>
@endsection

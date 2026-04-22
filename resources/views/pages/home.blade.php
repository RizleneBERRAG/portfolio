@php($profile = config('profile'))
@extends('layouts.app')
@section('title', 'Accueil')
@section('lang_fr', route('home'))
@section('lang_en', route('home.en'))

@section('content')
    <section class="card hero">
        <div class="hero-grid">
            <div>
                <div class="kicker">{{ $profile['role'] }} • {{ $profile['city'] }}</div>

                <h1 class="h1">
                    Je construis des produits web <span class="accent">robustes</span> et <span class="accent">maintenables</span>.
                </h1>

                <p class="p">
                    Portfolio conçu comme un dossier pro : projets concrets, méthode de travail, et résultats.
                    Objectif : intégrer une grande équipe IT et apporter de la valeur rapidement.
                </p>

                <div class="actions">
                    <a class="btn primary" href="{{ route('projects.index') }}">Voir mes projets</a>
                    <a class="btn" href="{{ route('cv') }}">Lire mon CV</a>
                    <a class="btn" href="{{ route('motivation') }}">Lire mes motivations</a>
                </div>

                <div class="tags">
                    @foreach (['Laravel','Python','MySQL','Docker','API','CI/CD','...'] as $tag)
                        <span class="tag">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            <aside class="panel">
                <h3>Ce que j’apporte à l’équipe</h3>
                <ul>
                    <li>Code structuré (MVC, services, validation)</li>
                    <li>Qualité : perf, sécurité, logs</li>
                    <li>Vision “entreprise” : maintenabilité & évolutivité</li>
                    <li>Autonomie : je livre des features utiles</li>
                </ul>

                <div class="metrics">
                    <div class="metric"><b>30+</b><span>Projets</span></div>
                    <div class="metric"><b>Laravel</b><span>Stack</span></div>
                    <div class="metric"><b>Pro</b><span>Méthode</span></div>
                </div>
            </aside>
        </div>
    </section>

    <br>
    <br>
    <br>

    <section class="section">
        <div class="section-head">
            <h2 class="h2">Approche & Méthode</h2>
            <p class="muted">Comme en entreprise : clarté, impact, qualité, et capacité à expliquer.</p>
        </div>

        <div class="grid2">
            <div class="card pad">
                <h3 class="h3">Je travaille avec une logique “delivery”</h3>
                <p class="p">
                    Je pars du besoin, je structure l’architecture, puis je délivre des itérations courtes.
                    Je documente les choix importants et je garde le code lisible pour l’équipe.
                </p>

                <div class="tags">
                    @foreach (['Architecture MVC','Séparation responsabilités','Logs & erreurs','Optimisation SQL'] as $t)
                        <span class="tag">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

            <div class="card pad">
                <h3 class="h3">Processus type</h3>
                <ol class="steps">
                    <li><b>1.</b> Analyse du besoin métier</li>
                    <li><b>2.</b> Conception (données, routes, composants)</li>
                    <li><b>3.</b> Implémentation Laravel propre</li>
                    <li><b>4.</b> Vérifications (sécurité, perf, erreurs)</li>
                    <li><b>5.</b> Mise en production / itérations</li>
                </ol>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>

    <section class="section">
        <div class="section-head">
            <h2 class="h2">Accès rapide</h2>
        </div>
        <br>
        <div class="grid2">
            <a class="card pad quick" href="{{ route('download.cv') }}">
                <div class="quick-title">Télécharger mon CV (PDF)</div>
                <div class="muted">Fichier : public/assets/cv.pdf</div>
            </a>
        </div>
    </section>
@endsection

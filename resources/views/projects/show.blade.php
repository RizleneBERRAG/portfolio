@extends('layouts.app')
@section('title', $project['title'])

@section('content')
    <section class="section">
        <a class="back" href="{{ route('projects.index') }}">← Retour aux projets</a>

        <div class="card pad">
            <div class="kicker">{{ $project['company'] }}</div>
            <h1 class="h2" style="margin-top:6px;">{{ $project['title'] }}</h1>
            <p class="p">{{ $project['summary'] }}</p>

            <div class="tags">
                @foreach($project['stack'] as $s)
                    <span class="tag">{{ $s }}</span>
                @endforeach
            </div>

            <div class="grid2" style="margin-top:18px;">
                <div class="card pad inner">
                    <h3 class="h3">Problème</h3>
                    <p class="p">{{ $project['problem'] }}</p>
                </div>
                <div class="card pad inner">
                    <h3 class="h3">Solution</h3>
                    <p class="p">{{ $project['solution'] }}</p>
                </div>
            </div>

            <div class="grid2" style="margin-top:18px;">
                <div class="card pad inner">
                    <h3 class="h3">Impact</h3>
                    <p class="p">{{ $project['impact'] }}</p>
                </div>
                <div class="card pad inner">
                    <h3 class="h3">Points clés</h3>
                    <ul class="list">
                        @foreach($project['highlights'] as $h)
                            <li>{{ $h }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div style="margin-top:18px;" class="actions">
                @if(!empty($project['links']['github']))
                    <a class="btn" href="{{ $project['links']['github'] }}" target="_blank" rel="noopener">GitHub</a>
                @endif
                @if(!empty($project['links']['demo']))
                    <a class="btn primary" href="{{ $project['links']['demo'] }}" target="_blank" rel="noopener">Démo</a>
                @endif
            </div>

            <div class="notice" style="margin-top:16px;">
                <b>Note :</b> Je travaille aussi sur plusieurs projets en parallèle (WordPress vitrine Infiny Environnement, billetterie/paiement, projets data/IA),
                ce qui me permet de renforcer des compétences comme API, SQL et Docker/Kubernetes.
            </div>
        </div>
    </section>
@endsection

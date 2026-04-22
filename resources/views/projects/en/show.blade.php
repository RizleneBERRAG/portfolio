@extends('layouts.app-en')
@section('title', $project['title']['en'])
@section('lang_fr', route('projects.show', $project['slug']))
@section('lang_en', route('projects.en.show', $project['slug']))

@section('content')
    <section class="section">
        <a class="back" href="{{ route('projects.en.index') }}">← Back to projects</a>

        <div class="card pad">
            <div class="kicker">{{ $project['company']['en'] }}</div>
            <h1 class="h2" style="margin-top:6px;">{{ $project['title']['en'] }}</h1>
            <p class="p">{{ $project['summary']['en'] }}</p>

            <div class="tags">
                @foreach($project['stack'] as $s)
                    <span class="tag">{{ $s }}</span>
                @endforeach
            </div>

            <div class="grid2" style="margin-top:18px;">
                <div class="card pad inner">
                    <h3 class="h3">Problem</h3>
                    <p class="p">{{ $project['problem']['en'] }}</p>
                </div>
                <div class="card pad inner">
                    <h3 class="h3">Solution</h3>
                    <p class="p">{{ $project['solution']['en'] }}</p>
                </div>
            </div>

            <div class="grid2" style="margin-top:18px;">
                <div class="card pad inner">
                    <h3 class="h3">Impact</h3>
                    <p class="p">{{ $project['impact']['en'] }}</p>
                </div>
                <div class="card pad inner">
                    <h3 class="h3">Key highlights</h3>
                    <ul class="list">
                        @foreach($project['highlights']['en'] as $h)
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
                    <a class="btn primary" href="{{ $project['links']['demo'] }}" target="_blank" rel="noopener">Demo</a>
                @endif
            </div>

            <div class="notice" style="margin-top:16px;">
                <b>Note:</b> I am also working on several projects in parallel
                (WordPress showcase website for Infiny Environnement, ticketing/payment project, data/AI-related work),
                which allows me to strengthen skills such as APIs, SQL, and Docker/Kubernetes.
            </div>
        </div>
    </section>
@endsection

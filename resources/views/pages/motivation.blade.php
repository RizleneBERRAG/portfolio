@extends('layouts.app')
@section('title', 'Lettre de motivation')
@section('lang_fr', route('motivation'))
@section('lang_en', route('motivation.en'))

@section('content')
    <section class="section">
        <div class="section-head">
            <h1 class="h2">Lettre de motivation</h1>
            <p class="muted">Recherche d’alternance – Développement informatique</p>
        </div>

        <div class="card pad">

            <h3 class="h3">Madame, Monsieur,</h3>

            <p class="p">
                Actuellement en formation en développement informatique, je suis à la recherche
                d’une alternance au sein d’une entreprise IT structurée et exigeante,
                afin de continuer à progresser dans un cadre professionnel stimulant.
            </p>

            <p class="p">
                Mon niveau technique évolue constamment, mais je suis lucide :
                je suis encore en phase d’apprentissage.
                C’est précisément pour cela que je souhaite intégrer une équipe investie,
                capable de me transmettre des méthodes solides et des standards professionnels.
            </p>

            <div class="card pad inner" style="margin-top:18px;">
                <h3 class="h3">Ce que je recherche en alternance</h3>
                <ul class="steps">
                    <li><b>Comprendre des architectures réelles</b></li>
                    <li><b>Travailler sur des projets concrets avec impact</b></li>
                    <li><b>Apprendre de nouvelles techniques et bonnes pratiques</b></li>
                    <li><b>Être challengée techniquement</b></li>
                    <li><b>Évoluer aux côtés d’une équipe expérimentée</b></li>
                </ul>
            </div>

            <div class="card pad inner" style="margin-top:18px;">
                <h3 class="h3">Ce que je peux déjà apporter</h3>
                <ul class="list">
                    <li>Une base solide en Laravel, SQL et structuration MVC</li>
                    <li>Une rigueur dans l’organisation du code</li>
                    <li>Une autonomie réelle dans la réalisation de fonctionnalités</li>
                    <li>Une forte capacité d’apprentissage</li>
                    <li>Une implication constante dans mes projets</li>
                </ul>
            </div>

            <p class="p" style="margin-top:18px;">
                J’aime comprendre en profondeur ce que je développe.
                Je m’intéresse à la qualité du code, à la performance,
                et à la cohérence des données.
            </p>

            <p class="p">
                Intégrer votre entreprise en alternance représenterait pour moi
                une étape déterminante dans mon évolution professionnelle :
                apprendre auprès de développeurs expérimentés,
                participer à des projets ambitieux,
                et contribuer activement à la réussite de l’équipe.
            </p>

            <p class="p" style="margin-top:18px;">
                Je serais ravie de pouvoir échanger avec vous afin de vous exposer plus en détail
                ma motivation et mon projet professionnel.
            </p>

            <p class="p" style="margin-top:18px;">
                Je vous prie d’agréer, Madame, Monsieur, l’expression de mes salutations distinguées.
            </p>

            <p class="p" style="margin-top:12px;">
                <b>Rizlene Berrag</b>
            </p>

        </div>
    </section>
@endsection

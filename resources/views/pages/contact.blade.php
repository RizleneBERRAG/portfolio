@php($profile = config('profile'))
@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <section class="section">
        <div class="section-head">
            <h1 class="h2">Contact</h1>
        </div>

        <div class="grid2">
            <div class="card pad">
                <h3 class="h3">Coordonnées</h3>
                <ul class="list">
                    <li><b>Email :</b> <a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a></li>
                    <li><b>LinkedIn :</b> <a href="{{ $profile['links']['linkedin'] }}" target="_blank" rel="noopener">https://www.linkedin.com/in/rizlene-berrag/</a></li>
                    <li><b>GitHub :</b> <a href="{{ $profile['links']['github'] }}" target="_blank" rel="noopener">https://github.com/RizleneBERRAG</a></li>
                </ul>

                <div class="actions" style="margin-top:14px;">
                    <a class="btn" href="{{ route('download.cv') }}">Télécharger le CV</a>
                </div>
            </div>

            <div class="card pad">
                <h3 class="h3">Envoyer un message</h3>

                <form class="form" action="#" method="post" onsubmit="return fakeSubmit(event)">
                    <label>
                        <span>Nom</span>
                        <input type="text" name="name" placeholder="Votre nom" required>
                    </label>

                    <label>
                        <span>Email</span>
                        <input type="email" name="email" placeholder="email@domaine.com" required>
                    </label>

                    <label>
                        <span>Message</span>
                        <textarea name="message" rows="5" placeholder="Bonjour, ..." required></textarea>
                    </label>

                    <button class="btn primary" type="submit">Envoyer</button>
                    <p id="formStatus" class="muted" style="margin:10px 0 0;"></p>
                </form>
            </div>
        </div>
    </section>
@endsection

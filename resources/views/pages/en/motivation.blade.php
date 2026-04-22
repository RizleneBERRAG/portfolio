@extends('layouts.app-en')
@section('title', 'Cover Letter')
@section('lang_fr', route('motivation'))
@section('lang_en', route('motivation.en'))

@section('content')
    <section class="section">
        <div class="section-head">
            <h1 class="h2">Cover Letter</h1>
            <p class="muted">Looking for a work-study position — Software Development</p>
        </div>

        <div class="card pad">

            <h3 class="h3">Dear Sir or Madam,</h3>

            <p class="p">
                I am currently studying software development and I am looking for a work-study opportunity
                within a structured and demanding IT company, in order to keep progressing
                in a stimulating professional environment.
            </p>

            <p class="p">
                My technical level is improving every day, but I am realistic:
                I am still in a learning phase.
                This is exactly why I want to join a committed team,
                one that can pass on strong methods and professional standards.
            </p>

            <div class="card pad inner" style="margin-top:18px;">
                <h3 class="h3">What I am looking for in a work-study position</h3>
                <ul class="steps">
                    <li><b>Understanding real-world architectures</b></li>
                    <li><b>Working on concrete projects with impact</b></li>
                    <li><b>Learning new techniques and best practices</b></li>
                    <li><b>Being challenged technically</b></li>
                    <li><b>Growing alongside an experienced team</b></li>
                </ul>
            </div>

            <div class="card pad inner" style="margin-top:18px;">
                <h3 class="h3">What I can already bring</h3>
                <ul class="list">
                    <li>A solid foundation in Laravel, SQL, and MVC structuring</li>
                    <li>Strong rigor in code organization</li>
                    <li>Real autonomy in building features</li>
                    <li>A strong ability to learn quickly</li>
                    <li>Consistent involvement in my projects</li>
                </ul>
            </div>

            <p class="p" style="margin-top:18px;">
                I like understanding deeply what I build.
                I care about code quality, performance,
                and data consistency.
            </p>

            <p class="p">
                Joining your company through a work-study position would represent
                a decisive step in my professional growth:
                learning from experienced developers,
                contributing to ambitious projects,
                and actively supporting the success of the team.
            </p>

            <p class="p" style="margin-top:18px;">
                I would be delighted to speak with you and explain in more detail
                both my motivation and my professional goals.
            </p>

            <p class="p" style="margin-top:18px;">
                Yours faithfully,
            </p>

            <p class="p" style="margin-top:12px;">
                <b>Rizlene Berrag</b>
            </p>

        </div>
    </section>
@endsection

@extends('layouts.app')
@section('title', 'CV')

@section('content')
    <section class="section">
        <div class="section-head">
            <h1 class="h2">CV</h1>
            <p class="muted">En version web + Dispo au format PDF.</p>
        </div>

        {{-- HERO --}}
        <div class="card pad hero">
            <div class="hero-grid">
                <div>
                    <div class="kicker">Développeuse informatique • Full Stack orientée Laravel</div>
                    <h2 class="h1" style="font-size:36px; margin-top:10px;">
                        Rizlene <span class="accent">Berrag</span>
                    </h2>

                    <p class="p">
                        Je construis des applications web fiables et maintenables avec une logique entreprise :
                        <b>qualité</b>, <b>sécurité</b>, <b>performance</b> et <b>résultats</b>.
                    </p>

                    <div class="actions">
                        <a class="btn primary" href="{{ asset('assets/cv.pdf') }}" target="_blank" rel="noopener">
                            Télécharger le CV (PDF)
                        </a>
                        <a class="btn" href="{{ route('contact') }}">Me contacter</a>
                    </div>

                    <div class="tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Blade</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">HTML/CSS/JS</span>
                        <span class="tag">Agile</span>
                        <span class="tag">Autonomie</span>
                    </div>
                </div>

                <div class="panel">
                    <h3 class="h3">Coordonnées</h3>
                    <ul class="steps" style="margin-top:12px;">
                        <li><b>📍</b> 69780 Mions • 69500 Bron</li>
                        <li>
                            <b>✉️</b>
                            <a class="contact-value" href="mailto:BERRAGrizlene1977@gmail.com">BERRAGrizlene1977@gmail.com</a>
                        </li>
                        <li>
                            <b>📞</b>
                            <a class="contact-value" href="tel:+33650080442">06 50 08 04 42</a>
                        </li>
                        <li>
                            <b>GitHub</b>
                            <a class="contact-value" href="https://github.com/RizleneBERRAG" target="_blank" rel="noopener">
                                github.com/RizleneBERRAG
                            </a>
                        </li>
                        <li>
                            <b>LinkedIn</b>
                            <a class="contact-value" href="https://www.linkedin.com/in/rizlene-berrag/" target="_blank" rel="noopener">
                                linkedin.com/in/rizlene-berrag
                            </a>
                        </li>
                    </ul>

                    <div class="notice" style="margin-top:12px;">
                        <b>Permis B</b> • Véhiculée
                    </div>
                </div>
            </div>
        </div>

        {{-- GRID: Compétences / Points forts --}}
        <div class="grid2 section" style="margin-top:18px;">
            <div class="card pad">
                <h3 class="h3">Compétences</h3>
                <p class="p">Stack et outils que j’utilise au quotidien.</p>

                <div class="tags">
                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">PHP</span>
                    <span class="tag">Laravel</span>
                    <span class="tag">SQL</span>
                    <span class="tag">MySQL</span>
                    <span class="tag">Git</span>
                    <span class="tag">Docker</span>
                </div>

                <ul class="list" style="margin-top:14px;">
                    <li><b>Méthodes :</b> Agile, autonomie & travail en équipe.</li>
                    <li><b>Outils :</b> Word, Excel, PowerPoint, Photoshop.</li>
                    <li><b>Virtualisation :</b> VMWare, ISPConfig.</li>
                </ul>
            </div>

            <div class="card pad">
                <h3 class="h3">Points forts (recruteur IT)</h3>
                <ul class="steps">
                    <li><b>1.</b> Code structuré (MVC, séparation des responsabilités)</li>
                    <li><b>2.</b> Qualité : lisibilité, validation, logs/erreurs</li>
                    <li><b>3.</b> Données : SQL/MySQL, cohérence, performance</li>
                    <li><b>4.</b> Déploiement : environnements, organisation, prod</li>
                    <li><b>5.</b> Communication : capacité à expliquer clairement</li>
                </ul>

                <div class="notice" style="margin-top:12px;">
                    <b>Astuce :</b> Ce qui démarque en grande entreprise IT :
                    structurer et expliquer clairement ses décisions techniques.
                </div>
            </div>
        </div>


        {{-- TECH HIGHLIGHTS --}}
        <div class="section">
            <div class="section-head">
                <h2 class="h2" style="font-size:26px;">Tech Highlights</h2>
                <p class="muted">Ce que je fais concrètement en entreprise :</p>
            </div>

            <div class="grid3">
                <div class="card pad highlight">
                    <div class="highlight-top">
                        <span class="pill pill-live">Architecture</span>
                        <span class="badge badge-strong">MVC</span>
                    </div>
                    <h3 class="h3" style="margin-top:10px;">Structure propre & scalable</h3>
                    <p class="p">
                        Séparation des responsabilités, conventions claires, composants réutilisables,
                        code lisible pour l’équipe.
                    </p>
                    <ul class="list">
                        <li>Controllers minces, logique dans services</li>
                        <li>Validation + messages d’erreurs propres</li>
                        <li>Composants Blade réutilisables</li>
                    </ul>
                </div>

                <div class="card pad highlight">
                    <div class="highlight-top">
                        <span class="pill pill-note">Data</span>
                        <span class="badge badge-strong">SQL</span>
                    </div>
                    <h3 class="h3" style="margin-top:10px;">Données fiables & cohérentes</h3>
                    <p class="p">
                        Modélisation simple, requêtes propres, logique métier claire et contrôles de cohérence.
                    </p>
                    <ul class="list">
                        <li>MySQL, relations, contraintes</li>
                        <li>Optimisation requêtes (index / tri)</li>
                        <li>Structuration “métier” avant UI</li>
                    </ul>
                </div>

                <div class="card pad highlight">
                    <div class="highlight-top">
                        <span class="pill pill-date">Delivery</span>
                        <span class="badge badge-strong">CI/CD</span>
                    </div>
                    <h3 class="h3" style="margin-top:10px;">Livraison & qualité</h3>
                    <p class="p">
                        Environnements maîtrisés, qualité de code, et itérations rapides orientées résultats.
                    </p>
                    <ul class="list">
                        <li>Git propre (branches / commits)</li>
                        <li>Docker / environnements</li>
                        <li>Logs, gestion d’erreurs, tests manuels</li>
                    </ul>
                </div>
            </div>

            <div class="card pad inner" style="margin-top:14px;">
                <div class="row-between">
                    <b>Ce que ça apporte à une équipe</b>
                    <span class="pill pill-live">Impact</span>
                </div>
                <p class="p" style="margin-top:10px;">
                    Moins de bugs, meilleure lisibilité, onboarding plus rapide et évolutions plus simples.
                    Je documente les choix techniques et je garde une logique “produit”.
                </p>
            </div>
        </div>

        {{-- EXPÉRIENCES --}}
        <div class="section">
            <div class="section-head">
                <h2 class="h2" style="font-size:26px;">Expériences</h2>
                <p class="muted">Missions et responsabilités (orienté résultat).</p>
            </div>

            <div class="card pad inner">
                <div class="roadmap">

                    <div class="roadmap-item">
                        <div class="card pad inner">
                            <div class="row-between">
                                <b>Alternance — Infiny Environnement</b>
                                <span class="pill pill-live">2024–2026</span>
                            </div>
                            <p class="p">
                                Développement web (front/back), projets concrets, intégration, base de données,
                                frameworks modernes, logique produit.
                            </p>
                        </div>
                    </div>

                    <div class="roadmap-item">
                        <div class="card pad inner">
                            <div class="row-between">
                                <b>Création & gestion site club de boxe — Local.fr</b>
                                <span class="pill pill-note">Depuis 07/2023</span>
                            </div>
                            <ul class="list">
                                <li>Mise à jour régulière du contenu</li>
                                <li>Paramètres SEO</li>
                                <li>Suivi statistiques & ajustements</li>
                            </ul>
                        </div>
                    </div>

                    <div class="roadmap-item">
                        <div class="card pad inner">
                            <div class="row-between">
                                <b>Développeuse — Meroje & Co</b>
                                <span class="pill pill-note">2023 & 2024</span>
                            </div>
                            <ul class="list">
                                <li>Page de réservation WordPress + formulaire intuitif</li>
                                <li>Optimisation performances (GTmetrix, Analyzer)</li>
                                <li>Développement HTML / PHP / JS / CSS / Laravel</li>
                            </ul>
                        </div>
                    </div>

                    <div class="roadmap-item">
                        <div class="card pad inner">
                            <div class="row-between">
                                <b>Employée de rayon — Leclerc Culturel (Chaponnay)</b>
                                <span class="pill pill-note">06–08/2023</span>
                            </div>
                            <p class="p">Rigueur, sens du service, organisation.</p>
                        </div>
                    </div>

                    <div class="roadmap-item">
                        <div class="card pad inner">
                            <div class="row-between">
                                <b>Poste en boulangerie — Mions</b>
                                <span class="pill pill-note">Depuis 06/2024</span>
                            </div>
                            <p class="p">Discipline, rapidité d’exécution, sens des priorités.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- FORMATIONS + SOFT SKILLS --}}
        <div class="grid2 section">
            <div class="card pad">
                <h3 class="h3">Formations</h3>
                <ul class="list">
                    <li><b>Master Dev / IA / Data — IPSSI</b> (2025–2026)</li>
                    <li><b>Bachelor 3 Dev — Doranco</b> (2024–2025)</li>
                    <li><b>BTS SIO SLAM — La Martinière Duchère</b> (2023–2024)</li>
                    <li><b>BTS SIO — La Martinière Duchère</b> (2022–2023)</li>
                    <li><b>Bac STMG — Lycée Condorcet</b> (2021–2022)</li>
                </ul>
            </div>

            <div class="card pad">
                <h3 class="h3">Soft skills</h3>
                <ul class="steps">
                    <li><b>Capacité d’apprentissage rapide</b></li>
                    <li><b>Autonomie</b></li>
                    <li><b>Créativité</b> : solutions innovantes aux problèmes techniques</li>
                    <li><b>Esprit d’équipe</b></li>
                    <li><b>Sensibilité aux besoins utilisateurs</b></li>
                </ul>
            </div>
        </div>

        {{-- LANGUES + INTÉRÊTS --}}
        <div class="grid2 section">
            <div class="card pad">
                <h3 class="h3">Langues</h3>
                <ul class="list">
                    <li>Anglais</li>
                    <li>Espagnol</li>
                </ul>
            </div>

            <div class="card pad">
                <h3 class="h3">Centres d’intérêt</h3>
                <ul class="list">
                    <li><b>Boxe anglaise (compétition)</b> : excellente condition physique</li>
                    <li><b>Culture japonaise</b> : mangas, animés, manhwa</li>
                    <li><b>Technologie & informatique</b> : curiosité active</li>
                    <li><b>Jeux de stratégie</b> (échecs) : implication passionnée</li>
                </ul>
            </div>
        </div>

        {{-- CTA bas --}}
        <div class="card pad inner" style="margin-top:18px;">
            <div class="row-between">
                <div>
                    <h3 class="h3">Accès rapide</h3>
                    <p class="p">CV PDF, lettre, et contact : tout est accessible immédiatement.</p>
                </div>
                <div class="actions" style="margin-top:0;">
                    <a class="btn" href="{{ asset('assets/cv.pdf') }}" target="_blank" rel="noopener">CV PDF</a>
                    <a class="btn primary" href="{{ route('motivation') }}">Mes motivations</a>
                    <a class="btn primary" href="{{ route('contact') }}">Me contacter</a>
                </div>
            </div>
        </div>

    </section>
@endsection

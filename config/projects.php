<?php

return [
    [
        'slug' => 'outil-conformite',
        'title' => 'Outil de conformité – extraction & vérification',
        'company' => 'Projet pro / automatisation',
        'stack' => ['Laravel', 'PHP', 'PDF', 'Rules Engine', 'JSON'],
        'summary' => "Vérifie automatiquement la conformité de dossiers (comparaisons inter-documents, règles, preuves).",
        'impact' => 'Gain de temps + réduction des erreurs sur contrôle manuel.',
        'problem' => "Le contrôle manuel est long et sujet aux oublis (dates, cohérences entre documents, pièces manquantes).",
        'solution' => "Moteur de règles + preuves, comparaison inter-documents, sortie JSON exploitable.",
        'highlights' => [
            'Règles de conformité + preuves (OK/KO)',
            'Comparaison inter-documents (dates, champs, cohérence)',
            'Sortie JSON structurée pour audit',
        ],
        'links' => [
            'github' => null,
            'demo' => null,
        ],
    ],

    [
        'slug' => 'paillote',
        'title' => 'La Paillote Fidésienne – vitrine + e-commerce',
        'company' => 'Projet perso / client',
        'stack' => ['Laravel', 'Blade', 'MySQL'],
        'summary' => "Site vitrine + boutique, galerie, newsletter, pages SEO.",
        'impact' => "Image premium + parcours utilisateur plus clair sur mobile.",
        'problem' => "Besoin d’une vitrine moderne + ajout d’une partie boutique et contenus structurés.",
        'solution' => "Architecture MVC propre, pages rapides, composants Blade réutilisables.",
        'highlights' => [
            'Composants Blade réutilisables',
            'Structure SEO-friendly',
            'UI responsive',
        ],
        'links' => [
            'github' => null,
            'demo' => null,
        ],
    ],

    [
        'slug' => 'team-bafounta',
        'title' => 'Team Bafounta – plateforme club sportif',
        'company' => 'Projet associatif',
        'stack' => ['Laravel', 'Blade', 'MySQL'],
        'summary' => "Vitrine + base fonctionnelle pour inscriptions, contenus et événements.",
        'impact' => 'Meilleure visibilité + communication simplifiée.',
        'problem' => "Centraliser infos, contenus, et simplifier l’accès aux inscriptions/événements.",
        'solution' => "Pages structurées + UI moderne + composants réutilisables.",
        'highlights' => [
            'Responsive first',
            'Pages claires orientées conversion',
            'Base évolutive',
        ],
        'links' => [
            'github' => null,
            'demo' => null,
        ],
    ],

    [
        'slug' => 'portfolio-cv-laravel',
        'company' => 'Projet personnel',
        'title' => 'Portfolio CV (Laravel + Blade)',
        'summary' => "Site CV pensé recruteur : navigation rapide, pages claires (CV, motivation, projets, contact) et design premium.",
        'stack' => ['Laravel', 'Blade', 'CSS', 'Architecture MVC'],
        'impact' => "Présentation pro + accès rapide au CV/lettre + base propre pour itérer.",
        'problem' => "Me démarquer auprès d’une grande entreprise IT avec un support plus impactant qu’un PDF.",
        'solution' => "Design dark premium, sections structurées, pages dédiées, CTA, et contenu orienté 'case study'.",
        'highlights' => [
            "Structure MVC lisible",
            "Composants Blade réutilisables",
            "Design cohérent multi-pages",
            "Accès rapide aux ressources (CV/lettre)"
        ],
        'links' => [
            'github' => 'https://github.com/RizleneBERRAG',
            'demo' => null,
        ],
    ],

    [
        'slug' => 'snake-game',
        'company' => 'Projet personnel / cours',
        'title' => 'Jeu Snake (Web)',
        'summary' => "Un Snake fluide avec score, gestion des collisions, difficulté progressive et gameplay propre.",
        'stack' => ['JavaScript', 'HTML', 'CSS', 'Game loop'],
        'impact' => "Montre la maîtrise logique, l’UI, et la gestion d’état côté front.",
        'problem' => "Créer un mini-jeu stable et réactif (clavier, collisions, scoring) sans framework lourd.",
        'solution' => "Boucle de jeu maîtrisée, contrôles propres, règles claires, affichage score/état.",
        'highlights' => [
            "Gestion d’état (snake, direction, food)",
            "Collisions + règles de fin",
            "Score + progression",
            "Code lisible et itératif"
        ],
        'links' => [
            'github' => 'https://github.com/RizleneBERRAG',
            'demo' => null,
        ],
    ],

    [
        'slug' => 'fitness-app',
        'company' => 'Projet personnel / cours',
        'title' => 'Application Fitness (suivi entraînements)',
        'summary' => "App de suivi : séances, exercices, progression, organisation et affichage clair des données.",
        'stack' => ['Laravel', 'SQL/MySQL', 'UI', 'CRUD'],
        'impact' => "Montre du back solide + structuration des données + logique métier.",
        'problem' => "Centraliser le suivi sportif (séances/exos/volume/progression) de manière simple et rapide.",
        'solution' => "Modèle de données clair, CRUD, pages lisibles et évolutives.",
        'highlights' => [
            "Conception des entités (séances, exercices, stats)",
            "CRUD complet",
            "Validation & logique métier",
            "Base prête pour analytics"
        ],
        'links' => [
            'github' => 'https://github.com/RizleneBERRAG',
            'demo' => null,
        ],
    ],
];

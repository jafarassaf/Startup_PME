<?php

namespace Database\Seeders;

use App\Models\Regulation;
use Illuminate\Database\Seeder;

class RegulationSeeder extends Seeder
{
    public function run()
    {
        $regulations = [
            [
                'title' => 'RGPD (GDPR)',
                'description' => 'Le Règlement Général sur la Protection des Données est la législation européenne fondamentale en matière de protection des données personnelles.',
                'requirements' => [
                    'Consentement explicite des utilisateurs',
                    'Droit à l\'accès et à la portabilité des données',
                    'Notification des violations de données',
                    'Désignation d\'un DPO si nécessaire'
                ],
                'implementation_steps' => [
                    'Audit des données personnelles traitées',
                    'Mise en place des processus de consentement',
                    'Documentation des traitements',
                    'Formation des équipes'
                ],
                'official_document_url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32016R0679',
                'is_active' => true,
                'order' => 1
            ],
            [
                'title' => 'LPM (Loi de Programmation Militaire)',
                'description' => 'La Loi de Programmation Militaire définit les obligations de sécurité pour les Opérateurs d\'Importance Vitale (OIV).',
                'requirements' => [
                    'Déclaration des incidents de sécurité',
                    'Mise en place de systèmes de détection',
                    'Audits réguliers',
                    'Plan de continuité d\'activité'
                ],
                'implementation_steps' => [
                    'Identification des systèmes critiques',
                    'Déploiement des solutions de détection',
                    'Élaboration des procédures d\'incident',
                    'Tests et exercices réguliers'
                ],
                'official_document_url' => 'https://www.legifrance.gouv.fr/loda/id/JORFTEXT000028338825/',
                'is_active' => true,
                'order' => 2
            ],
            [
                'title' => 'NIS 2',
                'description' => 'La directive NIS 2 renforce les mesures de cybersécurité dans l\'Union européenne pour les entités essentielles et importantes.',
                'requirements' => [
                    'Gestion des risques cybersécurité',
                    'Signalement des incidents',
                    'Continuité des services',
                    'Sécurité de la chaîne d\'approvisionnement'
                ],
                'implementation_steps' => [
                    'Évaluation du périmètre d\'application',
                    'Analyse des risques',
                    'Mise en conformité technique',
                    'Mise en place du reporting'
                ],
                'official_document_url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32022L2555',
                'is_active' => true,
                'order' => 3
            ]
        ];

        foreach ($regulations as $regulation) {
            Regulation::create($regulation);
        }
    }
} 
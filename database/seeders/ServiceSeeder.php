<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'title' => 'Audit de Sécurité',
                'description' => 'Évaluation complète de votre infrastructure informatique pour identifier les vulnérabilités potentielles.',
                'icon' => 'fas fa-shield-alt',
                'features' => [
                    'Analyse des systèmes et réseaux',
                    'Tests de pénétration',
                    'Évaluation des risques',
                    'Rapport détaillé et recommandations'
                ],
                'price' => 1500.00,
                'is_active' => true,
                'order' => 1
            ],
            [
                'title' => 'Protection des Données',
                'description' => 'Solutions de protection et de chiffrement pour sécuriser vos données sensibles.',
                'icon' => 'fas fa-lock',
                'features' => [
                    'Chiffrement des données',
                    'Gestion des sauvegardes',
                    'Contrôle d\'accès',
                    'Formation des employés'
                ],
                'price' => 2000.00,
                'is_active' => true,
                'order' => 2
            ],
            [
                'title' => 'Surveillance Continue',
                'description' => 'Monitoring 24/7 de votre infrastructure pour détecter et répondre aux menaces en temps réel.',
                'icon' => 'fas fa-eye',
                'features' => [
                    'Surveillance en temps réel',
                    'Détection des intrusions',
                    'Alertes automatiques',
                    'Intervention rapide'
                ],
                'price' => 2500.00,
                'is_active' => true,
                'order' => 3
            ],
            [
                'title' => 'Formation Cybersécurité',
                'description' => 'Programmes de formation pour sensibiliser vos employés aux bonnes pratiques de sécurité.',
                'icon' => 'fas fa-graduation-cap',
                'features' => [
                    'Ateliers pratiques',
                    'Simulations d\'attaques',
                    'Documentation personnalisée',
                    'Suivi des progrès'
                ],
                'price' => 1000.00,
                'is_active' => true,
                'order' => 4
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
} 
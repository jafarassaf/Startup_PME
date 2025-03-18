<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run()
    {
        $team = [
            [
                'name' => 'Mohamed Anseur',
                'position' => 'Directeur Général',
                'bio' => 'Expert en cybersécurité avec plus de 15 ans d\'expérience dans la protection des infrastructures critiques.',
                'photo' => 'images/team/mohammed-anseur.jpg',
                'linkedin_url' => 'https://www.linkedin.com/in/mohamed-anseur-1ab1b8355/',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => 'Adame Amraoui',
                'position' => 'Responsable Technique',
                'bio' => 'Spécialiste en sécurité des réseaux et en réponse aux incidents, certifié CISSP et CEH.',
                'photo' => 'images/team/adame-amraoui.jpg',
                'linkedin_url' => 'https://www.linkedin.com/in/adam-seddik-amraoui/',
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => 'Jafar Assaf',
                'position' => 'Expert en Protection des Données',
                'bio' => 'Consultant en conformité RGPD et spécialiste de la protection des données personnelles.',
                'photo' => 'images/team/jafar-assaf.png',
                'linkedin_url' => 'https://www.linkedin.com/in/jafar-dylan-assaf-918b282b5/',
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => 'Mohammed Kada',
                'position' => 'Analyste en Sécurité',
                'bio' => 'Expert en analyse des menaces et en tests de pénétration, passionné par la sécurité offensive.',
                'photo' => 'images/team/mohammed-kada.jpg',
                'linkedin_url' => 'https://www.linkedin.com/in/mohamed-kada-0474b42a9/',
                'is_active' => true,
                'order' => 4
            ]
        ];

        foreach ($team as $member) {
            Team::updateOrCreate(
                ['name' => $member['name']],
                $member
            );
        }
    }
} 
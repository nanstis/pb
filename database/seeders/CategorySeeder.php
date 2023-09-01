<?php

namespace Database\Seeders;

use Closure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    private int $index = 1;

    public function run(): void
    {
        self::createCategory('Reception Venue', 'Lieu de réception', fn() => [
            'en' => [
                'Authentic',
                'Estate & Wine Cellar',
                'Original Venue',
                'Tent Rental',
                'Prestigious',
                'Lake View',
                'Trend'
            ],
            'fr' => [
                'Authentique',
                'Domaine et caveau',
                'Lieu original',
                'Location de tente',
                'Prestigieux',
                'Vue lac',
                'Tendance'
            ]
        ]);

        self::createCategory('Business Event', 'Evènement professionnel', fn() => [
            'en' => [
                'Training, Meeting, Seminar “Small”',
                'Seminar "Medium"',
                'Conference & Assembly',
                'Seminar with accommodation',
                'Team Building',
                'Company Outing',
                'Incentive',
            ],
            'fr' => [
                'Formation, réunion, séminaire «Petit»',
                'Séminaire “Medium”',
                'Conférence et Assemblée',
                'Séminaire avec hébergement',
                'Team Building',
                'Sortie d\'entreprise',
                'Motivation'
            ]
        ]);

        self::createCategory('Caterer', 'Traiteur', fn() => [
            'en' => [
                'Local Artisan',
                'Vogue',
                'World Cuisine',
                'Personal Chef',
                'Catering, LunchBox'
            ],
            'fr' => [
                'Artisan local',
                'En Vogue',
                'Cuisine du monde',
                'Chef à domicile',
                'Traiteur, LunchBox',
                'Service de livraison'
            ]
        ]);

        self::createCategory('Wine lovers', 'Amoureux du vin', fn() => [
            'en' => [
                'Wine Tasting',
                'Activities',
                'Shop & Wine Bar',
                'Guide'
            ],
            'fr' => [
                'Dégustation de vins',
                'Activités',
                'Boutique et Bar à vin',
                'Guide',
            ]
        ]);


        self::createCategory('Equipment / Decoration', 'Matériel & Déco', fn() => [
            'en' => [
                'Furniture',
                'Kitchen & Office',
                'Audiovisual',
                'Preparation & Coordination',
                'Table Decoration',
                'Floral Arrangement',
                'Decoration',
            ],
            'fr' => [
                'Meubles',
                'Cuisine et Office',
                'Audio-visuel',
                'Préparation et coordination',
                'Décoration de table',
                'Fleurs',
                'Décoration'
            ]
        ]);


        self::createCategory('Entertainment', 'Animation', fn() => [
            'en' => [
                'Animation',
                'DJ, musicians',
                'Artists & Show',
                'Costumes',
                'Activities'
            ],
            'fr' => [
                'Animation',
                'DJ, musiciens',
                'Artistes & Spectacle',
                'Costumes',
                'Activités'
            ]
        ]);
    }

    private function createCategory(string $en, string $fr, Closure $sub): void
    {
        DB::table('categories')->insert([
            'en' => $en,
            'fr' => $fr,
        ]);

        for ($i = 0; $i < count($sub()['en']); $i++) {
            DB::table('category_children')->insert([
                'en' => $sub()['en'][$i],
                'fr' => $sub()['fr'][$i],
                'category_id' => $this->index,
            ]);
        }

        $this->index++;
    }

}

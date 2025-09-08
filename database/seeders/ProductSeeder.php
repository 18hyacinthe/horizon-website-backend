<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Téléphones
            [
                'name' => 'HICel Nova 1',
                'description' => 'Smartphone entrée de gamme, compact et accessible',
                'image' => '/images/horizon/hicel_hope.png',
                'category' => 'phones',
                'is_active' => true,
            ],
            [
                'name' => 'HICel Power+',
                'description' => 'Smartphone avec batterie longue durée, pour un usage intensif',
                'image' => '/images/horizon/hicel_hope.png',
                'category' => 'phones',
                'is_active' => true,
            ],
            [
                'name' => 'HICel Pro Max',
                'description' => 'Smartphone professionnel haut de gamme avec caméra avancée',
                'image' => '/images/horizon/hicel_hope.png',
                'category' => 'phones',
                'is_active' => true,
            ],

            // Ordinateurs et Tablettes
            [
                'name' => 'HICel Max Tab',
                'description' => 'Tablette éducative 10 pouces, idéale pour l\'apprentissage',
                'image' => '/images/horizon/IMG-20250718-WA0042-gigapixel-standard v2-2x.jpg',
                'category' => 'computers',
                'is_active' => true,
            ],
            [
                'name' => 'HICel Study Tab',
                'description' => 'Tablette optimisée pour les étudiants et l\'éducation',
                'image' => '/images/horizon/IMG-20250718-WA0042-gigapixel-standard v2-2x.jpg',
                'category' => 'computers',
                'is_active' => true,
            ],
            [
                'name' => 'HICel Work Pro',
                'description' => 'Ordinateur portable professionnel haute performance',
                'image' => '/images/horizon/IMG-20250718-WA0042-gigapixel-standard v2-2x.jpg',
                'category' => 'computers',
                'is_active' => true,
            ],

            // Accessoires
            [
                'name' => 'HICel PowerBank',
                'description' => 'Batterie externe haute capacité pour tous vos appareils',
                'image' => '/images/horizon/horizon_accessoires.png',
                'category' => 'accessories',
                'is_active' => true,
            ],
            [
                'name' => 'HICel Earbuds',
                'description' => 'Écouteurs sans fil avec réduction de bruit',
                'image' => '/images/horizon/horizon_accessoires.png',
                'category' => 'accessories',
                'is_active' => true,
            ],
            [
                'name' => 'HICel Protective Case',
                'description' => 'Coque de protection robuste pour smartphones',
                'image' => '/images/horizon/horizon_accessoires.png',
                'category' => 'accessories',
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

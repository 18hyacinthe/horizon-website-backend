<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DetailedProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Supprimer tous les produits existants
        Product::truncate();

        // Smartphones
        $smartphones = [
            [
                'name' => 'Horizon SmartPhone X1',
                'description' => 'Un smartphone performant et accessible, conçu pour répondre aux besoins essentiels de communication et de divertissement. Doté d\'un écran haute définition et d\'une autonomie remarquable.',
                'subcategory' => 'Smartphone entrée de gamme, compact et accessible',
                'category' => 'phones',
                'price' => 125000,
                'image' => 'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/electromenager_b223fh.png',
                'gallery' => [
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/electromenager_b223fh.png',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/smartphone-back.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/smartphone-side.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/smartphone-pack.jpg'
                ],
                'features' => [
                    'Écran HD+ 6.1 pouces pour une expérience visuelle immersive',
                    'Batterie 4000mAh avec charge rapide 18W',
                    'Appareil photo principal 48MP avec mode nuit',
                    'Processeur Octa-core optimisé pour les performances',
                    'Stockage 128GB extensible via microSD',
                    'Connectivité 4G LTE avancée',
                    'Système Android 13 avec interface personnalisée',
                    'Capteur d\'empreinte digitale latéral'
                ],
                'specifications' => [
                    [
                        'category' => 'Performance',
                        'specs' => [
                            'Processeur: Octa-core 2.0GHz',
                            'RAM: 6GB LPDDR4X',
                            'Stockage: 128GB UFS 2.1',
                            'GPU: Mali-G52 MC2',
                            'Système: Android 13'
                        ]
                    ],
                    [
                        'category' => 'Écran',
                        'specs' => [
                            'Taille: 6.1 pouces',
                            'Résolution: 1560 x 720 pixels (HD+)',
                            'Type: IPS LCD',
                            'Densité: 282 ppi',
                            'Protection: Verre trempé'
                        ]
                    ],
                    [
                        'category' => 'Caméra',
                        'specs' => [
                            'Principale: 48MP f/1.8',
                            'Ultra grand-angle: 8MP f/2.2',
                            'Macro: 2MP f/2.4',
                            'Frontale: 16MP f/2.0',
                            'Vidéo: 1080p@30fps'
                        ]
                    ],
                    [
                        'category' => 'Connectivité',
                        'specs' => [
                            'Réseau: 4G LTE Cat.6',
                            'WiFi: 802.11 a/b/g/n/ac',
                            'Bluetooth: 5.0',
                            'GPS: A-GPS, GLONASS',
                            'USB: Type-C 2.0'
                        ]
                    ],
                    [
                        'category' => 'Autonomie',
                        'specs' => [
                            'Batterie: 4000mAh Li-Po',
                            'Charge rapide: 18W',
                            'Autonomie appels: 25h',
                            'Autonomie veille: 400h',
                            'Charge sans fil: Non'
                        ]
                    ],
                    [
                        'category' => 'Dimensions',
                        'specs' => [
                            'Hauteur: 158.9 mm',
                            'Largeur: 75.1 mm',
                            'Épaisseur: 8.9 mm',
                            'Poids: 185g',
                            'Matériaux: Plastique renforcé'
                        ]
                    ]
                ],
                'tech_sheet_url' => 'https://example.com/docs/horizon-x1-specs.pdf',
                'serial_prefix' => 'HRX1',
                'meta_description' => 'Horizon SmartPhone X1 - Smartphone performant et accessible avec écran HD+, batterie 4000mAh et appareil photo 48MP. Assemblé localement au Burkina Faso.',
                'is_active' => true
            ],
            [
                'name' => 'Horizon Pro Max',
                'description' => 'Le haut de gamme d\'Horizon Industries. Smartphone premium avec des performances exceptionnelles, un design élégant et des fonctionnalités avancées pour les utilisateurs exigeants.',
                'subcategory' => 'Smartphone haut de gamme, performances premium',
                'category' => 'phones',
                'price' => 285000,
                'image' => 'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/smartphone-premium.jpg',
                'gallery' => [
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/smartphone-premium.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/premium-back.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/premium-camera.jpg'
                ],
                'features' => [
                    'Écran AMOLED 6.7 pouces 120Hz',
                    'Triple caméra 108MP avec stabilisation optique',
                    'Batterie 5000mAh avec charge ultra-rapide 65W',
                    'Processeur flagship dernière génération',
                    'RAM 12GB avec stockage 256GB',
                    'Résistance à l\'eau IP68',
                    'Charge sans fil 15W',
                    'Capteur d\'empreinte sous l\'écran'
                ],
                'specifications' => [
                    [
                        'category' => 'Performance',
                        'specs' => [
                            'Processeur: Snapdragon 8 Gen 2',
                            'RAM: 12GB LPDDR5X',
                            'Stockage: 256GB UFS 4.0',
                            'GPU: Adreno 740',
                            'Système: Android 14'
                        ]
                    ]
                ],
                'tech_sheet_url' => 'https://example.com/docs/horizon-pro-max-specs.pdf',
                'serial_prefix' => 'HPM',
                'meta_description' => 'Horizon Pro Max - Smartphone premium avec écran AMOLED 120Hz, triple caméra 108MP et performances flagship exceptionnelles.',
                'is_active' => true
            ]
        ];

        // Ordinateurs et Tablettes
        $computers = [
            [
                'name' => 'Horizon TabBook Pro',
                'description' => 'Tablette professionnelle polyvalente, parfaite pour le travail et les loisirs. Écran haute résolution, performances solides et autonomie exceptionnelle pour accompagner vos journées.',
                'subcategory' => 'Tablette professionnelle, 10 pouces, polyvalente',
                'category' => 'computers',
                'price' => 195000,
                'image' => 'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/tablet-pro.jpg',
                'gallery' => [
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/tablet-pro.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/tablet-keyboard.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/tablet-stylus.jpg'
                ],
                'features' => [
                    'Écran 10.1 pouces 2K IPS avec stylus inclus',
                    'Processeur Octa-core haute performance',
                    'RAM 8GB avec stockage 128GB extensible',
                    'Batterie 7000mAh pour 12h d\'autonomie',
                    'Clavier détachable inclus',
                    'Appareil photo 13MP avec autofocus',
                    'Connectivité WiFi 6 et Bluetooth 5.2',
                    'Port USB-C avec charge rapide 30W'
                ],
                'specifications' => [
                    [
                        'category' => 'Performance',
                        'specs' => [
                            'Processeur: MediaTek Helio G99',
                            'RAM: 8GB LPDDR4X',
                            'Stockage: 128GB + microSD',
                            'GPU: Mali-G57 MC2',
                            'Système: Android 13 optimisé tablette'
                        ]
                    ],
                    [
                        'category' => 'Écran',
                        'specs' => [
                            'Taille: 10.1 pouces',
                            'Résolution: 2000 x 1200 pixels (2K)',
                            'Type: IPS LCD',
                            'Luminosité: 400 nits',
                            'Support stylus: Oui, inclus'
                        ]
                    ]
                ],
                'tech_sheet_url' => 'https://example.com/docs/horizon-tabbook-specs.pdf',
                'serial_prefix' => 'HTBP',
                'meta_description' => 'Horizon TabBook Pro - Tablette professionnelle 10 pouces avec stylus, clavier détachable et performances optimisées pour le travail.',
                'is_active' => true
            ],
            [
                'name' => 'Horizon Desktop Elite',
                'description' => 'Ordinateur de bureau puissant conçu pour les professionnels et les créateurs. Performances exceptionnelles, design moderne et extensibilité maximale.',
                'subcategory' => 'PC de bureau professionnel, haute performance',
                'category' => 'computers',
                'price' => 485000,
                'image' => 'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/desktop-elite.jpg',
                'gallery' => [
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/desktop-elite.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/desktop-internal.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/desktop-ports.jpg'
                ],
                'features' => [
                    'Processeur Intel Core i7 dernière génération',
                    'RAM 16GB DDR4 extensible à 64GB',
                    'SSD 512GB NVMe + HDD 1TB',
                    'Carte graphique dédiée GTX 1660 Ti',
                    'Connectivité complète avec WiFi 6',
                    'Boîtier ATX avec éclairage LED personnalisable',
                    'Alimentation 650W certifiée 80+ Bronze',
                    'Garantie 3 ans avec support technique'
                ],
                'specifications' => [
                    [
                        'category' => 'Performance',
                        'specs' => [
                            'Processeur: Intel Core i7-13700',
                            'RAM: 16GB DDR4-3200',
                            'Stockage: 512GB NVMe + 1TB HDD',
                            'GPU: NVIDIA GTX 1660 Ti 6GB',
                            'Système: Windows 11 Pro'
                        ]
                    ]
                ],
                'tech_sheet_url' => 'https://example.com/docs/horizon-desktop-elite-specs.pdf',
                'serial_prefix' => 'HDE',
                'meta_description' => 'Horizon Desktop Elite - PC de bureau professionnel avec Intel Core i7, GTX 1660 Ti et 16GB RAM pour performances exceptionnelles.',
                'is_active' => true
            ]
        ];

        // Accessoires
        $accessories = [
            [
                'name' => 'Horizon PowerBank 20000mAh',
                'description' => 'Batterie externe haute capacité pour tous vos appareils. Design compact, charge rapide et sécurité optimale pour ne jamais tomber en panne.',
                'subcategory' => 'Batterie externe, charge rapide, universelle',
                'category' => 'accessories',
                'price' => 35000,
                'image' => 'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/powerbank.jpg',
                'gallery' => [
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/powerbank.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/powerbank-ports.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/powerbank-led.jpg'
                ],
                'features' => [
                    'Capacité 20000mAh pour plusieurs charges complètes',
                    'Charge rapide 22.5W Power Delivery',
                    'Écran LED affichant le niveau de batterie',
                    'Ports multiples : USB-C, USB-A, Micro-USB',
                    'Protection contre surcharge et court-circuit',
                    'Design compact et antidérapant',
                    'Compatible avec tous smartphones et tablettes',
                    'Câble USB-C inclus dans la boîte'
                ],
                'specifications' => [
                    [
                        'category' => 'Caractéristiques techniques',
                        'specs' => [
                            'Capacité: 20000mAh / 74Wh',
                            'Entrée USB-C: 5V/3A, 9V/2A, 12V/1.5A',
                            'Sortie USB-C: 5V/3A, 9V/2.5A, 12V/1.87A',
                            'Sortie USB-A: 5V/3A, 9V/2A, 12V/1.5A',
                            'Puissance max: 22.5W'
                        ]
                    ],
                    [
                        'category' => 'Dimensions et poids',
                        'specs' => [
                            'Dimensions: 166 x 81 x 23 mm',
                            'Poids: 450g',
                            'Matériau: ABS + PC ignifuge',
                            'Couleur: Noir mat',
                            'Certification: CE, FCC, RoHS'
                        ]
                    ]
                ],
                'tech_sheet_url' => 'https://example.com/docs/horizon-powerbank-specs.pdf',
                'serial_prefix' => 'HPB',
                'meta_description' => 'Horizon PowerBank 20000mAh - Batterie externe haute capacité avec charge rapide 22.5W et protection avancée.',
                'is_active' => true
            ],
            [
                'name' => 'Horizon Wireless Headphones Pro',
                'description' => 'Casque audio sans fil haut de gamme avec réduction de bruit active. Son exceptionnel, confort optimal et autonomie longue durée.',
                'subcategory' => 'Casque sans fil, réduction de bruit, premium',
                'category' => 'accessories',
                'price' => 85000,
                'image' => 'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/headphones-pro.jpg',
                'gallery' => [
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/headphones-pro.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/headphones-case.jpg',
                    'https://res.cloudinary.com/dwgyr9x7w/image/upload/v1735731372189/horizon/products/headphones-controls.jpg'
                ],
                'features' => [
                    'Réduction de bruit active (ANC) intelligente',
                    'Autonomie 35h avec boîtier de charge',
                    'Son Hi-Fi avec drivers 40mm',
                    'Connexion Bluetooth 5.3 stable',
                    'Contrôles tactiles intuitifs',
                    'Micro avec suppression de bruit',
                    'Charge rapide : 15min = 3h d\'écoute',
                    'Pliable avec étui de transport premium'
                ],
                'specifications' => [
                    [
                        'category' => 'Audio',
                        'specs' => [
                            'Drivers: 40mm dynamiques',
                            'Réponse fréquence: 20Hz - 20kHz',
                            'Impédance: 32Ω',
                            'SPL max: 100dB',
                            'Codec: SBC, AAC, aptX'
                        ]
                    ]
                ],
                'tech_sheet_url' => 'https://example.com/docs/horizon-headphones-specs.pdf',
                'serial_prefix' => 'HHP',
                'meta_description' => 'Horizon Wireless Headphones Pro - Casque sans fil premium avec ANC, autonomie 35h et son Hi-Fi exceptionnel.',
                'is_active' => true
            ]
        ];

        // Créer tous les produits
        $allProducts = array_merge($smartphones, $computers, $accessories);

        foreach ($allProducts as $productData) {
            Product::create($productData);
            echo "Produit créé: {$productData['name']}\n";
        }

        echo "\n" . count($allProducts) . " produits ont été créés avec succès!\n";
    }
}

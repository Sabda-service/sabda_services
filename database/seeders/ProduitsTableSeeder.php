<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitsTableSeeder extends Seeder
{
    public function run()
    {
        $produits = [
            [
                'nom' => 'MacBook Pro 14"',
                'description' => 'Ordinateur portable haut de gamme avec écran Retina et processeur M1 Pro. Disponible exclusivement sur notre site avec une garantie de 2 ans !',
                'prix' => 2199.99,
                'ancien_prix' => 2499.99,
                'reduction' => 300.00,
                'image' => 'images/macbook_pro.jpg',
            ],
            [
                'nom' => 'iPhone 15 Pro',
                'description' => 'Smartphone avec écran Super Retina XDR et triple capteur photo. Achetez maintenant et profitez de la livraison gratuite !',
                'prix' => 1199.99,
                'ancien_prix' => 1299.99,
                'reduction' => 100.00,
                'image' => 'images/iphone_15_pro.jpg',
            ],
            [
                'nom' => 'iPad Pro 12.9"',
                'description' => 'Tablette avec écran Liquid Retina XDR et puce M2. Meilleur prix garanti sur notre site !',
                'prix' => 1299.99,
                'ancien_prix' => 1399.99,
                'reduction' => 100.00,
                'image' => 'images/ipad_pro.jpg',
            ],
            [
                'nom' => 'Sony WH-1000XM5',
                'description' => 'Casque audio avec réduction de bruit et son haute résolution. Offre spéciale : économisez 50€ dès aujourd\'hui !',
                'prix' => 399.99,
                'ancien_prix' => 449.99,
                'reduction' => 50.00,
                'image' => 'images/sony_wh1000xm5.jpg',
            ],
            [
                'nom' => 'Apple Watch Ultra',
                'description' => 'Montre connectée avec GPS, moniteur cardiaque et étanchéité 100m. Disponible avec une réduction exclusive !',
                'prix' => 899.99,
                'ancien_prix' => 999.99,
                'reduction' => 100.00,
                'image' => 'images/apple_watch_ultra.jpg',
            ],
            [
                'nom' => 'Amazon Echo Studio',
                'description' => 'Enceinte intelligente avec son 3D et assistant Alexa. Profitez de la livraison gratuite !',
                'prix' => 199.99,
                'ancien_prix' => 249.99,
                'reduction' => 50.00,
                'image' => 'images/amazon_echo_studio.jpg',
            ],
            [
                'nom' => 'DJI Mavic 3',
                'description' => 'Drone professionnel avec caméra 4K et autonomie de 46 minutes. Offre limitée : économisez 300€ !',
                'prix' => 2199.99,
                'ancien_prix' => 2499.99,
                'reduction' => 300.00,
                'image' => 'images/dji_mavic_3.jpg',
            ],
            [
                'nom' => 'Canon EOS R5',
                'description' => 'Appareil photo hybride avec capteur 45MP et vidéo 8K. Achetez maintenant et profitez d\'une garantie étendue !',
                'prix' => 4299.99,
                'ancien_prix' => 4599.99,
                'reduction' => 300.00,
                'image' => 'images/canon_eos_r5.jpg',
            ],
            [
                'nom' => 'PlayStation 5',
                'description' => 'Console de jeu avec lecteur Blu-ray Ultra HD et SSD ultra-rapide. Disponible avec une réduction exclusive !',
                'prix' => 549.99,
                'ancien_prix' => 599.99,
                'reduction' => 50.00,
                'image' => 'images/playstation_5.jpg',
            ],
            [
                'nom' => 'Samsung Odyssey G9',
                'description' => 'Écran incurvé 49" avec résolution 5120x1440 et 240Hz. Offre spéciale : économisez 200€ dès aujourd\'hui !',
                'prix' => 1499.99,
                'ancien_prix' => 1699.99,
                'reduction' => 200.00,
                'image' => 'images/samsung_odyssey_g9.jpg',
            ],
            [
                'nom' => 'Logitech G Pro X',
                'description' => 'Clavier mécanique pour gaming avec switches interchangeables. Profitez de la livraison gratuite !',
                'prix' => 149.99,
                'ancien_prix' => 179.99,
                'reduction' => 30.00,
                'image' => 'images/logitech_g_pro_x.jpg',
            ],
            [
                'nom' => 'Razer DeathAdder V2',
                'description' => 'Souris optique avec capteur 20 000 DPI et design ergonomique. Offre limitée : économisez 10€ !',
                'prix' => 69.99,
                'ancien_prix' => 79.99,
                'reduction' => 10.00,
                'image' => 'images/razer_deathadder_v2.jpg',
            ],
            [
                'nom' => 'Samsung T7 Shield',
                'description' => 'SSD portable résistant à l\'eau et aux chocs, 1 To. Disponible avec une réduction exclusive !',
                'prix' => 129.99,
                'ancien_prix' => 149.99,
                'reduction' => 20.00,
                'image' => 'images/samsung_t7_shield.jpg',
            ],
            [
                'nom' => 'Samsung Family Hub',
                'description' => 'Réfrigérateur intelligent avec écran tactile et gestion des stocks. Offre spéciale : économisez 500€ !',
                'prix' => 3999.99,
                'ancien_prix' => 4499.99,
                'reduction' => 500.00,
                'image' => 'images/samsung_family_hub.jpg',
            ],
            [
                'nom' => 'iRobot Roomba i7+',
                'description' => 'Robot aspirateur avec station de vidange automatique. Profitez de la livraison gratuite !',
                'prix' => 899.99,
                'ancien_prix' => 999.99,
                'reduction' => 100.00,
                'image' => 'images/irobot_roomba_i7.jpg',
            ],
            [
                'nom' => 'AirPods Pro (2e génération)',
                'description' => 'Écouteurs avec réduction de bruit active et son spatial. Offre limitée : économisez 50€ !',
                'prix' => 279.99,
                'ancien_prix' => 329.99,
                'reduction' => 50.00,
                'image' => 'images/airpods_pro.jpg',
            ],
            [
                'nom' => 'NVIDIA GeForce RTX 4090',
                'description' => 'Carte graphique pour gaming et création avec 24 Go de mémoire GDDR6X. Disponible avec une réduction exclusive !',
                'prix' => 1999.99,
                'ancien_prix' => 2199.99,
                'reduction' => 200.00,
                'image' => 'images/nvidia_rtx_4090.jpg',
            ],
        ];

        foreach ($produits as $produit) {
            Produit::create($produit);
        }
    }
}
<?php

use Illuminate\Database\Seeder;

class AnnouncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Announces')->insert(array(
            array(
                'announce_name' => 'Very pas chere',
                'announce_is_available' => true,
                'announce_price' => 23.22,
                'announce_comment' => 'I will send it for pas chere',
                'announce_adresse' => 'in my home bro',
                'announce_date' => '2019-11-03 11:00:00',
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 20,
                'Users_idUser' => 3,
                'announce_lat' => 48.837273,
                'announce_lng' => 2.33538,
                'announce_quantity' => 1,
                'announce_measure' => 'unity',
                'announce_lot' => 5
            ),
            array(
                'announce_name' => 'Only in unity for my fruit',
                'announce_is_available' => true,
                'announce_price' => 5.99,
                'announce_comment' => 'Its not expansive',
                'announce_adresse' => '8 street la vie d\'alloca',
                'announce_date' => '2019-11-13 11:00:00',
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 80,
                'Users_idUser' => 4,
                'announce_lat' => 48.789612,
                'announce_lng' => 2.452600,
                'announce_quantity' => 1,
                'announce_measure' => 'unity',
                'announce_lot' => 10
            ),
            array(
                'announce_name' => 'Organic banana',
                'announce_is_available' => true,
                'announce_price' => 15.59,
                'announce_comment' => 'Perfect banana mp me if you want a special command',
                'announce_adresse' => 'Casa de tata',
                'announce_date' => '2019-11-20 11:00:00',
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 10,
                'Users_idUser' => 3,
                'announce_lat' => 33.5731104,
                'announce_lng' => -7.5898434,
                'announce_quantity' => 50,
                'announce_measure' => 'gramme',
                'announce_lot' => 100
            ),
            array(
                'announce_name' => 'Test4',
                'announce_is_available' => false,
                'announce_price' => 999.99,
                'announce_comment' => 'Test4',
                'announce_adresse' => 'Test4',
                'announce_date' => '2019-11-22 11:00:00',
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 97,
                'Users_idUser' => 4,
                'announce_lat' => 48.833832,
                'announce_lng' => 2.243230,
                'announce_quantity' => 50,
                'announce_measure' => 'gramme',
                'announce_lot' => 100
            ),
            array(
                'announce_name' => 'Je vend des noix de cajou',
                'announce_is_available' => true,
                'announce_price' => 23.35,
                'announce_comment' => 'Noix de cajou qui pousse dans mon jardin en grande quantité',
                'announce_adresse' => '33 avenue des arenes',
                'announce_date' => '2019-11-03 11:00:00',
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 20,
                'Users_idUser' => 3,
                'announce_lat' => 55.751244,
                'announce_lng' => 37.618423,
                'announce_quantity' => 50,
                'announce_measure' => 'gramme',
                'announce_lot' => 100
            ),

            array(
                'announce_name' => 'Amande',
                'announce_is_available' => true,
                'announce_price' => 23.35,
                'announce_comment' => 'je vend des poires de très bonne qualité',
                'announce_adresse' => '14 avenue des champs',
                'announce_date' => '2019-11-20 11:00:00',
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 20,
                'Users_idUser' => 6,
                'announce_lat' => 48.833832,
                'announce_lng' => 37.618423,
                'announce_quantity' => 30,
                'announce_measure' => 'gramme',
                'announce_lot' => 20
            ),
            array(
                'announce_name' => 'Abricot',
                'announce_is_available' => true,
                'announce_price' => 12.35,
                'announce_comment' => 'je vend des Abricot de très bonne qualité',
                'announce_adresse' => '14 rue de Pomme',
                'announce_date' => date('Y-m-d h-i-s'),
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 1,
                'Users_idUser' => 7,
                'announce_lat' => 55.751244,
                'announce_lng' => 2.243230,
                'announce_quantity' => 40,
                'announce_measure' => 'gramme',
                'announce_lot' => 100
            ),
            array(
                'announce_name' => 'Myrtilles',
                'announce_is_available' => true,
                'announce_price' => 23.35,
                'announce_comment' => 'je vend des myrtilles de très bonne qualité',
                'announce_adresse' => '14 rue de Chirac',
                'announce_date' => '2020-02-03 12:00:00',
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 28,
                'Users_idUser' => 8,
                'announce_lat' => 55.751244,
                'announce_lng' => 37.618423,
                'announce_quantity' => 50,
                'announce_measure' => 'gramme',
                'announce_lot' => 100
            ),
            array(
                'announce_name' => 'Ananas',
                'announce_is_available' => true,
                'announce_price' => 30.00,
                'announce_comment' => 'je vend des Ananas de très bonne qualité',
                'announce_adresse' => '35 avenue de Chirac',
                'announce_date' => date('Y-m-d h-i-s'),
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 3,
                'Users_idUser' => 9,
                'announce_lat' => 48.837273,
                'announce_lng' => 2.33538,
                'announce_quantity' => 50,
                'announce_measure' => 'gramme',
                'announce_lot' => 100
            ),
            array(
                'announce_name' => 'Avocat',
                'announce_is_available' => true,
                'announce_price' => 40.00,
                'announce_comment' => 'je vend des Avocat de très bonne qualité',
                'announce_adresse' => '35 avenue de Montrouge',
                'announce_date' => '2019-11-03 11:00:00',
                'announce_city' => 'paris',
                'announce_img' => '',
                'products_idProduct' => 4,
                'Users_idUser' => 9,
                'announce_lat' => 48.837273,
                'announce_lng' => 2.33538,
                'announce_quantity' => 50,
                'announce_measure' => 'gramme',
                'announce_lot' => 100
            ),
        ));
    }
}

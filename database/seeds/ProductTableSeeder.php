<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert(array(
            //Fruits
            array('product_name' => 'Apricot', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'almond', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Pineapple', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Avocado', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Banana', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Cassis', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Cherry', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Lemon', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Clementine', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Quince', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Datte', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Fig', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Strawberry', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Wild strawberry', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Raspberry', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Passion fruit', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Grenade', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Gooseberry', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Khaki', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Kiwi', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Litchi', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Mandarin', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Mango', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Chestnut', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Melon', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Mirabelle', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Blackberry', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Myrtille', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Blueberry', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Hazelnut', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Papaya', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Grapefruit', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Orange', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Watermelon', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Peach', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Pear', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Apple', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Plum', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Grape', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Tomato', 'product_categories_idproduct_category' => 1, 'Types_measure_idTypes_measure' => 2),
            // Légumes
            array('product_name' => 'Garlic', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Artichoke', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Asparagus', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Eggplant', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Chard', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Bambou', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Benincasa', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Blette', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Broccoli', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Celery', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Mushroom', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Cabbage', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Pumpkin', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Cucumber', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Pickle', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Squash', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Courgette', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Cress', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Dachine', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Daikon', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Shallot', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Spinach', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Fennel', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Bean', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Flageolet', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Ginger', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Bean', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Jujube', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Lettuce', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Lens', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Corn', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Cassava', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Turnip', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Onion', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Olive', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Pea', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Leek', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Potato', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Wasabi', 'product_categories_idproduct_category' => 2, 'Types_measure_idTypes_measure' => 2),
            //Céréales
            array('product_name' => 'Rice', 'product_categories_idproduct_category' => 3, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Wheat', 'product_categories_idproduct_category' => 3, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Oats', 'product_categories_idproduct_category' => 3, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Barley', 'product_categories_idproduct_category' => 3, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Flavor of rice', 'product_categories_idproduct_category' => 3, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Flavor of wheat', 'product_categories_idproduct_category' => 3, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => "Flavor of corn", 'product_categories_idproduct_category' => 3, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => "Flavor of barley", 'product_categories_idproduct_category' => 3, 'Types_measure_idTypes_measure' => 2),
            //Boissons
            array('product_name' => 'Limonade', 'product_categories_idproduct_category' => 4, 'Types_measure_idTypes_measure' => 3),
            array('product_name' => 'Milk cow', 'product_categories_idproduct_category' => 4, 'Types_measure_idTypes_measure' => 3),
            array('product_name' => 'Sheep milk', 'product_categories_idproduct_category' => 4, 'Types_measure_idTypes_measure' => 3),
            array('product_name' => 'Camel milk', 'product_categories_idproduct_category' => 4, 'Types_measure_idTypes_measure' => 3),
            array('product_name' => "Almond milk", 'product_categories_idproduct_category' => 4, 'Types_measure_idTypes_measure' => 3),
            array('product_name' => 'Soy milk', 'product_categories_idproduct_category' => 4, 'Types_measure_idTypes_measure' => 3),
            array('product_name' => 'Coconut milk', 'product_categories_idproduct_category' => 4, 'Types_measure_idTypes_measure' => 3),
            //Epices
            array('product_name' => 'Anis', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Basil', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Cinamon', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Coriander', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Cumin', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Turmeric', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Fennel', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Ginger', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Laurel', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Lavander', 'producGiroflet_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Mint', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Nutmeg', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Oregano', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Rosemary', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Saffron', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Sage', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Thyme', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
            array('product_name' => 'Vanilla', 'product_categories_idproduct_category' => 6, 'Types_measure_idTypes_measure' => 2),
        ));

    }
}

















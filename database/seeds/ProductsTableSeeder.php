<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // // POPOLATO CON I DATI NEL FILE products.php 
        // $dati_prodotti = config('products');

        // foreach ($dati_prodotti as $dati_prodotto) {
        //     $nuovo_prodotto = new Product();

        //     $nuovo_prodotto->description = $dati_prodotto['description'];
        //     $nuovo_prodotto->availability = $dati_prodotto['availability'];
        //     $nuovo_prodotto->price = $dati_prodotto['price'];

        //     $nuovo_prodotto->save();
        // }
        // // -----------------------------------------------

        for ($i=0; $i < 10; $i++) { 
            $nuovo_prodotto = new Product();

            $nuovo_prodotto->description = $faker->text($maxNbChars = 49);
            $nuovo_prodotto->availability = $faker->numberBetween($min = 1, $max = 20);
            $nuovo_prodotto->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 999); //max 999,99

            $nuovo_prodotto->save();
        }
        
    }
}
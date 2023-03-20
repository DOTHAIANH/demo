<?php

use Illuminate\Database\Seeder;
use App\Models\Products;

class UpdateProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products =  Products::all();
        foreach ($products as $product){
            $price = $product->price;
            $product->price_cost = ((int)$price - 20000);
            $product->save();
        }
    }
}

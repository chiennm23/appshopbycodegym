<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'Ip 11';
        $product->description = 'Ip 11 la dien ip moi ra mat';
        $product->slug = \Illuminate\Support\Str::slug('Ip 11');
        $product->price = '100000';
        $product->image = 'storage/images/ip11.jpg';
        $product->content = 'Ip 11 la dien ip moi ra mat';
        $product->total = '20';
        $product->save();


        $product = new \App\Product();
        $product->name = 'Ip 12';
        $product->description = 'Ip 12 la dien ip moi ra mat';
        $product->slug = \Illuminate\Support\Str::slug('Ip 12');
        $product->price = '200000';
        $product->image = 'storage/images/ip12.jpg';
        $product->content = 'Ip 12 la dien ip moi ra mat';
        $product->total = '20';
        $product->save();
    }
}

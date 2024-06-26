<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategorie;
use Illuminate\Support\Str;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title'=> 'Strawberry',
            'slug'=> Str::slug('Strawberry'),
            'description'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illo ipsam molestiae, quae vitae neque eius, cum consequatur necessitatibus natus et vel odit, commodi suscipit tempora esse? Iusto, unde alias.",
            'main_image' => 'storage/front/assets/img/products/1.png',
            'product_categorie_id' => ProductCategorie::whereName('Produits forestiers')->first()->id,
        ]);

        Product::create([
            'title'=> 'Organic Carrot',
            'slug'=> Str::slug('Organic Carrot'),
            'description'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illo ipsam molestiae, quae vitae neque eius, cum consequatur necessitatibus natus et vel odit, commodi suscipit tempora esse? Iusto, unde alias.",
            'main_image' => 'storage/front/assets/img/products/2.png',
            'product_categorie_id' => ProductCategorie::whereName('Produits tropicaux')->first()->id,
        ]);

        Product::create([
            'title'=> 'Fresh Red',
            'slug'=> Str::slug('Fresh Red'),
            'description'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illo ipsam molestiae, quae vitae neque eius, cum consequatur necessitatibus natus et vel odit, commodi suscipit tempora esse? Iusto, unde alias.",
            'main_image' => 'storage/front/assets/img/products/3.png',
            'product_categorie_id' => ProductCategorie::whereName('Produits agro-alimentaire')->first()->id,
        ]);

        Product::create([
            'title'=> 'Organic Sweet',
            'slug'=> Str::slug('Organic Sweet'),
            'description'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illo ipsam molestiae, quae vitae neque eius, cum consequatur necessitatibus natus et vel odit, commodi suscipit tempora esse? Iusto, unde alias.",
            'main_image' => 'storage/front/assets/img/products/4.png',
            'product_categorie_id' => ProductCategorie::whereName('Matériels et équipements')->first()->id,
        ]);

        Product::create([
            'title'=> 'Fresh Fish',
            'slug'=> Str::slug('Fresh Fish'),
            'description'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illo ipsam molestiae, quae vitae neque eius, cum consequatur necessitatibus natus et vel odit, commodi suscipit tempora esse? Iusto, unde alias.",
            'main_image' => 'storage/front/assets/img/products/5.png',
            'product_categorie_id' => ProductCategorie::whereName('Produits forestiers')->first()->id,
        ]);

        Product::create([
            'title'=> 'Fresh Bananah',
            'slug'=> Str::slug('Fresh Bananah'),
            'description'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illo ipsam molestiae, quae vitae neque eius, cum consequatur necessitatibus natus et vel odit, commodi suscipit tempora esse? Iusto, unde alias.",
            'main_image' => 'storage/front/assets/img/products/6.png',
            'product_categorie_id' => ProductCategorie::whereName('Produits forestiers')->first()->id,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        Category::Factory(4)->create();
        //User::Factory(35)->create();
        $this->call(UserSeeder::class);

        Product::factory(30)->create();
        /*foreach($product as $products){

            Image::factory(1)->create([
                'imageable_id' => $products->id,
                'imageable_type' => Product::class,
            ]);
        }*/


    }
}

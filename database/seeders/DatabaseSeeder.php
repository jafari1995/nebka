<?php

namespace Database\Seeders;


use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Database\Factories\CustomerFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            CustomerFactory::factoryForModel('Customer')->count(10)->create();
            ProductFactory::factoryForModel('Product')->count(10)->create();
    }
}

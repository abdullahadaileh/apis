<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // إنشاء 50 منتج باستخدام factory
        Product::factory(50)->create();
    }
}

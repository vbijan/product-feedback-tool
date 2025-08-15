<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Dell XPS 15 (2023)',
                'description' => 'Premium 15.6" laptop with 13th Gen Intel Core i9 and 4K OLED touch display.',
                'price' => 2199.00,
                'image' => 'assets/dell-xps-15.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Logitech MX Master 3S',
                'description' => 'Advanced wireless mouse with ultra-fast scrolling and silent clicks.',
                'price' => 99.99,
                'image' => 'assets/logitech-mx-master.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Samsung T7 Shield 2TB',
                'description' => 'Rugged portable SSD with USB 3.2 Gen2 and IP65 water/dust resistance.',
                'price' => 149.99,
                'image' => 'assets/samsung-t7-shield.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bose QuietComfort Ultra',
                'description' => 'Premium noise-cancelling headphones with spatial audio technology.',
                'price' => 429.00,
                'image' => 'assets/bose-qc-ultra.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'LG UltraFine 32UN880',
                'description' => '32-inch 4K UHD ergonomic monitor with USB-C connectivity.',
                'price' => 699.95,
                'image' => 'assets/lg-ultrafine-monitor.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

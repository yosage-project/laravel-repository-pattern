<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'item1',
                'description' => 'description1',
                'price' => 100,
                'sold_out' => false,
            ],
            [
                'name' => 'item2',
                'description' => 'description2',
                'price' => 200,
                'sold_out' => false,
            ],
            [
                'name' => 'item3',
                'description' => 'description3',
                'price' => 300,
                'sold_out' => true,
            ],
        ];

        foreach ($items as $item) {
            \App\Models\Item::query()->create($item);
        }
    }
}

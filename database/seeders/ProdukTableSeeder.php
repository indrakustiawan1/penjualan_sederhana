<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('produk')->insert([
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Kopi',
                'description' => 'Kopi hitam',
                'price' => 10000,
                'stock' => 10,
                'category_id' => 'Konsumsi',
                'created_at' => $now,
                'updated_at' => $now,
                'quantity_sold' => 0,
                'type' => 'Konsumsi'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Teh',
                'description' => 'Teh hijau',
                'price' => 10000,
                'stock' => 19,
                'category_id' => 'Konsumsi',
                'created_at' => $now,
                'updated_at' => $now,
                'quantity_sold' => 0,
                'type' => 'Konsumsi'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Kopi',
                'description' => 'Kopi luwak',
                'price' => 9000,
                'stock' => 15,
                'category_id' => 'Konsumsi',
                'created_at' => $now,
                'updated_at' => $now,
                'quantity_sold' => 0,
                'type' => 'Konsumsi'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Pasta Gigi',
                'description' => 'Pasta gigi herbal',
                'price' => 10000,
                'stock' => 20,
                'category_id' => 'Pembersih',
                'created_at' => $now,
                'updated_at' => $now,
                'quantity_sold' => 0,
                'type' => 'Pembersih'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Sabun Mandi',
                'description' => 'Sabun mandi cair',
                'price' => 10000,
                'stock' => 30,
                'category_id' => 'Pembersih',
                'created_at' => $now,
                'updated_at' => $now,
                'quantity_sold' => 0,
                'type' => 'Pembersih'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Sampo',
                'description' => 'Sampo anti ketombe',
                'price' => 10000,
                'stock' => 25,
                'category_id' => 'Pembersih',
                'created_at' => $now,
                'updated_at' => $now,
                'quantity_sold' => 0,
                'type' => 'Pembersih'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Teh',
                'description' => 'Teh hitam',
                'price' => 8100,
                'stock' => 5,
                'category_id' => 'Konsumsi',
                'created_at' => $now,
                'updated_at' => $now,
                'quantity_sold' => 0,
                'type' => 'Konsumsi'
            ]
        ]);
    }
}

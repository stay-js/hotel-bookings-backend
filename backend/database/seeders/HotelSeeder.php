<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            ['id' => 1, 'name' => 'Szilágyi Bt.', 'address' => '5869 Sopron, Henrietta turistaút 8.', 'rating' => 1.92],
            ['id' => 2, 'name' => 'Hegedüs', 'address' => '9952 Budapest, Nagy játszótér 52.', 'rating' => null],
            ['id' => 3, 'name' => 'Novák', 'address' => '6473 Székesfehérvár, Gitta turistaút 94.', 'rating' => 3.38],
        ]);
    }
}

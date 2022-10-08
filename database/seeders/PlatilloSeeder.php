<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platillo::create(['nombre' => 'Sushi', 'precio' => 120.20, 'categoria_id' => 1]);
        Platillo::create(['nombre' => 'Pizaa', 'precio' => 210.20, 'categoria_id' => 1]);
        Platillo::create(['nombre' => 'Hamburgesa', 'precio' => 180.20, 'categoria_id' => 2]);
        Platillo::create(['nombre' => 'Nugets', 'precio' => 70.20, 'categoria_id' => 2]);
        Platillo::create(['nombre' => 'Sopita de pollo', 'precio' => 55.20, 'categoria_id' => 3]);
        Platillo::create(['nombre' => 'MCnugets', 'precio' => 30.20, 'categoria_id' => 3]);
    }
}

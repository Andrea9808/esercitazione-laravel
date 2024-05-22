<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vehicle;

class VehiclesTableSeeder extends Seeder
{
   //CREAZIONE DI 5 ELEMENTI
   public function run()
   {
       Vehicle :: factory() -> count(5) -> create();
   }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Branch;
use App\Models\Vehicle;

class BranchesTableSeeder extends Seeder
{

    //CREAZIONE DI 5 ELEMENTI
   public function run()
   {
       Branch :: factory()
       ->count(10)
       ->create()
       ->each(function ($branch) {
           $vehicle = Vehicle::inRandomOrder()->first();
           $branch->vehicle()->associate($vehicle);
           $branch->save();
       });
   }

}

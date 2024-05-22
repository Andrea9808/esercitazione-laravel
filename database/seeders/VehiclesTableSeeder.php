<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


//IMPORT AUTOMEZZI
use App\Models\Vehicle;
//IMPORT FILIALI
use App\Models\Branch;


class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   //CREAZIONE DI 10 ELEMENTI IN ORDINE CASUALE
   public function run()
   {
       Vehicle::factory()
            ->count(10)
            ->make()
            ->each(function ($vehicle) {
                $branch = Branch::inRandomOrder()->first();
                $vehicle->branch()->associate($branch);
                $vehicle->save();
            });
   }
}

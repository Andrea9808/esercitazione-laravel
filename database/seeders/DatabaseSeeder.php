<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BranchesTableSeeder :: class,

            //vheicle ha la chiave esterna
            VehiclesTableSeeder :: class,
        ]);
    }
}

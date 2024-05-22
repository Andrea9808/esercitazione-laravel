<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//IMPORT FILIALI
use App\Models\Branch;


class BranchesTableSeeder extends Seeder
{
 /**
     * Run the database seeds.
     *
     * @return void
     */
    //CREAZIONE DI 5 ELEMENTI
    public function run()
   {
        Branch :: factory() -> count(5) -> create();
   }

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //CREO FOREIGN KEY
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table -> foreignId('branch_id') -> constrained();
        });
    }

    //DROP FOREIGN KEY + COLONNA
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {

            $table -> dropForeign('vehicles_branch_id_foreign');
            $table -> dropColumn('branch_id');
        });
    }
};

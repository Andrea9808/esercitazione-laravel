<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;


    //UNA FILIALE HA PIù AUTOMEZZI
    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }
}

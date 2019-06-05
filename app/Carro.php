<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    //
    protected $table = 'carros';
    protected $fillable = ['name', 'model', 'year'];
}

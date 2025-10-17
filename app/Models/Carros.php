<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
    protected $table = 'carros';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'ano_fabricacao',
    ];
}

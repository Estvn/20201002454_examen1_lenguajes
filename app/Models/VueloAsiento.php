<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VueloAsiento extends Model
{
    use HasFactory;
    protected $table = "vueloasientos";
    protected $primaryKey = 'ID_TIPO_ASIENTO';
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAsiento extends Model
{
    use HasFactory;
    protected $table = "tipoasientos";
    protected $primaryKey = 'ID_TIPO_ASIENTO';
    public $timestamps = false;

}

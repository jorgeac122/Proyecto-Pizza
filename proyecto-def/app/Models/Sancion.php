<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sancion extends Model
{
    protected $table = 'sanciones';
    protected $primaryKey = 'idSanciones';
    public $timestamps = false;

    protected $fillable = [
        'Fecha',
        'TipoSancion',
        'Detalle',
        'Estado'
    ];
    use HasFactory;
}

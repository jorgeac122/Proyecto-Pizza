<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    protected $table = 'infracciones';
    protected $primaryKey = 'idInfracciones';
    public $timestamps = false;

    protected $fillable = [
        'Fecha',
        'Descripcion',
        'Estado',
        'Socios_idSocios',
        'Vehiculos_idVehiculos'
    ];
    use HasFactory;

    public function socio()
    {
        return $this->belongsTo(Socio::class, 'Socios_idSocios', 'idSocios');
    }

    public function vehiculos()
    {
        return $this->belongsTo(Vehiculo::class, 'Vehiculos_idVehiculos', 'idVehiculos');
    }
}

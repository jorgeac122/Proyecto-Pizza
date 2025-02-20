<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $primaryKey = 'idVehiculos';
    public $timestamps = false;

    protected $fillable = [
        'Placa',
        'Modelo',
        'Estado',
        'Año',
        'CapacidadPasajeros',
        'Socios_idSocios'
    ];
    use HasFactory;

    public function socio()
    {
        return $this->belongsTo(Socio::class, 'Socios_idSocios', 'idSocios');
    }

    public function infraccion()
    {
        return $this->hasMany(infraccion::class, 'Vehiculos_idVehiculos', 'idVehiculos');
    }
}

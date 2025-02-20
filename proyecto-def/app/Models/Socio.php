<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $table = 'socios';
    protected $primaryKey = 'idSocios';
    public $timestamps = false;

    protected $fillable = [
        'NombreCompleto',
        'Cedula',
        'Direccion',
        'Telefono',
        'Email',
        'FechaNacimiento',
        'EstadoReglamento',
        'FechaRegistro'
    ];
    use HasFactory;

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'Socios_idSocios', 'idSocios');
    }

    public function infracciones()
    {
        return $this->hasMany(Infraccion::class, 'Socios_idSocios', 'idSocios');
    }
}

<?php

namespace App\Models;

use App\Models\graduate_title;
use App\Traits\ApiQueryScopes; // Importamos el Trait
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academictitle extends Model
{
     // Usamos el Trait aquí para inyectar los métodos automáticamente
    use HasFactory, ApiQueryScopes;

    // Campos habilitados para asignación masiva
    protected $fillable = ['actividad'];

    // Configuración de Listas Blancas para el Trait
    protected $allowIncluded = ['soldiers'];
    protected $allowFilter = ['id', 'actividad'];
    protected $allowSort = ['id', 'actividad'];

    /**
     * Relación Uno a Muchos
     * Una compañía tiene muchos soldados asignados.
     */
    public function titulo()
    {
        return $this->hasMany(Soldier::class);
    }

}
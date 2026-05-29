<?php

namespace App\Models;
use App\Traits\ApiQueryScopes; // Importamos el Trait
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory, ApiQueryScopes;

    // Campos habilitados para asignación masiva
    protected $fillable = ['nombre'];

    // Configuración de Listas Blancas para el Trait
    protected $allowIncluded = ['departaments'];
    protected $allowFilter = ['id', 'nombre'];
    protected $allowSort = ['id', 'nombre'];

    /**
     * Relación Uno a Muchos
     * Una compañía tiene muchos soldados asignados.
     */
    public function departaments()
    {
        return $this->hasMany(departament::class);
    }
}

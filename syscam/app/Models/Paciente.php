<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idPaciente',
        'nome',
        'email',
        'cpf',
        'nomeResponsavel',
        'telefone',
        'telefoneResponsavel',
        'endereco',
        'tipoSanguineo',
        'fatorRH',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}

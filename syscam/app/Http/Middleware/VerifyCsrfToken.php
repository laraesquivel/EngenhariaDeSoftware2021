<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "login",
        "cadastrar-usuario",
        "cadastrar-paciente",
        "cadastrar-medicamento",
        "PrepararMedicacaoEnf",
        "baixarAgendamentoEnf",
        "cadastrarPacienteEnf",
        "Designar_Agendamento",
        "Bater_Ponto"
    ];
}

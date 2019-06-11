<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidatos extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'resumo',
        'linkedin',
        'github',
        'ingles',
        'salario',
        'curriculo'
    ];

}

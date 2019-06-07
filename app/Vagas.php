<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    protected $fillable = [
        'descricao',
        'atividades',
        'requisitos',
        'tipo',
        'jornada',
        'habilidades',
        'remuneracao'
    ];

}

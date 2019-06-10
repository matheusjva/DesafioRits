<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidatos extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'escolaridade',
        'curriculo',
        'vaga_id'
    ];

    public function vagas(): BelongsTo
    {
        return $this->belongsTo(Vagas::class, 'vaga_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    use HasFactory;

    protected $fillable = [
        'andar',
        'observacao',
        'responsavel',
        'id_user',
        'id_visitante',

    ];

    protected $table = 'acessos';

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function visitante() {
        return $this->belongsTo(Visitante::class, 'id_visitante', 'id');
    }

}

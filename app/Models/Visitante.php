<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'documento',
        'expedidor',
        'telefone',
        //'endereco',
        'email',
        'imagem',
        //'slug',
        'id_user',

    ];

    protected $table = 'visitantes';






    public function acessos() {
        return $this->hasMany(Acesso::class, 'id_visitante', 'id');
    }

    //public function visitas() { return $this->hasMany(Visita::class, 'id_visitante', 'id'); }

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }


}

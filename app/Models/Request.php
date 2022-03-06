<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'interessado';

    protected $connection = 'mysql';
    protected $attributes = [
        'idInteressado',
        'idEntidade',
        'idSerieEntidade',
        'idSexo',
        'idEstado',
        'idCidade',
        'idAssociacao',
        'idUniao',
        'idTipoContato',
        'nomeAluno',
        'nomeResponsavel',
        'parentesco',
        'telefoneContato',
        'emailContato',
        'dtCadastro',
        'enviadoEscola',
        'enviadoAcrm',
        'enviadoCrmUneb',
        'enviadoCrmUnb',
        'observacao',
        'idOrigemInteressado',

    ];

    protected $dates = ['dtCadastro',
    ];


    public function sex(){
        return $this->belongsTo(Sex::class, 'idSexo', 'idSexo');
    }

    public function contactType(){
        return $this->belongsTo(ContactType::class, 'idTipoContato', 'idTipoContato');
    }

    public function requestOrigin(){
        return $this->belongsTo(RequestOrigin::class, 'idOrigemInteressado', 'idOrigemInteressado');
    }

}

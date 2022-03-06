<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{
    use HasFactory;

    protected $table = 'tipocontato';

    protected $attributes = [
        'idTipoContato',
        'descricao',
    ];

    public function request(){
        return $this->hasMany(Request::class);
    }
}

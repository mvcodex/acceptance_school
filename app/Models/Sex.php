<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;

    protected $table = 'sexo';

    protected $attributes = [
        'idSexo',
        'descricao',
    ];

    public function request(){
        return $this->hasMany(Request::class);
    }

}

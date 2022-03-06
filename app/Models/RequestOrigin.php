<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestOrigin extends Model
{
    use HasFactory;

    protected $table = 'origeminteressado';

    protected $attributes = [
        'idOrigemInteressado',
        'origem',
    ];

    public function request(){
        return $this->hasMany(Request::class);
    }
}

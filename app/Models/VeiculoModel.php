<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VeiculoModel extends Model
{
    protected $table = 'veiculo'; 

    protected $fillable = [
        'marca', 'modelo', 'placa', 'ano' 
    ];

    public $timestamps = false;
}

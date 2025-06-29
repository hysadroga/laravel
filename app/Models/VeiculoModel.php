<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AnuncioModel;

class VeiculoModel extends Model
{
    protected $table = 'veiculo';

    protected $fillable = ['marca', 'modelo', 'placa', 'ano', 'cor'];

    public $timestamps = false;

    public function anuncio()
    {
        return $this->hasOne(AnuncioModel::class, 'veiculo_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ModelGuitarra extends Model
{
    protected $table='guitarras';
    protected $fillable = ['marca','modelo', 'ano', 'preco','foto', 'cor', 'descricao'];
   
}

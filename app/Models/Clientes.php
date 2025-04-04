<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = ['nomeTutor','celular', 'email','endereco', 'cep', 'nomePet', 'raca', 'idade', 'sexo', 'castrado', 'dataEntrada', 'dataSaida'];
}

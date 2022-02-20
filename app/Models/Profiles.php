<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['cpf', 'name', 'email', 'password','birthday',  'telefone', 'conjuge',
    'cpfconjuge', 'dateconjuge','adultos','criancas','trabalham', 'endereco','numero','localizacao','geolocalizacao', 'terreno', 
    'quadra','valor1','valor2','valor3','valor4','valor5','total','status'];  //tabelas que serão modificadas no mysql

}

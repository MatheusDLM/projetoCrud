<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Tendo certeza que a tabela produtos está sendo acessada
    protected $table = 'produtos';

    //Tirando a implementação de tempo na tabela
    public $timestamps = false;

    //Definindo os atributos da tabela
    protected $fillable = [
        'nome','preco','descricao','categoria','status','quantidade'
    ];
    
    use HasFactory;
}

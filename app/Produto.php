<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // COMO MUDAR A TABELA QUE ELE SE REFERE
    // protected $table = 'canecas' ;

    // Relacionando Produto com Categoria (foreign key ID_categoria no mySQL)
    public function categoria(){
        //primeiro adicionar a categoria ao codigo e depois buscar seu id
        return $this->belongsTo('App\Categoria','id_categoria');
    }
}


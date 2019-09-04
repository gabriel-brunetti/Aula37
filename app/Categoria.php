<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    public function produtos(){
        // relacionando os produtos contindos em uma categoria
        // equivalante a UMA CATEGORIA POSSUI DIVERSOS PRODUTOS
        return $this->hasMany('App\Produto','id_categoria');
    }
}

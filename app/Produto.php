<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    function vendas(){
    	return $this->belongsToMany('App\Venda', 'vendas_has_produtos', 'id_produto', 'id_venda')->withTimestamps();
    }
}

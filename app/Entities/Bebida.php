<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    protected $table = 'bebidas';

    public function getBebida($id){

        $sql = $this->select('bebidas.*')
            ->where('bebidas.id_avaliacao',$id)
            ->get();

        return $sql;
    }

}

<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{

    protected $table = 'estabelecimentos';

    public function getAllEstabelicimentos(){

        $sql = $this->select('estabelecimentos.id','estabelecimentos.name');
        return $sql->get();

    }

    public function findEstabelecimento($id){
        $sql = $this->select('estabelecimentos.*')
                    ->where('estabelecimentos.id', '=',$id)->first();
        return $sql;

    }




}

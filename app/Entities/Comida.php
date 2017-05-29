<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
        protected $table = 'comidas';

        public function getComida($id){

            $sql = $this->select('comidas.*')
                    ->where('comidas.id_avaliacao',$id)
                    ->get();

                    return $sql;
        }
}

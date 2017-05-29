<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Avalicacao extends Model
{
    protected $table = 'avaliacoes';

    public function pesquisaAvaliacoes($parametros){

        $sql = $this->select('avaliacoes.*','estabelecimento.name as nomeEtb','estabelecimento.tipo as tipoEtb','user.name',
                            'internet.internet','internet.velocidade','internet.tipo','internet.senha')
               ->join('estabelecimentos as estabelecimento', 'avaliacoes.id_estabelecimento', '=', 'estabelecimento.id')
               ->join('users as user', 'avaliacoes.id_user', '=', 'user.id')
               ->leftjoin('internets as internet', 'avaliacoes.id', '=', 'internet.id_avaliacao');
        /*     ->where('avaliacoes.id_user',$id)
             ->get();*/

        if($parametros){
            foreach ($parametros as $key => $parametro){
                switch ($key)
                {
                    case ($key == "id_user" AND $parametro != ''):
                        return $sql->where('avaliacoes.id_user',$parametro)->get();
                        break;
                    case ($key == "id_avaliacao" AND $parametro != ''):
                        return $sql->where('avaliacoes.id','=',$parametro)->first();
                        break;
                }
            }
        }


        return $sql;
    }

    public function avalicoes(){

        $sql = $this->select('avaliacoes.*','estabelecimento.name as nomeEtb','estabelecimento.tipo as tipoEtb')
            ->join('estabelecimentos as estabelecimento', 'avaliacoes.id_estabelecimento', '=', 'estabelecimento.id')
            ->get();

        return $sql;
    }



}

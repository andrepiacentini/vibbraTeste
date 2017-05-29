<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 23/05/17
 * Time: 09:49
 */

namespace App\Service;
use App\Entities\Estabelecimento;

use Auth;
use DB;
use Helper;


class EstabelecimentoService
{

    protected $estabelecimento;

    public function __construct()
    {
        $this->estabelecimento = new Estabelecimento();

    }

    public function store($dados)
    {

        try {
            DB::beginTransaction();

            foreach ($dados as $key => $value) {
                $dados[$key] = \Helper::remove_chars($value);
            }

            $this->estabelecimento->name =$dados['nome'];
            $this->estabelecimento->endereco = $dados['endereco'];
            $this->estabelecimento->cidade = $dados['cidade'];
            $this->estabelecimento->estado = $dados['uf'];
            $this->estabelecimento->pais = $dados['pais'];
            $this->estabelecimento->tipo =$dados['tipo'];
            $this->estabelecimento->save();

            DB::commit();
            return true;
        } catch (Exception $ex) {
            DB::rollBack();
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    public function getEstabelecimentos(){
        try {
             return $this->estabelecimento->getAllEstabelicimentos();
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    public function findEstabelecimento($id){

        return $this->estabelecimento->findEstabelecimento($id);

    }

}
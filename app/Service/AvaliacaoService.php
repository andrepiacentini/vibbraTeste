<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 23/05/17
 * Time: 09:49
 */
namespace App\Service;
use DB;
use Helper;
use App\Entities\Estabelecimento;
use App\Entities\Internet;
use App\Entities\Comida;
use App\Entities\Bebida;
use App\Entities\Avalicacao;
use Auth;



class AvaliacaoService
{

    protected $estabelecimento;
    protected $internet;
    protected $authentication;
    protected $avalicao;
    protected $comida;
    protected $bebida;

    public function __construct()
    {

        $this->internet = new Internet();
        $this->avalicao = new Avalicacao();
        $this->authentication = Auth::user();
        $this->comida = new Comida();
        $this->bebida = new Bebida();
    }

    public function storeAvaliacao($dados)
    {

        try {

            foreach ($dados as $key => $value) {
                $dados[$key] = \Helper::remove_chars($value);
            }
            DB::beginTransaction();

            $this->avalicao->id_user = $this->authentication->id;
            $this->avalicao->id_estabelecimento = $dados['id_estabelecimento'];
            $this->avalicao->atendimento =  $dados['count_attendance'];
            $this->avalicao->preco = $dados['count_value'];
            $this->avalicao->Conforto = $dados['count_confort'];
            $this->avalicao->ruido = $dados['general_noise'];
            $this->avalicao->avaliacao_geral = $dados['general_evaluation'];
            $this->avalicao->save();

            if (!empty($dados['comidas'])) {
                $count = sizeof($dados['comidas']);

                for ($i = 0; $i < $count; $i++) {

                    $comida = new Comida();
                    $comida->id_avaliacao = $this->avalicao->id;
                    $comida->tipo = $dados['comidas'][$i];
                    $comida->save();
                }
            }
            if (!empty($dados['bebibas'])) {
                $count = sizeof($dados['bebibas']);
                for ($i = 0; $i < $count; $i++) {
                    $bebida = new Bebida();
                    $bebida->id_avaliacao = $this->avalicao->id;
                    $bebida->tipo = $dados['bebibas'][$i];
                    $bebida->save();
                }
            }
            $this->internet->id_avaliacao = $this->avalicao->id;
            $this->internet->internet = $dados['internet'];
            $this->internet->velocidade = $dados['velocidade'];
            $this->internet->tipo = $dados['tipo_internet'];
            $this->internet->senha = $dados['senha'];
            $this->internet->save();
            DB::commit();
            return true;
        } catch (Exception $ex) {
            DB::rollBack();
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }
    public function minhasAvaliacoes(){

        try {

             $dados['id_user'] = $this->authentication->id;
             return  $this->avalicao->pesquisaAvaliacoes($dados);

        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    public function  listarAvaliacoes(){
        try {
            return  $this->avalicao->avalicoes();
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    public function showAvaliacao($id){

        try {
             $dados['id_avaliacao'] = $id;
             $dados =  $this->avalicao->pesquisaAvaliacoes($dados);
             $dados['comidas'] =  $this->comida->getComida($dados->id);
             $dados['bebidas'] = $this->bebida->getBebida($dados->id);

             return $dados;
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }


}
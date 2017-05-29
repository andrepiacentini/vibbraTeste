<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\EstabelecimentoService;
use App\Service\AvaliacaoService;
use App\Http\Requests;
use Helper;
use App\Http\Requests\AvaliacaoRequest;
use Auth;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $estabelecimentoService;
    protected $avaliacaoService;

    public function __construct()
    {
        $this->estabelecimentoService = new EstabelecimentoService();
        $this->avaliacaoService = new AvaliacaoService();
    }

    public function index()
    {
        try {

            $dados = $this->avaliacaoService->listarAvaliacoes();
            if(empty($dados))
                return redirect('home')->with('status', 'Você ainda não tem avaliações');

            return view('listAvaliacoes',compact('dados'));
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {

            $dados = $this->estabelecimentoService->getEstabelecimentos();

            return view('listEstabelecimento',compact('dados'));
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AvaliacaoRequest $request)
    {
        try {

            $this->avaliacaoService->storeAvaliacao($request->all());
            return redirect('home')->with('status', 'Avaliação cadastrada com sucesso.');
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $dados['velocidadeinternet'] =  \Helper::velocidadeinternet();
            $dados['internet'] =  \Helper::internet();
            $dados['internetTipo'] =  \Helper::internetTipo();
            $estabelecimento = $this->estabelecimentoService->findEstabelecimento($id);

            return view('avalicaoStore',compact('estabelecimento','dados'));

        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function minhasAvaliacoes(){

        try {

            $dados = $this->avaliacaoService->minhasAvaliacoes();

            if(count($dados) == 0)
                return redirect('home')->with('status', 'Você ainda não tem avaliações');

            return view('minhasAvaliacoes',compact('dados'));
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

    public function avaliacaoCompleta($id){

        try {
            $dados = $this->avaliacaoService->showAvaliacao($id);

            return view('showAvaliacao',compact('dados'));
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }

    }


}

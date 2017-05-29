<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Helper;
use App\Service\EstabelecimentoService;
use App\Http\Requests\EstabelecimentoRequest;


class EstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $estabelecimentoService;

    public function __construct()
    {
        $this->estabelecimentoService = new EstabelecimentoService();
    }
    public function index()
    {
        try {

            return view('estabelecimentoList');
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
             $dados['estados'] =  \Helper::estados();
             $dados['tipos'] =  \Helper::tipos();
             return view('estabelecimentoStore',compact('dados'));
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
    public function store(EstabelecimentoRequest $request)
    {
        try {
              $this->estabelecimentoService->store($request->all());
              return redirect('home')->with('status', 'Estabelecimento cadastrado com sucesso.');
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
        //
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
}

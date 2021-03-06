<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\CadastroService;
use App\Http\Requests;
use App\Http\Requests\CadastroRequest;
use Illuminate\Support\Facades\Auth;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $cadastroService;

    public function __construct()
    {
        $this->cadastroService = new CadastroService();
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('cadastro');
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
    public function store(CadastroRequest $request)
    {
        try{

            $this->cadastroService->storeUser($request->all());
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect('/home');
        } catch (Exception $ex) {
            return $this->error(null, "Erro ao confirmar operacao: {$ex->getMessage()}");
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

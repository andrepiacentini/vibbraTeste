<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\LoginService;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use Socialite;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $loginService;

    public function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('login');
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
    public function store(LoginRequest $request)
    {
        try {
            if (!$this->loginService->authenticate($request->all())) {
                  return redirect()->back()->withErrors(['error' => 'Login e/ou Senha incorretos']);
            }
            return redirect('home');
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

    public function redirectToProvider($provider)
    {

        try {
          /*  return Socialite::driver('facebook')->redirect();*/
              return Socialite::driver($provider)->redirect();
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }

    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {

        try {
            $socialUser = Socialite::driver($provider)->user();
            $this->loginService->socialLogin($socialUser ,$provider);

            if (!$this->loginService->socialLogin($socialUser,$provider)) {
                  return redirect()->back()->withErrors(['error' => 'Login e/ou Senha incorretos']);
            }
            return redirect('home');

        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }

    }
    public function logout()
    {
        try {
            Auth::logout();
            return redirect()->route('Cadastro');
        } catch (Exception $ex) {
            return $this->error(null, "Erro ao confirmar operacao: {$ex->getMessage()}");
        }
    }


}

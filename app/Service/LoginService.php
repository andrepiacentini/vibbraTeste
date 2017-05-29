<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 23/05/17
 * Time: 09:48
 */

namespace App\Service;
use App\Entities\User;
use Auth;

class LoginService
{

    protected $authentication;

    public function __construct()
    {
        $this->authentication = Auth::user();

    }

    public function authenticate($dados)
    {

        try {

            if (!Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
                 return false;
            }
                 return true;
        } catch (Exception $ex) {
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

}
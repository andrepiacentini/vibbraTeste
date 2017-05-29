<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 23/05/17
 * Time: 12:31
 */
namespace App\Service;
use App\Entities\User;
use Auth;
use DB;
use Helper;


class CadastroService
{

    protected $user;

    public function __construct()
    {
        $this->user = new user();
    }

    public function storeUser($dados)
    {

        try {

            foreach ($dados as $key => $value) {
                $dados[$key] = \Helper::remove_chars($value);
            }
            DB::beginTransaction();

                $this->user->name =$dados['nome'];
                $this->user->email =$dados['email'];
                $this->user->password = \Hash::make($dados['password']);
                $this->user->save();

            DB::commit();
            return  true;
        } catch (Exception $ex) {
            DB::rollBack();
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

}
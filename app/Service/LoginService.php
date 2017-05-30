<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 23/05/17
 * Time: 09:48
 */

namespace App\Service;
use App\Entities\SocialProvider;
use App\Entities\User;
use Auth;
use DB;
use Socialite;

class LoginService
{

    protected $authentication;

    public function __construct()
    {
        $this->authentication = new Auth();
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

    public function socialLogin($socialUser, $provider){
        try {

            $socialProvider = SocialProvider::where('id_provider',$socialUser->id)->first();

            if(!$socialProvider){
                DB::beginTransaction();

                $user  = new User();
                $user->email = $socialUser->email;
                $user->name = $socialUser->name;
                $user->save();

                $socialProvider = New SocialProvider();
                $socialProvider->id_user = $user->id;
                $socialProvider->id_provider = $socialUser->id;
                $socialProvider->provider = $provider;
                $socialProvider->save();
                DB::commit();
            }

            $user = $socialProvider->user;
            Auth::login($user);
            return true;

        } catch (Exception $ex) {
            DB::rollBack();
            return redirect()->back()->withErrors(["Falha na solicitaçao:{$ex->getMessage()}"]);
        }
    }

}
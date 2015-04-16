<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

    public function index(){
        return view('auth/login');
    }

    public function postLogin(){
        $rules = ['E-Mail' => 'required', 'password' => 'required'];
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::route('login')->withErrors($validator);
        }

        $auth = Auth::attempt([
           'email' => Input::get('E-Mail'),
            'password' => Input::get('password')
        ]);

        if($auth === false){
            return Redirect::route('login')->withErrors([
                'Felaktiga uppgifter!'
            ]);
        }

        return Redirect::route('home');
    }

}

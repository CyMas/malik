<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function postLogin()
    {
    $email = Input::get('email');
    $password = Input::get('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            return redirect('admin/home');
            }
        else{
            return 'Password salah';
        }
    }

    public function getLogout()
    {
    Auth::logout();
    return redirect('/');
    }
}

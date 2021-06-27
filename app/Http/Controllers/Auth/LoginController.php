<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Sentinel;
use Validator;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('welcome');
        }
    }

    public function postLogin(Request $request)
    {
        Sentinel::disableCheckpoints();
        $errorMsgs  =[
            'email.required' => 'Please provide email ID',
            'email.email' => 'The email must be a valide email',
            'password.required' => 'password is required'
        ];
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ], $errorMsgs);

        if($validator->fails())
        {
            $returnData = array(
                'status' => 'error',
                'message' => 'Please review fiels',
                'errors' => $validator->errors()->all()
            );
        }

        if(Sentinel::check())
        {
            return redirect(url('/'));
        }else{
            $returnData = array(
                'status' => 'error',
                'message' => 'Please review',
                'errors' => ['Email or password mismatched']
            );
        }

    }


    public function logout()
    {
        Sentinel::logout();
        return redirect(url('/login'));
    }

 

}

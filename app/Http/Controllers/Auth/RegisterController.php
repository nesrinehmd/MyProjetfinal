<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use App\Mail\SignupEmail;
use Illuminate\Auth\Events\Registered;
//use Illuminate\Support\Facades\Mail;
//use Illuminate\Http\Request;
use Mail;
use Sentinel;
//use Validator;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        //$this->middleware('auth'); si seulement les utilisateurs inscris sont autorisés 
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        
    }*/

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */



     //Inscription
   
    public function register(Request $request)
    {
       /* Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => Hash::make($request['password']),
            'confirme_password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();*/

        /*return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);*/

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //$user->verification_code = sha1(time());
        $user->save();

       //if($user != null){
        //MailController::sendSignupEmail($user->name, $user->email/*, $user->verification_code*/);
           // return redirect()->back()->with(session()->flash('alert-success', 'Your account has been created, please check your email for verification'));
            //show a msg to user
    //}

        //show error msg
        return redirect()->back()->with(session()->flash('alert-danger', 'Erreur '));

    }





    //Connexion

  /*public function login()
{
    return [
        Fortify::username() => 'required|string',
        'password' => 'required|string',
    ];
}*/

    /*public function login(Request $request)
    {

        if (auth()->attempt(request(['email', 'password'])) == true ) {

            return redirect(url('/welcome'));
        }

        else {

      
            return back()->withErrors([
      'message' => 'Votre email ou mot de passe est inccorrecte, verifiez!!',
     ]);
        }
    }*/


    /*public function login(Request $request)
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
            //return redirect(url('/welcome'));
            return view('/');
        }else{
            $returnData = array(
                'status' => 'error',
                'message' => 'Please review',
                'errors' => ['Email or password mismatched']
            );
        }

    }*/



    
   public function show_login_form()
    {
        return view('auth.login');
    }




    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {

            return redirect()->route('App');
            //return view('welcome');


        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }




    public function show_signup_form()
    {
        //return view('backend.register');
        return view('auth.register');
    }




    public function process_signup(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
 
        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);

        session()->flash('message', 'Your account is created');
       
        return redirect()->route('login');
    }




    //Déconnexion

    /*public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    //return redirect('/');
    return view('/App');
    }*/


    /*public function logout()
    {
        Sentinel::logout();
        return redirect(url('/App'));
    }*/




    /*public function logout()
    {
        return redirect('/')->with(Auth::logout());
    }*/

    /*public function logout(Request $request) {
        Auth::logout();
        return redirect('/App');
    }*/


    public function logout (Request $request) {
        $accessToken = auth()->user()->token();
        $token= $request->user()->tokens->find($accessToken);
        $token->revoke();
        return view('welcome');
    }


    /*public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return redirect('/')->with(Auth::logout());
        // Auth::logout();
    }*/


}

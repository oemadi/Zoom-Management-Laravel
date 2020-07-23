<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Auth;
<<<<<<< HEAD
=======
use Session;

>>>>>>> 81e2a8088923e12142692814006d03869ed27ea5

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

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $redirectTo = '/login';
=======
    // protected $redirectTo = '/login';
>>>>>>> 81e2a8088923e12142692814006d03869ed27ea5

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     public function showRegistrationForm()
    {
        return view('auth.register');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


<<<<<<< HEAD
     public function register(Request $request)
    {

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

       $this->registered($request, $user);
        return view('auth.login');


=======
    public function register(Request $request)
    {
      $this->validator($request->all())->validate();
      event(new Registered($user = $this->create($request->all())));
      $this->guard()->login($user);
      $this->registered($request, $user);
      session()->flash('succes','Mohon cek email !');
      return view('auth.register');
>>>>>>> 81e2a8088923e12142692814006d03869ed27ea5
    }

     protected function guard()
    {
        return Auth::guard();
    }

    protected function registered(Request $request, $user)
    {
        check_register($user);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        // $password = $data['password'];
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nik' => $data['nik'],
            'jabatan' => $data['jabatan'],
            'instansi' => $data['instansi'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

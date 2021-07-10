<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\UserClient;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Aboutus;

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
    }

    public function index()
    {
        $data['about'] = Aboutus::find(1);
        return view('auth.regis', $data);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function store(Request $request)
    {
        // return UserClient::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
        // $request->validate([
        //     'username' => 'required|max:5',
        //     'password' => 'required|min:5',
        //     'nama' => 'required|max:100',
        //     'email' => 'required|unique',
        //     'telp' => 'required',
        //     'alamat' => 'required|max:100'
        // ]);

        $data_regis = array(
            'username' => $request->username,
            'password' => bcrypt($request->username),
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
        );
        $regis = userClient::create($data_regis);
        if($regis){
            return redirect()->route('login')->with('sukses', 'Registration Success');
        }
            return redirect()->route('regis')->with('sukses', 'Registration Unsuccess');


    }
}

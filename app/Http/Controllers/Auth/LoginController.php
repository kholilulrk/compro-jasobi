<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Aboutus;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function index()
    {
        $data['about'] = Aboutus::find(1);
        return view('auth.login', $data);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->route('admin.dashboard');
        }

        if (Auth::guard('user')->attempt($credentials)) {
            return redirect()->route('userclient.dashboard');
        }

        return redirect()->back();
    }
    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('dashboard');
    }
}

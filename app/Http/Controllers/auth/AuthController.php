<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){

        $request->validate([

            'email'=>'required|email',
            'password'=>'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    
    }
    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request){

        $request->validate([

            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'cpassword'=>'required',
            'number'=>'required',
            'gender'=>'required',
        ]);

        User::create([

            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'cpassword'=>\Hash::make($request->cpassword),
            'number'=>$request->number,
            'gender'=>$request->gender,
        ]);

        Auth::login($user);

        return redirect()->intended('home');
       /* if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
     return redirect('register')withError('error');*/
    }

    public function home(){
   return view ('home');
    }
}
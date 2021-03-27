<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirect = 'login';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();


      $this->_registerOrLoginUser($user);
        // Return home after login
       return redirect()->route('reseacherdash');
    }
    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->user = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->status = 5;
            $user->userRole = 3;

            $user->save();
        }
else{
//    die($user);
    // if($user->status == 0)
    // {
    //     return redirect('login')->with('error', 'Your Account is under review');
    // }
    // else if($user->status == 2)
    // {
    //     return redirect('login')->with('error', 'Your Account Rejected');
    // }
    // else if($user->status == 3)
    // {
    //     return redirect('login')->with('error', 'Your Account Deleted');
    // }
    // else if($user->status == 1){
        Auth::login($user);
        return redirect('reseacherdash');
//    }

}
    }
}

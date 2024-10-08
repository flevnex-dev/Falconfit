<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
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
     * 
     */


    protected function redirectTo()
    {
        $user=Auth::user();
        //dd($user);
        if($user->user_type_id == 1){
            return '/dashboard';
        }
        else{
            // return '/user/dashboard';
            return '/checkout';
        }
    
    }

    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // protected function credentials(Request $request)
    // {
    //     if(is_numeric($request->get('email'))){
    //         return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
    //     }
    //     return $request->only($this->username(), 'password');
    // }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        // $this->middleware('auth:customers')->except('logout');

    }
    public function login()
    {
        $loginType='customer';
        if(str_contains(URL::current(), "user")) {
            $loginType='user';
        }
     
        return view('auth.login2',compact('loginType'));
    }
    protected function guard()
    {
        return Auth::guard('customers');
    }
    public function customerLgin(Request $request)
    {
        # code...
        $validatedData = $request->validate([

            'email' => 'required',
            'password' => 'required|min:8',

        ]);
        $customer = Customer::where('email', '=', $request->email)->first();
        if ($customer) {
            if (Hash::check($request->password, $customer->password)) {
               
                Auth::guard('customers')->login($customer);

                return redirect('home');
            }
            else{
                return back();
            }
        }
        else{
            return back();
        }
        if(Auth::guard('customers'))
        return redirect('home');


    }
    public function userLgin(Request $request)
    {
        # code...
        $validatedData = $request->validate([

            'email' => 'required',
            'password' => 'required|min:8',

        ]);
        $customer = User::where('email', '=', $request->email)->first();
       
        if ($customer) {
            if (Hash::check($request->password, $customer->password)) {
                Auth::guard('web')->login($customer);
                return redirect('user/home');
            }
            else{
                return back();
            }
        }
        else{
            return back();
        }
      


    }
     public function customerLogout()
    {
        # code...
      
        Auth::guard('customers')->logout();
        return redirect()->route('customerlogin');
    }
    public function userLogout()
    {
        # code...
      
        Auth::guard('web')->logout();
        return redirect()->route('userlogin');
    }
  
    
}

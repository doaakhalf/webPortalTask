<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::guard('customers')->user();
        if( $user){
        $cust_id= $user->id;
        $users=User::where('customer_id', $cust_id)->get();
        if( empty($user->email_verified_at))
        return redirect('customer/login')->with('message','plz verify your mail');
        else
        return view('home2',compact('users'));
        }
        else{
        return redirect('customer/login');

        }
    }
    public function show()
    {

        return view('user.home');
    }
}

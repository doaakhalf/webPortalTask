<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
        // $this->middleware('guest');
    }
    public function register()
    {

        return view('auth.register2');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $data)
    {

        $user = Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'website' => $data['website'],
            'password' => Hash::make($data['password']),
        ]);
        $to_name = $data['name'];
        $to_email = $data['email'];

        Mail::send('emails.verification', ["data" => $user], function ($message) use ($to_name, $to_email, $data) {
            $message->to($to_email, $to_name)
                ->subject('Mail verification');
            $message->from(env('MAIL_USERNAME'), 'Email verification');

        });

        Auth::guard('customers')->login($user);

        return redirect('home');

    }
    public function verify($id)
    {
        # code...
        Customer::where('id', $id)->update(['email_verified_at' => Carbon::now()->toDateTimeString()]);

        return Redirect::to('home');
    }
}

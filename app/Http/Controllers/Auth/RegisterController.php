<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Session;




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
    protected $redirectTo = RouteServiceProvider::HOME ;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {Session::flash('message', 'User successfully created.');
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255','regex:/^[a-zA-Z ñÑ]+$/'],
            'lname' => ['required', 'string', 'max:255','regex:/^[a-zA-Z ñÑ]+$/'],
            // 'lname' => ['required', 'string', 'max:255','regex:/^[A-Z][a-zA-Z ñÑ]+$/'],
            'phone' => 'required | numeric | digits:12 | starts_with:639',
            'email' => 'required | email |unique:users',
            'password' => 'required | min:8 | max:12|confirmed',

            
        ] 
    );
        
    }

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        Session::flash('message', 'User successfully created.');
       
        return User::create([
            'fname' => Str::ucfirst($data['fname']),
            'lname' => $data['lname'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

            Session::flash('message', 'User successfully created')
        ]) 
         
        ;
        // return redirect()->intended($this->redirectPath())->with('success','It is successMessage');
        // return redirect()->back()->with('message', 'IT WORKS!');
        return redirect()->with(['message' => 'your message']);

        Session::flash('message', 'User successfully ');
       
    }

   //Auth::login($user);
//    $notification = array(
//     'message' => 'Registration Completed!',
//     'alert-type' => 'success'
// );
// return Redirect()->route('login')->with($notification);
//return redirect(RouteServiceProvider::HOME)->with($notification);




}

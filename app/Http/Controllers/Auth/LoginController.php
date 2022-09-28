<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

use Validator;
use Illuminate\Validation\Rule;

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
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //log user model way
        //query from the database user tables
        $userInfo = user::where('email', '=', $request->email)->first();

        if (!$userInfo) {
                return back()->with('fail', 'Does not recognize your email address');
            } else {
                //check password
                if (Hash::check($request->password, $userInfo->password)) {
                    $request->session()->put('LoggedUser', $userInfo->id);
                    // return redirect('login')->with('message', 'You are logged in');
                } else {
                    return back()->with('fail', 'Incorrect password');
                }
            }


            

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.dashboard');
            } 
            elseif (auth()->user()->type == 'doctor') {
                return redirect()->route('doctor.home');
            }
            
            elseif (auth()->user()->type == 'secretary') {
                return redirect()->route('secretary.home');
            }
            // new code above and below
            elseif (auth()->user()->type = 'patient') {
                return redirect()->route('patient.home') 
                //login success message
                ->with('message', 'Patient');
            } 
            else {
                // return redirect()->route('home');
                return redirect()
                    ->route('login')
                    ->with('error', 'Email-Address And Password Are Wrong.');
            }
        } 
        else {
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');

            //log user info model way
            //query from the database admin tables
            // $input = user::where('email', '=', $request->email)->first();


        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
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
        $this->middleware('guest')->except('logout');
    }

	public function validationMessage()
	{
		return [
			'name.required' => __('common.register.validation-msg.name-required'),
			'phone.required' => __('common.register.validation-msg.phone-required'),
			'email.required' => __('common.register.validation-msg.email-required'),
			'email.email' => __('common.register.validation-msg.email-email'),
			'phone.phone' => __('common.register.validation-msg.email-email'),
			'email.max' => __('common.register.validation-msg.email-max'),
			'password.required' => __('common.register.validation-msg.password-required'),
			'password.min' => __('common.register.validation-msg.password-min'),
			'phone.unique' => __('common.register.validation-msg.phone-unique'),
			'email.unique' => __('common.register.validation-msg.phone-unique'),
		];
	}

	public function showLoginForm(Request $request)
	{
		$from = $request->segment(1);
		if(strtolower($from) == "admin")
			return view('auth.login'); //Admin
		else
			return view('login',["fromPage" => $from]);
	}

	/* Check is active user or not while login */
	protected function validateLogin(Request $request)
    {
		// Get the user details from database and check if user is exist and active.		
		$user = User::where('email',$request->email)->first();
		if( $user && !$user->is_active){
			throw ValidationException::withMessages([$this->username() => __('common.login.messages.login-active-account')]);
		}
		
		// Then, validate input.
		return $request->validate([
			$this->username() => 'required|string',
			'password' => 'required|string',
		], $this->validationMessage());
    }

	/* Redirect user after login */
	protected function authenticated(Request $request, $user)
	{
		if($user->is_active == "1") 
		{
			if(in_array($user->role,["A","FM"])) 
			{
				return redirect('/admin');
			}
			else 
			{
				return redirect('/');
			}
		}
		return redirect('/');
	}

	public function homepageRedirect(Request $request)
	{
		 if(!Auth::check()) {
			return redirect('/admin');
		 }
		 else {
			return view('auth.login'); //Admin
		 }
	}
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Validator;
use Symfony\Component\HttpFoundation\Request;   
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

    public function login(Request $request){
        $credentials = [
          'email' => $request->email ,
          'password' => $request->password
         ];
  
  
      $rules = [
          'email'    => 'required|email',
          'password' => [
              'required',
              'string',
              'min:4',
          ],
      ];
      $error =Validator::make($credentials,$rules);
  
  
      if($error->fails())
      {
          return redirect()->back()->with('message',$error->errors()->all());
      }
  
  
  
  
    if(Auth::attempt($credentials)){

        $user = Auth::user();
        if ($user->hasRole('Super-Admin')) {

            return redirect()->route('dashboard');
        }else {

            return redirect()->back();
        }

      
 
    }else{
    return redirect()->back()->with('message',$error->errors()->all());
    }
  
  
  
  
  
      }
}

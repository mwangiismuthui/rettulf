<?php

namespace App\Http\Controllers\Auth;

use App\Balance;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use Response;
use Auth;
use DB;
use App\Jobs\BulkEmailSender;
use Carbon\Carbon;

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
        $this->middleware('guest');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function register(Request $request)
    {
        //validate the fields...
        $credentials = [
            'email' => $request->email,
            'designation' => $request->designation,
            'username' => $request->username,
            'profile_photo' => $request->profile_photo,
            'location_id' => $request->location_id,
            'name' => $request->name,
            'password' => $request->password
        ];


        $rules = [
            'email'    => 'required|email|unique:users,email',
            'name'    => 'required',
            'designation'    => 'required',
            'username'    => 'required|unique:users,username',
            'location_id'    => 'required',
            'profile_photo'    => 'required',
            // 'adress'    => 'required',
            'password' => [
                'required',
                'string',
                'confirmed',
                'min:4',

            ],
        ];

        $request->validate($rules,$credentials);


        
        $imgdestination = '/ProfilePics';
        $gallerarray = [];
        // return $request->hasfile('profile_photo');
        if ($request->hasfile('profile_photo')) {
            $profile_photo = $request->file('profile_photo');
            $imgname = $this->generateUniqueFileName($profile_photo, $imgdestination);
        }
        $password = Hash::make($request->password);
        $user = new User;
        $user->name = $request->name;
        $user->location_id = $request->location_id;
        $user->username = $request->username;
        $user->profile_photo = $imgname;
        $user->email = $request->email;
        $user->password = $password; //hashed password.
        if ($user->save()) {
            $user_id = $user->id;
            $designation = $request->designation;
            $role = DB::table('roles')->where('name', $designation)->pluck('id')->first();

            DB::table('model_has_roles')->insert([
                'role_id' => $role,
                'model_type' => 'App\User',
                'model_id' => $user->id,
            ]);
            
            $balances = new Balance();
            $balances->user_id = $user_id;
            $balances->save();

            Auth::login($user, true);
            
            $user = Auth::user();
            $data = array(
                'subject' =>"Welcome to our Music Application",
                
            );
            $recipient_emails=$request->email;
            BulkEmailSender::dispatch($recipient_emails,$data)->delay(Carbon::now()->addSeconds(5));
            if ($user->hasRole('Super-Admin')) {

                // dd($user);

                return redirect()->intended('dashboard');
            } else {

                return redirect()->intended('home');
            }
        }
    }
    public function generateUniqueFileName($image, $destinationPath)
    {
        $initial = "ProfilePics ";
        $name = $initial  . time() . '.' . $image->getClientOriginalExtension();
        if ($image->move(public_path() . $destinationPath, $name)) {
            return $name;
        } else {
            return null;
        }
    }
}

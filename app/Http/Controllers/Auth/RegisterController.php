<?php

namespace App\Http\Controllers\Auth;

use App\Mail\EmailVerification;
use App\Mail\VerifyEmail;
use App\User;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    //protected $redirectTo = 'member/welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('guest');*/
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required|int',
            'address' => 'required',
            'phone' => 'required',
            'age' => 'required'
            /*'password' => 'required|string|min:6|confirmed',*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */

    public function create(array $data)
    {

        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'age' => $data['age'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email_token' => str_random(30)

        ]);
    }

    public function register(Request $request)
    {
        // Laravel validation
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            //$this->throwValidationException($request, $validator);
            return Redirect::back()->withInput()->withErrors($validator);
        }

        // Using database transactions is useful here because stuff happening is actually a transaction
        // I don't know what I said in the last line! Weird!

        DB::beginTransaction();
        try {
            $user = $this->create($request->all());
            // After creating the user send an email with the random token generated in the create method above
            $email = new EmailVerification(new User($user->toArray()));
            Mail::to($user->email)->send($email);
            DB::commit();
            return Redirect::back()->with('warning', 'Check your mail and verify your account');
        } catch (Exception $e) {
            dd($e);
            DB::rollback();
            return back()->with('error', 'Something went wrong try again later');

        }


    }

    public function confirm($token)
    {
        // The verified method has been added to the user model and chained here
        // for better readability
        $user = User::where('email_token',$token)->firstOrFail();
        $user->verified();
        return redirect('auth/password/'.$user->id);
    }



}

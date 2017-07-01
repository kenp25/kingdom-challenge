<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Mail\ChallengeEmail;
use App\Subscriber;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['authorized', 'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $subscribers = Subscriber::all();
        $challenges = Challenge::all();
        return view('admin', ['users'=> $users, 'subscribers'=>$subscribers, 'challenges' => $challenges]);
    }


    public function showEdit($id)
    {
        $user = User::find($id);
        return view('edituser', ['user'=>$user]);
    }

    public function edit($id, Request $request)
    {
        User::where('id', $id)
            ->update([
                'firstname'=> $request['firstname'],
                'lastname'=>$request['lastname'],
                'email' => $request['email'],
                'admin' => $request['admin'],
                'paid' => $request['paid']
            ]);

        return Redirect::to('admin/welcome')->with('message', "Successfully updated user.");

    }

    public function create(Request $request)
    {
        $validator = Validator::make(
            $request->all(), [
                'day' => 'required|integer|unique:challenges',
                'name' => 'required|string|max:255',
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $ext = ['mp4', 'mov', 'flv', 'mpg'];
            if (in_array(Input::file('video')->getClientOriginalExtension(), $ext)) {
                $video = Input::file('video');
                $file_name = md5(time()) . '.' . $video->getClientOriginalExtension();
                $video->move(public_path() . '/files', $file_name);

                $challenge = Challenge::create([
                    'day' => $request['day'],
                    'name' => $request['name'],
                    'video' => '/files/' . $file_name
                ]);

                DB::commit();
                return Redirect::back()->with('success', 'Upload successful');
            } else {
                return Redirect::back()->with('error', 'Invalid file');
            }
        } catch (Exception $e) {
            dd($e);
            DB::rollback();
            return back()->with('error', 'Something went wrong try again later');

        }
    }


    public function store(Request $request)
    {
        return view('add_challenge');
    }

    public function userAdd(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required|int',
            'admin' => 'required|int',
            'paid' => 'required|int',
            'address' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6'
        ]);

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'age' => $request['age'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'paid' => $request['paid'],
            'admin' => $request['admin'],
            'email_token' => str_random(30),
            'password' => Hash::make($request['password'])

        ]);

        return Redirect::to('admin/welcome')->with('message', "Successfully created user");

    }

}

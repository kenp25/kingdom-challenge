<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    public function create(Request $request, $user)
    {
        $validator = $this->validator($request->all());
        if($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        }

        User::where('id', $user)->update(array('password' =>  Hash::make($request['password'])));
        return redirect()->to('auth/login')->with('success', 'Created password successfully, Login now');
    }


}

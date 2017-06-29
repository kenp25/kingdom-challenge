<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Mail\ChallengeEmail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('authorized');
    }

    public function index()
    {
        return view('add_challenge');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
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
            $ext = ['mp4','mov','flv','mpg','avi'];
            if (in_array(Input::file('video')->getClientOriginalExtension(), $ext)) {
                $video = Input::file('video');
                $file_name = md5(time(5)) . '.' . $video->getClientOriginalExtension();
                $video->move(public_path() . '/files', $file_name);

                Challenge::create([
                    'day' => $request['day'],
                    'name' => $request['name'],
                    'video' => '/files/' . $file_name
                ]);

                DB::commit();
                return Redirect::back()->with('success', 'Upload successful');
            } else {
                return Redirect::back()->with('error', 'File must be mp4, avi, mpg,flv, or mov');
            }
        } catch (Exception $e) {
            dd($e);
            DB::rollback();
            return back()->with('error', 'Something went wrong try again later');

        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return view('add_challenge');
    }


    /**
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        $challenges = Challenge::all();
        if (!$challenges)
            abort(404);
        $challenge = Challenge::find($id);
        if (!$challenge)
            abort(404);
        return view('challenge', ['challenge' => $challenge, 'challenges'=> $challenges]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editchallenge');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


    public function addAudio($id, Request $request)
    {
        $challenge = Challenge::find($id);

        $ext = ['mp3', 'wma'];

        if (in_array($request->file('audio')->getClientOriginalExtension(), $ext)){
            $audio = $request->file('audio');
            $audio_name = md5(time(5)) . '.' . $audio->getClientOriginalExtension();
            $audio->move(public_path() . '/files', $audio_name);

            $challenge->update(['audio' => '/files/'.$audio_name]);
            return Redirect::back()->with('success', 'Upload successful');

        }else{
            return Redirect::back()->with('error', 'Invalid File');
        }



    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('welcome');
    }

    public function signup()
    {
        //
        return view('signup');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function do_signup(Request $request)
    {
        //
            $data = $request->all();
            $rules = [
                'firstname' => 'required|alpha_dash',
                'lastname' => 'required|alpha_dash',
                'username' => 'required|min:3|max:15|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:25|same:cpassword',
                'cpassword' => 'required|min:6|max:25|same:password',
                   
            ];
            $messages = [
                'same' => 'The passwords must match.',
            ];
            $validation = Validator::make($data, $rules, $messages);
            if($validation->fails())
                return $validation->errors()->add('error', 'true');
            $data['password'] = Hash::make($data['password']);
            $user = User::Create($data);
            $mail = Mail::send('layouts.mail.verify', ['data'=>$user], function($message) use ($data){
                $message->to($data['email'], $data['firstname']. ' '.$data['lastname'])->subject('Confirmation of account');
            });
            
            return $mail ? 'Registration is successful' : 'Error occured.';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function csrf(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

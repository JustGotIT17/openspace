<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Hash;
use Validator;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function user() {
        return Auth::user();
    }

    public function do_signin(Request $request)
    {
        //

        $user = [
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ];
        $rules = [
            'username' => 'required|min:3|max:15',
            'password' => 'required|min:6|max:25',               
        ];
        
        $validation = Validator::make($user, $rules);
        if($validation->fails())
            return $validation->errors()->add('error', 'true');

        if(!Auth::attempt($user))
            return response()->json(['password' => ['Invalid username or password'], 'error' => ['true']]);

        return $user;
    }

    public function do_signout() {
        Auth::logout(Auth::user());
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

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

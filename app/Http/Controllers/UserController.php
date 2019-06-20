<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json(compact('users'),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'postcode' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'phone' => 'required|string',
            'password' => 'required'
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->postcode = $request->postcode;
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if(!$user->save()) {
            return response()->json(['message' => 'Unable to update user data'],422);
        }

        return response()->json(['message' => 'User data has been updated'],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'postcode' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email'
        ]);

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->postcode = $request->postcode;
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if(!$user->save()) {
            return response()->json(['message' => 'Unable to update user data'],422);
        }

        return response()->json(['message' => 'User data has been updated'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!User::destroy($id)) {
            return response()->json(['message' => 'Unable to delete user record'],422);
        }
        return response()->json(['message' => 'User record has been deleted'],200);
    }
}

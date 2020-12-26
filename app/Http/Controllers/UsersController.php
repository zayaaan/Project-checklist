<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('users.index');
        $getusers = User::orderBy('created_at', 'desc')->get();
        return view('users.index', compact('getusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(getusers $getusers)
    {
        //
        $getusers = User::find($getusers);
        return view('users.edit', compact('getusers'));
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
      
        $user->delete();
        return redirect('/users');
    }
}


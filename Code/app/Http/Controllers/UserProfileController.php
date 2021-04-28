<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //

        return view('public.user_profile');

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
        //
        $request->validate([
            'User_Name' => 'required',
            'User_Email' => 'required',
            'User_Phone' => 'required',
            'User_Password' => 'required',


        ]);
        Admin::create([
            'name' => $request->User_Name,
            'email' => $request->User_Email,
            'phone' => $request->User_Phone,
            'password' => Hash::make($request->User_Password),
        ]);

        alert()->Success('Admin has been created', 'Success')->autoclose(3000);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //


        if ($request->input('current_password') && $request->input('new_password')){

            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required'],
            ]);
            $password=bcrypt($request->new_password);
        }else{

            $password=auth()->user()->password;
        }


        User::where("id", auth()->id())->update([
            'name' => $request->input('User_Name'),
            'email' => $request->input('User_Email'),
            'phone' => $request->input('User_Phone'),
            'password' =>$password,

        ]);

        alert()->Success('Profile has been Updated', 'Success')->autoclose(3000);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}

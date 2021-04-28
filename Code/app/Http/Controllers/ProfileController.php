<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Profile;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return view('dashboard.profile')->with('Admin', Admin::find($id)->first());
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
        ]);


        if ($request->filled(['Admin_Name'])) {
            $Admin_Name = $request->input('Admin_Name');
        } else {
            $Admin_Name = Admin::find($id)->id;
        }

        if ($request->filled(['Admin_Email'])) {
            $Admin_Email = $request->input('Admin_Email');
        } else {
            $Admin_Email = Admin::find($id)->id;
        }


        Admin::where("id", $id)->update([
            'name' => $request->input('Admin_Name'),
            'email' => $request->input('Admin_Email'),
            'password' => Hash::make($request->new_password),

        ]);

        alert()->Success('Profile has been Updated', 'Success')->autoclose(3000);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //$2y$10$i6q9F3BHsriYUlYVD1xGReBpMLLtRaAq4W8KwBU2F8L8.bPDYcR4S
    }
}

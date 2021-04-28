<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
       //dd(auth('admin')->user()->type);
        if (auth('admin')->user()->type == "super")
        {
            return view('dashboard.manage_admin')->with('admins', Admin::all());

        } else {
            return view('dashboard.index');
        }
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Admin_Name' => 'required',
            'Admin_Email' => 'required',
            'Admin_Password' => 'required',
        ]);
            Admin::create([
                'name' => $request->Admin_Name,
                'email' => $request->Admin_Email,
                'password' => Hash::make($request->Admin_Password),
            ]);
        alert()->Success('Admin has been created', 'Success')->autoclose(3000);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if ($request->filled(['Admin_Name'])) {
            $Admin_Name = $request->input('Admin_Name');
        } else {
            $Admin_Name = Admin::find($id)->id;
        }




        Admin::where("id", $id)->update([
            'name' => $request->input('Admin_Name'),
            'email' => $request->input('Admin_Email'),

        ]);

        alert()->Success('User has been Updated', 'Success')->autoclose(3000);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Admin::destroy($id);

        alert()->error('Admin has been Deleted', 'Deleted')->autoclose(3000);

        return redirect()->back();
    }

    public function showManageUsers()
    {
        return view('dashboard.manage_user')->with('users', User::paginate(10));
    }
}

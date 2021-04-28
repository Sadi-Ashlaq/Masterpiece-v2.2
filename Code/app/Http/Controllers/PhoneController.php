<?php

namespace App\Http\Controllers;

use App\Phone;
use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $phones = Phone::all();
        $brands = Brand::all();

        return view('dashboard.manage_phone')->with('phones', $phones)->with('brands', $brands);
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

           $request -> validate([
            'Phone_Name' => 'required',
            'brand_id' => 'required',
//            'Phone_Color' => 'required',
            'Phone_Image' => 'required'
        ]);

        $file_extenion = $request -> Phone_Image -> getClientOriginalExtension();

        $file_name = time() . '.' .$file_extenion;

        $path = 'images/Phone_Image';

        $request -> Phone_Image -> move($path, $file_name);


        Phone::create([
            'Phone_Name' => $request->Phone_Name,
            'brand_id' => $request->brand_id,
//            'Phone_Color' => $request->Phone_Color,
            'Phone_Image' => $file_name,
        ]);

//        $phone = new Phone;
//
//        $phone->Phone_Name = $request->input('Phone_Name');
//
//        $phone->brand_id = $request->input('brand_id');
//
//        $phone->Phone_Color = $request->input('Phone_Color');
//
//        $phone->Phone_Image = $file_name;
//
//        $phone->save();

         alert()->Success('Phone has been created', 'Success')->autoclose(3000);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone, $id)
    {
        //

          if ($request->hasFile('Phone_Image')) {
            $file_exetension = $request->Phone_Image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/Phone_Image';
            $request->Phone_Image->move($path, $file_name);
        } else {
            $file_name = Phone::find($id)->Phone_Image;
        }

        if ($request->filled(['Phone_Name'])) {
            $Phone_Name = $request->input('Phone_Name');
        } else {
            $Phone_Name = Phone::find($id)->Phone_id;
        }

        if ($request->filled(['Phone_Color'])) {
            $Phone_Color = $request->input('Phone_Color');
        } else {
            $Phone_Color = Phone::find($id)->Phone_id;
        }


         Phone::where("id", $id)->update([

            'Phone_Name'        => $request->input('Phone_Name'),
            'Phone_Image'       => $file_name,
            'Phone_Color'        => $request->input('Phone_Color')
        ]);

        alert()->Success('Phone has been Updated', 'Success')->autoclose(3000);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Phone::destroy($id);

        alert()->error('Phone has been Deleted', 'Deleted')->autoclose(3000);

        return redirect()->back();
    }
}

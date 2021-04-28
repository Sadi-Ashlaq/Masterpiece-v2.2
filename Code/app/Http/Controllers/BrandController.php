<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Phone;

class BrandController extends Controller
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

        $brands = Brand::all();
        $phones = Phone::all();

        return view('dashboard.manage_brand', compact('brands', 'phones'));
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

            'Brand_Name' => 'required',
            'Brand_Image' => 'required'
        ]);

        $file_extenion = $request -> Brand_Image -> getClientOriginalExtension();

        $file_name = time() . '.' .$file_extenion;

        $path = 'images/Brand_Image';

        $request -> Brand_Image -> move($path, $file_name);


        Brand::create([
            'Brand_Name' => $request->Brand_Name,
            'Brand_Image' => $file_name,
        ]);


         alert()->Success('Brand has been created', 'Success')->autoclose(3000);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        if ($request->filled(['Brand_Name'])) {
            $Brand_Name = $request->input('Brand_Name');
        } else {
            $Brand_Name = Brand::find($id)->Brand_id;
        }

        if ($request->hasFile('Brand_Image')) {
            $file_exetension = $request->Brand_Image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/Brand_Image';
            $request->Brand_Image->move($path, $file_name);
        } else {
            $file_name = Brand::find($id)->Brand_Image;
        }

        Brand::where("id", $id)->update([
            'Brand_Name'        => $request->input('Brand_Name'),
            'Brand_Image'       => $file_name,
        ]);

         alert()->Success('Brand has been Updated', 'Success')->autoclose(3000);

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Brand::destroy($id);

        alert()->error('Brand has been Deleted', 'Deleted')->autoclose(3000);

        return redirect()->back();
    }
}

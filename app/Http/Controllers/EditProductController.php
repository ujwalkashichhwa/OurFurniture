<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Welcome;

class EditProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $furniture = Welcome::all();
        return view("admin.editproduct")->with('furniture', $furniture);
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
        $furniture= Welcome::find($id);
        return view('admin.edit')->with('furniture', $furniture);
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
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'category'=> 'required',
            'brand' => 'required',
            'material' => 'required',
            'color' => 'required',
            'dimension' => 'required',
            'brand' => 'required',
            'image' => 'required',
            'detail' => 'required',
        ]);

        $furniture = Welcome::find($id);

        $furniture->name = $request->input('name');
        $furniture->price = $request->input('price');
        $furniture->brand = $request->input('brand');
        $furniture->category = $request->input('category');
        $furniture->material = $request->input('material');
        $furniture->color = $request->input('color');
        $furniture->dimension = $request->input('dimension');
        $furniture->brand = $request->input('brand');
        $furniture->image = $request->input('image');
        $furniture->detail = $request->input('detail');

        $furniture->save();
        
        return redirect('/editproduct')->with('success', 'Furniture Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $furniture = Welcome::find($id);

        $furniture->delete();

        return redirect('/editproduct')->with('success', 'Furniture Deleted Successfully');
    }
}

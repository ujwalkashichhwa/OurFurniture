<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Welcome;
use App\Cart;
use App\Order; 
use App\NewOrder;
use App\User;
use Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchased = count(Order::all());
        $order = count(NewOrder::all());
        $user= count(User::all());
        $furniture= count(Welcome::all());
        
        return view('admin.dashboard')->with('user',$user)->with('furniture', $furniture)->with('purchased', $purchased)->with('order', $order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        $furniture = new Welcome;

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

        return redirect('/dashboard/create')->with('success', 'Furniture Added Sucessfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function purchasedorder(){
        $orders= Order::all();

        return view('admin.vieworder', ['orders' => $orders]);
    }

    public function createnewproduct(){
        $orders = NewOrder::all();

        return view('admin.neworder', ['orders' => $orders]);
    }
}

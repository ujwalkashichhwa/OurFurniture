<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Welcome;
use App\NewOrder;
use App\Order;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $furniture= Welcome::all();

        return view('home')->with('furniture', $furniture);
    }

    public function show($id)
    {

        $output= Welcome::find($id);
        return view('user.detail')->with('output',$output);
        
    }

    public function create()
    {
        return view('user.neworder');

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'username' =>'required',
            'address' => 'required',
            'contact' => 'required',
            'category'=> 'required',
            'material' => 'required',
            'color' => 'required',
            'dimension' => 'required',
            'detail' => 'required',
        ]);

        $furniture = new NewOrder;

        $furniture->name = $request->input('name');
        $furniture->username = $request->input('username');
        $furniture->address = $request->input('address');
        $furniture->contact = $request->input('contact');
        $furniture->category = $request->input('category');
        $furniture->material = $request->input('material');
        $furniture->color = $request->input('color');
        $furniture->dimension = $request->input('dimension');
        $furniture->detail = $request->input('detail');

        Auth::user()->neworders()->save($furniture);

        return redirect('/home/create')->with('success', 'YOur Order is sent to admin');
    }

    public function getOrder(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return view('user.orderhistory', ['orders' => $orders]);


    }
}

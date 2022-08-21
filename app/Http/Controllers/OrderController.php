<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        $orders = Order::where('user_id', Auth::id())->where('cancel', 0)->get();
        return response()->json($orders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([
            'pickup' => 'required',
            'dropoff' => 'required',
            'price' => 'required | numeric',
            'package_name' => 'required | string',
            'receiver_name' => 'required | string',
            'receiver_phone' => 'required | numeric'
        ], [
            'pickup.required' => 'Pickup address is required',
            'dropoff.required' => 'Dropoff address is required',
            'price.required' => 'Delivery Price can`t be empty ',
            'package_name.required' => 'Package name is required',
            'receiver_name.required' => 'Receiver`s name  is required',
            'receiver_phone.required' => 'Receiver`s phone number is required'
        ]);


        $orderID = mt_rand(9, 23) + time();

        $order = Order::create([
            'user_id' => Auth::id(),
            'order_id' => $orderID,
            'pickup'=> $request->pickup,
            'dropoff' => $request->dropoff,
            'price' => $request->price,
            'package_name' => $request->package_name,
            'receiver_name' => $request->receiver_name,
            'receiver_phone' => $request->receiver_phone,
            'status' => 0,
            'cancel' => false
        ]);

        if($order){
          return back()->with('status', 'You have successfuly place an order');
        } else {
            return back()->with('error', 'An error occur while placing an order');
        }

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

    public function cancel($id){

        $order = Order::find($id)->update([
            'cancel' => true
        ]);

        if($order){
          return back()->with('status', 'You have successfuly cancelled an order');
        } else {
            return back()->with('error', 'An error occur while cancelled an order');
        }
    }

    public function destroy($id)
    {

    }
}

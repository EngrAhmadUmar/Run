<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPagesController extends Controller{
    //

    public function about(){
        return view('user.app.about');
    }

    public function contact(){
        return view('user.app.contact');
    }

    public function help(){
        return view('user.app.help');
    }

    public function profile(){
        return view('user.app.profile');
    }

    public function password(){
        return view('user.app.password');
    }

    public function orders(){

        $orders = Order::where('user_id', Auth::id())->where('cancel', 0)->get();
        return view('user.app.orders', compact('orders' ));

    }

}

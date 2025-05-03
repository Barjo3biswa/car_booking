<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\productCatagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class usersController extends Controller
{
    public function index(){
        // dd("ok");
        $productsi = product::get()->take(4);
        $productsii = product::get()->take(4);
        // dd($productsi);
        return view('users_end.pages.index',compact('productsi','productsii'));
    }

    public function subPage($id){
        $id = Crypt::decrypt($id);
        $products = product::where('category_id',$id)->get();
        return view('users_end.pages.sub-page',compact('products'));
        // dd("ok");
    }

    public function rentNow($id){
        // $id = Crypt::decrypt($id);
        return view('users_end.pages.book-now',compact('id'));
    }

    public function bookNow(Request $request,$id){
        // dd($request->all());
        $id = Crypt::decrypt($id);
        $data=[
            'full_name' =>$request->name,
            'product_id' => $id,
            'user_id' => Auth::user()->id,
            'phone_no' =>$request->phone,
            'pickup_location' =>$request->location,
            'no_of_per' =>$request->persons,
            'pick_date' =>$request->pick_date,
            'ret_date' =>$request->ret_date,
            'pickup_status' =>'initiated',
            'return_status' =>'initiated',
            'status'=>'booked'
        ];

        order::create($data);
        return redirect()->route('my-bookings');
    }

    public function myBookings(){
        $bookings = order::where('user_id',Auth::user()->id)->get();
        return view('users_end.pages.orders',compact('bookings'));
        // dd($bookings);
    }
}

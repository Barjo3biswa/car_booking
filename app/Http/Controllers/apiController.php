<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\productCatagory;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function productCat(){
        $categories = productCatagory::get();

        return response()->json([
            'status' => true,
            'data' => $categories
        ]);
    }

    public function products(Request $request){
        if($request->category == 0){
            $products = product::get();
        }else{
            $products = product::where('category_id',$request->category)->get();
        }
        
        return response()->json([
            'status' => true,
            'data' => $products
        ]);
    }

    
    public function sinProducts(Request $request){
        $products = product::where('id',$request->product)->first();
        
        return response()->json([
            'status' => true,
            'data' => $products
        ]);
    }

    public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1'
    ]);

    Cart::updateOrCreate(
        ['user_id' => $request->user_id, 'product_id' => $request->product_id],
        ['quantity' => DB::raw('quantity + '.$request->quantity)]
    );

    return response()->json(['status' => true, 'message' => 'Added to cart']);
}

}

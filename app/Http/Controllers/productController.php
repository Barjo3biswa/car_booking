<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Product;
use App\Models\productAvailability;
use App\Models\productCatagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class productController extends Controller
{
    public function productCreate(){
        // dd("ok");
        $product_cat = productCatagory::get();
        return view('product.product-create',compact('product_cat'));
    }

    public function saveproduct(Request $request){

        //    dump($request->all());
        // product_name	product_description	price



        $path = null;
        if(isset($request->product_image)){
            $destinationPath = public_path('uploads/product-image');
                $uploaded_photo =$request->product_image;
                $uploaded_photo_name = date('YmdHis').".". $uploaded_photo->getClientOriginalExtension();
                $uploaded_photo->move($destinationPath . "/", $uploaded_photo_name);
            $path = 'uploads/product-image/'.$uploaded_photo_name;
        }

            $data = [
                'product_name'=> $request->product_name,
                'category_id'=> $request->product_category,
                'product_description'=> $request->product_details,
                'image' => $path,
                'price'=> $request->product_price,
            ];

            // dd($data);

           product::create($data);
           return redirect()->route('show');
        }

        public function show(Request $request)
        {
            $data = product::get(); //qry
            // dd($data[0]->product_name);

            return view('show', compact('data'));

        }
        public function showHere(){
            $data = product::get(); //qry
            // dd($data[0]->name);

            return view('show', compact('data'));

        }
        public function edit($id){
            $data = product::where('id',$id)->first();
            // dd($data);
            return view('edit',compact('data','id'));
        }

        public function update(Request $request, $id){

            // dd($request->all());
            $data = [
                'product_name'=> $request->Product_Name,
                'product_category'=> $request->product_category,
                'product_description'=> $request->Product_Details,
                'price'=> $request->Product_Price,

            ];
           product::where('id',$id)->update($data);
           return redirect()->back();

        }

        public function delete($id){

            $data = product::where('id',$id)->delete();
            return redirect()->back();
        }

        public function ProductSales(){

             //dd("ok");
             $product =product::get();
            //  dd($product);

            return view('product.product-sales', compact('product'));

        }
        public function savesalesproduct(Request $request){

            //    dump($request->all());
            // product_name	product_description	price
                $product_name = product::where('id',$request->product_id)->first();
                // dd($product_name);
                product::where('id',$request->product_id)->update(['available_product'=>($product_name->available_product+$request->product_quantity)]);

                $data = [
                    'product_id'=> $request->product_id,
                    'product_name'=> $product_name->product_name,
                    'quantity'=> $request->product_quantity,
                ];

                // dd($data);

               productAvailability::create($data);
               return redirect()->route('product-availability-show');
        }

        public function ViewList(Request $request)
            {
                $data = productAvailability::get(); //qry
                // dd($data[0]->productAvailability_name);
                // dd($data);
                return view('product.product-availability-show', compact('data'));

            }

            public function productCatagory(){
                // dd("ok");
                return view('product.product_catagory');
            }

            public function saveproductcatagory(Request $request){

                $catagory_name = productCatagory::where('name',$request->catagory_name)->first();
                // dd($product_name);
                // productCatagory::where('name',$request->catagory_name)->//update(['available_product'=>($catagory_name->available_product+$request->product_quantity)]);

                //    dd($request->all());
                // product_name	product_description	price
                    $data = [
                        'name'=> $request->catagory_name,
                    ];

                    // dd($data);

                    productCatagory::create($data);
                   return redirect()->back();
                }
                public function ViewCatagory(Request $request)
            {
                $data = productCatagory::get(); //qry
                // dd($data[0]->productAvailability_name);

                return view('product.product_catagory', compact('data'));

            }
            public function showcatagory(Request $request)
            {
                $data = productCatagory::get(); //qry
                // dd($data);

                return view('showcatagory', compact('data'));

            }
            public function editcatagory($id){
                $data = productCatagory::where('id',$id)->first();
                // dd($data);
                return view('editcatagory',compact('data','id'));
            }
            public function updatecatagory(Request $request, $id){

                // dd($request->all());
                $data = [
                    'name'=> $request->catagory_name,
                ];
            productCatagory::where('id',$id)->update($data);
            return redirect()->back();

            }
            public function deletecatagory($id){
                //dd("ok");

                $data = productCatagory::where('id',$id)->delete();
                return redirect()->back();
            }

            public function orders(Request $request){
                
                if($request->status=='new'){
                    $orders = Order::where('status','booked')->orderBy('id', 'DESC')->get();
                }else if($request->status=='confirmed'){
                    $orders = Order::where('status','confirmed')->orderBy('id', 'DESC')->get();
                }else if($request->status=='completed'){
                    $orders = Order::where('status','completed')->orderBy('id', 'DESC')->get();
                }else if($request->status=='Delevered'){
                    $orders = Order::where('status','Delevered')->orderBy('id', 'DESC')->get();
                }else if($request->status=='all'){
                    $orders = Order::orderBy('id', 'DESC')->get();
                }
                $status = $request->status;
                return view('product.orders',compact('orders','status'));
                // dd($orders);
            }

            public function ordersConfirm(Request $request){

                $id = Crypt::decrypt($request->id);
                if($request->status == 'Confirmed'){
                    $order = Order::where('id',$id)->first();
                    $product = Product::where('id',$order->product_id)->first();
                    // dd($order);
                    if($product->available_product >  $product->on_rent){
                        $product = Product::where('id',$order->product_id)->update(['on_rent'=>$product->on_rent+1]);
                    }else{
                        return redirect()->back()->with('error','Cant place order');
                    }
                    Order::where('id',$id)->update(['status'=>$request->status]);
                }

                if($request->status == 'completed'){
                    $order = Order::where('id',$id)->first();
                    $product = Product::where('id',$order->product_id)->first();
                    if($product->available_product >  $product->on_rent){
                        $product = Product::where('id',$order->product_id)->update(['on_rent'=>$product->on_rent-1]);
                    }else{
                        return redirect()->back()->with('error','Cant place order');
                    }
                    Order::where('id',$id)->update(['status'=>$request->status]);
                }
                Order::where('id',$id)->update(['status'=>$request->status]);
                return redirect()->back();

            }

            public function productAvail(){
                $data =product::get();
                return view('product.product-availability', compact('data'));
            }

}


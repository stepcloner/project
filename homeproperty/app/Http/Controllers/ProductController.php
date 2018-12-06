<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function create(){
        $product = new Product();
        return view('admin.products.create',compact('product'));
    }

    public function store(Request $request){
      //  dd($request->all());
        //validate form
        $request->validate([
            'product' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image|required'
        ]);
        //upload img
        if($request->hasFile('image')){
            $image = $request->image;
            $image->move('uploads',$image->getClientOriginalName());
        }
        //save the page
        Product::create([
            'product' => $request->product,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName()
        ]);
        //send the message
            $request->session()->flash('msg','Your Product has been added');
        //redirect page
            return redirect('products/create');
    }

    public function destroy($id)
    {
        //Delete the product
        Product::destroy($id);

        //send a message
        session()->flash('msg','Product has been deleted');
        return redirect('products');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }

    public function update(Request $request, $id){
        //Find the product
        $product = Product::find($id);
        //Validate The form
        $request->validate([
            'product'=> 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        //Check if there is any img
        if($request->hasFile('image')){

            //check if the old image exist inside folder
            if(file_exists(public_path('uploads/').$product->image)){
                unlink(public_path('uploads/').$product->image);
            }

            //upload the new image
            $image = $request->image;
            $image->move('uploads',$image->getClientOriginalName());

            $product->image = $request->image->getClientOriginalName();

        }

        //Updating the product
        $product -> update([
            'product' => $request->product,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $product->image
        ]);

        //Store a message in session
        $request->session()->flash('msg','Product has been updated.');
        //Redirect
        return redirect('products');
    }

    public function show($id){
        $product = Product::find($id);
        return view('admin.products.detail',compact('product'));
    }
}

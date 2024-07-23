<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
   
    public function addProduct(Request $request){
        if ($request->method() == 'POST') {
         
            $request->validate([
                'brandname' => 'required',
                'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'colour' => 'required',
                'price' => 'required',
        
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('productsimages'), $imageName);

           $product = new Product();
              
           $product->brandname = $request->get('brandname');     
           $product->description = $request->get('description'); 
           $product->image = 'productsimages/'.$imageName;
           $product->colour = $request->get('colour');    
           $product->price = $request->get('price');
        
           $product->save();
      
           return redirect()->route('admin/products')->with('success', 'Product created successfully.');
        }
        return view('admin/create-products');
    }

    public function products()
    {
        $products = Product::all();
        return view('admin/products', compact('products'));

    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('admin/products')->with('success', 'Product deleted successfully.');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin/edit-products', compact('product'));
    }

}

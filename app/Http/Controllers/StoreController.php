<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(Request $request){

        $products = Product::all();
        return view('store', compact('products'));
    }

    public function search(Request $request){

          $search = $request->get('search', 'No Results');
        
        return view('search' , ['search' => $search]);
    }

    

}

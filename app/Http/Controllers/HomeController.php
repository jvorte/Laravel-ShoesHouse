<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;
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
        return view('home');
    }

    
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // public function products()
    // {    $products = Product::all();
    //     return view('admin.products', compact('products'));
    // }

    public function contacts()
    {
        $contacts = Store::all();
        return view('admin/customer-contacts', compact('contacts'));

    }


}

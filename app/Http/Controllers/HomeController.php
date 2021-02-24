<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// access product model to this controller
use App\Http\Controllers\ProductController;

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
    public function home()
    {
        $product = Product::orderBy('updated_at', 'desc')->get();
        // get data from product model to show in home page
        return view('home')->with('product', $product);
        // ->with first param to be sent to home page/ second param was assigned
    }

    public function oldhome() {
        return view('oldhome');
    }

    public function showRecent($id) {
        // $product = Product::findOrFail($id);
        // return view('products.show')->with('product', $product);
        return "show";
    }
}

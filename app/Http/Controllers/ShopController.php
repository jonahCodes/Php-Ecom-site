<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(9)->get();
        return view('shop.index')->with('products',$products);
    }



    /**
     * Display the specified resource.
     *
     * @param  slug  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $products = Product::where('slug',$slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug','!=',$slug)->take(3)->get();

        return view('shop.product')->with([
            'products'=>$products,
            'mightAlsoLike'=> $mightAlsoLike,
        ]);
    }
}

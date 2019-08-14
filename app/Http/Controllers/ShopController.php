<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->category){
            $products = Product::with('categories')->whereHas('categories',function($query){
                $query->where('slug',request()->category);
            })->take(16);
            $categories = Category::all();
            $categoryName = optional($categories->where('slug',request()->category)->first())->name;
        }else{
            $products = Product::take(16);
            $categories = Category::all();
            $categoryName = 'Shop';
        }

        if(request()->sort == 'low_high'){
            $products = $products->orderBy('price')->paginate(8);
        }elseif(request()->sort == 'high_low'){
            $products = $products->orderBy('price','desc')->paginate(8);

        }else{
            $products = $products->paginate(8);
        }

        return view('shop.index')->with(['products'=>$products,'categories'=>$categories,'categoryName'=>$categoryName,]);
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
        $mightAlsoLike = Product::where('slug','!=',$slug)->mightAlsoLike()->get();

        return view('shop.product')->with([
            'products'=>$products,
            'mightAlsoLike'=> $mightAlsoLike,
        ]);
    }
}

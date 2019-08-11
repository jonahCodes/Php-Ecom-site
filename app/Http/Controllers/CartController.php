<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mightAlsoLike = Product::mightAlsoLike()->get();

        return view('shop.cart')->with(['mightAlsoLike'=>$mightAlsoLike]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $product)
    {
        $duplicates = Cart::search(function($cartItem, $rowId) use ($product){
            return $cartItem->id === $product->id;

        });

        if($duplicates->isNotEmpty()){

            return redirect()->route('shop.cart')->with('success_message','Item is already in your Cart!');
        }

        Cart::add($product->id, $product->name, 1, $product->price)
            ->associate('App\Product');
            return redirect()->route('shop.cart')->with('success_message','Item was added to your cart!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'quantity'=>'required|numeric|between:1,5'
        ]);

        if($validator->fails()){
            session()->flash('errors',collect(['Quantity must be between 1 and 5.']));
            return response()->json(['success'=>false],400);
        }
        Cart::update($id,$request->quantity);

        session()->flash('success_message','Quantity update success!');
        return response()->json(['success','true']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message','Item has been removed');

    }
}

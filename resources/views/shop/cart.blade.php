@extends('layouts.app')
@section('content')

<div class="site-section bg-light" id="contact-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h3 class="section-sub-title">cart form</h3>
              <h2 class="section-title mb-3">Cart items</h2>
                    <div>
                        @if(session()->has('success_message'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}

                            </div>
                            @endif

                            @if(count($errors) > 0 )
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $errors }}</li>
                                    @endforeach
                                </ul>
                            </div>


                    </div>
            </div>
          </div>
          @endif

          @if(Cart::count() > 0)
          <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>
          <div class="container">
                <table id="cart" class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width:50%">Product</th>
                                        <th style="width:10%">Price</th>
                                        <th style="width:8%">Quantity</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $item)
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-2 hidden-xs"><a href="{{ route('shop.product',$item->model->slug) }} "><img  class="img-fluid" src="{{ asset('images/'.$item->model->slug.'.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4 class="nomargin"><a href="{{ route('shop.product',$item->model->slug) }} ">{{$item->model->name}}</a></h4>
                                                    <p>
                                                        {{$item->model->details}}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price">${{$item->model->price}}</td>
                                        <td data-th="Quantity">
                                            <input type="number" class="form-control text-center" value="1">
                                        </td>
                                        <td class="actions" data-th="">
                                        <form action="{{ route('cart.destroy',$item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>

                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="visible-xs">
                                        <td class="text-center"><strong>Update further info</strong></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/shop" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                        <td colspan="2" class="hidden-xs"></td>
                                        <td class="hidden-xs text-center"><strong>SubTotal ${{ Cart::subtotal()}}</strong></td>
                                        <td class="hidden-xs text-center"><strong>Taxes(8%) ${{ Cart::tax()}}</strong></td>
                                        <td class="hidden-xs text"><strong>Total ${{Cart::total() }}</strong></td>

                                        <td><a href="{{route('shop.checkout')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                                    </tr>
                                </tfoot>
                            </table>
            </div>
            @else
            <h3>No items in Cart!</h3>
            <a href="{{route('shop.index')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>

            @endif
@include('inc.mightAlsoLike')
@endsection

@extends('layouts.app')

@section('content')
<div class="site-section bg-light">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-6 text-center">
              <h3 class="section-sub-title">{{$products->slug}}</h3>
              <h2 class="section-title mb-3"> {{$products->name}}</h2>
              <p>{{$products->details}}</p>
            </div>
          </div>
          <div class="bg-white py-4 mb-4">
            <div class="row mx-4 my-4 product-item-2 align-items-start">
              <div class="col-md-6 mb-5 mb-md-0">
                    <img  class="img-fluid" src="{{ asset('images/'.$products->slug.'.jpg')}}" alt="">
                </div>

              <div class="col-md-5 ml-auto product-title-wrap">
                <span class="number">01.</span>
                <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
                <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>

                <div class="mb-4">
                  <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$1299.00</del> ${{$products->price}}</div>
                </div>
                <p>
                  <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                  <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
                </p>
              </div>
            </div>
          </div>


        </div>
      </div>
@include('inc.mightAlsoLike')

@endsection

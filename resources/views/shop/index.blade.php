@extends('layouts.app')

@section('content')
<div class="container">
    <div class="site-section justify-content-center text-center">
            <h2 class="section-title mb-3">Feature</h2>

       </div>
   <div class="row justify-content-center">

    <div class="col-3">
        <img class="img-fluid" src="https://images.techhive.com/images/article/2017/01/apple_macbook_pro_17-100703706-large.jpg" alt="">
    </div>
    <div class="col-3">
            <img class="img-fluid" src="https://images.techhive.com/images/article/2017/01/apple_macbook_pro_17-100703706-large.jpg" alt="">
        </div>
        <div class="col-3">
                <img class="img-fluid"  src="https://images.techhive.com/images/article/2017/01/apple_macbook_pro_17-100703706-large.jpg" alt="">
            </div>
            <div class="col-3">
                    <img  class="img-fluid" src="https://images.techhive.com/images/article/2017/01/apple_macbook_pro_17-100703706-large.jpg" alt="">
                </div>
    </div>

    <div class="site-section" id="products-section">
            <div class="container">
              <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                  <h3 class="section-sub-title">Shop our products</h3>
                  <h2 class="section-title mb-3">Shop</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                </div>
              </div>
              <div class="row">
                  @foreach ($products as $product)
                  <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                          <figure>
                                <img  class="img-fluid" src="{{ asset('images/'.$product->slug.'.jpg')}}" alt="">
                            </figure>
                          <div class="px-4">
                          <h3><a href="#">{{$product->name}}</a></h3>
                          <div class="mb-4">
                                <h3 class="text-black font-weight-bold h5">Price:</h3>
                              <div class="price"><del class="mr-2">$1299.00</del> ${{$product->price}}.00</div>
                              </div>
                            <div class="mb-3">
                              <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                              <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            <div>
                              <a href="{{ route('shop.product',$product->slug )}}" class="btn btn-black mr-1 rounded-0">Cart</a>
                            <a href="{{ route('shop.product',$product->slug )}}" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                            </div>
                          </div>
                        </div>
                      </div>

                  @endforeach



              </div>
            </div>
          </div>

</div>


@endsection

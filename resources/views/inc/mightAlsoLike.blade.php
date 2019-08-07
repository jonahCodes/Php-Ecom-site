<div class="site-section bg-light">
        <div class="container">
                <div class="row mb-5 justify-content-center">
                  <div class="col-md-6 text-center">
                    <h3 class="section-sub-title">Desktop</h3>
                    <h2 class="section-title mb-3"> Might Also Like </h2>
                  </div>
                </div>
                <div class="row">
                @foreach ($mightAlsoLike as $product)
                <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                          <figure>
                          <img  class="img-fluid" src="{{ asset('images/'.$product->slug.'.jpg')}}" alt="">
                              </figure>
                          <div class="px-4">
                          <h2><a href="#">{{ $product->name }}</a></h2>
                          <div class="mb-3">
                          <h4><span>$</span>{{$product->price}}</h4>
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

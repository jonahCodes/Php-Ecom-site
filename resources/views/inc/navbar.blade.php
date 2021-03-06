<div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <div class="top-bar py-3 bg-light" id="home-section">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 text-left">
              <ul class="social-media">
                <li><a href="/" class=""><span class="icon-facebook"></span></a></li>
                <li><a href="/" class=""><span class="icon-twitter"></span></a></li>
                <li><a href="/" class=""><span class="icon-instagram"></span></a></li>
                <li><a href="/" class=""><span class="icon-linkedin"></span></a></li>
              </ul>
            </div>
            <div class="col-6">
              <p class="mb-0 float-right">
                <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">817 630 6245</span></a></span>
                <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">jonahCodes@gmail.com</span></a></span>
              </p>

            </div>
          </div>
        </div>

<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="/" class="text-black mb-0">Selling<span class="text-primary">.</span> </a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="/" class="nav-link">Home</a></li>
                  <li><a href="{{ route('shop.index') }}" class="">Products</a></li>
                  <li><a href="#about-section" class="nav-link">About Us</a></li>
                  <li><a href="#special-section" class="nav-link">Special</a></li>
                  <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  <li><a href="#blog-section" class="nav-link">Blog</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  <li>
                      <a href="{{ route('shop.cart') }}" class="nav-link">Cart

                            @if(Cart::instance('default')->count() > 0)
                            <span class="badge badge-secondary">
                            {{ Cart::instance('default')->count() }}
                            </span>
                            @endif
                    </a>
                    </li>

                </ul>
              </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

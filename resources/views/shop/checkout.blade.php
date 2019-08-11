@extends('layouts.app')


@section('extra.js')

<script src="https://js.stripe.com/v3/"></script>

<style>
.StripeElement {
    box-sizing: border-box;

    height: 40px;

    padding: 10px 12px;

    border: 1px solid transparent;
    border-radius: 4px;
    background-color: white;

    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
  }

  .StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
  }

  .StripeElement--invalid {
    border-color: #fa755a !important;
  }

  .StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
  }

  #card-errors{
    color:  #fa755a;
  }

  .ORDER{
    &:disabled{
        background: lighten(#fefde5,10%);
        cursor:not-allowed;
    }
  }
</style>

@endsection

@section('content')

        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}

            </div>
            @endif

            @if(count($errors) > 0 )
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>



@endif
<div class="site-section bg-light" id="contact-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h3 class="section-sub-title">Checkout Form</h3>
              <h2 class="section-title mb-3">Checkout</h2>
            </div>
          </div>
          <div class="row justify-content-center">
                <div class="col-lg panel panel-info">
                     <!--SHIPPING METHOD-->
                    {{-- <form action="{{ route('shop.checkoutstore') }}" method="POST" id="payment-form">
                        {{ csrf_field() }} --}}

                        <div class="panel-body">
                            {{-- stripe --}}
                            <form action="{{ route('shop.checkoutstore') }}" method="POST" id="payment-form">
                                    {{ csrf_field() }}
                                    <div class="panel panel-info">
                                        <div class="panel-heading">Address</div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <h4>Fill information</h4>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <div class="col-md-6 col-xs-12">
                                                        <strong>Email:</strong>
                                                        <input type="text" name="email" id="email"class="form-control" value="" />
                                                    </div>
                                                    <div class="span1"></div>

                                                </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-xs-12">
                                                    <strong>Name on Card:</strong>
                                                    <input type="text" name="name" id="name_on_card" class="form-control" value="" />
                                                </div>
                                                <div class="span1"></div>

                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12"><strong>Address:</strong></div>
                                                <div class="col-md-12">
                                                    <input type="text" name="address" id="address" class="form-control" value="" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-12"><strong>State:</strong></div>
                                                <div class="col-md-12">
                                                    <input type="text" name="province" id="province" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                                <div class="col-md-12">
                                                    <input type="text" name="postalcode" id="postalcode" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12"><strong>City</strong></div>
                                                <div class="col-md-12"><input type="text" name="city" class="form-control" id="city"value="" /></div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--SHIPPING METHOD END-->
                                    <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                            <div class="form-group">


                                          <label for="card-element">
                                            Credit or debit card
                                          </label>
                                          <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                          </div>

                                          <!-- Used to display form errors. -->
                                          <div id="card-errors" role="alert"></div>



                            </div>
                            <button type="submit" id="complete-order" class="btn btn-primary ORDER btn-submit-fix">Complete Order</button>
                        </form>
                            {{-- end stripe form  --}}

                            {{-- <div class="form-group">
                                <div class="col-md-12"><strong>Card CVV:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                            </div> --}}
                            {{-- <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Expiration Date</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Year</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                </select>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span>Pay secure using your credit card.</span>
                                </div>
                                <div class="col-md-12">
                                    <ul class="cards">
                                        <li class="visa hand">Visa</li>
                                        <li class="mastercard hand">MasterCard</li>
                                        <li class="amex hand">Amex</li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">

                            </div>
                        </div>
                    {{-- </form> --}}
                    </div>
                    <div class="col-sm">
                        <h1>Orders</h1>
                        <div class="panel panel-info">
                                <div class="panel-heading">
                                    Review Order <div class="pull-right"><small><a class="afix-1" href="{{route('shop.cart')}}">Edit Cart</a></small></div>
                                </div>
                                <div class="panel-body">
                                    @foreach (Cart::content() as $item)
                                        <div class="form-group">
                                        <div class="col-sm-3 col-xs-3">
                                            <img class="img-responsive" src="{{asset('images/'.$item->model->slug.'.jpg') }}" alt="item" />
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="col-xs-12">{{ $item->model->name }}</div>
                                            <p class="col-xs-12">QTY:{{$item->qty}}</p>
                                            <p class="col-xs-12"> Details:{{$item->model->details}}</p>
                                        </div>
                                        <div class="col-sm-3 col-xs-3 text-right">
                                            <h6>Price: <span>$</span>{{$item->subtotal}}</h6>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="form-group"><hr /></div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <strong>Subtotal</strong>
                                            <div class="pull-right"><span>$</span><span>{{ Cart::subtotal() }}</span></div>
                                        </div>
                                        <div class="col-xs-12">
                                            <small>taxes</small>
                                            <div class="pull-right"><span>{{ Cart::tax() }}</span></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><hr /></div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <strong>Order Total</strong>
                                            <div class="pull-right"><span>$</span><span>{{ Cart::total() }}</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>

          </div>


        </div>
      </div>


@endsection

@section('extrascript')
<script>(function(){
    // Create a Stripe client.
var stripe = Stripe('pk_test_TTcASRZEpImF99wYUZFCpDcV00FVrtU2vZ');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style,hidePostalCode:true});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

document.getElementById('complete-order').disabled=true;
  var options={
      name:document.getElementById('name_on_card').value,
      address_line1:document.getElementById('address').value,
      address_city:document.getElementById('city').value,
      address_state:document.getElementById('province').value,
      address_zip:document.getElementById('postalcode').value
  }

  stripe.createToken(card, options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;

      document.getElementById('complete-order').disabled=false;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
})();
</script>

@endsection

@extends('layouts.app')
@section('content')

<div class="site-section bg-light" id="contact-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h3 class="section-sub-title">cart form</h3>
              <h2 class="section-title mb-3">Cart items</h2>
            </div>
          </div>
          <div class="container">
                <table id="cart" class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width:50%">Product</th>
                                        <th style="width:10%">Price</th>
                                        <th style="width:8%">Quantity</th>
                                        <th style="width:22%" class="text-center">Subtotal</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-2 hidden-xs"><img  class="img-fluid" src="https://images.techhive.com/images/article/2017/01/apple_macbook_pro_17-100703706-large.jpg" alt="">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4 class="nomargin">Product 1</h4>
                                                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price">$999.99</td>
                                        <td data-th="Quantity">
                                            <input type="number" class="form-control text-center" value="1">
                                        </td>
                                        <td data-th="Subtotal" class="text-center">999.00</td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="visible-xs">
                                        <td class="text-center"><strong>Total 999.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/shop" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                        <td colspan="2" class="hidden-xs"></td>
                                        <td class="hidden-xs text-center"><strong>Total $1000.9</strong></td>
                                        <td><a href="/checkout" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                                    </tr>
                                </tfoot>
                            </table>
            </div>

@endsection

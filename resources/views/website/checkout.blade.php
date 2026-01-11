@extends('website.layout.app')
@section('content')

<div class="rts-checkout-area rts-section-gap">
    <div class="container mt-5">
        <div class="checkout-area-inner">
            <div class="ms-default-page container entry-content">
                <div class="woocommerce">

                    <div class="woocommerce-notices-wrapper"></div>
                    <form name="checkout" method="post" class="checkout woocommerce-checkout ms-woocommerce-checkout" action="#" enctype="multipart/form-data" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="full-grid">
                                    <div class="billing-fields">
                                        <div class="checkout-title">
                                            <h3 style="color: #DD5903;" class="animated fadeIn">Billing details</h3>
                                        </div>
                                        <hr>
                                        <div class="form-content-box">

                                            <input id="userId" type="hidden" value="{{$userId}}">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: #DD5903;">Name *</label>
                                                        <input value="{{$userName}}" id="number" name="number" class="form-control-mod" type="text" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label style="color: #DD5903;">Email address *</label>
                                                            <input value="{{$userEmail}}" id="email" name="email" class="form-control-mod" type="email" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label style="color: #DD5903;">Phone *</label>
                                                        <input id="number" name="number" class="form-control-mod" type="text" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: #DD5903;">Billing Address *</label>
                                                        <input name="bAddress" id="bAddress" class="form-control-mod" type="text" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label style="color: #DD5903;">Shipping address *</label>
                                                            <input name="sAddress" id="sAddress" class="form-control-mod" type="text" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- .billing-fields -->

                                </div>
                            </div>
                            <div class="pl-lg-5 col-lg-4">
                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <div class="ms-cart-collaterals cart-collaterals">

                                        <div class="ms-cart-totals cart_totals ">
                                            <div class="checkout-title">
                                                <h3 style="color: #DD5903;" class="animated fadeIn">Your Order</h3>
                                            </div>

                                            <div class="mb-4 mt-4" style="color: #DD5903;font-weight: bold;">Total: <span class="grandtotal"></span></div>
                                            <div class="row mx-0 mb-2">
                                                <div class="col-sm-4 p-0 d-inline">
                                                    <span style="color: #DD5903;font-weight: bold;" class="me-2 mt-2">Comment</span>
                                                </div>
                                                <div class="col-sm-8 p-0">
                                                    <textarea name="comment" id="comment" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <button id="orderBtn" class="myorder rts-btn btn-primary button"><span>Proceed to Checkout</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>



@endsection


 @section('js')

<script>
    // $(document).ready(function() {

      
  
// let c = new Cart();
// alert(c.getGrandtotal());


    //   alert(grandtotal);
        // console.log(grandtotal);

        // $('.grandtotal').text(grandtotal);


//         $(document).on('click', '.myorder', function(event) {
//             event.preventDefault();

//             // alert("hi");

//             let cart = new Cart();
//             let items = cart.getItems();
//             let order = [];

//             items.forEach(e => {
//                 let menu_id = e.id;
//                 let name = e.name;
//                 let price = e.price;
//                 let qty = e.quantity;


//                 order.push({
//                     menu_id: menu_id,
//                     name: name,
//                     price: price,
//                     qty: qty
//                 })
//                 // console.log(order);
//             })

//             var user_id = $('#userId').val();
//             let status = "pending";
//             alert(user_id);

//             $.ajax({
//                 url: "{{ route('order.store') }}",
//                 type: 'post',
//                 data: {
//                     orders: order,
//                     grandtotal: 500,
//                     comment: $('#comment').val(),
//                     bAddress: $('#bAddress').val(),
//                     sAddress: $('#sAddress').val(),
//                     user_id: user_id,
//                     status: 'pending',

//                 },
//                 success: function(response) {

//                     if (response.status === 'success') {
//                         Swal.fire({
//                             position: 'top-end',
//                             icon: 'success',
//                             title: response.message,
//                             showConfirmButton: false,
//                             timer: 1500,
//                             customClass: {
//                                 container: 'custom-swal-container',
//                             },
//                         }).then(() => {
//                             cart.emptyCart();
//                             location.reload();
//                         });
//                     }

//                 },
//                 error: function(xhr, status, error) {
                  
//                     console.error(xhr.responseText);
//                 }
//             });



//         });
//     });
// </script>
 @endsection
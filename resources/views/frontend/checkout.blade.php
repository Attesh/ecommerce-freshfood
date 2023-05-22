@extends('frontend.main_master')
@section('content')



<!-- Hero Start -->
<!-- <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Check Out</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
                </div>
            </div>
        </div>
    </div> -->
<!-- Hero End -->


<!--start checkout -->
<div class="container-fluid about pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                    <!-- <h6 class="text-primary text-uppercase">Products</h6> -->
                    <h1 class="display-5">@lang('msg.CheckOut')</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="card single-accordion bdr-rdus">

                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link bdr-rdus-top" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       @lang('msg.billingaddress')
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="billing-address-form">
                                        <form action="index.php">
                                        @auth ('member')
                                            <div class="row">
                                           
                                                <div class="col-md-6">
                                                    <input class="bdr-rdus mb-3" type="text" placeholder="@lang('msg.name')" value='{{Auth::guard("member")->user()->first_name}}' id="billing_name">
                                                </div>

                                                <div class="col-md-6">
                                                    <input class="bdr-rdus mb-3" type="email" placeholder="@lang('msg.email')" value='{{Auth::guard("member")->user()->email}}' id="billing_email">
                                                </div>

                                                <div class="col-md-6">
                                                    <input class="bdr-rdus mb-3" type="text" placeholder="@lang('msg.address')" value=' {{Auth::guard("member")->user()->address}}  ' id="billing_address">
                                                </div>

                                                <div class="col-md-6">
                                                    <input class="bdr-rdus mb-3" type="tel" placeholder="@lang('msg.phone')" value='  {{Auth::guard("member")->user()->phone}}  ' id="billing_phone">
                                                </div>

                                             
                                                <div class="col-md-12">
                                                    <textarea class="bdr-rdus" name="bill" id="bill" cols="30"  rows="10"
                                                    placeholder="@lang('msg.saysomething')"></textarea>
                                                  
                                                </div>
                                            </div>
                                            @else
                                                    <p>@lang('msg.pleaselogin')</p>
                                                    @endauth
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card single-accordion bdr-rdus">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed bdr-rdus-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									@lang('msg.shippingaddress')
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									<div class="shipping-address-form">
										<form action="index.php">
                                        @auth ('member')
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                               
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" style="width: 1em !important;" id="sameasbillingaddress" value="1">
                                                        <label class="form-check-label ms-2 mt-2" for="exampleCheck1">@lang('msg.sameas')</label>
                                                    </div>

                                                <!-- <input class=" form-check-input" type="checkbox" placeholder="Name" id="billing_name"> -->
                                               
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="bdr-rdus mb-3" type="text" placeholder="@lang('msg.name')" id="shipping_name">
                                                </div>

                                                <div class="col-md-6">
                                                    <input class="bdr-rdus mb-3" type="email" placeholder="@lang('msg.email')" id="shipping_email">
                                                </div>

                                                <div class="col-md-6">
                                                    <input class="bdr-rdus mb-3" type="text" placeholder="@lang('msg.address')" id="shipping_address">
                                                </div>

                                                <div class="col-md-6">
                                                    <input class="bdr-rdus mb-3" type="tel" placeholder="@lang('msg.phone')" id="shipping_phone">
                                                </div>

                                                <div class="col-md-12">
                                                    <textarea class="bdr-rdus" name="bill" id="bill" cols="30" rows="10"
                                                            placeholder="@lang('msg.saysomething')"></textarea>
                                              
                                                </div>
                                            </div>
                                            @else
                                                    <p>@lang('msg.pleaselogin')</p>
                                                    @endauth
                                        </form>
									</div>
								</div>
							</div>
					  	</div>
                         
                        <div class="card single-accordion bdr-rdus">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed bdr-rdus-top" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        @lang('msg.carddetails')
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                @auth ('member')
                                <div class="card-body">
                               
                                    <div class="card-details">
                                       
                                        <p>@lang('msg.carddetailsgoes')</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="credit_card" >
                                            <label class="form-check-label" for="flexRadioDefault1">
                                               @lang('msg.viacredit')
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="cash_on_delvery_radio"
                                             >
                                            <label class="form-check-label" for="flexRadioDefault2"  >
                                               @lang('msg.cashdelivery')
                                            </label>
                                          
                                        </div>
                                    </div>
                                 
                                </div>
                                @else
                                            <p>@lang('msg.pleaselogin')</p>
                                            @endauth
                            </div>
                          
                            <div class="alert alert-warning" style="display:none" id="dangerous" role="alert" >
                                Please add items in cart and all information are required.
                            </div>
                        </div>
                      
                    </div>
                    </div>
                    </div>
             
     

        <div class="col-lg-4 col-md-5 col-sm-12 col-12">
            <div class="order-details-wrap">
                <table class="order-details" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>@lang('msg.orderdetails')</th>
                            <th>@lang('msg.Price')</th>
                        </tr>
                    </thead>
                    <tbody class="order-details-body">
                        @php $total = 0 @endphp
                        @if(session('cart'))

                        <tr>
                            <td>Product</td>
                            <td>Total</td>

                        </tr>
                        @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr>
                            <td>{{ $details['name'] }}</td>

                            <td>SAR {{ number_format($details['price'] * $details['quantity'],2) }}</td>

                        </tr>
                        <!-- <tr>
									<td>Berry</td>
									<td>$70.00</td>
								</tr>
								<tr>
									<td>Lemon</td>
									<td>$35.00</td>
								</tr> -->
                        @endforeach
                        @endif
                    </tbody>
                    <tbody class="checkout-details">
                        <tr>
                            <td>@lang('msg.Subtotal')</td>

                            <td>SAR {{ number_format($total,2) }}</td>

                        </tr>
                        <tr>
                            <td>@lang('msg.Shipping')</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>@lang('msg.total')</td>
                            <input name="total" id="total_price" value="{{ $total }}" hidden>
                            <td>SAR {{ number_format($total,2) }}</td>
                        </tr>
                    </tbody>
                </table>
                <!-- <a href="#" class="btn btn-primary py-md-2">Place Order</a> -->
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- end checkout -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">

$("#cash_on_delvery_radio").click(function () {
	// alert('hi');
    $('#showconfirmmessage').show();
	

});

$(function() {
$("#sameasbillingaddress").change(function () {
  check_val = $("#sameasbillingaddress").val()
//   console.log(check_val)
    if (check_val == '1'){
        billing_name = $('#billing_name').val();
			billing_email = $('#billing_email').val();
			billing_address = $('#billing_address').val();
			billing_phone = $('#billing_phone').val();
            console.log(billing_name);
            $('#shipping_name').val( billing_name );
            $('#shipping_email').val( billing_email);
            $('#shipping_address').val( billing_address );
            $('#shipping_phone').val( billing_phone);
        $( "#sameasbillingaddress" ).val(0);
    }
    else{
        $('#shipping_name').val( "" );
            $('#shipping_email').val("" );
            $('#shipping_address').val(""  );
            $('#shipping_phone').val( "");
            $( "#sameasbillingaddress" ).val(1);
    }
	

})

$("#cashondelivery").click(function (e) {
    e.preventDefault()
    $('#dangerous').hide()
    billing_name = $('#billing_name').val();
	billing_email = $('#billing_email').val();
	billing_address = $('#billing_address').val();
	billing_phone = $('#billing_phone').val();
    console.log(billing_name)
	if(billing_name !='' && billing_email != ''  && billing_address != '' && billing_phone != '' ){
        
    // $('#confirmBox').show()
    $('#showconfirmmessage').hide();
    
    total_price= $("#total_price").val();
    
    
    console.log(total_price);
    billing_name = $('#billing_name').val();
                    billing_email = $('#billing_email').val();
                    billing_address = $('#billing_address').val();
                    billing_phone = $('#billing_phone').val();
                    shipping_name= $('#shipping_name').val( );
                    shipping_email=  $('#shipping_email').val( );
                    shipping_address=  $('#shipping_address').val();
                    shipping_phone= $('#shipping_phone').val();
                    _token="{{ csrf_token() }}"
                    $.ajax({
                url: "{{ url('/cashondelivery')}}",
                type: "POST",
                data:{
                    billing_name,
                    billing_email,
                    billing_address,
                    billing_phone,
                    shipping_name,
                    shipping_email,
                    shipping_address,
                    shipping_phone,
                    total_price,
                    _token,
                },
                success: function (data) {
                    // console.log(data.status);
                    if(data.status == false)
                    {
                        // alert(' Invalid credentials')
                        
                        console.log(data.status);
                        
                        
                    }
                    else{
                        $("#success_alert").show();
                        location.replace("membership/dashboard");
                    }
                },
                error :function(data){
                    // alert('hi')
                    $('#dangerous').show();
        $('#showconfirmmessage').hide();

                    // alert('hi')
                }
                });
            }
    else{
        $('#dangerous').show();
        $('#showconfirmmessage').hide();
    }
    
})
/*------------------------------------------
--------------------------------------------
Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
// 	billing_name
// billing_email
// billing_address
// billing_phone
$("#credit_card").click(function () {
    $('#dangerous').hide()
	billing_name = $('#billing_name').val();
	billing_email = $('#billing_email').val();
	billing_address = $('#billing_address').val();
	billing_phone = $('#billing_phone').val();
    console.log(billing_name)
	if(billing_name !='' && billing_email != ''  && billing_address != '' && billing_phone != '' ){
        $('#staticBackdrop').modal('show');
      
		// $( "#flexRadioDefault1" ).prop( "checked", true );
	}
	else{
		alert('All billing information are required!');
		this.checked = false;
        
	}
	

});confirm_modal_close

$("#success_modal_close").click(function () {
	
    $('#success_alert').hide();
	

});
$("#confirm_modal_close").click(function () {
	
    $('#showconfirmmessage').hide();
	

});


    var $form = $(".require-validation");
	$('#eror_mesage').hide()
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
       		$errorMessage.addClass('hide');
			$('#eror_mesage').show()


        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $input.parent().addClass('has-error');
			
                $errorMessage.removeClass('hide');
				$('#eror_mesage').show()

				
                e.preventDefault();
            }
        });

        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }

    });

    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
			$('.error')
                .removeClass('hide')
                .find('.alert')
                .text('DONE!');
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
			billing_name = $('#billing_name').val();
			billing_email = $('#billing_email').val();
			billing_address = $('#billing_address').val();
			billing_phone = $('#billing_phone').val();
            $form.append("<input type='hidden' name='billing_name' value='" + billing_name +"'/>");
            $form.append("<input type='hidden' name='billing_email' value='" + billing_email +"'/>");
            $form.append("<input type='hidden' name='billing_address' value='" + billing_address +"'/>");
            $form.append("<input type='hidden' name='billing_phone' value='" + billing_phone +"'/>");
            $form.get(0).submit();
        }
    }

});
</script>


<!-- Modal -->
		   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header" style="background: #608c2a;">
                            <h5 class="modal-title text-light" id="staticBackdropLabel">@lang('msg.paymentdetails')</h5>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-3">
                                    <div class="panel panel-default credit-card-box">
                                        <div class="panel-body">
                                            @if (Session::has('success'))
                                            <div class="alert alert-success text-center">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                <p>{{ Session::get('success') }}</p>
                                            </div>
                                            @endif
                                            <!--  -->
                                            <form role="form" action="{{ route('stripe.post') }}" method="post"
                                                class="require-validation" data-cc-on-file="false"
                                                data-stripe-publishable-key="" 
												id="payment-form">
                                                @csrf
												
                                                            
                                                <div class='form-row row mb-3'>
                                                    <div class='col-xs-12 form-group required'>
                                                        <label class='control-label mb-1 text-dark'>@lang('msg.nameoncard')</label> <input
                                                            class='form-control' size='4' type='text' name="name">
                                                    </div>
                                                </div>

                                                <div class='form-row row mb-3'>
                                                    <div class='col-xs-12 form-group required'>
                                                        <label class='control-label mb-1 text-dark'>@lang('msg.cardnumber')</label> <input
                                                            autocomplete='off' class='form-control card-number w-100'
                                                            size='20' type='number' name="card_number">
                                                    </div>
                                                </div>

                                                <div class='form-row row mb-3'>
                                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                        <label class='control-label text-dark mb-1'>@lang('msg.cvc')</label> <input
                                                            autocomplete='off' class='form-control card-cvc w-100'
                                                            placeholder='ex. 311' size='4' type='number' name="cvc">
                                                    </div>
                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                        <label class='control-label text-dark mb-1'>@lang('msg.monthexpire')</label> <input
                                                            class='form-control card-expiry-month w-100' placeholder='MM'
                                                            size='2' type='number' name="expiration">
                                                    </div>
                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                        <label class='control-label text-dark mb-1'>@lang('msg.yearexpire')</label> <input
                                                            class='form-control card-expiry-year w-100' placeholder='YYYY'
                                                            size='4' type='number' name="year">
                                                    </div>
                                                </div>
												<input
                                                            class='form-control card-expiry-year w-100' placeholder=''
                                                             type='number' name="total" value="{{ $total }}" hidden>
                                                <div class='form-row row' id='eror_mesage'>
                                                    <div class='col-md-12 error form-group hide'>
                                                        <div class='alert-danger alert'></div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12">

                                                        @if(Session::get('langu') == "ar")
                                                        <button class="btn btn-primary btn-lg btn-block w-100" type="submit">@lang('msg.paynow')  {{ $total }}@lang('msg.SAR')</button>
                                                        @else 
                                                        <button class="btn btn-primary btn-lg btn-block w-100" type="submit">@lang('msg.paynow') @lang('msg.SAR') {{ $total }}</button>
                                                        @endif  



                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--  -->


<div class="modal" id="success_alert" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header" style="background: #608c2a !important;">
        <h5 class="modal-title" style="color: white !important;">Cash on Delievry</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-center">
            <img class="text-center img-fluid" src="{{asset('frontend/img/heee.png')}}" style="height: 150px;"; >
        </div>
        <p class="text-center pb-2 pt-4" style="font-size: 22px;color: black;">Success! your request will sent.our member contact soon</p>
        <button type="button" class="btn btn-secondary float-end" data-bs-dismiss="modal" id ="success_modal_close">Close</button>
      </div>
    </div>
  </div>
</div>

<!--  -->


<div class="modal" id="showconfirmmessage" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header" style="background: #608c2a !important;">
    <h5 class="modal-title text-light" id="exampleModalLabel">Cash on Delievry</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body pt-3 pb-3">
        <div class="row">
            <h5 class="text-center mb-3">Do you want to make a Cash on Delievry?</h5>
          <div class="col-md-12 d-flex justify-content-center">
              <button type="button" id="confirm_modal_close" class="btn btn-secondary" style="width: 20% !important;">No</button>
              <button type="button" id="cashondelivery" class="btn btn-primary ms-2" style="width: 20% !important;">yes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->




@endsection


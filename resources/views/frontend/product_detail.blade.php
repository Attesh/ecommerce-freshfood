@extends('frontend.main_master')
@section('content')



    <!-- Hero Start -->
    <!-- <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Product Details</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->


    <!-- Single product page start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="single-product-img">
						<img src="{{ asset('Backend/images/' . $details->image) }}" alt="" style="max-width: 100%;">
					</div>
				</div>
                <div class="col-lg-5 col-md-4">
					<div class="single-product-content">
                    @if(session()->get('langu')=='ar')
                    <h3>{{$details->name_ar}}</h3>
                    <!-- <h3>{!!$details->short_description_ar!!}</h3> -->
                    @else
                    <h4>{{$details->name}}</h4>
                    
                    @endif
                    @if($details->on_sale=='1')
						<p class="single-product-pricing text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($details->price,2)}}</p>
                        <p class="single-product-pricing">@lang('msg.SAR') {{number_format($details->sale_price,2)}}</p>
                        @else
                        <p class="single-product-pricing">@lang('msg.SAR') {{number_format($details->price,2)}}</p>
                        @endif
                        @if(session()->get('langu')=='ar')
                    <h6>{!!$details->short_description_ar!!}</h6>
                    <p class="text-dark">{!!$details->description_ar!!}</p>
                    @else
                    <h6>{!!$details->short_description!!}</h6>
                    <p class="text-dark">{!!$details->description!!}</p>
                    @endif
					</div>
				</div>
                <div class="col-lg-3 col-md-4">
                    <div class="total-section">
                        <table class="view-total-table">
                            <thead class="view-total-table-head">
                                <tr class="view-table-total-row">
                                    <th colspan="2">@lang('msg.getitdelivered')</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $shippingcgarges = 0;
                                if($details->on_sale=='1'){
                                    $total = $shippingcgarges+$details->sale_price;
                                }
                                else{
                                    $total = $shippingcgarges+$details->price; 
                                }
                                  

                                ?>
                                <tr class="view-total-data">
                                    <td colspan="2"><strong>Tomorrow 10 AM - 11 PM</strong></td>
                                </tr>
                                <tr class="view-total-data">
                                    <td><strong>@lang('msg.Subtotal')</strong></td>
                                    @if($details->on_sale=='1')
                                    <td id="subtotal_td_c">@lang('msg.SAR') {{number_format($details->sale_price,2)}}</td>
                                    @else
                                    <td id="subtotal_td_c">@lang('msg.SAR') {{number_format($details->price,2)}}</td>
                                    @endif
                                    <!-- <td  id="subtotal_price_td_q"></td> -->
                                </tr>


                                <tr class="view-total-data">
                                    <td><strong>@lang('msg.Shipping')</strong></td>
                                    <td>@lang('msg.SAR') {{number_format($shippingcgarges,2)}}</td>
                                </tr>
                                <tr class="view-total-data">
                                    <td><strong>@lang('msg.total')</strong></td>

                                    <td class="product-quantity  " hidden>
                                    <input type="number" id="quantity_id" value ="">    
                                    <input type="number" id="id" value ="{{$details->id}}" >    
                                    <input type="number" id="total" value="{{$total}}" hidden>@lang('msg.SAR') {{number_format($total,2)}}</td>
                                    <td id="total_price_td">@lang('msg.SAR') {{number_format($total,2)}}</td>
                                </tr>
                            </tbody>
                        </table>
                        @if($details->Alert_Stock >= $details->Quantity)
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success mt-3 text-center">@lang('msg.outofstock')</button>
                        </div>
                        @else
                        <div class="single-product-form">
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" id="increment_id" >
                                        <input type="text" value="{{$details->Quantity}}" id="fixed_increment" hidden>
                                    </div>
                                </div>
                            </div>
                            <!-- <form action="index.php">
                                <input type="number" placeholder="0">
                            </form> -->

                            <button class="btn btn-primary py-md-2 quantity " id="update-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>

                        

                        @endif
                        <!-- <div class="single-product-form">
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" id="increment_id" disabled>
                                        <input type="text" value="{{$details->Quantity}}" id="fixed_increment" hidden>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary py-md-2 quantity disabled" id="update-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div> -->
				<!-- <div class="col-md-7">
					<div class="single-product-content">
						<h3>Green apples have polyphenols</h3>
						<p class="single-product-pricing"><span>Per Kg</span> $50</p>
						<p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sint dignissimos, rem commodi cum voluptatem quae reprehenderit repudiandae ea tempora incidunt ipsa, quisquam animi perferendis eos eum modi! Tempora, earum.</p>
						<div class="single-product-form">
							<form action="index.php">
								<input type="number" placeholder="0">
							</form>
							<a href="{{route('cart')}}" class="btn btn-primary py-md-2"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
							<p class="text-dark"><strong>Categories: </strong>Fruits, Organic</p>
						</div>
					</div>
				</div> -->
			</div>
        </div>
    </div>
    </div>
    </div>
    <!-- Single product page  end -->
	<!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">@lang('msg.Products')</h6>
                <h1 class="display-5">@lang('msg.ourOrganic')</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
            @php
            $category_id=$details->category_id;
            $products=DB::table('product')->where('category_id',$category_id)->get();
            @endphp
            @foreach($products as $record)
            @php
            $original_price=$record->price;
            $sale_price=$record->sale_price;
            $total_discount=$original_price-$sale_price;
            $discount=($total_discount/$original_price) * 100;
            @endphp
                <div class="pb-5 prodetail">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center productdetailcard">
                        <img class="img-fluid mb-4" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                        @if(session()->get('langu')=='ar')
                        <h6 class="mb-3">{{$record->name_ar}}</h6>
                        @if($record->on_sale=='1')
                        <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">SAR {{number_format($record->price,2)}}</h5>
                        <h5 class="text-primary mb-0">SAR {{number_format($record->sale_price,2)}}</h5>
                        @else
                        <h5 class="text-primary mb-0">SAR {{number_format($record->price,2)}}</h5>
                        @endif
                        @else
                        <h6 class="mb-3">{{$record->name}}</h6>
                        @if($record->on_sale=='1')
                        <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">SAR {{number_format($record->price,2)}}</h5>
                        <h5 class="text-primary mb-0">SAR {{number_format($record->sale_price,2)}}</h5>
                        @else
                        <h5 class="text-primary mb-0">SAR {{number_format($record->price,2)}}</h5>
                        @endif
                        @endif
                        
                        <div class="btn-action d-flex justify-content-center">
                        @if($record->Alert_Stock >= $record->Quantity)
                        <a class="btn bg-primary py-2 px-3 mx-1 disabled" href="{{route('cart')}}"><i class="bi bi-cart text-white disabled"></i></a>
                        @else
                            <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('cart')}}"><i class="bi bi-cart text-white"></i></a>
                        @endif   
                            <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                        
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="{{asset('frontend/img/products/product-img-4.jpg')}}" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('cart')}}"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="{{asset('frontend/img/product-2.png')}}" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('cart')}}"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="{{asset('frontend/img/products/product-img-3.jpg')}}" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('cart')}}"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="{{asset('frontend/img/products/product-img-2.jpg')}}" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('cart')}}"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="{{asset('frontend/img/products/product-img-1.jpg')}}" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('cart')}}"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Products End -->


 <script type="text/javascript">
     var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    fixed_increment=$('#fixed_increment').val();
    proQty.on('click', '.qtybtn', function () {

        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        total = $('#total').val()
            // console.log(total);
        if ($button.hasClass('inc')) {
            if(oldValue != fixed_increment){
            var newVal = parseFloat(oldValue) + 1;
            total = $('#total').val()
            // console.log(total);
            Subtotal =total * newVal;

                // console.log(Subtotal);
              
                $('#subtotal_td_c').text('SAR'+ ' ' + Subtotal);
                $('#total').val(total)
                $('#quantity_id').val(newVal)
                $('#total_price_td').text('SAR'+ ' ' + Subtotal);
            }
            else if(oldValue == fixed_increment){
                var newVal = oldValue;
            }
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
                Subtotal1 =total*(newVal);
                $('#quantity_id').val(newVal)

                $('#subtotal_td_c').text('SAR'+ ' ' + Subtotal1);
                $('#total_price_td').text('SAR'+ ' ' + Subtotal1);

              

            } else {
                newVal = 0;
               


            }
        }
        $button.parent().find('input').val(newVal);
    });
    // $("#increment_id").click(function () {
    //     alert('hi');
    //     var maxField = 10; //Input fields increment limitation
    //     var x = 1;
    //     if(x < maxField){ 
    //         x++; //Increment field counter
    //         $(wrapper).append(fieldHTML); //Add field html
    //     }
    // });
    $("#update-cart").click(function (e) {
        // alert('hi');
        e.preventDefault();
		id= $('#id').val();
		quantity= $('#quantity_id').val();
        if (quantity == '')
        {
            // alert('hi');
            quantity =1;
        }
        
        price=$('#total').val();
		// console.log(id);
		// console.log(quantity);
        subprice=price*quantity;
		console.log(subprice);

        var ele = $(this);
  console.log(ele);
        $.ajax({
            url: '{{ route('add.to.cart1') }}',
            method: "post",
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                quantity: quantity,
                price:price,
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });
 </script>

    @endsection
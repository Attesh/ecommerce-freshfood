@extends('frontend.main_master')
@section('content')


    <!-- Hero Start -->
    <!-- <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Cart</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->


    <!-- cart -->
    <div class="container-fluid about pt-5">
        <div class="container">
        	<div class="row">
                        
	            <div class="col-md-12">
	                <div class="mx-auto text-center mb-5" style="max-width: 500px;">
	                    <!-- <h6 class="text-primary text-uppercase">Cart</h6> -->
	                    <h1 class="display-5">@lang('msg.cartdetail')</h1>
	                </div>
	            </div>
	        </div>        
            <div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap table-responsive">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-image">@lang('msg.productimage')</th>
									<th class="product-name">@lang('msg.name')</th>
									<th class="product-price">@lang('msg.Price')</th>
									<th class="product-quantity">@lang('msg.quantity')</th>
									<th class="product-total">@lang('msg.total')</th>
									<th class="product-remove"></th>

								</tr>
							</thead>
							<tbody>
							@php $total = 0 @endphp
					        @if(session('cart'))
					            @foreach(session('cart') as $id => $details)
					                @php $total += $details['price'] * $details['quantity'] @endphp
			                <tr class="table-body-row"  data-id="{{ $id }}">
			                <td class="product-image"><img src="{{ asset('Backend/images/' .$details['image']) }}" alt=""></td>
			                    <td data-th="Product">
			                        <div class="row">
			                            <div class="col-sm-9">
			                            @if(session()->get('langu')=='ar')
			                                <span class="nomargin">{{ $details['name_ar'] }}</span>
			                                @else
			                                <span class="nomargin">{{ $details['name'] }}</span>
			                                @endif
			                            </div>
			                        </div>
			                    </td>
								@php
								$totalQuantity=DB::table('product')->where('id',$details['ids'])->first();
								@endphp
								

			                    <td data-th="Price">SAR {{ number_format($details['price'],2) }}</td>
			                    <td data-th="Quantity">
									
								<input type="text" value="{{@$totalQuantity->Quantity}}" id="fixed_increment" hidden>
									
			                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
			                    </td>
			                    <td data-th="Subtotal" class="text-center ">SAR {{ number_format($details['price'] * $details['quantity'],2) }}</td>
			                    <td class="actions " data-th="">
			                        <button class="btn btn-sm remove-from-cart"><i class="far fa-window-close icon-grad"></i></button>
			                    </td>
			                </tr>


				             
												
												@endforeach
				        	@endif
											</tbody>
						</table>
						
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<div class="table-responsive">
							<table class="total-table">
								<thead class="total-table-head">
									<tr class="table-total-row">
										<th>@lang('msg.total')</th>
										<th>@lang('msg.Price')</th>
									</tr>
								</thead>
								<tbody>
						
									<tr class="total-data">
										<td><strong>@lang('msg.Subtotal')</strong></td>
										<td> SAR {{ number_format($total,2) }}</td>
									</tr>
			
									<tr class="total-data">
										<td><strong>@lang('msg.Shipping')</strong></td>
										<td>Free Shipping</td>
									</tr>
									<tr class="total-data">
										<td><strong>@lang('msg.total')</strong></td>
										<td> SAR {{ number_format($total,2) }}</td>
									</tr>
								</tbody>
							</table>
						</div>	
	
						<div class="cart-buttons">
							<!-- <a href="{{route('cart')}}" class="btn btn-primary py-md-2 px-md-3">Update Cart</a> -->
							@if($total && Auth::guard('member')->user())
							<a href="{{route('checkout')}}" class="btn btn-secondary py-md-2 px-md-3">@lang('msg.CheckOut')</a>
                            @else
							@if($total && Auth::guard('member')->user()== '')
                            <a href="{{url('/membership/login')}}" class="btn btn-secondary py-md-2 px-md-3 " >@lang('msg.CheckOut')</a>
                            @else
							<a href="{{route('shop_market')}}" class="btn btn-secondary py-md-2 px-md-3 " >@lang('msg.CheckOut')</a>
							@endif
							@endif
						</div>
					</div>

					<!-- <div class="coupon-section">
						<div class="coupon-form-wrap">
							<form action="{{route('cart')}}">
								<div class="col-md-12">
						<label>@lang('msg.applycoupon')</label>

								<input type="text" class="form-control" style="width: 100%;" placeholder="@lang('msg.coupon')"></div>
								<div class="d-flex justify-content-end">
									<input type="submit" value="@lang('msg.apply')" class="btn btn-primary mt-3">
								</div>
							</form>
						</div>
					</div> -->
				</div>
			</div>
        </div>
    </div>
    <!-- end cart -->
	<script type="text/javascript">
  
  $(".quantity").change(function (e) {
	// alert('hi')
        e.preventDefault();
        // quantity =ele.parents("tr").find(".quantity").val()
//   console.log(quantity);
//   id= ele.parents("tr").attr("data-id")
//   console.log(id);
        var ele = $(this);
		quantity= ele.parents("tr").find(".quantity").val()
		fixed_increment= ele.parents("tr").find("#fixed_increment").val()
		// quantity=0+quantity;
		// fixed_increment=fixed_increment;
		// fixed_increment=$('#fixed_increment').val();
// console.log(fixed_increment);
// console.log(quantity);
x=[0,1,2,3,4,5,6,7,8,9]
if(fixed_increment in x){
	fixed_increment = fixed_increment;
	quantity=  ele.parents("tr").find(".quantity").val()
	console.log(fixed_increment);
	console.log(quantity);
	// console.log('fixed_increment');
	// alert('1')
	if(quantity.length != fixed_increment.length){
	quantity =  ele.parents("tr").find(".quantity").val()
	quantity =  fixed_increment;
	// console.log('fixed_increment');
	// alert('7')
}

}
else if(quantity >= 1 && quantity < 10){
	quantity =  ele.parents("tr").find(".quantity").val()
	quantity =  0 + ele.parents("tr").find(".quantity").val()

	// alert('5')
}
 else if(quantity >= 10 && quantity <= 20){
	quantity =  ele.parents("tr").find(".quantity").val()
	console.log('fixed_increment');
	// alert('2')
}
 else if(quantity >= 20 && quantity < 100){
	quantity =  ele.parents("tr").find(".quantity").val()
	quantity =  0+ quantity;
	// console.log('fixed_increment');
	// alert('3')
}

else if(quantity.length != fixed_increment.length){
	quantity =  ele.parents("tr").find(".quantity").val()
	quantity =  fixed_increment;
	// console.log('fixed_increment');
	// alert('7')
}




if(quantity >= fixed_increment){
	quantity=fixed_increment;
	console.log(quantity)
	$.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: quantity
            },
            success: function (response) {
               window.location.reload();
            }
        });
}

else{
	if(quantity  < 1){
	quantity = 1;
}else{
	
	quantity = quantity;
	console.log(quantity)
	
}

	        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: quantity
            },
            success: function (response) {
// console.log(response);
               window.location.reload();
            }
        });
}
// if(quantity  < 1){
// 	quantity = 1;
// }
// else{

// }
	

    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
	@endsection


					
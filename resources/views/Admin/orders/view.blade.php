@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Order</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Shop</li>
                <li class="breadcrumb-item active">Order</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex">
                        <!-- <h5 class="card-title">Committee Category</h5> -->
                        </a>
                    </div>
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>OrderID - 	TRN00 -{{$order_details->order_id}} - SAR {{ $orders->order_total}}
                                        <div>


                                            @if( $orders->payment_status == 'pending')
                                            <label style="color:yellow;">Pending status :- Pending</label>
                                            @elseif ($orders->payment_status == 'completed')
                                            <label style="color:orange;">Pending status :- completed</label>
                                            
                                            @endif
                                        </div>


                                    </div>
                                    <!-- next div data -->
                                    <div style="right: 0 position: absolute">
				
		
            </div>
                                    <!-- next div data end-->

<!--  -->
<Style>
.modal-dispatch-wrap .modal-dialog{
    z-index: 11111;
    width: 280px;
    margin-top: 13%;

}

.modal-dispatch-wrap h2{
	font-size: 18px;
	padding-bottom:15px;
	font-weight: bold; 
}

</Style>	

<div class="modal-dispatch-wrap">

<div id="dispatch-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="POST">
      <div class="modal-body">
        <h2>  Tracking Order  <button type="button" class="close" data-dismiss="modal">&times;</button></h2>
        <input required="" type="text" id="name" name="trackingID" class="form-control" placeholder="Tracking ID">
      </div>

       <div class="modal-footer">
        <button type="submit" onclick="trackinFormSubmitt()" class="btn btn-primary">Submit</button>
      </div>
    </div>
    </form>

  </div>
</div>

</div>
<!-- modal close  -->

<!--  -->
<div class="row">
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-body">
				<h5 class="card-title">Order Information</h5>
				<table class="table table-hover table-striped table-bordered">
						<tr>
							<th>Order ID</th>
							<td>TRN00{{$order_details->order_id}}</td>
						</tr>
						
						<tr>
							<th>Customer Id</th>
							<td>{{$orders->customer_id}}</td>
						</tr>
					
					
						<tr>
							<th>Order Date-Time</th>
							<td>
							{{$orders->order_date}}
						
							</td>
						</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--  -->
<div class="row">
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-body">
				<h5 class="card-title">Amount Information</h5>
				<table class="table table-hover table-striped table-bordered">
						<tr>
							<th>Order Total</th>
							<td>SAR {{$orders->order_total}}</td>
						</tr>
						<tr>
							<th>Discount Total</th>
							<td>SAR {{$orders->discount_amount}}</td>
						</tr>
						
						<tr>
							<th>Comments</th>
							<td>{{$orders->notes}}</td>
						</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--  -->
<!--  -->
<div class="main-card mb-3 card">
	<div class="card-body">
	<h5 class="card-title">Order Items</h5>
		<table  class="table table-hover table-striped table-bordered">
				<tr>
					<th>Item</th>
					<th>Price (SAR)</th>
					<th>Quantity</th>
					<th>Sub-Total</th>
					<th>Status</th>
					<th>Status</th>
				</tr>
				
				<tr <?= ($orders->order_status == 'return')?'style="background:#f5c56e"':'';?>>
					<td>{{$order_details->item_id}}</td>
					<td>SAR {{$order_details->item_price}}</td>
					<td>{{$order_details->item_quantity}}</td>
					<td>SAR {{$order_details->subtotal}}</td>
					<td>{{$orders->status}}</td>
					<td><?= ($orders->order_status  == 'return')?'Return by '.$order_details->item_id.' '.$order_details->item_id:'';?></td>

				</tr>
			
		</table>
	</div>
</div>
<!--  -->
                                </div>
                            </div>
                        </div>
                        <!-- // -->
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->


@include('Admin.include.footer')
@include('Admin.include.script')
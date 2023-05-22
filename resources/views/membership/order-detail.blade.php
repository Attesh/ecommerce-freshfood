@include('membership.includes.head')
@include('membership.includes.header')
<style type="text/css">
   .table>:not(:first-child) {
      border-top: 2px solid #608c2a;
   }
   .table tbody tr td {
      vertical-align: middle;
      border-color: #9295a2;
   }
   .backbtn {
      margin-left: 8px;
   }
   .card .CompanyDetail li {
      color: black !important;
   }

   @media print {
     .logo-img, .btn-success , .btn-secondary , .navbar , .bg-footer{
         visibility: hidden;
         display: none;
      } 
        .bg-footer h4 , .bg-footer i , .bg-footer p , .bg-footer.container , .righttext {
         visibility: hidden;
         display: none;
      }
      #main-sec .card {
         border: none;
      }
      [data-sidebar-style='compact'] .content-body {
         margin-left: 0 !important;
      }
      [data-header-position='fixed'] .content-body {
         padding-top: 0 !important;
      }
      .hdr-div {
         display: none;
      }
      .pagetitle {
         display: none;
      }
      .header-nav {
         display: none;
         box-shadow: none;
      }
      .header-nav .nav-profile span{
         display: none !important;
      }
      .deznav {
         display: none;
      }
      .page-titles {
         display: none;
      }
      .nav-header {
         display: none;
      }
      .header {
         display: none !important;
         box-shadow: none;
         background-color: #f6f9ff;
      }
      .modal-header{
         display: none;
      }
      .header a, .header i, .header img {
         display: none;
      }
      .table thead th {
         color: black;
      }
      .harry {
         display: none;
      }
      .eventDetailCard {
         display: block;
         background: #F6F9FF !important;
         box-shadow: none;
      }
      .card {
         background: #F6F9FF !important;
         box-shadow: none;
      }
      .sidebar {
         box-shadow: none;
      }
      .harry1 {
         display: none;
      }
      .logo {
         display: block;
      }
      .footer {
         display: none;
      }
      .btn-primary {
         display: none;
      }
      body {
         margin-top: 0 !important;
         margin-bottom: 0 !important;
      }
   }
</style>
<main id="main">
   <section class="mbr-sec" id="main-sec">
    <div class="body">
    <div class="modal-body">
            <div class="card p-3">
               <div class="row">
                  <div class="col-md-8">
                     <div class="">
                        @php
                        $customer=DB::table('users')->where('id',$record->customer_id)->first();
                        @endphp
                        <img class="logo" src="{{asset('Backend/img/new-logo.png')}}" alt="no-img" style="width:100px;" >
                        <ul class="list-unstyled CompanyDetail mt-2 mb-2">
                          <!-- <li class="text-dark">Farm Fresh Ltd 85 Great abc Street Jiddha W1w 7lt Saudi Arabia</li> -->
                          <li class="text-dark">{{@$customer->first_name}} {{@$customer->last_name}}</li>
                          <li class="text-dark">{{@$customer->email}}</li>
                          <li class="text-dark">{{@$customer->phone}}</li>
                          <li class="text-dark">{{@$customer->address}}</li>
                          <!-- <li>Cancún, city, country C.P. 0500    </li> -->
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <table class="table table-bordered invoiceTable">
                        <tbody>
                           <tr>
                              <td>Invoice No</td>
                              <td>TRN00{{@$record->id}}</td>
                           </tr>
                           <tr>
                              <td>Date</td>
                              <td>{{date('d M Y',strtotime(@$record->order_date))}}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>    
@php
$order_details = DB::table('order_details')->where('order_id',$record->id)->first();
$getVat=DB::table('settings')->first();
$vat=$getVat->vat;
@endphp

               <div class="row my-2 mx-1 justify-content-center">
                  <div class="col-md-12">
                     <table class="table table-border invoiceItemeTable">
                        <thead style="background-color:#608c2a ;" class="text-white">
                          <tr>
                             <th scope="col">Sr. No</th>
                             <th scope="col">Order Id</th>
                             <th scope="col">Categories</th>
                             <th scope="col">Product</th>
                             <th scope="col">Unit Price</th>
                             <th scope="col">Qty</th>
                             <th scope="col" class="text-end">Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php
                           $product=DB::table('product')->where('id',$order_details->item_id)->first();
                           $category_id=$product->category_id;
                           $category=DB::table('categories')->where('id',$category_id)->first();

                           @endphp
                           <tr>
                              <td>1</td>
                              <td>TRN00{{@$order_details->order_id}}</td>
                              <td>{{$category->name}}</td>
                              <td>{{$product->name}}</td>
                              <td>{{number_format(@$order_details->item_price,2)}}</td>
                              <td>{{@$order_details->item_quantity}}</td>
                              <td class="text-end">{{number_format(@$order_details->subtotal,2)}}</td>
                           </tr>
                           
                        </tbody>
                     </table>
                  </div>   
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="d-flex justify-content-end align-items-center">
                        <table class="table w-25" style="font-weight: 600;">
                           <tbody> 
                              <tr class="totalCal">
                                 <td colspan="12"></td>
                                 <td> Sub Total</td>
                                 <td><span id="subtotal_sign">SAR </span><span id="sub_total">{{number_format(@$order_details->subtotal,2)}}</span></td>
                              </tr>
                              @php
                              $vatamount=$order_details->subtotal*$vat/100;
                              $grandtotal=$order_details->subtotal+$vatamount;
                              @endphp
                              
                              <tr class="totalCal">
                               
                                 <td colspan="12"></td>
                                 <td>VAT<input type="hidden" id="vat" value="taxta" name="vat"></td>
                                 <td><span id="vatInpt">{{$vat}}%</span></td>
                              </tr>
                              <tr class="totalCal">
                                 <td colspan="12"></td>
                                 <td>Grand Total</td>
                                 <td>SAR <span id="all_total">{{number_format($grandtotal,2)}}</span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>   
               </div>  
               <hr>
               <div class="row">
                  <div class="col-xl-10">
                     <p class="text-dark">Thank you for your purchase</p>
                  </div>
               </div>
 
               <div class="row mb-3">
                  <div class="col-md-12 text-end">
                     <!-- <a href="{{url('admin/manageinvoice')}}"> 
                        <button type="button" class="btn btn-primary text-capitalize backbtn">Back</button>
                     </a> -->
                     <button id="btnvo" type="button" onclick="window.print()" class="btn btn-primary text-capitalize">Print</button>
                  </div>
               </div>
            </div>  
         </div>
    </div>
      <!-- <div class="container-fluid ">
         <div class="row mb-5">
            <div class="col-lg-3 col-md-4 col-sm-5 col-12" id="side-nav">
               <ul class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <li class="nav-item active">
                     <button class="nav-link nav-link1 " id="v-pills-project-cmplt-tab" data-bs-toggle="pill" data-bs-target="#v-pills-project-cmplt" type="button" role="tab" aria-controls="v-pills-account" aria-selected="true">
                        <span class="memberpills-icon"> 
                           <i class="bi bi-house"></i>
                        </span> Orders
                     </button>
                  </li>
                  <li class="nav-item">   
                     <button class="nav-link nav-link1" id="v-pills-account-dtl-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account-dtl" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span class="memberpills-icon">
                           <i class="bi bi-person"></i>
                        </span>My Profile
                     </button>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('logout')}}" class="nav-link nav-link1" id="v-pills-log-tab" type="submit" role="tab" aria-controls="v-pills-logout" aria-selected="false" tabindex="-1">
                        <i class="bi bi-door-closed"></i> Log out
                     </a> 
                  </li>     
               </ul>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-12">
               Tabs content
               <div class="membertabcontent tab-content" id="v-pills-tabContent">
               </div>
            </div>
         </div>
      </div> -->
   </section>
</main>
<!-- End #main -->
@include('membership.includes.script')
@include('membership.includes.footer')
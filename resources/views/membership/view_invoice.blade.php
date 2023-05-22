@extends('Layout.mainlayout')
@section('title', 'Invoices || BIORD')
@section('contents')

<style type="text/css">
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

    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Invoices</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                       <div class="container">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="">
                              <img class="logo" src="{{asset('backend/images/logo_boir.png')}}" alt="" style="width:130px;" >
                              <ul class="list-unstyled CompanyDetail mt-2 mb-2">
                                <li class="text-dark">Livedeal Ltd 85 Great Portland Street London W1w 7lt United Kingdom</li>
                                <!-- <li>Cancún, city, country C.P. 0500    </li> -->
                                <li class="text-dark">Tel: +41 0441 413 8830</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <table class="table table-bordered invoiceTable">
                              <tbody>
                                <tr>
                                  <td>Invoice No</td>
                                  <td>23456789</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td>6 April 1998</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>    

                        <div class="row my-2 mx-1 justify-content-center">
                          <table class="table table-border invoiceItemeTable">
                            <thead style="background-color:#269bf0 ;" class="text-white">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Description</th>
                                <th scope="col">Reg.No</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col" class="text-end">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">11</th>
                                <td>companname</td>
                                <td>registrnumber</td>
                                <td>amountprice</td>
                                <td>sdfghjk</td>
                                <td class="text-end">total</td>
                              </tr>

                              <tr>
                                <th scope="row">11</th>
                                <td>compaame</td>
                                <td>registraumber</td>
                                <td>amountpackice</td>
                                <td>sdfghjk</td>
                                <td class="text-end">total</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                       <div class="col-sm-12">
                          <div class="d-flex justify-content-end align-items-center">
                            <table class="table w-25" style="font-weight: 600;">
                              <tbody> 
                                  <tr class="totalCal">
                                    <td colspan="12"></td>
                                    <td> Sub Total</td>
                                    <td><span id="subtotal_sign">₤</span><span id="sub_total">3000</span></td>
                                  </tr>
                                  <tr class="totalCal">
                                    <td colspan="12"></td>
                                    <td>Tax<input type="hidden" id="vat" value="taxta" name="vat"></td>
                                    <td>₤<span id="vatInpt">05670</span></td>
                                  </tr>
                                  <tr class="totalCal">
                                    <td colspan="12"></td>
                                    <td>Grand Total</td>
                                    <td>₤<span id="all_total">0088</span></td>
                                  </tr>
                              </tbody>
                            </table>
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
                            <a href="{{url('admin/manageinvoice')}}"> <button type="button" class="btn btn-primary text-capitalize backbtn">Back</button></a>
                            <button id="btnvo" type="button" onclick="window.print()" class="btn btn-primary text-capitalize">Print</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>

<script type="text/javascript">
$(document).ready(function () {
    var vat = parseFloat($('#vat').val()) || 0;
    var subtotal = parseFloat($('#sub_total').html()) || 0;
    var alltotalValue = 0;  
    var calculated_vat=0;
      var alltotalValueb = 0;
    
      alltotalValue = subtotal;
      calculated_vat=alltotalValue * (vat/100);
        alltotalValueb = (alltotalValue + (calculated_vat));
    
    $("#vatInpt").html(calculated_vat.toFixed(2));
    $("#all_total").text(alltotalValueb.toFixed(2));
    $("#payment_value").text(alltotalValueb.toFixed(2));
    $("#amount").val(alltotalValueb.toFixed(2));
  });

    $("#btnvo").click(function () {
      window.print();
    });
  </script>
@endsection

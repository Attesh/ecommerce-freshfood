@extends('frontend.main_master')
@section('content')


    <!-- Hero Start -->
    <!-- <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Our Products</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About us</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row py-3 bg-light">
                <div class="col-lg-3 col-md-4">
                    <div class="sidebar">
                        <div class="sidebar__item">
                           
                            <ul class="fs-5 fw-bold text-white mb-2">
                                <h6 class="mb-1">@lang('msg.cATEGORIES')</h6>
                                @foreach($categories as $record)
                                @php
                                $count=DB::table('product')->where('category_id',$record->id)->count();
                                @endphp
                                @if(session()->get('langu')=='ar')
                                        <li><a href="#">{{$record->name_ar}}</a><span class="catcount">{{$count}}</span></li>
                                        @else
                                        <li><a href="#">{{$record->name}}</a><span class="catcount">{{$count}}</span></li>
                                        @endif
                                @endforeach
                        </div>
                      
                        <!-- <div class="sidebar__item ">
                            <h6>@lang('msg.Price')</h6>
                            <div class="price-range-wrap ">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount" class="mx-1">
                                        <input type="text" id="maxamount" class="mx-2">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="sidebar__item border-bottom-0">
                            <div class="latest-product__text">
                                <h6>@lang('msg.LatestProducts')</h6>
                                <div class="container">
  
                                </div>
                                <div class="latest-product__slider owl-carousel mt-3">
                                    <div class="latest-prdouct__slider__item">
                                        @foreach($latest as $record)
                                        <a href="{{route('product_detail',$record->slug)}}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('Backend/images/' . $record->image) }}" alt="" class="slider-size">
                                            </div>
                                            <div class="latest-product__item__text">
                                            @if(session()->get('langu')=='ar')
                                                <h6>{{$record->name_ar}}</h6>
                                                <span>${{$record->price}}</span>
                                            @else
                                                <h6>{{$record->name}}</h6>
                                                <span>${{$record->price}}</span>
                                        @endif
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="row">

                            <!-- <div class="col-md-12">
                                <div class="mx-auto text-center m-5" style="max-width: 500px;">
                                    <h2 class="">Popular Products</h1>
                                </div>
                                <div class="owl-carousel product-carousel-shop px-5">
                                @foreach($products as $record)
                                <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                        <img class="img-fluid mb-1" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                                        <h6 class="mb-3">
                                        @if(session()->get('langu')=='ar')
                                        {{$record->name_ar}}
                                        @else
                                        {{$record->name}}
                                        @endif
                                        </h6>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div> -->
                       
                        <!-- <div class="col-md-12">
                            <div class="filter__item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="filter__sort">
                                            <span>Sort By</span>
                                            <select>
                                                <option value="0">Default</option>
                                                <option value="0">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="filter__found">
                                            <h6><span>{{$product_count}}</span>@lang('msg.productsFound')</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="filter__option">
                                            <ul class="nav nav-tabs justify-content-end">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#gird"><i class="fas fa-th-large"></i></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#list"><i class="fas fa-list"></i></a>
                                                </li>
                                            </ul>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div id="gird" class="tab-pane fade in active show">
                                @if((count($products) > 0))
                                    <div class="row">
                                    @foreach($sale_products as $record)
            @php
            $original_price=$record->price;
            
            $sale_price=$record->sale_price;
            $total_discount=$original_price-$sale_price;
            $discount=($total_discount/$original_price) * 100;
            $today = date('Y-m-d');
            $dueDate=$record->sale_due_date;
           
            $datetime1 = strtotime($dueDate); // convert to timestamps
        $datetime2 = strtotime($today); // convert to timestamps
        $days = (int)(($datetime1 - $datetime2)/86400); // will give the difference in days , 86400 is the timestamp difference of a day
            @endphp
            @if($days > 0)
                <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                    <div class="card card-sale card-span h-100">
                        <div class="position-relative"> 
                            <img class="img-fluid " src="{{ asset('Backend/images/' . $record->image) }}" alt="...">
                            <div class="card-actions">
                                <div class="badge badge-foodwagon bg-primary p-4">
                                    <div class="d-flex flex-between-center">
                                        <div class="text-white sale-fs">{{number_format($discount,0)}}</div>
                                        <div class="d-block text-white fs-5">% <br>
                                            <div class="fw-normal fs-6 mt-2">Off</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(session()->get('langu')=='ar')
                        <div class="card-body px-0">
                          <h5 class="fw-bold text-1000 text-truncate">{{$record->name_ar}}</h5>
                          <span class="badge bg-soft-danger py-2 px-3"><span class="fs-6 text-danger">{{$days}} @lang('msg.daysRemaining')</span></span>
                        </div>
                                    @else
                                    <div class="card-body px-0">
                          <h5 class="fw-bold text-1000 text-truncate">{{$record->name}}</h5>
                          <span class="badge bg-soft-danger py-2 px-3"><span class="fs-6 text-danger">{{$days}} @lang('msg.daysRemaining')</span></span>
                        </div>
                                    @endif
                        <!-- <div class="card-body px-0">
                          <h5 class="fw-bold text-1000 text-truncate">{{$record->name}}</h5>
                          <span class="badge bg-soft-danger py-2 px-3"><span class="fs-6 text-danger">{{$days}} days Remaining</span></span>
                        </div> -->
                        <a class="stretched-link" href="{{route('product_detail',$record->slug)}}"></a>
                    </div>
                </div>
                @endif
            @endforeach
                                    </div> 
                                    @endif
                                </div>
                                <div id="list" class="tab-pane fade">
                                @if((count($products) > 0))
                                    <div class="row">
                                    @foreach($products as $record)
                                        <div class="col-md-12">
                                            <div class="pb-5">
                                                <div class="product-item-listview position-relative bg-white d-flex text-center">
                                                    <img class="img-fluid my-1" src="{{ asset('Backend/images/' . $record->image) }}" alt="" style="height: 150px;" >
                                                    <div class="m-5">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    @endif
                                                        <h5 class="text-primary mb-0"></h5>
                                                    </div>
                                                    <div class="btn-action d-flex flex-column ms-auto justify-content-evenly">
                                                        <a class="btn bg-primary py-2 px-3 d-block" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                    @endif
                                </div>    
                            </div> 
                        </div>
                        <div class="col-md-12">
                                <div class="mx-auto text-center m-5" style="max-width: 500px;">
                                    <h2 class="">@lang('msg.popularproduct')</h1>
                                </div>
                                <div class="owl-carousel product-carousel-shop px-5">
                                @foreach($products as $record)
                                <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                    <a  href="{{route('product_detail',$record->slug)}}"><img class="img-fluid mb-1" src="{{ asset('Backend/images/' . $record->image) }}" alt=""></a>
                                        <h6 class="mb-3">
                                        @if(session()->get('langu')=='ar')
                                        {{$record->name_ar}}
                                        @else
                                        {{$record->name}}
                                        @endif
                                        </h6>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                    </div>         
                             
                </div>
            </div>        
        </div>
    </div>
    <!-- Products End -->


    
    

    @endsection



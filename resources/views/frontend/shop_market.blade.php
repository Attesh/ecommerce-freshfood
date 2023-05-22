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
                                        <li><a href="{{route('category_details',$record->id)}}">{{$record->name_ar}}</a><span class="catcount">{{$count}}</span></li>
                                        @else
                                        <li><a href="{{route('category_details',$record->id)}}">{{$record->name}}</a><span class="catcount">{{$count}}</span></li>
                                        @endif
                                @endforeach
                                <!-- <li><a href="#">Vegetables</a><span class="catcount">(43)</span></li>
                                <li><a href="#">Fruit & Nut Gifts</a><span class="catcount">(22)</span></li>
                                <li><a href="#">Fresh Berries</a><span class="catcount">(32)</span></li>
                                <li><a href="#">Ocean Foods</a><span class="catcount">(92)</span></li>
                                <li><a href="#">Herbs</a><span class="catcount">(12)</span></li>
                                <li><a href="#">Fresh Onion</a><span class="catcount">(11)</span></li>
                                <li><a href="#">Papayaya & Crisps</a><span class="catcount">(33)</span></li> -->
                            </ul>
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
                        <!-- <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div> -->
                        <!-- <div class="sidebar__item">
                            <h6>Popular Size</h6>
                            <div class="sidebar__item__size">
                                <label for="large" class="btn btn-primary">
                                    Large
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium" class="btn btn-primary">
                                    Medium
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small" class="btn btn-primary">
                                    Small
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny" class="btn btn-primary">
                                    Tiny
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div> -->
                        <div class="sidebar__item border-bottom-0">
                            <div class="latest-product__text">
                                <h6>@lang('msg.LatestProducts')</h6>
                                <div class="container">
  
                                </div>
                                <div class="latest-product__slider owl-carousel mt-3">
                                @foreach($latest->chunk(3) as $key => $records)
                        @if(count($records)==3)

                            
                            <div class="latest-prdouct__slider__item  {{ ($key == 0) ? 'Active' : ''}}" >
                           
                              
                            @foreach($records as $key => $record)
                                <a href="{{route('product_detail',$record->slug)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('Backend/images/' . $record->image) }}" alt="" class="slider-size">
                                    </div>
                                    @if(session()->get('langu')=='ar')
                                    <div class="latest-product__item__text">
                                        <h6>{{$record->name_ar}}</h6>
                                        <span>@lang('msg.SAR') {{number_format($record->price,2)}}</span>
                                    </div>
                                    @else
                                    <div class="latest-product__item__text">
                                        <h6>{{$record->name}}</h6>
                                        <span>@lang('msg.SAR') {{number_format($record->price,2)}}</span>
                                    </div>
                                    @endif
                                </a>
                               
                                @endforeach
                              
                                </a>
                            
                            </div>
                            
                          @endif
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="mb-5">
                                <!-- <h6 class="text-primary text-uppercase">Products</h6> -->
                                <h2 class="">@lang('msg.FreshProducts')</h2>
              
                            </div>
                            @if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert" id="sucess-alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
</div>
    @endif
    @if (session('errors'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="danger_alert">
        <strong>Field are Required!</strong> {{ session('errors') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
    </div>
    <!--  -->

    @endif
                            <div class="owl-carousel product-carousel px-5">
                                @foreach($fresh as $record)
                                <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                        <a href="{{route('product_detail',$record->slug)}}"><img class="img-fluid mb-1" src="{{ asset('Backend/images/' . $record->image) }}" alt=""></a>
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
                                <!-- <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                        <img class="img-fluid mb-1" src="{{asset('frontend/img/products/product-img-4.jpg')}}" alt="">
                                        <h6 class="mb-3">Fresh Kiwis</h6>
                                    </div>
                                </div> -->
                                <!-- <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                        <img class="img-fluid mb-1" src="{{asset('frontend/img/product-2.png')}}" alt="">
                                        <h6 class="mb-3">Fresh Vegetables</h6>
                                    </div>
                                </div> -->
                                <!-- <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                        <img class="img-fluid mb-1" src="{{asset('frontend/img/products/product-img-3.jpg')}}" alt="">
                                        <h6 class="mb-3">Fresh Lemons</h6>
                                    </div>
                                </div> -->
                                <!-- <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                        <img class="img-fluid mb-1" src="{{asset('frontend/img/products/product-img-2.jpg')}}" alt="">
                                        <h6 class="mb-3">Fresh Graphs</h6>
                                    </div>
                                </div> -->
                                <!-- <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                        <img class="img-fluid mb-1" src="{{asset('frontend/img/products/product-img-1.jpg')}}" alt="">
                                        <h6 class="mb-3">Fresh Strawberries</h6>
                                    </div>
                                </div> -->
                            </div>
                        </div>    
                    </div>

                    <div class="row">

                            <div class="col-md-12">
                                <div class="mx-auto text-center m-5" style="max-width: 500px;">
                                    <!-- <h6 class="text-primary text-uppercase">Popular Products</h6> -->
                                    <h2 class="">@lang('msg.popularproduct')</h1>
                                </div>
                                <div class="owl-carousel product-carousel-shop px-5">
                                @foreach($products as $record)
                                <div class="pb-2">
                                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                        <a href="{{route('product_detail',$record->slug)}}"><img class="img-fluid mb-1" src="{{ asset('Backend/images/' . $record->image) }}" alt=""></a>
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
                                    <!-- <div class="pb-5">
                                        <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                            <img class="img-fluid mb-2" src="{{asset('frontend/img/products/product-img-4.jpg')}}"  alt="">
                                            <h6 class="mb-3">Organic Vegetable</h6>
                                            <h5 class="text-primary mb-1">$19.00</h5>
                                            <div class="btn-action d-flex justify-content-center">
                                                <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                                                <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="pb-5">
                                        <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                            <img class="img-fluid mb-2" src="{{asset('frontend/img/product-2.png')}}" alt="">
                                            <h6 class="mb-3">Organic Vegetable</h6>
                                            <h5 class="text-primary mb-1">$19.00</h5>
                                            <div class="btn-action d-flex justify-content-center">
                                                <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                                                <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="pb-5">
                                        <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                            <img class="img-fluid mb-2" src="{{asset('frontend/img/products/product-img-2.jpg')}}" alt="">
                                            <h6 class="mb-3">Organic Vegetable</h6>
                                            <h5 class="text-primary mb-1">$19.00</h5>
                                            <div class="btn-action d-flex justify-content-center">
                                                <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                                                <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="pb-5">
                                        <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                            <img class="img-fluid mb-2" src="{{asset('frontend/img/products/product-img-2.jpg')}}" alt="">
                                            <h6 class="mb-3">Organic Vegetable</h6>
                                            <h5 class="text-primary mb-1">$19.00</h5>
                                            <div class="btn-action d-flex justify-content-center">
                                                <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                                                <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="pb-5">
                                        <div class="product-item position-relative bg-white d-flex flex-column text-center">
                                            <img class="img-fluid mb-2" src="{{asset('frontend/img/products/product-img-1.jpg')}}" alt="">
                                            <h6 class="mb-3">Organic Vegetable</h6>
                                            <h5 class="text-primary mb-1">$19.00</h5>
                                            <div class="btn-action d-flex justify-content-center">
                                                <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                                                <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                       
                        <div class="col-md-12">
                            <div class="filter__item">
                                <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="filter__sort">
                                            <span>@lang('msg.sortby')</span>
                                            <select onchange="window.location.href=this.options[this.selectedIndex].value;">
                                                <option value="{{ route('shop_market') }}" selected>&nbsp;@lang('msg.default')</option>
                                                @if(@$productsASC)
                                                <option value="{{route('Low_to_High') }}" selected>&nbsp;@lang('msg.LowtoHigh')</option>
                                                @else
                                                <option value="{{route('Low_to_High') }}">&nbsp;@lang('msg.LowtoHigh')</option>
                                                @endif
                                                @if(@$productsDESC)
                                                <option value="{{route('High_to_Low') }}" selected>&nbsp;@lang('msg.HightoLow')</option>
                                                @else
                                                <option value="{{route('High_to_Low') }}">&nbsp;@lang('msg.HightoLow')</option>
                                                @endif
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
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div id="gird" class="tab-pane fade in active show">
                                @if(@$productsASC)
                                    <div class="row">
                                        @foreach($productsASC as $record)
                                        @php
                                        $original_price=$record->price;
                                        $sale_price=$record->sale_price;
                                        $total_discount=$original_price-$sale_price;
                                        $discount=($total_discount/$original_price) * 100;
                                        @endphp
                                        @if($record->on_sale=='1')
                                        <div class="col-md-4 col-sm-4 col-6">
                                            <div class="pb-5">
                                                <div class="product-card-item position-relative bg-white d-flex flex-column text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid mb-4" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                                                    <!-- <div class="card-actions">
                                                    <div class="badge badge-foodwagon bg-primary p-2">
                                                        <div class="d-flex flex-between-center">
                                                            <div class="text-white sale-fs">{{number_format($discount,0)}}</div>
                                                            <div class="d-block text-white fs-5">% <br>
                                                                <div class="fw-normal fs-6 mt-2">Off</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @endif
                                                    <div class="btn-action d-flex justify-content-center">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 mx-1 disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                    <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-4 col-sm-4 col-6">
                                            <div class="pb-5">
                                                <div class="product-card-item position-relative bg-white d-flex flex-column text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid mb-4" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @endif
                                                    <div class="btn-action d-flex justify-content-center">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 mx-1 disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                    <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}" ><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div> 

                                @elseif(@$productsDESC)
                                <div class="row">
                                        @foreach($productsDESC as $record)
                                        @php
                                        $original_price=$record->price;
                                        $sale_price=$record->sale_price;
                                        $total_discount=$original_price-$sale_price;
                                        $discount=($total_discount/$original_price) * 100;
                                        @endphp
                                        @if($record->on_sale=='1')
                                        <div class="col-md-4 col-sm-4 col-6">
                                            <div class="pb-5">
                                                
                                                <div class="product-card-item position-relative bg-white d-flex flex-column text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid mb-4" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @endif
                                                    <div class="btn-action d-flex justify-content-center">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 mx-1 disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                    <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-4 col-sm-4 col-6">
                                            <div class="pb-5">
                                                <div class="product-card-item position-relative bg-white d-flex flex-column text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid mb-4" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @endif
                                                    <div class="btn-action d-flex justify-content-center">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 mx-1 disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                    <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div> 


                                @elseif((count($products) > 0))
                                    <div class="row">
                                        @foreach($products as $record)
                                        @php
                                        $original_price=$record->price;
                                        $sale_price=$record->sale_price;
                                        $total_discount=$original_price-$sale_price;
                                        $discount=($total_discount/$original_price) * 100;
                                        @endphp
                                        @if($record->on_sale=='1')
                                        <div class="col-md-4 col-sm-4 col-6">
                                            <div class="pb-5">
                                                
                                                <div class="product-card-item position-relative bg-white d-flex flex-column text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid mb-4" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                                                    <!-- <div class="card-actions">
                                                    <div class="badge badge-foodwagon bg-primary p-2">
                                                        <div class="d-flex flex-between-center">
                                                            <div class="text-white sale-fs">{{number_format($discount,0)}}</div>
                                                            <div class="d-block text-white fs-5">% <br>
                                                                <div class="fw-normal fs-6 mt-2">Off</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @endif
                                                    <div class="btn-action d-flex justify-content-center">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 mx-1 disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                    <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-4 col-sm-4 col-6">
                                            <div class="pb-5">
                                                <div class="product-card-item position-relative bg-white d-flex flex-column text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid mb-4" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @endif
                                                    <div class="btn-action d-flex justify-content-center">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 mx-1 disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                    <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 mx-1" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div> 
                                    @endif
                                </div>
                                <div id="list" class="tab-pane fade">
                                @if(@$productsASC)
                                    <div class="row">
                                        @foreach($productsASC as $record)
                                        @php
                                        $original_price=$record->price;
                                        $sale_price=$record->sale_price;
                                        $total_discount=$original_price-$sale_price;
                                        $discount=($total_discount/$original_price) * 100;
                                        @endphp
                                        @if($record->on_sale=='1')
                                        <div class="col-md-12">
                                            <div class="pb-5">
                                                <div class="product-item-listview position-relative bg-white d-flex text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid my-1" src="{{ asset('Backend/images/' . $record->image) }}" alt="" style="height: 150px;" >
                                                    <div class="title-name">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @endif
                                                        <h5 class="text-primary mb-0"></h5>
                                                    </div>
                                                    <div class="btn-action d-flex flex-column ms-auto justify-content-evenly">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 d-block disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 d-block" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-12">
                                            <div class="pb-5">
                                                <div class="product-item-listview position-relative bg-white d-flex text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid my-1" src="{{ asset('Backend/images/' . $record->image) }}" alt="" style="height: 150px;" >
                                                    <div class="title-name">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    
                                                    @endif
                                                        <h5 class="text-primary mb-0"></h5>
                                                    </div>
                                                    <div class="btn-action d-flex flex-column ms-auto justify-content-evenly">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 d-block disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 d-block" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    @elseif(@$productsDESC)
                                    <div class="row">
                                        @foreach($productsDESC as $record)
                                        @php
                                        $original_price=$record->price;
                                        $sale_price=$record->sale_price;
                                        $total_discount=$original_price-$sale_price;
                                        $discount=($total_discount/$original_price) * 100;
                                        @endphp
                                        @if($record->on_sale=='1')
                                        <div class="col-md-12">
                                            <div class="pb-5">
                                                <div class="product-item-listview position-relative bg-white d-flex text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid my-1" src="{{ asset('Backend/images/' . $record->image) }}" alt="" style="height: 150px;" >
                                                    <div class="title-name">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @endif
                                                        <h5 class="text-primary mb-0"></h5>
                                                    </div>
                                                    <div class="btn-action d-flex flex-column ms-auto justify-content-evenly">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 d-block disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 d-block" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-12">
                                            <div class="pb-5">
                                                <div class="product-item-listview position-relative bg-white d-flex text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid my-1" src="{{ asset('Backend/images/' . $record->image) }}" alt="" style="height: 150px;" >
                                                    <div class="title-name">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    
                                                    @endif
                                                        <h5 class="text-primary mb-0"></h5>
                                                    </div>
                                                    <div class="btn-action d-flex flex-column ms-auto justify-content-evenly">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 d-block disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 d-block" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                @elseif((count($products) > 0))
                                <div class="row">
                                        @foreach($products as $record)
                                        @php
                                        $original_price=$record->price;
                                        $sale_price=$record->sale_price;
                                        $total_discount=$original_price-$sale_price;
                                        $discount=($total_discount/$original_price) * 100;
                                        @endphp
                                        @if($record->on_sale=='1')
                                        <div class="col-md-12">
                                            <div class="pb-5">
                                                <div class="product-item-listview position-relative bg-white d-flex text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid my-1" src="{{ asset('Backend/images/' . $record->image) }}" alt="" style="height: 150px;" >
                                                    <div class="title-name">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0 text-decoration-line-through text-muted fs-6">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->sale_price,2)}}</h5>
                                                    @endif
                                                        <h5 class="text-primary mb-0"></h5>
                                                    </div>
                                                    <div class="btn-action d-flex flex-column ms-auto justify-content-evenly">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 d-block disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 d-block" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-12">
                                            <div class="pb-5">
                                                <div class="product-item-listview position-relative bg-white d-flex text-center">
                                                @if($record->Alert_Stock >= $record->Quantity)
                                                <div class="ribbon-corner ribbon ribon4" data-tor="place.left place.top"><strong>@lang('msg.outofstock')</strong></div>
                                                @endif
                                                    <img class="img-fluid my-1" src="{{ asset('Backend/images/' . $record->image) }}" alt="" style="height: 150px;" >
                                                    <div class="title-name">
                                                    @if(session()->get('langu')=='ar')
                                                    <h6 class="mb-3">{{$record->name_ar}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    @else
                                                    <h6 class="mb-3">{{$record->name}}</h6>
                                                    <h5 class="text-primary mb-0">@lang('msg.SAR') {{number_format($record->price,2)}}</h5>
                                                    
                                                    @endif
                                                        <h5 class="text-primary mb-0"></h5>
                                                    </div>
                                                    <div class="btn-action d-flex flex-column ms-auto justify-content-evenly">
                                                    @if($record->Alert_Stock >= $record->Quantity)
                                                    <a class="btn bg-primary py-2 px-3 d-block disabled" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white disabled"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @else
                                                        <a class="btn bg-primary py-2 px-3 d-block" href="{{route('add.to.cart',$record->id)}}"><i class="bi bi-cart text-white"></i></a>
                                                        <a class="btn bg-secondary py-2 px-3 d-block" href="{{route('product_detail',$record->slug)}}"><i class="bi bi-eye text-white"></i></a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    @endif
                                </div>    
                            </div> 
                        </div>
                    </div>         
                             
                </div>
            </div>        
        </div>
    </div>
    <!-- Products End -->


    
    

    @endsection



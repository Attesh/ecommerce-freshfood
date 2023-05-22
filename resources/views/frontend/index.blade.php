@extends('frontend.main_master')
@section('content')

<!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="row">
           
            <div class="col-md-12">
                <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    @if($slider)
                    <div class="carousel-inner">
                        @foreach($slider as $data)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img class="w-100" src="{{ asset('Backend/images/' . $data->images)}}" alt="Image">
                            <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="slider-div px-5">
                                <h4 class="text-secondary">
                                @if(session()->get('langu')=='ar')
                                {{$data->title_ar}}
                                @else
                                {{$data->title}}
                                @endif    
                                </h4>
                                    <!-- <h4 class="text-secondary">@lang('msg.Fooddeliveryservice')</h4> -->
                                    <h1 class="text-white mb-md-4 display-5">
                                    @if(session()->get('langu')=='ar')
                                        {!!$data->short_description_ar!!}
                                    @else
                                    {!!$data->short_description!!}
                                    @endif     
                                    </h1>
                                    <form>
                                        <div class="d-flex mt-1">
                                            <!-- <div class="input-group banr-txt">
                                                <input type="text" class="form-control text-center py-md-2 px-md-2" style="border-radius: 9px;" placeholder="@lang('msg.ZipCode')" aria-label="Username">
                                            </div>     -->
                                            <a href="{{route('shop_market')}}" class="btn btn-secondary py-md-2 px-md-4 slider-explore-btn">@lang('msg.explore')</a>
                                        </div>    
                                    </form>    
                                    <!-- <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5">Contact</a> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="carousel-item">
                            <img class="w-100" src="{{asset('frontend/img/food4.png')}}" alt="Image">
                            <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="text-start px-5">
                                    <h4 class="text-secondary">@lang('msg.organicfruits')</h4>
                                    <h1 class="text-white mb-md-4 display-5">@lang('msg.slider-subtitle2')</h1>
                                    <form>
                                        <div class="d-flex mt-1">
                                            <div class="input-group banr-txt">
                                                <input type="text" class="form-control text-center py-md-2 px-md-2" style="border-radius: 9px;" placeholder="@lang('msg.ZipCode')" aria-label="Username">
                                            </div>    
                                            <a href="" class="btn btn-secondary py-md-2 px-md-4 ms-3">@lang('msg.explore')</a>
                                        </div>    
                                    </form>   
                                </div>
                            </div>
                        </div> -->
                    </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Banner Start -->
    <!-- <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div class="bg-primary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Organic Vegetables</h3>
                        <p class="text-white " style="width: 70%;">Dolor magna ipsum elitr sea erat elitr amet ipsum stet justo dolor, amet lorem diam no duo sed dolore amet diam</p>
                        <a class="text-white fw-bold" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary bg-fruit d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Organic Fruits</h3>
                        <p class="text-white w-75">Dolor magna ipsum elitr sea erat elitr amet ipsum stet justo dolor, amet lorem diam no duo sed dolore amet diam</p>
                        <a class="text-white fw-bold" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Banner Start -->


    <section class="offer_section layout_padding-bottom">
        <div class="offer_container">
            <div class="container ">
                <div class="row">
                    @foreach($promotion as $record)
                    <div class="col-md-6  ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                            </div>
                            <div class="detail-box">
                                @if(session()->get('langu')=='ar')
                                <h5>{{$record->name_ar}}</h5>
                                @else
                                <h5>{{$record->name}}</h5>
                                @endif
                                @php
                                $original_price=$record->price;
                                $sale_price=$record->sale_price;
                                $total_discount=$original_price-$sale_price;
                                $discount=($total_discount/$original_price) * 100;
                                @endphp
                                <h6><span>{{number_format($discount,0)}}%</span>@lang('msg.Off') </h6>
                                <a href="{{route('sales')}}">@lang('msg.OrderNow') 
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                
                                        <g>
                                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                            c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"></path>
                                        </g>
                                
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                            C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                            c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                            C457.728,97.71,450.56,86.958,439.296,84.91z"></path>
                                        </g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                            c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-md-6  ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{asset('frontend/img/vbasket3a.png')}}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>@lang('msg.WeekendDays')</h5>
                                <h6><span>15%</span>@lang('msg.Off') </h6>
                                <a href="">@lang('msg.OrderNow') 
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        
                                        <g>
                                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                            c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"></path>
                                        </g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                C457.728,97.71,450.56,86.958,439.296,84.91z"></path>
                                        </g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                            c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="banner123">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('frontend/img/banner/banner-food1.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('frontend/img/banner/banner-food1.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- work Start -->
    @if($work)
    <div class="container-fluid facts py-4 py-md-5 mb-1 mb-md-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mx-auto text-center mb-3 pb-2">
                        <!-- <h6 class="text-primary text-uppercase">Products</h6> -->
                        @if(session()->get('langu')=='ar')
                        <h1 class="display-5">{{@$details->page_title_arr}}</h1>
                        @else
                        <h1 class="display-5">{{@$details->page_title}}</h1>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($work as $record)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="d-block service-item bg-light p-3">
                        <div class="worksIcon-div">
                            <i class="{{$record->icon}}"></i>
                        </div>
                        <div class="text-center workH">
                        @if(session()->get('langu')=='ar')
                            <h4>{{$record->title_ar}}</h4>
                            <p class="mb-2">{{$record->description_ar}}</p>
                                    @else
                                    <h4>{{$record->title}}</h4>
                            <p class="mb-2">{{$record->description}}</p>
                                    @endif
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="d-block service-item bg-light p-3">
                        <div class="worksIcon-div">
                            <i class="fas fa-shopping-basket fs-1 icon-grad"></i><i class=""></i>
                        </div>
                        <div class="text-center workH">
                            <h4>@lang('msg.choose food items and place order')</h4>
                            <p class="mb-2">@lang('msg.browse hundreds of menus')</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="d-block service-item bg-light p-3">
                        <div class="worksIcon-div">
                            <i class="fas fa-wallet fs-1 icon-grad"></i>
                        </div>
                        <div class="text-center workH">
                            <h4>@lang('msg.payment')</h4>
                            <p class="mb-2">@lang('msg.its fast')</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="d-block service-item bg-light p-3">
                        <div class="worksIcon-div">
                            <i class="fa fa-truck fs-1 icon-grad"></i>
                        </div>
                        <div class="text-center workH">
                            <h4>@lang('msg.we deliver your food items')</h4>
                            <p class="mb-2">@lang('msg.a delicious farm box appears')</p>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </div>
    @endif
    <!-- work End -->
    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-4 py-md-5 mb-0 mb-md-0">
        <div class="container">
            <div class="row gx-5 gy-4">
                <div class="col-md-12">
                    <div class="guarantee-banr">
                        <img src="{{asset('frontend/img/new-g.png')}}" class="img-glable">
                        <h2 class="text-white">@lang('msg.FarmfreshGuarantee')</h2>
                        <p class="text-white">
                        @lang('msg.FarmfreshGuarantee-para')
                        </p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    @if($deal)
@php
$original_price=$deal->price;
            
            $sale_price=$deal->sale_price;
            $total_discount=$original_price-$sale_price;
            $discount=($total_discount/$original_price) * 100;
@endphp
    
    <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>{{number_format($discount,0)}}%</strong> <br>@lang('msg.offperkg') 
                                </span>
                            </div>
                        </div>
                        <img src="{{ asset('Backend/images/' . $deal->image) }}" alt="" class="img-fluid">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
                    <h3><span class="orange-text">@lang('msg.Deal')</span>@lang('msg.ofthemonth') </h3>
                    <!-- <h4>@lang('msg.HikanStrwaberry')</h4> -->
                    @if(session()->get('langu')=='ar')
                    <h4>{{$deal->name_ar}}</h4>
                    <div class="text">
                        {!!$deal->description_ar!!}
                    </div>
                    @else
                    <h4>{{$deal->name}}</h4>
                    <div class="text">
                        {!!$deal->description!!}
                    </div>
                    @endif
                    <!--Countdown Timer-->
                    <!-- <div class="time-counter">
                        <div class="time-countdown clearfix" data-countdown="2020/2/01">
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">00</span>@lang('msg.Days')
                                </div>
                            </div> 
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">00</span>@lang('msg.Hours')
                                </div>
                            </div>  
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">00</span>@lang('msg.Mins')
                                </div>
                            </div>  
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">00</span>@lang('msg.Secs')
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <a href="{{route('sales')}}" class="btn btn-secondary py-md-2 px-md-4 slider-explore-btn">@lang('msg.explore')</a>
                    <!-- <a href="{{route('sales')}}" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i>@lang('msg.AddtoCart') </a> -->
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- categorie Start -->
    @if($category)
    <div class="container-fluid facts py-3 mb-md-5 mb-4 mt-md-5 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mx-auto text-center mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">@lang('msg.cATEGORIES')</h6>
                        <h1 class="display-5">@lang('msg.Our Fresh Foods')</h1>
                    </div>
                </div>
            </div>
            <div class="row gx-5 gy-4">
                @foreach($category as $record)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="product-card">
                            <a href="{{route('category_details',$record->id)}}" class="">
                                <img src="{{ asset('Backend/images/' . $record->image) }}" style="height: 160px; width:160px;">
                                @if(session()->get('langu')=='ar')
                                <h5 class="mt-3">{{$record->name_ar}}</h5>
                                    @else
                                    <h5 class="mt-3">{{$record->name}}</h5>
                                    @endif
                               
                            </a>
                        </div>    
                    </div>
                @endforeach
                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="product-card">
                        <a href="#">
                            <img src="{{asset('frontend/img/fbasket3a.png')}}" style="height: 160px; width:160px;">
                            <h5 class="mt-3">@lang('msg.FreshFruits')</h5>
                        </a>    
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="product-card">
                        <a href="#">
                            <img src="{{asset('frontend/img/meat2.jpg')}}" style="height: 160px; width:160px;">
                            <h5 class="mt-3">@lang('msg.Meat')</h5>
                        </a>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="product-card">
                        <a href="#">
                            <img src="{{asset('frontend/img/dbasket.jpg')}}" style="height: 160px; width:160px;">
                            <h5 class="mt-3">@lang('msg.OceanFoods') </h5>
                        </a>    
                    </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="vendor-card">
                        <div class="vendor-icon">
                            <i class="fas fa-lemon icon-grad"></i>
                        </div> 
                        <h5>Fresh Onion</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vendor-card">
                        <div class="vendor-icon">
                            <i class="fas fa-seedling icon-grad"></i>
                        </div> 
                        <h5>Papayaya & Crisps</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vendor-card">
                        <div class="vendor-icon">
                            <i class="fas fa-cheese icon-grad"></i>
                        </div> 
                        <h5>Oatmeal</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vendor-card">
                        <div class="vendor-icon">
                            <i class="fas fa-carrot icon-grad"></i>
                        </div>    
                        <h5>Fresh Fruites</h5>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    @endif
    <!-- work End -->

    <!-- Features Start -->
    <div class="container-fluid bg-primary feature pb-4 pb-md-5 pb-lg-0 py-md-5 py-4">
        <div class="container">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
            @if(session()->get('langu')=='ar')    
            <h6 class="text-uppercase text-secondary">{{$features_record->page_title_arr}}</h6>
            <h1 class="display-5 text-white">{{$features_record->page_short_description_arr}}</h1>
            @else
            <h6 class="text-uppercase text-secondary">{{$features_record->page_title}}</h6>
            <h1 class="display-5 text-white">{{$features_record->page_short_description}}</h1>
            @endif
                        
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-3">
                    
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class=" fs-4 text-white {{@$features->icon_right1}}"></i>
                        </div>
                        @if(session()->get('langu')=='ar')
                        <h4 class="text-white">{{@$features->title_right1_arr}}</h4>
                        <p class="mb-0">{!!@$features->short_description_right1_arr!!}</p>
                        @else
                        <h4 class="text-white">{{@$features->title_right1}}</h4>
                        <p class="mb-0">{!!@$features->short_description_right1!!}</p>
                        @endif
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fs-4 text-white {{@$features->icon_right2}}"></i>
                        </div>
                        @if(session()->get('langu')=='ar')
                        <h4 class="text-white">{{@$features->title_right2_arr}}</h4>
                        <p class="mb-0">{!!@$features->short_description_right2_arr!!}</p>
                        @else
                        <h4 class="text-white">{{@$features->title_right2}}</h4>
                        <p class="mb-0">{!!@$features->short_description_right2!!}</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                    @if(session()->get('langu')=='ar')
                    <p style="color: gray;">{!!$features_record->page_description_arr!!}</p>
                        @else
                        <p style="color: gray;">{!!$features_record->page_description!!}</p>
                        @endif
                        <img class="img-fluid" src="{{ asset('Backend/images/' . $features_record->page_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fs-4 text-white {{@$features->icon_left1}}"></i>
                        </div>
                        @if(session()->get('langu')=='ar')
                        <h4 class="text-white">{{@$features->title_left1_arr}}</h4>
                        <p class="mb-0">{!!@$features->short_description_left1_arr!!}</p>
                        @else
                        <h4 class="text-white">{{@$features->title_left1}}</h4>
                        <p class="mb-0">{!!@$features->short_description_left1!!}</p>
                        @endif
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fs-4 text-white {{@$features->icon_left2}}"></i>
                        </div>
                        @if(session()->get('langu')=='ar')
                        <h4 class="text-white">{{@$features->title_left2_arr}}</h4>
                        <p class="mb-0">{!!@$features->short_description_left2_arr!!}</p>
                        @else
                        <h4 class="text-white">{{@$features->title_left2}}</h4>
                        <p class="mb-0">{!!@$features->short_description_left2!!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- About Start -->
    <!-- <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                        <img class="img-fluid mt-auto mx-auto" src="assets/img/about.png">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5">We Deliver Organic Food For Your Family</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet magna</p>
                    <div class="row gx-5 gy-4">
                        <div class="col-sm-6">
                            <i class="fa fa-seedling display-1 text-secondary"></i>
                            <h4>100% Organic</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-award display-1 text-secondary"></i>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->


    <!-- Facts Start -->
    <!-- <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Quailty Specialist</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Complete Project</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts End -->
    <!-- top selling Products Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5">Top seling Products</h1>
            </div>
            <div class="owl-carousel topsell-carousel">
                
                <div class="">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/product-1.png" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/product-2.png" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/product-1.png" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/product-2.png" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/product-1.png" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- top selling Products End -->
    <!-- Products Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5">Our Fresh & Organic Products</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/product-1.png" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="cart.php"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/products/product-img-4.jpg" alt="">
                        <h6 class="mb-3">Fresh Kiwis</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="cartp.ph"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/product-2.png" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="cart.php"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/products/product-img-3.jpg" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="cart.php"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/products/product-img-2.jpg" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="cart.php"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="assets/img/products/product-img-1.jpg" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0">$19.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="cart.php"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Products End -->
    <!-- fatured Products Start -->

    @if($sale_products)
<section class="pb-0 pt-5 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mx-auto text-center mb-3 pb-2">
                        <!-- <h6 class="text-primary text-uppercase">@lang('msg.cATEGORIES')</h6> -->
                        <h1 class="display-5">@lang('msg.saleoff')</h1>
                    </div>
                </div>
            </div>
            <div class="row h-100 gx-2 mt-7">
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
                        <a class="stretched-link" href="{{route('sales')}}"></a>
                    </div>
                </div>
                @endif
            @endforeach
            <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-success py-md-2 px-md-4 slider-explore-btn" href="{{route('sales')}}">@lang('msg.viewmore')</a>
            </div>
                <!--
                <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                    <div class="card card-sale card-span h-100">
                        <div class="position-relative"> 
                            <img class="img-fluid w-100" src="{{asset('frontend/img/box/fpeach-pluot.jpg')}}" alt="...">
                            <div class="card-actions">
                                <div class="badge badge-foodwagon bg-primary p-4">
                                    <div class="d-flex flex-between-center">
                                        <div class="text-white sale-fs">10</div>
                                        <div class="d-block text-white fs-5">% <br>
                                            <div class="fw-normal fs-6 mt-2">Off</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="card-body px-0">
                            <h5 class="fw-bold text-1000 text-truncate">Fruits</h5>
                            <span class="badge bg-soft-danger py-2 px-3"><span class="fs-6 text-danger">6 days Remaining</span></span>
                        </div>
                        <a class="stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                    <div class="card card-sale card-span h-100">
                        <div class="position-relative"> 
                            <img class="img-fluid w-100" src="{{asset('frontend/img/box/fblueberries.jpg')}}" alt="...">
                            <div class="card-actions">
                                <div class="badge badge-foodwagon bg-primary p-4">
                                    <div class="d-flex flex-between-center">
                                        <div class="text-white sale-fs">25</div>
                                        <div class="d-block text-white fs-5">% <br>
                                            <div class="fw-normal fs-6 mt-2">Off</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="card-body px-0">
                            <h5 class="fw-bold text-1000 text-truncate">Meat</h5>
                            <span class="badge bg-soft-danger py-2 px-3"><span class="fs-6 text-danger">6 days Remaining</span></span>
                        </div>
                        <a class="stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                    <div class="card card-sale card-span h-100">  
                        <div class="position-relative"> 
                            <img class="img-fluid  w-100" src="{{asset('frontend/img/box/foranges.jpg')}}" alt="...">
                            <div class="card-actions">
                                <div class="badge badge-foodwagon bg-primary p-4">
                                    <div class="d-flex flex-between-center">
                                        <div class="text-white sale-fs">20</div>
                                        <div class="d-block text-white fs-5">% <br>
                                            <div class="fw-normal fs-6 mt-2">Off</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0">
                          <h5 class="fw-bold text-1000 text-truncate">Ocean Foods</h5>
                          <span class="badge bg-soft-danger py-2 px-3"><span class="fs-6 text-danger">6 days Remaining</span></span>
                        </div>
                        <a class="stretched-link" href="#"></a>
                    </div>
                </div> -->
            </div>
        </div><!-- end of .container-->
    </section>
@endif


    <div class="container-fluid py-md-5 py-4 bg-light #">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">@lang('msg.Products')</h6>
                <h1 class="display-5">@lang('msg.FeaturedProducts')</h1>
            </div>
            <div class="row">
                @if($latest)
                <div class="col-lg-4 col-md-6  col-12">
                    <div class="latest-product__text">
                        <h4>@lang('msg.LatestProducts')</h4>
                        <div class="latest-product__slider owl-carousel">
                           
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
                                        <span>SAR {{number_format($record->price,2)}}</span>
                                    </div>
                                    @else
                                    <div class="latest-product__item__text">
                                        <h6>{{$record->name}}</h6>
                                        <span>SAR {{number_format($record->price,2)}}</span>
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
                @endif
                @if($topRated)
                <div class="col-lg-4 col-md-6  col-12">
                    <div class="latest-product__text">
                        <h4>@lang('msg.TopRatedProducts')</h4>
                        <div class="latest-product__slider owl-carousel">
                        @foreach($topRated->chunk(3) as $key => $records)
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
                                        <span>SAR {{number_format($record->price,2)}}</span>
                                    </div>
                                    @else
                                    <div class="latest-product__item__text">
                                        <h6>{{$record->name}}</h6>
                                        <span>SAR {{number_format($record->price,2)}}</span>
                                    </div>
                                    @endif
                                </a>
                                @endforeach    
                               

                                </a>
                            
                            </div>
                            @endif
                        
                                @endforeach
                            <!-- <div class="latest-prdouct__slider__item">
                                <a href="" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/latest-product/product-1.jpg')}}" alt="" class="slider-size">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>@lang('msg.Meat')</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/latest-product/product-2.jpg')}}" alt="" class="slider-size">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>@lang('msg.FreshFruits')</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/latest-product/product-3.jpg')}}" alt="" class="slider-size">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>@lang('msg.FreshFruits')</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                @endif
                @if($review)
                <div class="col-lg-4 col-md-6  col-12">
                    <div class="latest-product__text">
                        <h4>@lang('msg.ReviewTheProduct').</h4>
                        <div class="latest-product__slider owl-carousel">
                        @foreach($review->chunk(3) as $key => $records)
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
                                        <span>SAR {{number_format($record->price,2)}}</span>
                                    </div>
                                    @else
                                    <div class="latest-product__item__text">
                                        <h6>{{$record->name}}</h6>
                                        <span>SAR {{number_format($record->price,2)}}</span>
                                    </div>
                                    @endif
                                </a>
                                @endforeach    
                                
                            
                                </a>
                            
                            </div>
                            @endif
                        
                                @endforeach
                            <!-- <div class="latest-prdouct__slider__item">
                                <a href="" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/latest-product/product-8.jpg')}}" alt="" class="slider-size">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>@lang('msg.FreshFruits')</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/latest-product/product-9.jpg')}}" alt="" class="slider-size">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>@lang('msg.FreshFruits')</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/latest-product/product-11.jpg')}}" alt="" class="slider-size">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>@lang('msg.FreshFruits')</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                      
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- featured  Products End -->

    
    <!-- Services Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <h6 class="text-primary text-uppercase">Services</h6>
                        <h1 class="display-5">Organic Farm Services</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit sed stet labore</p>
                    <a href="contact.php" class="btn btn-primary py-md-3 px-md-5">Contact Us</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-carrot display-1 text-primary mb-3"></i>
                        <h4>Fresh Vegetables</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-apple-alt display-1 text-primary mb-3"></i>
                        <h4>Fresh Fruits</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-dog display-1 text-primary mb-3"></i>
                        <h4>Healty Cattle</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-tractor display-1 text-primary mb-3"></i>
                        <h4>Modern Process</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-seedling display-1 text-primary mb-3"></i>
                        <h4>Farming Plans</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Services End -->


    
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">The Team</h6>
                <h1 class="display-5">We Are Professional food expert</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative team-item">
                                <img class="img-fluid w-100" src="assets/img/team-1.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Team Name</h4>
                                    <span class="text-white">Designation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary team-social-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative team-item">
                                <img class="img-fluid w-100" src="assets/img/team-2.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Team Name</h4>
                                    <span class="text-white">Designation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary team-social-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative team-item">
                                <img class="img-fluid w-100" src="assets/img/team-3.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Team Name</h4>
                                    <span class="text-white">Designation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary team-social-icon"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary team-social-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->

    <!-- Testimonial Start -->
    @if($testimonials)
    <div class="container-fluid bg-testimonial py-md-5 py-4">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel p-5">
                        <!-- <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="{{asset('frontend/img/testimonial6.jpg')}}" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">@lang('msg.ClientName')</h4>
                        </div> -->
                        @foreach($testimonials as $record)
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                            @if(session()->get('langu')=='ar')
                            <p class="fs-5">{!!$record->description_ar!!}</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">{{$record->name_ar}}</h4>
                                    @else
                                    <p class="fs-5">{!!$record->description!!}</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">{{$record->name}}</h4>
                                    @endif

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Testimonial End -->


    <!-- Blog Start -->
    @if($blogs)
    <div class="container-fluid py-md-5 py-4">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">@lang('msg.OurBlog') </h6>
                <h1 class="display-5">@lang('msg.LatestArticlesFrom')</h1>
            </div>
            <div class="row g-5">
                @foreach($blogs as $record)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog-item position-relative overflow-hidden">
                        @if($record->image)
                        <img class="img-fluid" src="{{ asset('Backend/images/' . $record->image) }}" alt="">
                        @else
                        <img class="img-fluid" src="{{ asset('frontend/img/default.jpg') }}" alt="">
                        @endif
                        <a class="blog-overlay" href="{{route('blog_detail',$record->slug)}}">
                        @if(session()->get('langu')=='ar')
                        <h4 class="text-white">{{$record->name_ar}}</h4>
                                    @else
                                    <h4 class="text-white">{{$record->name}}</h4>
                                    @endif
                            <span class="text-white fw-bold">{{date('M d, Y',strtotime($record->created_at))}}</span>
                        </a>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/img/blog-2.jpg')}}" alt="">
                        <a class="blog-overlay" href="">
                            <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                            <span class="text-white fw-bold">Jan 01, 2050</span>
                        </a>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/img/blog-3.jpg')}}" alt="">
                        <a class="blog-overlay" href="">
                            <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                            <span class="text-white fw-bold">Jan 01, 2050</span>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    @endif
    <!-- Blog End -->
    
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
        var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"","cornerRadius":"10","marginBottom":80,"marginLeft":20,"marginRight":30,"btnPosition":"right","whatsAppNumber":"919000012345","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
          var wa_widgetSetting = {"title":"Fresh Food","subTitle":"Typically replies in a day","headerBackgroundColor":"#F6FFF2","headerColorScheme":"dark","greetingText":"Hi there! \nHow can I help you?","ctaText":"Start Chat","btnColor":"#16BE45","cornerRadius":"10","welcomeMessage":"Hello","btnColorScheme":"light","brandImage":"https://fisdemoprojects.com/freshfoodNew/public/frontend/img/new-logo.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
          window.onload = () => {
            _waEmbed(wa_btnSetting, wa_widgetSetting);
          };
    </script>
      <script>
//         var owl = $('.owl-carousel');
// owl.owlCarousel({
//     loop:true,
//     autoplay:true,
//     autoplayTimeout:5000,
//     autoplayHoverPause:true
// });

$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
      </script>
      <script>
   $(document).ready(function() {
     $('.owl-carousel').owlCarousel({
       loop:true,
       margin:10,
       nav:true,
       responsive:{
           0:{
               items:1
           },
           600:{
               items:3
           },
           1000:{
               items:5
           }
       }
   });
   });

</script>
@endsection
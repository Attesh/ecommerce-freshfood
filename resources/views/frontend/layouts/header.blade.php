
    
    
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-5 gx-md-3 gx-sm-0 py-lg-3 py-1 align-items-center">
            <div class="col-lg-2 col-md-2 col-sm-2 col-3">
               <div class="d-flex align-items-center justify-content-lg-center justify-content-start">
                    <!-- <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+012 345 6789</h2> -->
                    <a href="{{route('index')}}">
                        <img src="{{asset('frontend/img/new-logo.png')}}" class="img-fluid logo-img">
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-5 col-sm-5 col-9 d-none d-sm-block">

         

<style type="text/css">
    .inner-form .input-field .btn-search {
    width: 70px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    left: 0;
    height: 100%;
    background: transparent;
    border: 0;
    padding: 0;
    cursor: pointer;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    align-items: center;
}
.inner-form .input-field .btn-search svg {
    fill: #ccc;
    width: 30px;
    height: 30px;
    transition: all .2s ease-out, color .2s ease-out;
}
.inner-form .input-field input {
    height: 100%;
    width: 100%;
    background: transparent;
    border: 1px solid;
    background: #fff;
    display: block;
    width: 100%;
    padding: 10px 32px 10px 70px;
    font-size: 18px;
    color: #666;
    border-radius: 34px;
}
.strain-search-results {
    width: 95%;
    background: #fff;
    margin: 1px auto 0;
    min-height: 50px;
    display: none;
    max-height: 200px;
    overflow: auto;
    position: absolute;
    z-index: 1;
    left: 0;
    right: 0;
    border: 1px solid #ccc;
    border-top: 0px solid #000;
}

.strain-search-results ul {
    background: #f1f1f1;
}
.strain-search-results ul li {
    text-align: left;
    border-bottom: 1px solid #ccc;
    font-size: 15px;
    margin: 5px 0;
    background: #fff;
}

.strain-search-results ul li a {
    text-decoration: none;
    color: #333;
    padding: 15px;
    display: block;
}



</style>




            <div class="input-group inner-form d-block">
                <div class="input-field">
                    <button class="btn-search" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                        </svg>
                    </button>
                    <input type="search" class="form-control form-control-topHdr h-auto bor-br bor-tr bdr-rdus-lft" placeholder="@lang('msg.Whatwouldyoulike')" name="search" id="search" onfocus="this.value=''">
                </div>
            </div>
                <div id="search_list" class="mt-2 scrollbar"></div>

            </div>


            <div class="col-lg-4 col-md-5 col-sm-5 col-9 ">
                
                <div class="d-flex justify-content-end">
                
                    <div class="dropdown lang-drpDwn mx-1 my-auto">
                        @if(Session::get('langu') == "ar")
                        
                        <a class=" btn btn-secondary dropdown-toggle" href="{{url('change/language/ar')}}" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('frontend/img/sa.png')}}" height="12" width="15"> @lang('msg.Arabic')
                        </a>
                        @else    
                        <a class=" btn btn-secondary dropdown-toggle" href="{{url('change/language/en')}}" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('frontend/img/usa.png')}}" height="12" width="15"> English
                        </a>
                        @endif    
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">                       
                            <li>
                                <a class="dropdown-item" href="{{url('change/language/en')}}">
                                    <img src="{{asset('frontend/img/usa.png')}}" height="12" width="15"> English
                                </a>
                            </li>
                            
                            <li>
                                <a class="dropdown-item" href="{{url('change/language/ar')}}">
                                    <img src="{{asset('frontend/img/sa.png')}}" height="12" width="15"> @lang('msg.Arabic')
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    @if(Auth::guard('member')->user())
                    <div class="dropdown lang-drpDwn mx-1 my-auto" id="showmyaccount">
                        
                        
                
                        <a class=" btn btn-success dropdown-toggle"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::guard('member')->user()->first_name}}
                        </a>   
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">                       
                            <li>
                                <a class="dropdown-item" href="{{url('membership/dashboard')}}">
                                    My Account
                                </a>
                            </li>
                            
                            <li>
                                <a class="dropdown-item" href="{{route('logout')}}">
                                     Logout
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- <div class="mx-1 my-auto">
                        <a href="{{url('membership/dashboard')}}">
                            <button class="btn btn-success px-xl-4 px-sm-2 px-0  btn-signIn">@lang('msg.myaccount')</button>
                        </a>
                    </div> -->
                    @else
                    <div class="mx-1 my-auto" id="hidesignbtn">
                        <a href="{{url('/membership/login')}}">
                            <button class="btn btn-success px-xl-4 px-sm-2 px-0 btn-signIn">@lang('msg.SignIn')</button>
                        </a>
                    </div>
                    @endif
                    <div class="mx-1 my-auto cart btn-mini-cart bdr-rdus ">
                        <a href="{{route('cart')}}" class="d-flex ">
                            <svg class="header-cart-icon" viewBox="0 0 201.607 201.607">
                                <path d="M171.398,22.858l-26.537,26.541H0l27.69,40.774l-0.007,0.007l24.554,35.95h69.093l-7.111,23.123 H58.031v0.111c-7.594,0.583-13.621,6.886-13.621,14.634c0,8.135,6.617,14.752,14.756,14.752c8.128,0,14.745-6.617,14.745-14.752 c0-2.924-0.884-5.647-2.358-7.945h24.622c-1.478,2.298-2.358,5.018-2.358,7.945c0,8.135,6.617,14.752,14.756,14.752 c8.128,0,14.745-6.617,14.745-14.752c0-3.65-1.378-6.954-3.582-9.534l31.243-101.557l23.234-23.234h27.396v-6.811h-30.209V22.858z M55.826,119.315L37.521,92.51h72.307v-6.803H32.886L12.852,56.199h129.987l-19.422,63.117 C123.417,119.315,55.826,119.315,55.826,119.315z M67.103,163.994c0,4.381-3.561,7.941-7.938,7.941 c-4.381,0-7.941-3.561-7.941-7.941c0-4.377,3.561-7.945,7.941-7.945C63.542,156.052,67.103,159.62,67.103,163.994z M108.572,171.935c-4.384,0-7.941-3.561-7.941-7.941c0-4.377,3.561-7.945,7.941-7.945c4.381,0,7.945,3.568,7.945,7.945 C116.517,168.374,112.952,171.935,108.572,171.935z"></path>
                            </svg>
                            <span class="cart-price position-relative">
                                <span class="cart-count-1 border-0">{{ count((array) session('cart')) }}</span>
                                <span class="text-green cart-text d-none d-md-block"></span>
                            </span>@php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        </a>    
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-2 py-lg-0 px-4 px-lg-5">
        <!-- <a href="index.html" class="navbar-brand ms-lg-5">
            <img src="img/2.jpg" class="img-fluid" style="height: 70px;" >
        </a> -->

        <!-- <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farm</span>Fresh</h1>
        </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="col-md-2"> -->
            @php
            $categories=DB::table('categories')->get();
            $blogs=DB::table('blogs')->get();
            @endphp
            <div class="hero__categories dropdown">
                <a class="hero__categories__all dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bars"></i>@lang('msg.AllCategories')
                </a>
                <ul class="dropdown-menu  m-0">
                    @foreach($categories as $record)
                    @if(session()->get('langu')=='ar')
                    <li ><a href="{{route('category_details',$record->id)}}" class="dropdown-item"><i class="{{$record->icon}}"></i> {{$record->name_ar}}</a></li>
                    @else
                    <li ><a href="{{route('category_details',$record->id)}}" class="dropdown-item"><i class="{{$record->icon}}"></i> {{$record->name}}</a></li>
                    @endif 
                    @endforeach
                    <!-- <li ><a href="#" class="dropdown-item"><i class='fas fa-carrot icon-grad'></i> @lang('msg.vegetables')</a></li>
                    <li ><a href="#" class="dropdown-item"><i class="fas fa-apple-alt icon-grad"></i> @lang('msg.fruits')</a></li>
                    <li ><a href="#" class="dropdown-item"><i class="fas fa-cookie icon-grad"></i> @lang('msg.herbs')</a></li>
                    <li ><a href="#" class="dropdown-item"><i class="fas fa-pepper-hot icon-grad"></i> @lang('msg.OceanFoods') </a></li>
                    <li ><a href="#" class="dropdown-item"><i class="fas fa-fish icon-grad"></i> @lang('msg.Fish')</a></li> -->
                </ul>
            </div>
        <!-- </div> -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            
            <div class="navbar-nav mx-auto py-0">
               
                <a href="{{route('index')}}" class="nav-item nav-link active">@lang('msg.Home')</a>
                <!-- <a href="service.php" class="nav-item nav-link">Service</a> -->
                <a href="{{route('shop_market')}}"   class="nav-item nav-link nav-item-s">@lang('msg.ShopMarketplace')</a>
                <a href="{{route('How_its_work')}}" class="nav-item nav-link">@lang('msg.howitworks')</a>
                @foreach($categories as $record)
                <a style="display:none;" href="{{route('category_details',$record->id)}}" class="nav-item nav-link"></a>
                @endforeach
                @foreach($blogs as $record)
                <a style="display:none;" href="{{route('blog_detail',$record->slug)}}" class="nav-item nav-link"></a>
                @endforeach


@php
$sale_products=DB::table('product')->where('on_sale','1')->get();
$productsASC=DB::table('product')->orderBy('price')->get();
$productsDESC=DB::table('product')->orderBy('price','DESC')->get();
@endphp
                @foreach($productsASC as $record)
                <a style="display:none;" href="{{url('Shop_Marketplace/lowTohigh')}}" class="nav-item nav-link "></a>
                @endforeach


                @foreach($productsDESC as $record)
                <a style="display:none;" href="{{url('Shop_Marketplace/highToLow')}}" class="nav-item nav-link"></a>
                @endforeach
                @foreach($sale_products as $record)
                <a style="display:none;" href="{{url('sales')}}" class="nav-item nav-link"></a>
                @endforeach
                @if(Auth::guard('member')->user())
                <a style="display:none;" href="{{route('member.dashboard',Auth::guard('member')->user()->id)}}" class="nav-item nav-link"></a>
                @endif
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.php" class="dropdown-item">Blog Grid</a>
                        <a href="detail.php" class="dropdown-item">Blog Detail</a>
                        <a href="feature.php" class="dropdown-item">Features</a>
                        <a href="cart.php" class="dropdown-item">Cart</a>
                        <a href="checkout.php" class="dropdown-item">Check Out</a>
                        <a href="product.php" class="dropdown-item">Product</a>
                        <a href="single_product.php" class="dropdown-item">Single Product</a>
                    </div>
                </div> -->
                
                <a style="display:none" href="{{route('cart')}}" class="nav-item nav-link">@lang('msg.Cart')</a>
                <a href="{{route('deliveryarea')}}" class="nav-item nav-link">@lang('msg.DeliveryArea')</a>
                <a href="{{route('about')}}" class="nav-item nav-link">@lang('msg.AboutUs')</a>
                <a href="{{route('contact_us')}}" class="nav-item nav-link">@lang('msg.Contact')</a>
                <!-- <a href="login.php" class="nav-item nav-link btn-signIn11">
                    <button class="btn btn-success btn-signIn">Sign In</button>
                </a> -->
                <!-- <a href="vendors.php" class="nav-item nav-link">Vendors</a> -->
            </div>
            <div class="elementor-widget-container d-lg-block d-none">
                <ul class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item"> 
                        @php
                        $setting=DB::table('settings')->first();
                        
                        @endphp
                        
                            <div>
                                <i aria-hidden="true" class="{{$setting->off_day_logo}}"></i>
                            </div>
                            <div class="delivery-div"> 
                                <span>@lang('msg.NextDayDelivery')</span>
                                @if(session()->get('langu')=='ar')
                                <span>{{$setting->off_day_title_ar}}</span>
                                @else
                                <span>{{$setting->off_day_title}}</span>
                                @endif
                                <!-- <span>@lang('msg.SundayClosed')</span> -->
                                <span></span>
                            </div>    
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
    $(document).ready(function ($) {
       
    var url = window.location.href;
    var activePage = url;
    console.log(activePage)
    $('.navbar .navbar-nav .nav-item').each(function () {
        // console.log('i am in');
        var linkPage = this.href;
        // console.log(linkPage)

     
      
            if (activePage == 'https://fisdemoprojects.com/freshfoodNew/Shop_Marketplace/lowTohigh') {
            console.log('hii')
            $(".nav-item").removeClass("active");
            $(".nav-item-s").addClass("active");
            }
            else if (activePage == linkPage) {
            console.log('hello')
            $(".nav-item").removeClass("active");
            $(this).closest(".nav-item").addClass("active");
        }
        else if (activePage == 'https://fisdemoprojects.com/freshfoodNew/Shop_Marketplace/highToLow') {
            console.log('hello')
            $(".nav-item").removeClass("active");
            $(".nav-item-s").addClass("active");
        }

       
      
    });
});
$(document).on('click', function (e) {
    if ($(e.target).closest("#search_list").length === 0) {
        $("#search_list").hide();
    }
});
// $("#search").on("change", function() {
//     $("#search").val($("#search_list ul:first" ).val());
// });
    $(document).ready(function(){
         $('#search').on('keyup',function(){
             var query= $(this).val();
             console.log(query)
             if (query == ""){
                $('#search_list').hide();
             }
             else{
                $('#search_list').show();

             }
             $.ajax({
                url:"{{ url('search') }}",
                type:"GET",
                data:{'search':query},
                success:function(data){
                    $('#search_list').html(data);
                //    ppp=$('#hello').text()
                //      console.log($('#hello').text() );
                //     $('#search').val(ppp);
                    // console.log(data);
                }
         });
         //end of ajax call
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


        <script>
            
        </script>
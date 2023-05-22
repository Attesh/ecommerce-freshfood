    <!-- Footer Start -->
    @php
    $contact=DB::table('settings')->first();
    @endphp
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row pt-5 gx-1">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-margin">
                        <h4 class="text-white mb-sm-4 mb-2 ">@lang('msg.GetInTouch')</h4>
                        <div class="d-flex mb-sm-2 mb-1">
                            <i class="bi bi-geo-alt text-white footer-icon"></i>
                            @if(session()->get('langu')=='en')
                            <p class="text-white mb-0">{{$contact->shop_address}}</p>
                            @else
                            <p class="text-white mb-0">{{$contact->shop_address_ar}}</p>
                            @endif
                        </div>
                        <div class="d-flex mb-sm-2 mb-1">
                            <i class="bi bi-envelope-open text-white footer-icon"></i>
                            <p class="text-white mb-0">{{$contact->shop_email}}</p>
                        </div>
                        <div class="d-flex mb-sm-2 mb-1">
                            <i class="bi bi-telephone text-white footer-icon"></i>
                            <p class="text-white mb-0">{{$contact->shop_phone}}</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-secondary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-margin">
                        <h4 class="text-white mb-sm-4 mb-sm-2 mb-1 ">@lang('msg.PopularLinks')</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-sm-2 mb-1" href="{{route('index')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.Home')</a>
                            <a class="text-white mb-sm-2 mb-1" href="{{route('about')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.AboutUs')</a>
                            <a class="text-white mb-sm-2 mb-1" href="{{route('shop_market')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.ShopMarketplace')</a>
                            <!-- <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a> -->
                            <a class="text-white mb-sm-2 mb-1" href="{{route('blog')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.LatestBlog')</a>
                            <a class="text-white" href="{{route('contact_us')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.Contact')</a>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-margin">
                        <h4 class="text-white mb-sm-4 mb-sm-2 mb-1 ">@lang('msg.QuickLinks')</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-sm-2 mb-1" href="{{route('deliveryarea')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.DeliveryArea')</a>
                            <!-- <a class="text-white mb-sm-2 mb-1" href="{{route('cart')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.Cart')</a>
                            <a class="text-white mb-sm-2 mb-1" href="{{route('checkout')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.CheckOut')</a>
                            <a class="text-white mb-sm-2 mb-1" href="{{route('faq')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.FAQ')</a>
                            @if(Auth::guard('member')->user())
                            <a class="text-white mb-sm-2 mb-1" href="{{route('logout')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.SignOut')</a>
                            @else
                            <a class="text-white mb-sm-2 mb-1" href="{{route('member.login')}}"><i class="bi bi-arrow-right text-white footer-icon"></i>@lang('msg.SignIn')</a>

                            @endif -->
                        </div>
                    </div>    
                </div>
                    
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="news-letter p-2 bdr-rdus">
                        <!-- <h4 class="text-white">@lang('msg.Newsletter')</h4> -->
                        <h4 class="text-white">@lang('msg.SubscribeOur')</h4>
                        <!-- <p>Amet justo diam dolor rebum lorem sit stet sea justo kasd</p> -->
                        <form action="{{route('subscribe')}}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="email" name="email" class="form-control border-white p-2 w-100 bdr-rdus mx-2" placeholder= @lang('msg.YourEmail') style="border-top-right-radius: 9px;
                                border-bottom-right-radius: 9px;" required>
                                <button class="btn btn-primary mt-3 bdr-rdus ms-auto" style="border-top-left-radius: 9px;
                                    border-bottom-left-radius: 9px;">@lang('msg.Subscribe')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0 righttext">&copy; @lang('msg.AllRights')</p>  
        </div>
    </div>
    <!-- Footer End -->
  
    <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="my-3 text-center">
                        <h6>@lang('msg.selectyourarea')</h6>
                    </div>
                    <div class="form-group col">
                        <label class="" for="inputCity">@lang('msg.city')</label>
                        <select class="form-select" name="city" required="">
                            <option value="4">@lang('msg.Dawadmi')</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label class="" for="inputSector">@lang('msg.sector')</label>
                        <select id="inputSector" class="form-select" name="sector" required="">
                            <option value="Askari 6">@lang('msg.Hadda')</option>
                            <option value="Board Bazar ">@lang('msg.Bahrah') </option>
                            <option value="Canal Town">@lang('msg.Al Qirw')</option>
                            <option value="Chargano Chowk">@lang('msg.Malakan')</option>
                            <option value="Danishabad">@lang('msg.Al Abar')</option>
                            <option value="DHA">@lang('msg.Al Jumum')</option>
                            <option value="Gora Qabristan">@lang('msg.Al Muqayti')</option>
                            
                        </select>
                    </div>
                    <button class="btn btn-success rounded-pill w-100" data-bs-dismiss="modal">@lang('msg.Select')</button>
                </div>
            </div>
        </div>
    </div>    
    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-2 fs-6 back-to-top"><i class="bi bi-arrow-up"></i></a>
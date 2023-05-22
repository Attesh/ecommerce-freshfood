<?php
$postal_code =42210;
$url = "https://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($postal_code)."&sensor=false&key=AIzaSyCuBSamB6Ft0tmXWfbYvkrxqK8_7xdRKdk";

    $result_string = file_get_contents($url);
    $result = json_decode($result_string, true);
    if(!empty($result['results'])){
        $zipLat = $result['results'][0]['geometry']['location']['lat'];
        $ziplng = $result['results'][0]['geometry']['location']['lng'];
    }


?>
@extends('frontend.main_master')
@section('content')



    <!-- Hero Start -->
    <!-- <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Delivery Area</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mb-5 text-center">
                        <!-- <h6 class="text-primary text-uppercase">Delivery</h6> -->
                        <h1 class="display-5">@lang('msg.deliveryarea')</h1>
                    </div>
                </div>
                <form method="POST" action="{{route('deliveryarea.search')}}">
                    @csrf
                    <div class="col-lg-12 col-md-12">
                        <div class="delivery-box bg-light mb-5">    
                            <h6 class="mb-0 me-2">@lang('msg.enterzip')</h6>
                       
                            <div class="input-group">
                                <input type="text" name="zipcode" class="form-control py-md-2 px-md-2" placeholder="@lang('msg.ZipCode')" aria-label="Username">
                            </div> 
                            <button type="submit" class="btn btn-primary py-md-2 px-md-4 zip-dlvry-btn">@lang('msg.explore')</button>
                        </div>    
                    
                    </div>
                </form>
                <div class="col-lg-12 col-md-12">
                    <div class="iframeD">
                        <p style="color: gray;">@lang('msg.checkmap')</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116167.40445132423!2d44.42952777851911!3d24.51207449912143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15871d6778b12425%3A0xbbe74d006a37cd2d!2sAl%20Duwadimi%20Saudi%20Arabia!5e0!3m2!1sen!2s!4v1677580961291!5m2!1sen!2s" width="1120" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>    
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13798.978084906952!2d71.45211522834147!3d30.158719409451944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b3124b71aafb7%3A0x4489a0c9a7ff50a!2sBasti%20Khar%20Pur%20Peer%20Colony%2C%20Multan%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1672900632661!5m2!1sen!2s" width="1120" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
                <!-- <div>
                    <h6 class="my-1">@lang('msg.wedeliver')</h6>
                    <table class="table" id="wwdt15"> 
                        <tbody>
                            <tr>
                                <td style="width:20px; height:100%; background-color:#005f61;">&nbsp;</td>
                                <td><b>Wednesday</b></td>
                                <td>29607, 29615, 29662, 29680, 29681 </td>
                            </tr>
                            <tr>
                                <td style="width:20px; height:100%; background-color:#fa4616;">&nbsp;</td>
                                <td><b>Thursday</b></td>
                                <td>28726, 28731, 28791, 29601, 29605, 29609, 29611, 29613, 29614, 29617, 29642, 29673 </td>
                            </tr>
                            <tr>
                                <td style="width:20px; height:100%; background-color:#6a4a3c;">&nbsp;</td>
                                <td><b>Friday</b></td>
                                <td>29301, 29302, 29303, 29307, 29316, 29320, 29324, 29329, 29333, 29334, 29346, 29365, 29369, 29375, 29378, 29385, 29650, 29651, 29687 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>     -->
            </div>
        </div>
    </div>
    <!-- Services End -->

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






    

    
    @endsection
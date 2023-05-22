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


    <!-- work Start -->
    <div class="container-fluid facts py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mx-auto text-center mb-3 pb-2">
                        <!-- <h6 class="text-primary text-uppercase">Products</h6> -->
                        @if(session()->get('langu')=='ar')
                        <h1 class="display-5">{{$details->page_title_arr}}</h1>
                        @else
                        <h1 class="display-5">{{$details->page_title}}</h1>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row gx-5 gy-4">
                @foreach($record as $record)
                <div class="col-lg-3 col-md-6">
                    <div class="d-block service-item bg-light p-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 m-auto" style="width: 90px; height: 90px;">
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
            </div>
        </div>
    </div>
    <!-- work End -->

    @endsection
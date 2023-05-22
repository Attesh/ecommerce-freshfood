@extends('frontend.main_master')
@section('content')



    <!-- Hero Start -->
    <!-- <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Contact Us</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->
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

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 510px;">
            @if(session()->get('langu')=='ar')
                <h6 class="text-primary text-uppercase">{{$details->page_title_arr}}</h6>
                @else
                <h6 class="text-primary text-uppercase">{{$details->page_title}}</h6>
            @endif
            @if(session()->get('langu')=='ar')
                <h1 class="display-5">{!!$details->page_short_description_arr!!}</h1>
                @else
                <h1 class="display-5">{!!$details->page_short_description!!}</h1>
            @endif
            </div>
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="bg-primary h-100 p-5 contact-form">
                        <form method="POST" action="{{route('contact_us')}}">
                            @csrf
                            <div class="row my-auto g-3">
                                <div class="col-md-6 col-12">
                                    <input type="text" class="form-control bg-light border-0 px-4 bdr-rdus" id="name" name="name" placeholder="@lang('msg.yourname')" style="height: 45px;">
                                    <span style="display:none" id="nameerror" class="text-white">
                                    @lang('msg.ThisfieldisRequired')
                                    </span>
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="email" class="form-control bg-light border-0 px-4 bdr-rdus" id="email" name="email" placeholder="@lang('msg.YourEmail')" style="height: 45px;">
                                    <span style="display:none" id="emailerror" class="text-white">
                                     @lang('msg.ThisfieldisRequired')
                                        </span>
                                        <span style="display:none" id="emailerror1" class="text-white">
                                     @lang('msg.Emailisnotvalid')
                                    </span>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0 px-4 bdr-rdus" id="subject" name="subject" placeholder="@lang('msg.subject')" style="height: 45px;">
                                    <span style="display:none" id="subjecterror" class="text-white">
                                     @lang('msg.ThisfieldisRequired')
                                    </span>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 px-4 py-3 bdr-rdus" rows="2" id="message" name="message" placeholder="@lang('msg.message')"></textarea>
                                    <span style="display:none" id="messageerror" class="text-white">
                                     @lang('msg.ThisfieldisRequired')
                                    </span>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-2" type="button" id="contant_us">@lang('msg.sendmessage')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-secondary h-100 p-5 contact-address">
                        <h2 class="text-white mb-4">@lang('msg.GetInTouch')</h2>

                        <div class="d-flex mb-4">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt fs-4 abc"></i>
                            </div>
                            <div class="ps-3 contact-text">
                                <h5 class="text-white">@lang('msg.ouroffice')</h5>
                                @if(session()->get('langu')=='ar')
                                <span class="text-white">{{$contact->shop_address_ar}}</span>
                                @else
                                <span class="text-white">{{$contact->shop_address}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-open fs-4 abc"></i>
                            </div>
                            <div class="ps-3 contact-text">
                                <h5 class="text-white">@lang('msg.emailUs')</h5>
                                <span class="text-white">{{$contact->shop_email}}</span>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="contact-icon">
                                <i class="bi bi-phone-vibrate fs-4 abc"></i>
                            </div>
                            <div class="ps-3 contact-text">
                                <h5 class="text-white">@lang('msg.callus')</h5>
                                <span class="text-white">{{$contact->shop_phone}}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
$("#email").on('keyup', function(){
    var email = $('#email').val();
    var email_regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if( (email != "") ){
      $('#emailerror').hide();
      if(email_regex.test(email)==false)
 {
    $('#emailerror1').show();
 } 
 else{
    $('#emailerror1').hide();
 }
    }
    else {   
        $('#emailerror').show();
}
});
$("#name").on('keyup', function(){
    var name = $('#name').val();
    if( (name != "") ){
      $('#nameerror').hide();
      emailerror
    }
    else {   
        $('#nameerror').show();
}
});
/////
$("#subject").on('keyup', function(){
    var pass = $('#subject').val();
    if( pass ==""){
        $('#subjecterror').show();
    }
    else {   
      $('#subjecterror').hide();
}
});
$("#message").on('keyup', function(){
    var pass = $('#message').val();
    if( pass ==""){
        $('#messageerror').show();
    }
    else {   
      $('#messageerror').hide();
}
});
$('#contant_us').click(function() {
    // alert('hi')
  velidate=1;
  var email = $('#email').val();
    var password = $('#password').val();
    var email_regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (email == "") {
      velidate=1;
      $('#emailerror').show();
    $('#emailerror1').hide();
    }
 var name=$("#name").val();

if((name == '') )
 {
    velidate=1;
    $('#nameerror').show();
 }
 var subject=$("#subject").val();

if((subject == '') )
 {
    velidate=1;
    $('#subjecterror').show();
 }
 var message=$("#message").val();

if((message == '') )
 {
    velidate=1;
    $('#messageerror').show();
 }
 else{
    velidate=0;
 }
// console.log(velidate);
   if(velidate == 0){
    // alert('ok');
    //  $('#register').submit();
    $(this).attr('type', 'submit');
   
   }


   
    });


 </script>
    @endsection
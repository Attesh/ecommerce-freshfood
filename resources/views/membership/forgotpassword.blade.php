<!-- Voluntrer -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Farm Fresh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('membership/img/logo/favicon-32x32.png')}}" rel="icon">
  <link href="{{asset('membership/img/logo/apple-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="{{asset('membership/vendor/animate.css/animate.compat.css')}}" rel="stylesheet">
  <link href="{{asset('membership/vendor/animate.css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('membership/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('membership/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('membership/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('membership/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('membership/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('membership/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('membership/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  @if(session()->get('langu')=='ar')
  <link href="{{asset('membership/css/login-arabic.css')}}" rel="stylesheet">
  @else
  <link href="{{asset('membership/css/login.css')}}" rel="stylesheet">
  @endif

</head>

<body class="h-100 textside">
    <section class="h-100">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6 text-black ">
                    <div class="loginCard border">

                        <div class="logodiv text-center">
                            <a href="{{url('/membership/login')}}" class="logoimg">
                            <img src="{{asset('membership/img/logo/new-logo.png')}}" alt="logo-image"
                                    style="height: 85px !important; ">
                            </a>
                        </div>
                        <h4 class="mb-3 text-center"><strong>@lang('msg.ForgotPassword')</strong></h4>
                        <form name="resetPassword" action="{{route('member.forgetpassword.reset')}}"  method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">@lang('msg.email')</label>
                                <input type="email" id="email" class="form-control" name='email' />
                                <span style="display:none" id="emailerror" class="text-danger" >
                               @lang('msg.ThisfieldisRequired')
                                    </span>
                                    <span style="display:none" id="emailerror1" class="text-danger" >
                                @lang('msg.Emailisnotvalid')
                                    </span>
                            </div>
                            <div class="pt-1 mb-2 mt-2">
                                <button class="btn btn-info btn-lg btn-block loginbutn w-100" id= "forgetsumittButton" type="button">
                                     @lang('msg.Resetpassword')</button>
                            </div>
                            <div class="row d-flex justify-content-around">
                                <p class="belowtext">
                                <a href="{{url('membership/registration')}}" class="float-end siggnsup">@lang('msg.Signup')</a>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('membership/vendor/bootstrap/js/mdb.min.js')}}"></script>
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
        $('#emailerror1').hide();
 
}
});
$('#forgetsumittButton').click(function() {
    var email = $('#email').val();

    if( (email == "")){
        $('#emailerror').show();
      
    
    }
    else{
        velidate=0;
    }
    if(velidate == 0){

        $(this).attr('type', 'submit');
     $('#nameerrorcheck').hide();

   }

})
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Farm Fresh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/img/new-logo.png')}}" rel="icon">
  <!-- <link href="{{asset('membership/img/logo/favicon-32x32.png')}}" rel="icon">
  <link href="{{asset('membership/img/logo/apple-icon.png')}}" rel="apple-touch-icon"> -->

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
  <!-- Template Main CSS File -->



  @if(session()->get('langu')=='ar')
  <link href="{{asset('membership/css/login-arabic.css')}}" rel="stylesheet">
  @else
  <link href="{{asset('membership/css/login.css')}}" rel="stylesheet">
  @endif

    
</head>

<body class="textside">
    
    <section class="min-vh-100 d-flex align-items-center justify-content-center p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-black ">
                    <div class="loginCard border">

                        <div class="logodiv text-center">
                            <a class="logoimg" href="{{url('/')}}" >
                                <img src="{{asset('membership/img/logo/new-logo.png')}}" alt="logo-image"
                                    style="height: 85px !important; ">
                            </a>
                        </div>
                        <h4 class="mb-3" style=" text-align: center;"><strong>@lang('msg.LogintoyourAccount')</strong></h4>
                        <span style="display:none" id="Invalidcredtial" class="text-danger text-center" >
                        @lang('msg.Invalidcredentials')
                        </span>
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1" for="email">@lang('msg.email')</label>
                                <input type="email" id="email" name="email" class="form-control" />
                                <span style="display:none" id="emailerror" class="text-danger" >
                                     @lang('msg.ThisfieldisRequired')
                                </span>
 
 
                            </div>

                            <div class="form-group">
                                <label class="mb-1" for="password">@lang('msg.Password')</label>

                                <div class="input-group" id="show_hide_password">
                                <input  type="password" id="password" name="password"class="form-control">
                                    <i class="bi bi-eye-slash" aria-hidden="true"></i>
                                </div>
                                <span style="display:none" id="cpassworderror" class="text-danger" >
                                <!-- kk -->
                                <!-- <input type="password" id="password" name="password"class="form-control" /><i class=""></i>
                                <span style="display:none" id="cpassworderror" class="text-danger" >
Password  is Required
    </span>
    <div class="input-group-addon">
        <a href=""><i class="bi bi-eye-fill" aria-hidden="true"></i></a>
      </div> -->
    

                            </div>

                            <div class="pt-1 mb-2 mt-4">
                                <button type="button" class="btn btn-lg btn-block  loginbutn w-100"  id="login_butn">@lang('msg.Login')</button>
                            </div>

                            <!-- <p class="small pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> -->
                            <div class="row d-flex justify-content-around">
                                <p class="belowtext">@lang('msg.donthaveanaccount')
                                    <a href="{{url('membership/registration')}}" class="signbuton">@lang('msg.Signup')</a>
                                    <a href="{{route('member.forgetpassword')}}" class="float-end">@lang('msg.ForgotPassword')</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-md-6 px-0 d-none d-sm-block haveee">
                    <img src="{{ asset('frontend/assets/img/049_n.jpg') }}" alt="Login image" class="w-100"
                        style="border-radius: 0px 20px 20px 0px; height: 110vh; object-fit: cover; object-position: left;filter: brightness(70%);">
                </div> -->
            </div>
        </div>
    </section>
    <script src="{{asset('membership/vendor/bootstrap/js/mdb.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
$("#email").on('keyup', function(){
    var email = $('#email').val();
    if( (email != "") ){
      $('#emailerror').hide();
 

    }

});
// /////
$("#password").on('keyup', function(){
    var pass = $('#password').val();
    if( pass !=""){
        $('#cpassworderror').hide();
    }
   
});
$('#login_butn').click(function() {

  velidate=1;
  var email = $('#email').val();
    var password = $('#password').val();
    if (email == "") {
      velidate=1;
      $('#emailerror').show();
    }
 var pass=$("#password").val();

if((pass == '') )
 {
    velidate=1;
    $('#cpassworderror').show();
 }
 else{
    velidate=0;
 }

   if(velidate == 0){
    $('#emailerror').hide();
    $('#cpassworderror').hide();

   email= $("#email").val();
   password= $("#password").val();
   _token="{{ csrf_token() }}"
   $.ajax({
          url: "{{ url('/membership/signin')}}",
          type: "POST",
          data:{
            email,
            password,
            _token,
          },
          dataType: "json",
          success: function (data) {
            // console.log(data.status);
            if(data.status == false)
            {
                // alert(' Invalid credentials')
                $('#Invalidcredtial').show();
                $('#password').show();
            }
            else{
                $('#showmyaccount').show()
                $('#hidesignbtn').hide()
              
                $("#showmyaccount").load("div")
                // window.location = data.redirect;
                // bool window.confirm([message]);
                window.history.back(); 
              
                // window.reload(true);
            }
          },
        });
   
   }


   
    });

    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "bi bi-eye-fill" );
            $('#show_hide_password i').removeClass( "bi bi-eye-slash" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "bi bi-eye-slash" );
            $('#show_hide_password i').addClass( "bi bi-eye-fill" );
        }
    });
});
 </script>



</body>
</html>
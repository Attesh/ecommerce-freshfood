
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

  <!-- Template Main CSS File -->

  <link href="{{asset('membership/css/login.css')}}" rel="stylesheet">

    <style>
        body { min-height: 100vh; }

        @media only screen and (max-width: 768px) {
            .haveee img {
                display: none;
            }
            /*form {
                width: 35rem !important;
            }*/
            .loginbutn {
                background: #1C1A4B !important;
                color: White;
            }
            .loginbutn:hover {
                background: #1c1887 !important;
                color: White;
            }
        }
    </style>
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
                        @if (session('status'))
     <div class="alert alert-success" role="alert">
         {{ session('status') }}
     </div>
 @endif
                        <h4 class="mb-3 text-center"><strong>Reset Password</strong></h4>
                        <form  action="{{ route('password.update') }}"  method="POST">
                            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">Email</label>
                                <input id="email" class="form-control" type="email" id="email" name="email" value="{{ app('request')->input('email') }}" required autofocus />
                                <span style="display:none" id="emailerror" class="text-danger" >
                                    email is Required
                                        </span>
                                        <span style="display:none" id="Email_exists" class="text-danger" >
                                    email is Already exists
                                        </span>
                                        <span style="display:none" id="emailerror1" class="text-danger" >
                                    email is not valid
                                        </span>
                            </div>
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">New Password</label>
                                <input id="password" class="form-control"  id="password" type="password" name="password" required/>
                                <span style="display:none" id="passworderror" class="text-danger" >
Password  is Required
    </span>
    <span style="display:none" id="passworderror1" class="text-danger" >
    Password should be atleast - 8 characters
    </span>
    <span style="display:none" id="passworderror2" class="text-danger" >
    Password should be atleast - 1 Capital, 1 Digit, 1 Special character
    </span>
                            </div>
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">Confirm Password</label>
                                <input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required/>
                                    <span style="display:none" id="passworderror3" class="text-danger" >
Password do not matched 
    </span>
    <span style="display:none" id="cpassworderror" class="text-danger" >
Password  is Required
    </span>

                            </div>
                            <div class="pt-1 mb-2 mt-4">
                                <button class="btn btn-info btn-lg btn-block loginbutn w-100" id ="resetsumittButton" type="button">Reset
                                    Password</button>
                            </div>
                            <div class="row d-flex justify-content-around">
                                <p class="belowtext">
                                <a href="{{url('membership/registration')}}" class="float-end">Sign up</a>
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
         var velidate=1;
      $("#email").on('keyup', function(){
            var email = $('#email').val();
            var email_regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(email_regex.test(email)==false)
         {
            $('#emailerror1').show();
            velidate=1;
         } 
         else{
            $('#emailerror1').hide();
            velidate=0;

         }
            if( (email != "") ){
              $('#emailerror').hide();
              velidate=0;
              
         
                // $.ajax({
                //   url: "{{ url('user/checkemail')}}",
                //   type: "GET",
                //   data:{
                //     email,
                //   },
                //   dataType: "json",
                //   success: function (data) {
                //     console.log(data);
                //     if (data == "found") {
                //         console.log(data);
                //         $('#Email_exists').show();

                //         // alert('hi');
                //     //   $("#subcat").show();
                //     //   $("#subcat_arr").show();
                //     }
                //     else{
                //         $('#Email_exists').hide();

                //     }
                 
                 
                //   },
                // });
              
            }
            
            else {    
                velidate=1;
                $('#emailerror').show();
                $('#emailerror1').hide();
                $('#Email_exists').hide();
                // alert('hi');
            //   var email = $('#email').val();
            //   console.log(email);

             
        }
        });
/////

$("#password_confirmation").on('keyup', function(){
            var cpass = $('#password_confirmation').val();
            var pass = $('#password').val();
            if( cpass ==""){
                $('#cpassworderror').show();
                velidate=1;

            }
            if( (pass != cpass) ){
              $('#passworderror3').show();
              $('#cpassworderror').hide();
              velidate=1;

            }
            
            else {   
                velidate=0;
              $('#cpassworderror').hide();
              $('#passworderror3').hide();

        }
        });
        //////
        $("#password").on('keyup', function(){
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            if ($('#password').val().length < 8) {
                velidate=1;
                $('#passworderror1').show();
              
            } else {
                $('#passworderror1').hide();
                if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                    $('#passworderror2').hide();
                    velidate=0;
                } else {
                    $('#passworderror2').show();
                    velidate=1;
                }
            }
            if($('#password').val() != ""){

                $('#passworderror').hide();
                velidate=0;

            }
          
            if($('#password').val() == "" )
            {
                velidate=1;
                $('#passworderror').show();
            }
        });


        $('#resetsumittButton').click(function() {
    var email = $('#email').val();
    var pass=$("#password").val();
    var cpass = $('#password_confirmation').val();
  
   
 
        if (velidate == 0){

$(this).attr('type', 'submit');
$('#nameerrorcheck').hide();

        }
 
 

})
</script>
</body>
</html>

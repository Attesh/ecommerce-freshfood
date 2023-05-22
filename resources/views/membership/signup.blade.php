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

  <link href="{{asset('frontend/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">

 
  @if(session()->get('langu')=='ar')
  <link href="{{asset('membership/css/login-arabic.css')}}" rel="stylesheet">
  @else
  <link href="{{asset('membership/css/login.css')}}" rel="stylesheet">
  @endif

</head>

<body class="textside">
    <section class="h-100 p-0">
        <div class="container">
            <div class="row  justify-content-center align-items-center">
                <div class="col-md-7 text-black ">
                    <div class="loginCard border">

                        <div class="logodiv text-center">
                            <a href="{{url('/')}}" class="logoimg">
                                <img src="{{asset('membership/img/logo/new-logo.png')}}" alt="logo-image"
                                    style="height: 85px !important; ">
                            </a>
                        </div>
                        <h4 class="mb-3" style=" text-align: center;"><strong>@lang('msg.SignUptoyourAccount')</strong></h4>
       
                        <form action="{{route('membership.signup.store')}}" method="post">
                            @csrf
                            <!-- <div><span class="text-danger">{{session()->get('Error') }}</span></div> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example18"><span  class="required">@lang('msg.FirstName')</span></label>
                                        <input type="text" id="first_name" name="first_name" class="form-control" />
         
                                        <span style="display:none" id="nameerror" class="text-danger">
                                       @lang('msg.ThisfieldisRequired')
                                            </span>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example28">@lang('msg.LastName')</label>
                                        <input type="text" id="last_name" name="last_name" class="form-control"/>
   
                                        <span style="display:none" id="lasterror" class="text-danger" >
                                       @lang('msg.ThisfieldisRequired')
                                            </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example48">@lang('msg.PhoneNumber')</label>
                                        <input type="tel" id="phone" name="phone"
                                            class="form-control"/>
                                            <span style="display:none" id="phoneerror" class="text-danger" >
                                           @lang('msg.ThisfieldisRequired')
                                                </span>
                                                <span style="display:none" id="phoneerror2" class="text-danger" >
                                            @lang('msg.Phonenumberitsexceedsmustbe10digit')
                                                </span>
                                                <span style="display:none" id="phoneerror1" class="text-danger" >
                                            @lang('msg.Phonenumbermustbe10digit') 
                                                </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label class="mb-1" for="form2Example38"> @lang('msg.email')</label>
                                <input type="email" id="email" name="email" class="form-control" />
        
                                    <span style="display:none" id="emailerror" class="text-danger" >
                                    @lang('msg.ThisfieldisRequired')
                                        </span>
                                        <span style="display:none" id="Email_exists" class="text-danger" >
                                     @lang('msg.EmailisAlreadyexists')
                                        </span>
                                        <span style="display:none" id="emailerror1" class="text-danger" >
                                     @lang('msg.Emailisnotvalid')
                                        </span>
                                        </div> 
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example48">Gender</label>
                                        <select class="form-select" style="height: 41px;" name="gender" id="gender" aria-label=".form-select-sm example" >
                                            <option value="" selected disabled>Select a gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                                
                                    <span style="display:none" id="gendererror" class="text-danger" >
                                    Gender is Required
                                        </span>
                                    </div>
                                </div> -->
                            </div>

                          
                            <div class="form-group">
                                <label class="mb-1" for="form2Example38q">@lang('msg.address')</label>
                                <input type="address" id="address" name="address" class="form-control" />
                                <span style="display:none" id="addresserror" class="text-danger" >
                                @lang('msg.ThisfieldisRequired')                                </span>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example40"> @lang('msg.Password')</label>
                                        <input type="password" id="password" name="password"
                                            class="form-control" />
          
                                        <span style="display:none" id="passworderror" class="text-danger" >
                                         @lang('msg.ThisfieldisRequired')
                                        </span>
                                        <span style="display:none" id="passworderror1" class="text-danger" >
                                         @lang('msg.Passwordshouldbeatleast8characters')
                                        </span>
                                        <span style="display:none" id="passworderror2" class="text-danger" >
                                         @lang('msg.Passwordshouldbeatleast1Capital')
                                        </span>
   
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example41">@lang('msg.ConfirmPassword')</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="form-control" />
                                            <span style="display:none" id="passworderror3" class="text-danger">
                                                @lang('msg.Passworddonotmatched')
                                            </span>
                                            <span style="display:none" id="cpassworderror" class="text-danger">
                                                @lang('msg.ThisfieldisRequired')
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check formprivacy">
                                <input class="form-check-input checkprivacy" type="checkbox" value="1" id="flexCheckDefault" name="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                   @lang('msg.Iagreetoaccept')
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#tcModal">@lang('msg.TermsConditions')</a> @lang('msg.and')
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#rpModal">@lang('msg.PrivacyPolicy')</a>
                                </label>
      
                            </div>
                            
                            <span style="display:none" id="nameerrorcheck" class="text-danger" >
                                @lang('msg.Pleaseacceptourprivacy')
                            </span>
                            <div class="pt-1 mb-2 mt-2">
                                <button class="btn btn-lg btn-block loginbutn w-100" id="formsumittButton" type="button">@lang('msg.Signup')</button>
                            </div>

                            <p class="belowtext">@lang('msg.donthaveanaccount')
                                <!-- <a href="" class="link-black float-end">Login</a> -->
                                <a href="{{url('membership/login')}}">@lang('msg.Login')</a>
                            </p>

                      
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <!-- return policy  Modal -->
<div class="modal fade" id="rpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">@lang('msg.PrivacyPolicy')</h5>
              <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body" style="min-height: 300px;max-height: 300px;">
              <h5 class="" >Reasons to return your order</h5>
              <div class="">
                <ul class="text-start list-unstyled">
                  <li><i class="bi bi-arrow-up-right-square-fill"></i> Your order payments are too high</li> 
                  <li><i class="bi bi-arrow-up-right-square-fill"></i> Your food is fresh </li> 
                  <li><i class="bi bi-arrow-up-right-square-fill"></i> You changed your mind </li> 
                  <li><i class="bi bi-arrow-up-right-square-fill"></i> Your order has a return policy </li> 
                </ul>
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #608c2a;">@lang('msg.Close')</button>
              
            </div>
        </div>
    </div>
</div>


<!-- Term condition  Modal -->
<div class="modal fade" id="tcModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('msg.TermsConditions')</h5>
                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body contact" style="min-height: 300px;max-height: 300px;">
                <div class="row mt-1 mb-4">
                    <div class="col-lg-12">
                        <div class="subheading">
                            <h5>Food order problems</h5>
                        </div>          
                        <p>@lang('msg.TermsConditions')</p>
                    </div>
                </div>  
            </div>    
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #608c2a;">@lang('msg.Close')</button>
            </div>
        </div>
    </div>
</div>


    </section>

    <script src="assets/vendor/bootstrap/js/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.1/js/bootstrap.min.js"></script>

    <script src="{{asset('membership/vendor/owl-carousel/js/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{asset('membership/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
          var velidate=1;
        $("#first_name").on('keyup', function(){
            var name = $('#first_name').val();
            if( (name != "") ){
              $('#nameerror').hide();
              velidate=0;

            }
            else {    
                $('#nameerror').show();
              velidate=1;

        }
        });
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
              
         
                $.ajax({
                  url: "{{ url('user/checkemail')}}",
                  type: "GET",
                  data:{
                    email,
                  },
                  dataType: "json",
                  success: function (data) {
                    console.log(data);
                    if (data == "found") {
                        console.log(data);
                        $('#Email_exists').show();
                        velidate=1;

                        // alert('hi');
                    //   $("#subcat").show();
                    //   $("#subcat_arr").show();
                    }
                    else{
                        $('#Email_exists').hide();
              velidate=0;


                    }
                 
                 
                  },
                });
              
            }
            
            else {    
                $('#emailerror').show();
                $('#emailerror1').hide();
                $('#Email_exists').hide();
              velidate=1;

                // alert('hi');
            //   var email = $('#email').val();
            //   console.log(email);

             
        }
        });

        $("#last_name").on('keyup', function(){
            var national_id = $('#last_name').val();
            if( (national_id != "") ){
              $('#lasterror').hide();
              velidate=0;

            }
            else {    
                $('#lasterror').show();
              velidate=1;

        }
        });
        $("#phone").on('keyup', function(){
            var phone = $('#phone').val();
            if( (phone != "") ){
              $('#phoneerror').hide();
              velidate=0;

              if ($('#phone').val().length < 10) {
                
                $('#phoneerror1').show();
                $('#phoneerror2').hide();
              velidate=1;


              
            }
            else{
                $('#phoneerror1').hide();
              velidate=0;


            }
            if ($('#phone').val().length > 10) {
                
                $('#phoneerror2').show();
                $('#phoneerror1').hide();
              velidate=1;


              
            }
            else{
                $('#phoneerror2').hide();
              velidate=0;


            }
            }
            else {    
                $('#phoneerror').show();
                $('#phoneerror1').hide();
                $('#phoneerror2').hide();
                velidate=1;

        }
        });
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
              $('#cpassworderror').hide();
              $('#passworderror3').hide();
              velidate=0;

        }
        });

   
        $("#flexCheckDefault").click( function(){
            var flexCheckDefault =  $('input[name="flexCheckDefault"]:checked').val();
            // console.log(gender);
            if( (flexCheckDefault == "1") ){
              $('#nameerrorcheck').hide();
            }
            else {    
                $('#nameerrorcheck').show();
      

        }
        });


        $("#password").on('keyup', function(){
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            if ($('#password').val().length < 8) {
                
                $('#passworderror1').show();
                velidate=1;
              
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
        });
        $('#formsumittButton').click(function() {
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            var name = $('#first_name').val();
            // console.log('hiii')
            var national_id = $('#last_name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var dob = $('#dob').val();
            var address = $('#address').val();
            var gender = $('#gender option:selected').val();
            var password = $('#password').val();
            $('input[name="locationthemes"]:checked');
            var flexCheckDefault =  $('input[name="flexCheckDefault"]:checked').val();
            // $('#flexCheckDefault').val();
            // console.log(flexCheckDefault)
            var cpass = $('#password_confirmation').val();
            var pass = $('#password').val();
            if( cpass ==""){
             
              velidate=1;


            }
            if( (pass != cpass) ){
           
              velidate=1;
            }
            if( (name == "") ){
                $('#nameerror').show();
                velidate=1;
              
            
            }
            if( (national_id == "")){
                $('#lasterror').show();
                velidate=1;
              
            
            }
            if( (email == "")){
                $('#emailerror').show();
                velidate=1;
              
            
            }
            if ($('#phone').val().length < 10) {
           
              velidate=1;


              
            }
            if ($('#phone').val().length > 10) {
                
               
                velidate=1;
  
  
                
              }
            if( (phone == "")  ){
                $('#phoneerror').show();
                velidate=1;
            }
            if ($('#password').val().length < 6) {
                
             
                velidate=1;
              
            } 
           
      
     
            if( (password == "")){
                $('#passworderror').show();
                velidate=1;
              
            
            }
            if( ($("#password_confirmation").val() == "")){
                $('#cpassworderror').show();
                velidate=1;
              
            
            }
           
            if( (flexCheckDefault != '1') ){
              $('#nameerrorcheck').show();
              velidate=1;
            //   $('#first_name').Class('form-control');
            //   name.css("form-control" , " 1px solid #FF1212;");
            }
            if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                   

                
                }
                else {
                    velidate=1;

                  
                }
            /////////
            // e.preventDefault();
             
         
            /////
            
         
            if(velidate == 0){
            //  $('#register').submit();
            
                $(this).attr('type', 'submit');
             $('#nameerrorcheck').hide();

           }


           
            });
        ///////////
    </script>
</body>
</html>


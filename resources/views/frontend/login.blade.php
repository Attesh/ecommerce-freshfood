@extends('frontend.main_master')
@section('content')
    
<style type="text/css">

    /*Huzaifa Mustafa*/
    .register {
        margin-top: 0px !important;
    }
form {
    line-height: 3;
    height: auto;
    margin: 2% auto;
    padding: 0 6%;
    border: none;
    border-radius: 9px;
 
}
form{
    margin-top:30px;
    margin-bottom:0px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    border: none;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 9px;
    box-shadow: 0px 0 30px rgb(1 41 112 / 10%);
}

.card-title {
    padding: 0px 0 15px 0;
    font-size: 26px;
    font-weight: 550;
    color: #263A4F;
    font-family: "Poppins", sans-serif;
}

.reglink {
    float: right;
    color: #fdaf1b;
}
.reglink1 {
    float: left;
    color: #fdaf1b;
}
.signin-upbtn {
    color: white !important;
}
.signin-upbtn:hover {
    color: white !important;
}

.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}

.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
.social-btn {
    width: 175px !important;
}

</style>

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4 bg-footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="card" id="logreg-forms">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <a href="{{url('/')}}" class="logo d-flex align-items-center justify-content-center w-auto">
                                    <img class="logoimg" src="{{asset('frontend/img/3.png')}}" alt="" style="width: 34%;">
                                    <!-- <span class="d-none d-lg-block">NEW BRAINS</span> -->
                                </a>
                            </div><!-- End Logo -->

                            <div class="pt-2 pb-2">
                                <h2 class="card-title text-center pb-0 fs-4">Sign in to your Account</h2>
                            </div>

                            <div class="social-login d-flex justify-content-evenly" bis_skin_checked="1">
                              <button class="btn btn-primary mx-3" type="button">Sign in with Facebook </button>
                              <button class="btn btn-secondary mx-3" type="button"> Sign in with Google+ </button>
                            </div>
                              <p class="text-center mt-1 mb-0"> OR  </p>

                            <form class="row pt-0 g-3 needs-validation" novalidate>
                                <div class="col-12 mt-0">
                                    <label for="Email" class=""><strong>Email</strong></label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" id="yourUsername" required>
                                </div>
                                <div class="col-12 mt-0">
                                    <label for="Password" class=""><strong>Password</strong></label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" id="yourPassword" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                    <small class="form-text text-muted cursor-pointer">
                                        <a href="forget.php" id="forget" class="reglink1">Forgot password?</a>
                                    </small>
                                </div>
                                <div class="col-12 mt-0">
                                  <a class="signin-upbtn btn btn-primary w-100" href="#">Login</a>
                                </div>
                                <div class="col-12 mb-0 mt-0">
                                  <p class="small mb-0">Don't have an account? <a class="reglink pt-0" href="register.php">Sign Up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleform(){
        var container = document.querySelector('.container');
        container.classList.toggle('active');
        }
    </script>
  @endsection
<?php include ('include/head.php');?>


   
  <script>

    function show() {
        var p = document.getElementById('pwd');
        p.setAttribute('type', 'text');
    }

    function hide() {
        var p = document.getElementById('pwd');
        p.setAttribute('type', 'password');
    }

    var pwShown = 0;

    document.getElementById("eye").addEventListener("click", function () {
        if (pwShown == 0) {
            pwShown = 1;
            show();
        } else {
            pwShown = 0;
            hide();
        }
    }, false);
  </script>

  <style type="text/css">
    header h2 {
      font-size: 250%;
      font-family: 'Playfair Display', serif;
      color: #3e403f;
      text-align: center;
    }
    header p {
      letter-spacing: 0.05em;
    }
    .input-item {
      background: #fff;
      color: #333;
      padding: 14.5px 0px 15px 9px;
      border-radius: 5px 0px 0px 5px;
    }
    p{
      color:#000;
    }
    input[class="form-input"]{
      width: 240px;
      height: 50px;
      margin-top: 2%;
      padding: 15px;
      font-size: 16px;
      font-family: 'Abel', sans-serif;
      color: #5E6472;
      outline: none;
      border: none;
      border-radius: 0px 5px 5px 0px;
      transition: 0.2s linear;
        
    }
    input[id="txt-input"] {width: 250px;}
    input:focus {
      transform: translateX(-2px);
      border-radius: 5px;
    }

    /* Submits */
    .submits {
      width: 48%;
      display: inline-block;
      float: left;
      margin-left: 2%;
    }
    .frgt-pass {background: transparent;}
    .sign-up {background: #B8F2E6;}

    @keyframes ani9 {
      0% {
        transform: translateY(3px);
      }
      100% {
        transform: translateY(5px);
      }
    }

    .register {
      margin-top: 0px !important;
    }
    form {
        line-height: 3;
        height: auto;
        margin: 2% auto;
        padding: 0 2%;
        border: none;
        border-radius: 5px;
    
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
      padding: 0;
      font-size: 26px;
      font-weight: 550;
      color: #263A4F;
      font-family: "Poppins", sans-serif;
    }

    .reglink {
      float: right;
      color: #f68b20;
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
    form{
      margin-top:30px;
      margin-bottom:0px;
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

          

          <div class="card">

            <div class="card-body">
              <div class="d-flex justify-content-center">
                <a href="{{url('/')}}" class="logo d-flex align-items-center justify-content-center w-auto">
                  <img class="logoimg" src="{{asset('frontend/img/3.png')}}" alt="" style="width: 34%;">
                  <!-- <span class="d-none d-lg-block">NEW BRAINS</span> -->
                </a>
              </div><!-- End Logo -->
              <div class="pt-1 pb-1">
                <h5 class="card-title text-center fs-4">Create an Account</h5>
              </div>

              <form class="row g-2 needs-validation" novalidate>
                <div class="col-12 mb-2">
                  <input type="text" name="name" class="form-control" placeholder="Name" id="yourName" required>
                  <div class="invalid-feedback">Please, enter your name!</div>
                </div>

                <div class="col-12 mb-2">
                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                </div>

                <div class="col-12 mb-2">
                  <input type="text" name="username" class="form-control" placeholder="Mobile Number" id="yourUsername" required>
                </div>
                
                <div class="col-6 mb-2">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  <div class="invalid-feedback">Please, enter your Password!</div>
                </div>

                <div class="col-6 mb-2">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Conform Password">
                  <div class="invalid-feedback">Please, Re enter your Password!</div>
                </div>
                
                <div class="col-6 mb-2">
                  <input type="password" name="password" class="form-control" placeholder="Zip Code" id="yourPassword" required>
                  <div class="invalid-feedback">Please enter your zipe code!</div>
                </div>
              
                <div class="col-6 mb-2">
                  <!-- <label for="yourPassword" class="form-label">Password</label> -->
                  <input type="password" name="password" class="form-control" placeholder="State" id="yourPassword" required>
                  <div class="invalid-feedback">Please enter your state!</div>
                </div>
                
                <div class="col-12 mb-0">
                  <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                </div>
                <div class="col-12">
                  <p class="small mb-0">Already have an account? <a class="reglink" href="login.php">Log In</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

    <?php include ('include/script.php');?>
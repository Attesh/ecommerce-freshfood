
    <?php include ('include/head.php');?>
<style type="text/css">
  .register {
      margin-top: 0px !important;
  }
  form {
    line-height: 3;
    height: auto;
    margin: 2% auto;
    padding: 2%;
    border: none;
    border-radius: 9px;
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
    padding: 0px 0 0px 0;
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
        <div class="card w-100" id="logreg-forms">
          <div class="card-body">
            <div class="d-flex justify-content-center py-1">
              <a href="{{route('index')}}" class="logo d-flex align-items-center justify-content-center w-auto">
                <img class="logoimg" src="{{asset('frontend/img/3.png')}}" alt="" style="width: 34%;">
              </a>
            </div><!-- End Logo -->

            <div class="pt-2">
                <h2 class="card-title text-center pb-0 fs-4">Forget Password</h2>
            </div>
            <form class="row pt-0 g-3 needs-validation" novalidate>
              <div class="form-group">
                  <label for="forget-email"><strong>Enter  Email address</strong></label>
                  <input id="signup-email" type="email" class="form-control" placeholder="customer@example.com">
              </div>
              <div class="">
                <a class="btn btn-primary w-100" href="#">Send Email</a>
                <a class="reglink" href="login.php">Back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php include ('include/script.php');?>
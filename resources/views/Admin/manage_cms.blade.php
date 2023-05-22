@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>CMS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">CMS</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex">
              <!-- <h5 class="card-title">Tickets</h5> -->
             <!--  <a href="{{route('contact.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto">
                <span class="fa fa-plus text-white"><b> ADD  </b></span>
              </a> -->
            </div>
            
            <div class="card-body configure">
              <div class="row">
                <div class="col-lg-3">
                  <a class="configlink" href="{{url('admin/aboutUs')}}"><i class="fa fa-info-circle"></i>About Us</a>
                </div>
                <div class="col-lg-3">
                  <a class="configlink" href="{{url('admin/home')}}"><i class="bi bi-house-fill"></i>Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  

  </main><!-- End #main -->

<script src="https://kit.fontawesome.com/9833d01fa2.js" crossorigin="anonymous"></script>

  @include('Admin.include.footer')
  @include('Admin.include.script')
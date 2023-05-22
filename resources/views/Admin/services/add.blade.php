@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Services Detail</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Services</li>
          <li class="breadcrumb-item active">Add Services</li>
          <!-- <li class="breadcrumb-item ">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Product Detail Form</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="col-md-12">
                  <h5 class="form-heading">Services Information</h5>
                </div> 
              
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="service_icon">
                </div>
                <div class="col-md-6">
                  <label for="inputText" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
            
                          
                        

                

                <div class="" style="float: right; margin-left: 1px;">
                  <button type="submit" class="btn btn-primary float-end submit">Submit</button>
                 
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@include('Admin.include.footer')
@include('Admin.include.script')
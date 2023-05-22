@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Category</li>
          <li class="breadcrumb-item active">Add Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add Committee Category</h5> -->
              <ul class="nav nav-tabs nav-tabs-bordered profilenav">
                                       <li class="nav-item">
                                          <button class="nav-link profilenavlinks active w-100" data-bs-toggle="tab" data-bs-target="#English">English</button>
                                       </li>
                                       <li class="nav-item">
                                          <button class="nav-link profilenavlinks w-100" data-bs-toggle="tab" data-bs-target="#Arabic">Arabic</button>
                                       </li>
                                    </ul>
                                    <div class="tab-content pt-2">
                                       <div class="tab-pane fade show active profile-edit pt-3" id="English">
                                       <form class="row g-3" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
			          @csrf
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="category_name" required>
                </div>
                                       </div>
                                       <div class="tab-pane fade pt-3" id="Arabic">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="category_name_ar" required>
                </div>
              </div>
              <div class="row mt-3">
              <div class="col-md-6">
                  <label for="inputState" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="category_icon" required>
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="images" id="imgInp" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                    <img class="mt-2" id="output" src="https://fisdemoprojects.com/pearl7/public/image/default/default_slider.jpeg" alt="your image" width="110px" height="110px">
                </div>
                </div>
              <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                  </div>
                </div>  
              </form><!-- End Multi Columns Form -->
                                    </div>
              <!-- Multi Columns Form -->


            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
@include('Admin.include.footer')
@include('Admin.include.script')

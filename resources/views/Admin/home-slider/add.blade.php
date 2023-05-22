@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home Slider</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Add Home Slider</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Home Slider Form</h5> -->

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
                        <!-- //form1 -->
                          <!-- Vertical Form -->
              <form class="row g-3"  method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                @csrf
                  
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="inputtitle" placeholder="" required>
                </div> 
                <div class="col-md-12">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" rows="3" name="short_description" required></textarea>
                </div>
              </div>
                      <div class="tab-pane fade pt-3" id="Arabic">
                        <!-- //form2 -->
                          <!-- Vertical Form -->
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="title_ar" class="form-control" id="inputtitle" placeholder="" required>
                </div> 
                <div class="col-md-12 mt-3">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" rows="3" name="short_description_ar" required></textarea>
                </div>
</div>
                <div class="col-md-6 mt-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="images" id="imgInp" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                    <img class="mt-2" id="output" src="https://fisdemoprojects.com/pearl7/public/image/default/default_slider.jpeg" alt="your image" width="110px" height="110px">
                </div>
                
                
                <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Submit</button>
                </div>
              </form><!-- Vertical Form -->
                    </div>
            

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














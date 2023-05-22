@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Gallery</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Add Gallery</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Home Slider Form</h5> -->

              <!-- Vertical Form -->
              <form class="row g-3"  method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
                @csrf
                  
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="inputtitle" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="imgInp" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                    <img class="mt-2" id="output" src="https://fisdemoprojects.com/pearl7/public/image/default/default_slider.jpeg" alt="your image" width="110px" height="110px">
                </div>
                
                
                <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Submit</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>
              </form><!-- Vertical Form -->

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
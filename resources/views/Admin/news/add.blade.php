@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">
  <div class="pagetitle">
      <h1>News</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Add News</li>
        </ol>
      </nav>
    </div>
  <!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add Events</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('news.store')}}" enctype="multipart/form-data">
			  @csrf
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title">
                </div>
                <div class="col-6">
                  
                <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="imgInp" required="" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                    
                    <img class="mt-2" id="output" src="https://fisdemoprojects.com/pearl7/public/image/default/default_slider.jpeg" alt="your image" width="110px" height="110px">
                  
                </div>  
                <div class="col-md-12">
                  <label for="description" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="description"></textarea>
                </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>  
              </form><!-- End Multi Columns Form -->

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

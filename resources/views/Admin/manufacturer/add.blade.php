@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Vendor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Shop</li>
          <li class="breadcrumb-item active">Add Vendor</li>
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
                                       <form class="row g-3"  method="POST" action="{{route('manufacturer.store')}}" enctype="multipart/form-data">
                @csrf
                  
                <div class="col-md-6">
                  <label for="inputname" class="form-label">Title</label>
                  <input type="text" name="name" class="form-control" id="inputname" placeholder="">
                </div> 
           
              
                <div class="col-md-6">
                  <label for="inputabbreviation" class="form-label">Abbreviation</label></br>
                  <input type="text" name="abbreviation" class="form-control" id="inputabbreviation" placeholder="">
                </div>
            
                
                                       </div>
          <div class="tab-pane fade pt-3" id="Arabic">
           <div class="row">
                <div class="col-md-6">
                  <label for="inputname" class="form-label">Title</label>
                  <input type="text" name="name_ar" class="form-control" id="inputname" placeholder="">
                </div> 
           
              
                <div class="col-md-6">
                  <label for="inputabbreviation" class="form-label">Abbreviation</label></br>
                  <input type="text" name="abbreviation_ar" class="form-control" id="inputabbreviation" placeholder="">
                </div>
            
            
                
</div>
</div>
</div>
<div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="images" id="imgInp" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                    <img class="mt-2" id="output" src="https://fisdemoprojects.com/pearl7/public/image/default/default_slider.jpeg" alt="your image" width="110px" height="110px">
                </div>
                <div class="col-md-6 mt-5">
                  <label for="inputstatus" class="form-label">Status</label>
                  <input type="checkbox" name="status" class="" id="inputstatus" value='1'>
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
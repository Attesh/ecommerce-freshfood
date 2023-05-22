@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>How its work</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Edit How its work</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Edit Committee Category</h5> -->

              <!-- Multi Columns Form -->


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
                                       <form class="row g-3" method="POST" action="{{route('How_its_work.update')}}">
			  @csrf
        <input type="hidden" name="id" value="{{$HowItWorks->id}}">
        <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="HowItWorks_title" value="{{$HowItWorks->title}}" required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="HowItWorks_description" required>{{$HowItWorks->description}}</textarea>
                </div>
                </div>
                                       </div>
                                       <div class="tab-pane fade pt-3" id="Arabic">
                                        <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="HowItWorks_title_ar" value="{{$HowItWorks->title_ar}}" required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="HowItWorks_description_ar" required>{{$HowItWorks->description_ar}}</textarea>
                </div>
</div>
</div>
</div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="HowItWorks_icon" value="{{$HowItWorks->icon}}" required>
                </div>
                
                 <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Update</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>    
              </form><!-- End Multi Columns Form -->
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


@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Add Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add Blog</h5> -->

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
                                       <form class="row g-3" method="POST" action="{{route('blogs.store')}}" enctype="multipart/form-data">
			          @csrf
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Category</label>
                  <select id="inputState" class="form-select" name="category_id" required>
                    <option value="" selected disabled>Select a Category</option>
                    @foreach($category as $data)
                    <option value='{{$data->id}}'>{{$data->name}}</option>
                  
                    @endforeach
                  </select>
                </div>
        
               
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName5" name="name" required>
                </div>
                <div class="col-md-12">
                  <label for="inputshort_description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description" required></textarea>
                </div>
                <div class="col-md-12">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="description" required></textarea>
                </div>
                                       </div>
                                       <div class="tab-pane fade pt-3" id="Arabic">
                                        <div class="row">
                                       <div class="col-md-6">
                  <label for="inputState" class="form-label">Category</label>
                  <select id="inputState" class="form-select" name="category_id" required>
                  <option value="" selected disabled>Select a Category</option>
                    @foreach($category as $data)
                    <option value='{{$data->id}}'>{{$data->name_ar}}</option>
                  
                    @endforeach
                  </select>
                </div>
              
        
               
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName5" name="name_ar" required>
                </div>
             
         
              
               
               
                <div class="col-md-12">
                  <label for="inputshort_description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description_ar" required></textarea>
                </div>
                <div class="col-md-12">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="description_ar" required></textarea>
                </div>
                
            </div>
</div>
            <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Author Image</label>
                  <input type="file" name="image1" id="imgInp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output"  width="100" ></a>
                </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                  </div>
                </div>  
              </form><!-- End Multi Columns Form -->
                                       </div>
              <!--  -->
             

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
  <script>
    var loadFile1 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output1 = document.getElementById('output1');
        output1.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>
@include('Admin.include.footer')
@include('Admin.include.script')





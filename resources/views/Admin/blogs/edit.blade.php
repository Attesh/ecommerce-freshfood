
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Edit Blog</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Edit Blog</h5> -->

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
                                        <!-- start -->
                                        <form class="row g-3" method="POST" action="{{route('blogs.update')}}" enctype="multipart/form-data">
              
              
              
              @csrf
              <input type="hidden" name="id" value="{{$privacy->id}}">
                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Category</label>
                        <select id="inputState" class="form-select" name="category_id">
                          @foreach($category as $data)
                          <option value='{{$data->id}}' {{
                          $data->id==$privacy->category_id?'selected':''}}>{{$data->name}}</option>
                        
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputName5" name="title" value="{{$privacy->name}}" required>
                      </div>
                     
                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Short Description</label>
                        <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description" required>{{$privacy->short_description}}</textarea>
                      </div>
                       <div class="col-md-12">
                        <label for="inputState" class="form-label">Description</label>
                        <textarea type="text" class="form-control ckeditor" id="inputName5" name="description" required>{{$privacy->description}}</textarea>
                      </div>
                                        <!-- end -->
                                       </div>
                                       <div class="tab-pane fade pt-3" id="Arabic">
                                        <!-- start -->
            <div class="row">
                                        <div class="col-md-6">
                        <label for="inputState" class="form-label">Category</label>
                        <select id="inputState" class="form-select" name="category_id">
                          @foreach($category as $data)
                          <option value='{{$data->id}}' {{
                          $data->id==$privacy->category_id?'selected':''}}>{{$data->name_ar}}</option>
                        
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputName5" name="title_ar" value="{{$privacy->name_ar}}" required>
                      </div>
                          </div>
                    
                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Short Description</label>
                        <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description_ar" required>{{$privacy->short_description_ar}}</textarea>
                      </div>
                       <div class="col-md-12">
                        <label for="inputState" class="form-label">Description</label>
                        <textarea type="text" class="form-control ckeditor" id="inputName5" name="description_ar" required>{{$privacy->description_ar}}</textarea>
                      </div>
                          </div>
                          </div>
                    
                      <div class="col-md-6 mt-3">
                        <label for="inputState" class="form-label">Author Image</label>
                        <input type="file" name="image1" id="imgInp"  accept="image/*" class="form-control input-default " placeholder="Select image" value="{{$privacy->image}}" onchange="loadFile(event)">
                        <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{ asset('Backend/images/' . $privacy->image) }}" id="output"  width="100" ></a>
                      </div>
                  
                      <div class=" mt-3">
                        <div class="col-md-12" style="text-align: right;">
                          <button type="submit" class="btn btn-primary submit">Update</button>
                        </div>
                      </div>  
                    </form><!-- End Multi Columns Form -->
                                        <!-- end -->
                                      
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

@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Sector</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Delivery Area</li>
          <li class="breadcrumb-item active">Edit Sector</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Edit Committee Subcategory</h5> -->

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
                                       <form class="row g-3" method="POST" action="{{route('sector.update')}}" enctype="multipart/form-data">
			  @csrf
        <input type="hidden" name="id" value="{{$sector->id}}">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">City</label>
                  <select id="inputState" class="form-select" name="city_id">
                  @foreach($city as $data)
                  <option value="{{$data->id}}"{{
                    $data->id==$sector->city_id?'selected':''}}>{{$data->title}}</option>
                  
                    @endforeach
                  
                 
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Sector</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$sector->title}}" required>
                </div>
                  </div>
                <div class="tab-pane fade pt-3" id="Arabic">
                  <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">City</label>
                  <select id="inputState" class="form-select" name="city_id">
                  @foreach($city as $data)
                  <option value="{{$data->id}}"{{
                    $data->id==$sector->city_id?'selected':''}}>{{$data->title_ar}}</option>
                  
                    @endforeach
                  
                 
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Sector</label>
                  <input type="text" class="form-control" id="inputName5" name="title_ar" value="{{$sector->title_ar}}" required>
                </div>
                </div>
                </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Update</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>  
                                       </div>
                                
              </form><!-- End Multi Columns Form -->
                                       </div>
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

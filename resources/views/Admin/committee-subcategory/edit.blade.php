@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Subcategory</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Board Members</li>
          <li class="breadcrumb-item active">Edit Subcategory</li>
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
              <form class="row g-3" method="POST" action="{{route('committee-subcategory.update')}}" enctype="multipart/form-data">
			  @csrf
        <input type="hidden" name="id" value="{{$subcategory->id}}">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Category</label>
                  <select id="inputState" class="form-select" name="category_id">
                  @foreach($category as $data)
                  <option value="{{$data->id}}"{{
                    $data->id==$subcategory->category_id?'selected':''}}>{{$data->title}}</option>
                  
                    @endforeach
                  
                 
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">SubCategory</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$subcategory->title}}">
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

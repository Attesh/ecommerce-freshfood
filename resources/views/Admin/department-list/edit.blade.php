@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Listing</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Members MarketPlace</li>
          <li class="breadcrumb-item active">Listing</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Edit</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('department-list.update')}}" enctype="multipart/form-data">
			  @csrf
                <input type="hidden" name="id" value="{{$department_list->id}}">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Department</label>
                  <select id="inputState" class="form-select" name="category_id">
                    <!-- <option value="">Select Category</option> -->
                     @foreach($department_category as $data)
                       
                    <option value='{{$data->id}}'{{$data->id==$department_list->category_id?'selected':''}}>{{$data->title}}</option>
                  
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$department_list->title}}">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="image" id="imgInp"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{ asset('Backend/images/' . $department_list->image) }}" id="output"  width="100" ></a>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Link</label>
                  <input type="text" class="form-control" id="inputName5" name="link" value="{{$department_list->link}}">
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

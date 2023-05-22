@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <main id="main" class="main">
<style>
    .add{
  cursor: pointer;
  }
</style>
    <div class="pagetitle">
      <h1>Listing</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Members MarketPlace</li>
          <li class="breadcrumb-item active">Add Listing</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('department-list.store')}}" enctype="multipart/form-data">
			  @csrf
              
              
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Department</label>
                  <select id="inputState" class="form-select" name="category_id">
                    <option value="" selected disabled>Select Category</option>
                    @foreach($category as $record)
                       
                    <option value='{{$record->id}}'>{{$record->title}}</option>
                  
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="image" id="imgInp" required="" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output"  width="100" ></a>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Link</label>
                  <input type="text" class="form-control" id="inputName5" name="link">
                </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Add</button>
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


@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Europe Executive Committee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Europe Executive Committee</li>
          <li class="breadcrumb-item active">Europe Executive Committee</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Europe Executive Committee</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('europe.update')}}" enctype="multipart/form-data">
			  @csrf
              <input type="hidden" name="id" value="{{$record->id}}">
              <div class="col-md-6">
                  <label for="inputState" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName5" name="name" value="{{$record->name}}">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$record->title}}">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="image" id="imgInp" required="" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{ asset('Backend/images/' . $record->image) }}" id="output"  width="100" ></a>
                </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary">Submit</button>
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

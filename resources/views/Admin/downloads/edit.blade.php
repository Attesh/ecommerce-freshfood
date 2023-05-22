
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">
  <div class="pagetitle">
      <h1>Downloads</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Members</li>
          <li class="breadcrumb-item active">Edit Downloads</li>
        </ol>
      </nav>
    </div> 
  <!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Edit Downloads</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('document.update')}}" enctype="multipart/form-data">
			  @csrf
              <input type="hidden" name="id" value="{{$document->id}}">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$document->title}}">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">File</label>
                  <input type="file" class="form-control" id="inputName5" name="document_name" accept=".pdf,.doc,.docx" value="{{$document->document_name}}" onchange="loadFile(event)">
                  
        <a href=""  onClick="delete(1)"><span class="fa fa-close"><embed class="mt-3" src="{{ asset('Backend/documents/' . $document->document_name) }}" id="output" width="100" height="100" >
</embed></a>
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

@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Home Slider</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Management</li>
        <li class="breadcrumb-item active">Edit Home Slider</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <!-- <h5 class="card-title">Home Slider Form</h5> -->

            <ul class="nav nav-tabs nav-tabs-bordered profilenav">
              <li class="nav-item">
                <button class="nav-link profilenavlinks active w-100" data-bs-toggle="tab"
                  data-bs-target="#English">English</button>
              </li>
              <li class="nav-item">
                <button class="nav-link profilenavlinks w-100" data-bs-toggle="tab"
                  data-bs-target="#Arabic">Arabic</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-edit pt-3" id="English">
                <!-- Form -->
                <form class="row g-3" method="POST" action="{{route('slider.update')}}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{$slider->id}}" />
                  <div class="col-md-6">
                    <label for="inputtitle" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="inputtitle" placeholder=""
                      value="{{$slider->title}}" required>
                  </div>
                  <div class="col-md-12 mt-3">
                    <label for="inputState" class="form-label">Description</label>
                    <textarea type="text" class="form-control ckeditor" id="inputName5" rows="3"
                      name="short_description" required>{{$slider->short_description}}</textarea>
                  </div>
              </div>
              <div class="tab-pane fade pt-3" id="Arabic">
                <!-- form -->
                  <input type="hidden" name="id" value="{{$slider->id}}" />
                  <div class="col-md-6">
                    <label for="inputtitle" class="form-label">Title</label>
                    <input type="text" name="title_ar" class="form-control" id="inputtitle" placeholder=""
                      value="{{$slider->title_ar}}" required>
                  </div>
                  <div class="col-md-12 mt-3">
                    <label for="inputState" class="form-label">Description</label>
                    <textarea type="text" class="form-control ckeditor" id="inputName5" rows="3"
                      name="short_description_ar" required>{{$slider->short_description_ar}}</textarea>
                  </div>
                </div>
                <div class="col-md-6 mt-3">
                  <label for="image" class="form-label">Image</label>
                  <input type="file" name="images" accept="image/*" class="form-control input-default "
                    placeholder="Select image" onchange="loadFile(event)">
                  <a href="" onClick="delete(1)"><span class="fa fa-close text-center"><br><img
                        src="{{ asset('Backend/images/' . $slider->images) }}" id="output" width="150"></a>
                </div>


                <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Update</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
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
  var loadFile = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
@include('Admin.include.footer')
@include('Admin.include.script')
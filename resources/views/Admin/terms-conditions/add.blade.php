@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
    <main id="main" class="main" >  
        
            
        <div class="pagetitle">
            <h1>Terms and Conditions</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Policies</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Terms and Conditions</a></li>
                </ol>
            </nav>    
        </div>
        <section class="section">
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4 class="card-title">Terms and Conditions</h4>
                        </div> -->
                        <div class="card-body">
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
                            <form action="{{ route('terms-conditions.form') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                <div class="form-group mt-1 col-md-6">
                                    <label for="title">Heading</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control input-default " placeholder="" required>
                                </div>
                                <div class="form-group mt-1 col-md-6">
                                    <label for="sub_heading">Sub_heading</label>
                                    <input class=" form-control" id="sub_heading" name="sub_heading" required>
                                </div>
                            </div>
                                <div class="form-group mt-1">
                                    <label for="description">Description</label>
                                    <textarea class=" form-control ckeditor" id="description" name="description" required></textarea>
                                </div>
</div>
<div class="tab-pane fade pt-3" id="Arabic">
                        <div class="row">
                            <div class="form-group mt-1 col-md-6">
                                    <label for="title">Heading</label>
                                    <input type="text" name="title_ar" id="title"
                                        class="form-control input-default " placeholder="" required>
                                </div>
                                <div class="form-group mt-1 col-md-6">
                                    <label for="sub_heading">Sub_heading</label>
                                    <input class=" form-control" id="sub_heading" name="sub_heading_ar" required>
                                </div>
                            </div>
                                <div class="form-group mt-1">
                                    <label for="description">Description</label>
                                    <textarea class=" form-control ckeditor" id="description" name="description_ar" required></textarea>
                                </div>
</div>
</div>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary submit" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </section>    
    
    </main>
@include('Admin.include.footer')
@include('Admin.include.script')

<script src="https://pagecdn.io/lib/ckeditor/4.13.0/ckeditor.js" integrity="sha256-yoULaG5POtLMfQWKvJ1pCbUSX4eM29SBpDbjkZAK6qs=" crossorigin="anonymous"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

{{-- <script>
        imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        blah.src = URL.createObjectURL(file)
      }
    }
    </script>
    <script>
        videos.onchange = evt => {
    const [file] = videos.files
    if (file) {
        vid.src = URL.createObjectURL(file)
    }
    }
    </script> --}}

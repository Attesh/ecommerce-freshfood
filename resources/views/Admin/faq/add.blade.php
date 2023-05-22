@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">


        <!--**********************************
                                                                                                                                                                                                                                                                                                                                        Content body start
                                                                                                                                                                                                                                                                                                                                    ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">FAQ</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">FAQ</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('faq.form') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control input-default " placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_heading">Sub_heading</label>
                                        <input class=" form-control" id="sub_heading" name="sub_heading">
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--**********************************
                                                                                                                                                                                                                                                                                                                                        Content body end
                                                                                                                                                                                                                                                                                                                                    ***********************************-->

    </div>
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                    Main wrapper end
                                                                                                                                                                                                                                                                                                                                ***********************************-->
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

<script src="https://pagecdn.io/lib/ckeditor/4.13.0/ckeditor.js"
    integrity="sha256-yoULaG5POtLMfQWKvJ1pCbUSX4eM29SBpDbjkZAK6qs=" crossorigin="anonymous"></script>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
@include('Admin.include.footer')
@include('Admin.include.script')
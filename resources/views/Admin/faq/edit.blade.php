@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">


        <!--**********************************                                                                                                                                                                                                      Content body start                                                                                                                                                                                                                                                                                                                                                                                                                                               ***********************************-->
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
                            @if (session()->has('message'))
                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    {{ session('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif

                            <div class="card-body">

                                <form action="{{ url('admin/faq/update/' . $data->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="title">Title </label>
                                            <input type="text" name="title" id="title" value="{{ $data->title }}"
                                                class="form-control input-default " placeholder="">

                                            {{-- <div class="form-group">
                                                <label for="sub_heading">sub_heading </label>
                                                <textarea type="text" name="sub_heading" id="sub_heading" class="form-control input-default " placeholder=""> {{ $data->sub_heading }} </textarea>
                                            </div> --}}
                                            <br><br><br>

                                            @if ($contentDetails)
                                                @foreach ($contentDetails as $key => $val)
                                                    <div class="row new_row">
                                                        <div class="col-5 col-md-5">
                                                            <div class="form-group">
                                                                <label>question</label>
                                                                <input type="text" class="form-control"
                                                                    name="detail_question[]" value="{{ $val->question }}"
                                                                    placeholder="Write text here">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-6">
                                                            <div class="form-group">
                                                                <label> answer</label>
                                                                <textarea class="form-control " rows="3" name="detail_answer[]" placeholder="Write text here">{{ $val->answer }}</textarea>
                                                                <input type="hidden" name="list_id[]"
                                                                    value="{{ $val->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-1">
                                                            <div class="form-group">
                                                                <br><button style="margin-top: 6px;"
                                                                    onclick="if(confirm('Are you sure to delete this list item?')){delete_existing_row(this,{{ $val->id }});}"
                                                                    class="btn btn-danger" type="button">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="row new_row">
                                                    <div class="col-12 col-md-11">
                                                        <div class="form-group">
                                                            <label>question</label>
                                                            <input type="text" class="form-control"
                                                                name="detail_question[]" placeholder="Write text here">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-11">
                                                        <div class="form-group">
                                                            <label> answer</label>
                                                            <textarea class="form-control ckeditor" name="detail_answer[]" placeholder="Write text here"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            <br><button style="margin-top: 6px;" onclick="delete_row(this)"
                                                                class="btn btn-danger" type="button">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="append_row"></div>
                                            <div class="form-group">
                                                <button title="Click to more options" onclick="add_more();"
                                                    class="btn btn-success" type="button"><i class="fa fa-plus"></i> Add
                                                    More</button>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary" type="submit">Update</button>
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

<script src="https://pagecdn.io/lib/ckeditor/4.13.0/ckeditor.js"
    integrity="sha256-yoULaG5POtLMfQWKvJ1pCbUSX4eM29SBpDbjkZAK6qs=" crossorigin="anonymous"></script>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
    function add_more() {

        $('.append_row').append('<div class="row new_row">' +

            '<div class="col-3 col-md-4">' +
            '<div class="form-group">' +
            '<label>question</label>' +
            '<input type="text" class="form-control" name="detail_question[]" placeholder="Write text here">' +
            '</div>' +
            '</div>' +
            '<div class="col-3 col-md-4">' +
            '<div class="form-group">' +
            '<label>answer</label>' +
            '<textarea type="text" class="form-control " name="detail_answer[]" placeholder="Write text here"></textarea>' +
            '</div>' +
            '</div>' +
            '<div class="form-group col-md-1"><br><button style="margin-top: 6px;" onclick="delete_row(this);" class="btn btn-danger" type="button">Delete</button></div></div>'
        );
    }

    function delete_row(element) {
        $(element).parents('.new_row').remove();
    }

    function delete_existing_row(element, $id) {
        $.ajax({
            url: "{{ url('admin/delete/faqs') }}",
            method: 'get',
            dataType: 'json',
            data: {
                id: $id,
                delete_existing_row: 1
            },
            success: function(data) {
                if (data['status'] == 1) {
                    $(element).parents('.new_row').remove();
                } else {
                    alert("Failed to delete this list item!");
                }
            },
            error: function(data) {
                alert("Error code : " + data.status + " , Error message : " + data.statusText);
            }
        });
    }
</script>
@include('Admin.include.footer')
@include('Admin.include.script')
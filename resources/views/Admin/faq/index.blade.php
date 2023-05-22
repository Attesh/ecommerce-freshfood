
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main" >
    
    <div class="content-body">
        <div class="container-fluid">
            <div class="pagetitle">
                <h1>FAQ</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"></a>Policies</li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">FAQ</a></li>
                    </ol>
                </nav>
            </div>
            
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h4 class="card-title">FAQ</h4> -->
                            @if (session()->has('message'))
                                <div class="usee-alert alert with-close alert-success alert-dismissible fade show">
                                    {{ session('message') }}
                                    <script>
                                        setTimeout(function() {
                                            location.reload();
                                        }, 3000)
                                    </script>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif
                            {{-- <div class="">
                                <a href="{{ url('admin/pages/faq/form') }}" class="btn btn-primary"><span
                                        class="fa fa-plus"><b> ADD </b></span></a>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $list)
                                            <tr>
                                                <td>{!!$list->id!!}</td>
                                                <td>kkkk</td>
                                                <td>
                                                    @if(@$list->status=='1')
                                                        <a href="{{url('admin/status/faq/data/status/0')}}/{{$list->id}}" class="btn btn-xs btn-rounded btn-danger btn-status">
                                                            Deactive
                                                        </a>
                                                    @else
                                                        <a href="{{url('admin/status/faq/data/status/1')}}/{{$list->id}}" class="btn btn-xs btn-rounded btn-warning btn-status">
                                                            Active
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main><!-- End #main -->

@include('Admin.include.footer')
@include('Admin.include.script')
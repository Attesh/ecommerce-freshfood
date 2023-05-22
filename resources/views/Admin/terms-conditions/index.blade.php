
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
    <main id="main" class="main" >   
        <div class="content-body">
            <div class="container-fluid">
                <div class="pagetitle">
                    <h1>Terms and Conditions</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"></a>Policies</li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Terms and Conditions</a></li>
                        </ol>
                    </nav>
                </div>
                
                <!-- row --> 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- <h4 class="card-title">Terms & Conditions</h4> -->
                            
                                <div class="text-end">
                                    <a href="{{ url('admin/terms-conditions/form') }}" class="btn1 btn btn-primary my-auto ms-auto add">
                                        <span class="fa fa-plus text-white"><b> ADD </b></span>
                                    </a>
                                </div> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <!-- <th scope="col">Status</th> -->
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $record)    
                                            
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td scope="col">{{$record->title}}</td>
                                                
                                                <!-- <td>
                                                    <div class="">
                                                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                                                            <span class="fa fa-check"> Active </span>
                                                        </a>
                                                    </div>
                                                </td> -->
                                                <td>
                                                    <div class="d-flex">
                                                        <a  href="{{route('terms-conditions.edit',$record->id)}}"><span class="fa fa-pencil"> </span></a>&nbsp;
                                                        <a  href="{{route('terms-conditions.delete',$record->id)}}"><span class="fa fa-trash text-danger"> </span></a>
                                                    </div>
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


@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Shop</li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </nav>
    </div>  
  <!-- End Page Title -->
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <!-- <h5 class="card-title">Committee Category</h5> -->
            <a href="{{route('product.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
              <span class="fa fa-plus text-white"><b> ADD  </b></span>
              </a>
          </div>
          <div class="card">
            <!-- ///// -->
            <div class="row justify-content-centre" style="margin-top: 4%">

<div class="col-md-8">

    <div class="card">

        <div class="card-header bgsize-primary-4 white card-header">

            <h4 class="card-title">Import Excel Data</h4>

        </div>

        <div class="card-body">

            @if ($message = Session::get('success'))




                <div class="alert alert-success alert-block">




                    <button type="button" class="close" data-dismiss="alert">×</button>




                    <strong>{{ $message }}</strong>




                </div>

                <br>

            @endif

            <form action="{{url('/admin/import')}}" method="post" enctype="multipart/form-data">

                @csrf

                <fieldset>

                    <label>Select File to Upload  <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or .xls) files')}}</small></label>

                    <div class="input-group">

                        <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file">

                        @if ($errors->has('uploaded_file'))

                            <p class="text-right mb-0">

                                <small class="danger text-muted" id="file-error">{{ $errors->first('uploaded_file') }}</small>

                            </p>

                        @endif

                        <div class="input-group-append" id="button-addon2">

                            <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Upload</button>

                        </div>

                    </div>

                </fieldset>

            </form>

        </div>

    </div>

</div>

</div>
          <div class="pull-right">

<a href="{{url('/admin/export')}}" class="btn btn-primary" style="margin-left:85%">Export Excel Data</a>

</div>
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1 " id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category </th>
                    <th scope="col">Price</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Featured</th>
                   
                    <th scope="col">Status</th>

                    <th scope="col">Action</th>
                  </tr>
                </thead>
               
                <tbody>
                @foreach($product as $key => $record)
                  <tr>
                    <td scope="row">{{$key+1}}</td>
                    <td>{{$record->name}}</td>
                  

                    <td>{{@$record->category->name}}</td>

                    <td>{{number_format($record->price,2)}}</td>
                    <td>{{$record->SKU}}</td>
                 
                    @if ($record->featured == '0')
                    <td>No</td>
                    @else
                    <td>Yes</td>
                    @endif
                    @if ($record->status == '0')
                    <td><span class="badge bg-warning">Unpublished</span></td>
                    @else
                    <td><span class="badge bg-success">Published</span></td>

                    @endif
                    <!--<td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>-->
                    <td>
                      <div class="d-flex">
                        <a href="{{route('product.edit',$record->id)}}"><span class="fa fa-pencil"> </span></a>&nbsp;
                        <a href="{{route('product.delete',$record->id)}}"><span class="fa fa-trash text-danger"> </span></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>  
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
    </section>  

  </main><!-- End #main -->


  @include('Admin.include.footer')
  @include('Admin.include.script')
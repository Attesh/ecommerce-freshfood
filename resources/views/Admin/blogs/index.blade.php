@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)"></a>Management</li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Manage Blogs</a></li>
        </ol>
      </nav>
    </div>
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <!-- <h5 class="card-title">Blogs</h5> -->
            <a href="{{route('blogs.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
              <span class="fa fa-plus text-white"><b> ADD  </b></span>
            </a>
          </div>
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1 " id="example">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <!-- <th scope="col">slug</th> -->
                    <th scope="col">short_description</th>


                    <!--<th scope="col">Status</th>-->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($privacy as $key => $record)
                  <tr>
                    
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$record->name}}</td>
                    <!-- <td>{{$record->slug}}</td> -->
                    <td>{{$record->short_description}}</td>
                   
                    <!-- <td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>-->
                    <td>
                       <div class="d-flex">
                        <a href="{{route('blogs.edit',$record->id)}}"><span class="fa fa-pencil"> </span></a>&nbsp;
                        <a href="{{route('blogs.delete',$record->id)}}"><span class="fa fa-trash text-danger"> </span></a>
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
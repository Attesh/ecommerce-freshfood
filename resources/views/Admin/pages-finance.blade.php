
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Finance Committee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Finance Committee</a></li>
          
          <!-- <li class="breadcrumb-item ">Tabs</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <h5 class="card-title">Finance Committee</h5>
            <a href="{{route('finance.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto">
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
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <!--<th scope="col">Status</th>-->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @foreach($finance as $key => $record)
                <tbody>
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$record->title}}</td>
                    <td>{{$record->description}}</td>
                    <!--<td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>-->
                    <td>
                      <div class="d-flex">
                        <a href="{{route('finance.edit',$record->id)}}"><span class="fa fa-pencil"> </span></a>&nbsp;
                        <a href="{{route('finance.delete',$record->id)}}"><span class="fa fa-trash text-danger"> </span></a>
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
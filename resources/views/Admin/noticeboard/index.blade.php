@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Notice Board</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Members</li>
          <li class="breadcrumb-item active">Manage Notice Board</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <!-- <h5 class="card-title">Noticeboard</h5> -->
            <a href="{{route('noticeboard.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
              <span class="fa fa-plus text-white"><b> ADD  </b></span>
            </a>
          </div>
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1 " id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <!-- <th scope="col">Description</th> -->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($notice as $key => $record)
                  <tr>
                    
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$record->title}}</td>
                    <td>{{ $record->updated_at->format('d/m/Y H:i:s') }}</td>
                    
                   <!-- <td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>-->
                    <td>
                       <div class="d-flex">
                        <a href="{{route('noticeboard.view',$record->id)}}"><span class="fa fa-eye"> </span></a>&nbsp;
                        <a href="{{route('noticeboard.edit',$record->id)}}"><span class="fa fa-pencil"> </span></a>&nbsp;
                        <a href="{{route('noticeboard.delete',$record->id)}}"><span class="fa fa-trash text-danger"> </span></a>
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
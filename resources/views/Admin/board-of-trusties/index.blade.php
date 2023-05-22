@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Board Of Trustees</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Board Members</li>
          <li class="breadcrumb-item active">Manage Board Of Trustees</li>
        </ol>
      </nav>
    </div>
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <!-- <h5 class="card-title">Board of Trustees</h5> -->
            <a href="{{route('trusty.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto">
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
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($record as $key => $record)
                  <tr>
                    
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$record->name}}</td>
                    <td>{{$record->title}}</td>
                   
                   <!-- <td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>-->
                    <td>
                       <div class="d-flex">
                        <a href="{{route('trusty.edit',$record->id)}}"><span class="fa fa-pencil"> </span></a>&nbsp;
                        <a href="{{route('trusty.delete',$record->id)}}"><span class="fa fa-trash text-danger"> </span></a>
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
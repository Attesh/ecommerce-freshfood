
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Subscribe</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Submissions</li>
          <li class="breadcrumb-item active">Subscribe</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h4 class="card-title">Subscriber</h4> -->
                        @if (session()->has('message'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $list)
                                        <tr>
                                            <td>{!!$list->id!!}</td>
                                            <td>kamran1122@gmail.com</td>
                                            <td>
                                                @if(@$list->status=='1')
                                                    <a href="{{url('admin/status/subscribe/data/status/0')}}/{{$list->id}}" class="btn btn-xs btn-rounded btn-danger btn-status">
                                                        Deactive
                                                    </a>
                                                @else
                                                    <a href="{{url('admin/status/subscribe/data/status/1')}}/{{$list->id}}" class="btn btn-xs btn-rounded btn-warning btn-status">
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
    </section>  

  </main><!-- End #main -->


  @include('Admin.include.footer')
  @include('Admin.include.script')
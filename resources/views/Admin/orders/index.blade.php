
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
  <div class="pagetitle">
    @if($order_data_status == 'pending')
      <h1>Pending</h1>
      @elseif($order_data_status == 'processing')
      <h1>Processing</h1>
      @elseif($order_data_status == 'dispatched')
      <h1>dispatched</h1>
      @elseif($order_data_status == 'Completed')
      <h1>Completed</h1>
      @elseif($order_data_status == 'incomplete')
      <h1>Incomplete</h1>
      @endif
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Order</li>
          @if($order_data_status == 'pending')
          <li class="breadcrumb-item active">Pending</li>
          @elseif($order_data_status == 'processing')
          <li class="breadcrumb-item active">processing</li>
          @elseif($order_data_status == 'delivered')
          <li class="breadcrumb-item active">delivered</li>
          @elseif($order_data_status == 'completed')
          <li class="breadcrumb-item active">completed</li>
          @elseif($order_data_status == 'incomplete')
          <li class="breadcrumb-item active">Imcomplete</li>
          @endif

        </ol>
      </nav>
    </div>  
  <!-- End Page Title -->
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
       
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1 " id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">Total</th>

                    <th scope="col">Customer Name</th>
                  
                  
                    <th scope="col">Order date</th>
                    <th scope="col">status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @foreach($order_data as $key => $record)
                @php
                $id=$record->customer_id;
                $customer=DB::table('users')->where('id',$id)->first();
                @endphp

                <tbody>
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>TRN00{{$record->id}}</td>
                    <td>{{$record->order_total}}</td>

                    <td>{{$customer->first_name}}</td>
                    <td>{{$record->order_date}}</td>
                    @if ($record->order_status =='pending')
                    <td><a href="{{route('pending.accept',$record->id)}}" class="btn btn-primary">{{$record->order_status}}</a></td>
                    @elseif($record->order_status =='processing')
                    <td><a href="{{route('pending.accept',$record->id)}}" class="btn btn-secondary">{{$record->order_status}}</a></td>
                    @elseif($record->order_status =='dispatched')
                    <td><a href="{{route('pending.accept',$record->id)}}" class="btn btn-success">{{$record->order_status}}</a></td>
                    @elseif($record->order_status =='completed')
                    <td><a href="#" class="btn btn-danger">{{$record->order_status}}</a></td>
                    @elseif($record->order_status =='incomplete')
                    <td><a href="#" class="btn btn-warning">{{$record->order_status}}</a></td>
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
                        <a href="{{route('pending.view',$record->id)}}"><span class="fa fa-eye"> </span></a>&nbsp;
                        
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
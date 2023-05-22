

@include('membership.includes.head')
@include('membership.includes.header')
<style type="text/css">
   .table>:not(:first-child) {
      border-top: 2px solid #608c2a;
   }
   .table tbody tr td {
      vertical-align: middle;
      border-color: #9295a2;
   }
   .backbtn {
      margin-left: 8px;
   }
   .card .CompanyDetail li {
      color: black !important;
   }
   @media print {


      main {
         visibility: hidden;
         display: none;
      }


      .modal-dialog {
         width: 100vw;
         max-width: none;
         margin: 0;
      }

   

      .modal-body {
         overflow-y: visible;
      }
      .modal-backdrop {
         visibility: hidden;
         display: none;
      }







      [data-sidebar-style='compact'] .content-body {
         margin-left: 0 !important;
      }
      [data-header-position='fixed'] .content-body {
         padding-top: 0 !important;
      }


      .hdr-div {
         display: none;
      }
      .pagetitle {
         display: none;
      }
      .header-nav {
         display: none;
         box-shadow: none;
      }
      .header-nav .nav-profile span{
         display: none !important;
      }
      .deznav {
         display: none;
      }
      .page-titles {
         display: none;
      }
      .nav-header {
         display: none;
      }
      .header {
         display: none !important;
         box-shadow: none;
         background-color: #f6f9ff;
      }
      .modal-header{
         display: none;
      }
      .header a, .header i, .header img {
         display: none;
      }
      .table thead th {
         color: black;
      }
      .harry {
         display: none;
      }
      .eventDetailCard {
         display: block;
         background: #F6F9FF !important;
         box-shadow: none;
      }
      .card {
         background: #F6F9FF !important;
         box-shadow: none;
      }
      .sidebar {
         box-shadow: none;
      }
      .harry1 {
         display: none;
      }
      .logo {
         display: block;
      }
      .footer {
         display: none;
      }
      .btn-primary {
         display: none;
      }
      body {
         margin-top: 0 !important;
         margin-bottom: 0 !important;
      }
   }
</style>
<main id="main">
   <section class="mbr-sec" id="main-sec">
      <div class="container-fluid ">
         <div class="row mb-5">
            <div class="col-lg-3 col-md-4 col-sm-5 col-12" id="side-nav">
               <!-- Tabs nav -->
               <!-- <div class="profile-img">
                  <img src="assets/img/person.png" class="img-fluid img-thumbnail rounded-circle" id="output-img" style="width: 120px; height: 120px;">
                  <label class="labelprofileimg" for="file">
                     <span class="bi bi-pencil"></span>
                  </label>
                  <input id="file" type="file" onchange="loadFile(event)"/>
               </div> -->
               <ul class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <li class="nav-item">   
                     <button class="nav-link nav-link1" id="v-pills-account-dtl-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account-dtl" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span class="memberpills-icon">
                           <i class="bi bi-person"></i>
                        </span>My Profile
                     </button>
                  </li>
                  <li class="nav-item active">
                     <button class="nav-link nav-link1 " id="v-pills-project-cmplt-tab" data-bs-toggle="pill" data-bs-target="#v-pills-project-cmplt" type="button" role="tab" aria-controls="v-pills-account" aria-selected="true">
                        <span class="memberpills-icon"> 
                           <i class="bi bi-house"></i>
                        </span> Orders
                     </button>
                  </li>
               
                  <li class="nav-item">
                     <a href="{{route('logout')}}" class="nav-link nav-link1" id="v-pills-log-tab" type="submit" role="tab" aria-controls="v-pills-logout" aria-selected="false" tabindex="-1">
                        <i class="bi bi-door-closed"></i> Log out
                     </a> 
                  </li>     
               </ul>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-12">
               <!-- Tabs content -->
               <div class="membertabcontent tab-content" id="v-pills-tabContent">
                  <!-- <div class="tab-pane bg-white" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-account-tab">
                     <div class="row">
                        <div class="col-md-12">
                           <h2 class="font-italic mb-4">Welcome To Farm Fresh</h2>
                           <h5 class="card-title overview">Dashboard</h5>
                        </div>   
                        

                        <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0 featured-services">
                           <div class="icon-box  text-center">
                              <div class="icon"><i class="fa fa-carrot" aria-hidden="true"></i></div>
                              <h4 class="title"><a href="">50+</a></h4>
                              <p class="description text-light">Vegetables</p>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0 featured-services">
                           <div class="icon-box text-center" >
                              <div class="icon"><i class="fas fa-apple-alt" aria-hidden="true"></i></div>
                              <h4 class="title"><a href="">150+</a></h4>
                              <p class="description text-light">Fruits</p>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0 featured-services">
                           <div class="icon-box text-center" >
                              <div class="icon"><i class="bi bi-people" aria-hidden="true"></i></div>
                              <h4 class="title"><a href="">150+</a></h4>
                              <p class="description text-light"></p>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <div class="tab-pane bg-white show active" id="v-pills-project-cmplt" role="tabpanel" aria-labelledby="v-pills-account-tab">
                     <div class="row">
                        <div class="col-md-12">
                           <h2 class="font-italic mb-4">Welcome To Farm Fresh</h2>
                           <!-- <h5 class="card-title overview">Projects</h5> -->
                        </div>   
                        <div class="col-md-12">
                           <div class="card">
                              <div class="card-header d-flex card-header-c">
                                <h5 class="card-title my-auto">Orders</h5>
                                <!-- <a href="product-form.php" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto">
                                  <span class="fa fa-plus text-white"><b> ADD  </b></span>
                                </a> -->
                              </div>
                              <div class="card-body">  
                                <!-- Table with stripped rows -->
                                 <div class="table-responsive">
                                    <table class="table table1" id="example">
                                       <thead>
                                         <tr>
                                           <th scope="col">Sr No.</th>
                                           <th scope="col">Order ID</th>
                                           <th scope="col">Order Date</th>
                                           <th scope="col">Customer Name</th>
                                           <th scope="col">Price</th>
                                           <th scope="col">Status</th>
                                           <!-- <th scope="col">View</th> -->
                                           <th scope="col">Action</th>
                                         </tr>
                                       </thead>
                                       @if($record)
                                       <tbody>
                                          @foreach($record as $key => $data)
                                         <tr>
                                           <td>{{$key+1}}</td>
                                           <td>TRN00{{$data->order_id}}</td>
                                           <td>{{$data->order_date}}</td>
                                           <td>{{$data->first_name}} {{$data->last_name}}</td>
                                           <td>{{number_format($data->subtotal,2)}}</td>
               
                                             <div class="">
                                               @if ($data->order_status == 'pending')
                                                <td><span class="badge bg-warning">Pending</span></td>
                                             @elseif($data->order_status=='processing')
                                             <td><span class="badge bg-success">Processing</span></td>
                                             @elseif($data->order_status=='dispatched')
                                             <td><span class="badge bg-success">Dispatched</span></td>
                                             @elseif($data->order_status=='delivered')
                                             <td><span class="badge bg-success">Delivered</span></td>
                                             @elseif($data->status=='rejected')
                                             <td><span class="badge bg-success">Rejected</span></td>
                                             @else
                                             <td><span class="badge bg-success">Cancelled</span></td>

                    @endif
                                             </div>
                                          
                                           <!-- <td>
                                             <div class="">
                                               <a href="#" title="click to deactivate" class="btn1 btn btn-primary rounded-pill"><span class="fa fa-eye"></span></a>
                                             </div>
                                           </td> -->
                                           <td>
                                             <div class="d-flex">
                                               <a href="{{route('member.order_detail',$data->order_id)}}" title="click to deactivate" class="text-primary px-1"  data-id="{{$data->order_id}}"><span class="fa fa-eye"></span></a>&nbsp;
                                               <!-- <a href="#" title="click to Edit" class="btn1 btn rounded-pill btn-info"><span class="fa fa-pencil"> </span></a>&nbsp; -->
                                               <!-- <a href="{{route('member.order_detail_delete',$data->order_id)}}" title="click to Delete" class=""><span class="fa fa-trash text-danger"> </span></a> -->
                                             </div>
                                           </td>
                                         </tr>
                                         @endforeach
                                         <!-- <tr>
                                             <td>2</td>
                                             <td>123</td>
                                             <td>date2</td>
                                             <td>bbb</td>
                                             <td>40</td>
                                           
                                           <td>
                                             <div class="">
                                               <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">Active</a>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="d-flex">
                                               <a href="#" title="click to view" class="text-primary px-1" data-bs-toggle="modal" data-bs-target="#invioce-modal"><span class="fa fa-eye"></span></a>&nbsp;
                                               
                                               <a href="#" title="click to Delete" class=""><span class="fa fa-trash text-danger"> </span></a>
                                             </div>
                                           </td>
                                         </tr> -->
                                         <!-- <tr>
                                             <td>3</td>
                                             <td>789</td>
                                             <td>date3</td>
                                             <td>coustomer 1</td>
                                             <td>80</td>
                                           <td>
                                             <div class="">
                                               <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">Active</a>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="d-flex">
                                               <a href="#" title="click to view" class="text-primary px-1"  data-bs-toggle="modal" data-bs-target="#invioce-modal"><span class="fa fa-eye"></span></a>&nbsp;
                                              
                                               <a href="#" title="click to Delete" class=""><span class="fa fa-trash text-danger"> </span></a>
                                             </div>
                                           </td>
                                         </tr> -->
                                       </tbody>
                                       @endif
                                    </table>
                                 </div>  
                                <!-- End Table with stripped rows -->
                              </div> 
                           </div>
                        </div>                           
                     </div>
                  </div>
                  
                  <div class="tab-pane  bg-white" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                     <h2 class="font-italic mb-4">Welcome To Volman</h2>
                     <h5 class="card-title overview">Profile Details</h5>
                     <div class="table-responsive">
                        <table class="table">
                           <tbody>
                              <tr class="tablerow">
                                 <td class="label">Full Name</td>
                                 <td>Kevin Anderson</td>
                              </tr>
                              <tr class="tablerow">
                                 <td class="label">Company</td>
                                 <td>Lueilwitz, Wisoky and Leuschke</td>
                              </tr>
                              <tr class="tablerow">
                                 <td class="label">Country</td>
                                 <td>USA</td>
                              </tr>
                              <tr class="tablerow">
                                 <td class="label">Address</td>
                                 <td>A108 Adam Street, New York, NY 535022</td>
                              </tr>
                              <tr class="tablerow">
                                 <td class="label">Phone</td>
                                 <td>(436) 486-3538 x29071</td>
                              </tr>
                              <tr class="tablerow" >
                                 <td class="label">Email</td>
                                 <td>k.anderson@example.com</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>

                  <div class="tab-pane  bg-white" id="v-pills-account-dtl" role="tabpanel" aria-labelledby="v-pills-account-dtl-tab">
                     <section class="profile pt-0 section">
                        <div class="row">
                           <div class="col-xl-12">
                              <div class="profile">
                                 <div class="card-body pt-3">
                                    <h4 class="font-italic mb-4">Edit Your Profile</h4>
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered profilenav">
                                       <li class="nav-item">
                                          <button class="nav-link profilenavlinks active " data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                       </li>
                                       <li class="nav-item">
                                          <button class="nav-link profilenavlinks w-100" data-bs-toggle="tab" data-bs-target="#profile-reset-password">Reset Password</button>
                                       </li>
                                    </ul>
                                    <div class="tab-content pt-2">
                                       <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
                                          <!-- Profile Edit Form -->
                                          <form  method="POST" enctype="multipart/form-data" action="{{route('member.update')}}">
                                             @csrf
                                             <input type="hidden" name="id" value="{{Auth::guard('member')->user()->id}}">
                                             <!-- <div class="row mb-3">
                                                <div class="col-md-3 col-sm-5 ">
                                                   <label for="profileImage" class="col-form-label profilelabel">Profile Image</label>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                   <img src="assets/img/person.png" alt="Profile" class="editprofileimg img-fluid" style="width: 120px; height: 120px;">
                                                   <div class="pt-2">
                                                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                   </div>
                                                </div>
                                             </div> -->
                                             <div class="row mb-3">
                                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label profilelabel">Profile Image</label>
                                                <div class="col-md-8 col-lg-9">
                                                @if(Auth::guard('member')->user()->image=='')
                                                <img src="{{asset('Backend/images/dummy_image.jpg')}}" class="img-fluid img-thumbnail rounded-circle" id="output-img" style="width: 120px; height: 120px;" alt="Profile">
                                                @endif
                                                @if(Auth::guard('member')->user()->image)
                                                <img src="{{ asset('Backend/images/' . Auth::guard('member')->user()->image) }}" class="img-fluid img-thumbnail rounded-circle" id="output-img" style="width: 120px; height: 120px;" alt="Profile">
                                                @endif
                                                   
                                                <div class="pt-2 iconsection">
                                                <a style="width: 54%; background: #104382; border-color: #104382;" href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><input name="image" type="file" accept="image/*" onchange="loadFile(event)"/><i class="bi bi-upload"></i></a>
                                                <a href="{{route('member.delete_img',Auth::guard('member')->user()->id)}}" id="" style="width: 15%; padding: 7px;" href="" class="btn btn-danger btn-sm" title="Remove my profile image"><!-- Delete --><i class="bi bi-trash"></i></a>
                                                </div>
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div class="col-lg-2 col-md-3 col-sm-4 ">
                                                   <label for="fullName" class="col-form-label profilelabel">First Name</label>
                                                </div>
                                                <div class="col-md-6 col-sm-8">
                                                   <input name="first_name" type="text" class="form-control" id="fullName" value="{{Auth::guard('member')->user()->first_name}}">
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div class="col-lg-2 col-md-3 col-sm-4 ">
                                                   <label for="fullName" class="col-form-label profilelabel">Last Name</label>
                                                </div>
                                                <div class="col-md-6 col-sm-8">
                                                   <input name="last_name" type="text" class="form-control" id="fullName" value="{{Auth::guard('member')->user()->last_name}}">
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div class="col-lg-2 col-md-3 col-sm-4 ">
                                                   <label for="Email" class="col-form-label profilelabel">Email</label>
                                                </div>
                                                <div class="col-md-6 col-sm-8">
                                                   <input name="email" type="email" class="form-control" id="Email" value="{{Auth::guard('member')->user()->email}}" disabled> 
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div class="col-lg-2 col-md-3 col-sm-4">
                                                   <label for="Phone" class="col-form-label profilelabel">Phone</label>
                                                </div>
                                                <div class="col-md-6 col-sm-8">
                                                   <input name="phone" type="text" class="form-control" id="Phone" value="{{Auth::guard('member')->user()->phone}}">
                                                </div>
                                             </div>
                                             <!-- <fieldset class="row mb-3">
                                                <legend class="col-form-label col-md-3 col-sm-4 pt-0">Gender</legend>
                                                <div class="col-md-6 col-sm-6">
                                                   <div class="form-check d-inline-block me-4">
                                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                      <label class="form-check-label" for="gridRadios1">Male</label>
                                                   </div>
                                                   <div class="form-check d-inline-block">
                                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                      <label class="form-check-label" for="gridRadios2">Female</label>
                                                   </div>
                                                </div>
                                             </fieldset> -->
                                              <div class="row mb-3">
                                                <div class="col-lg-2 col-md-3 col-sm-4">
                                                   <label for="address" class="col-form-label profilelabel">Address</label>
                                                </div>
                                                <div class="col-md-6 col-sm-8">
                                                   <input name="address" type="text" class="form-control" id="Country" value="{{Auth::guard('member')->user()->address}}">
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <label for="inputDate" class="col-lg-2 col-md-3 col-sm-4 col-form-label">Date of Birth</label>
                                                <div class="col-md-6 col-sm-8">
                                                  <input type="date" class="form-control" name="dob" value="{{Auth::guard('member')->user()->dob}}">
                                                </div>
                                             </div>
                                             <!-- <div class="row mb-3">
                                                <div class="col-md-4 col-lg-3">
                                                   <label for="company" class="col-form-label profilelabel">Company</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                   <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                                                </div>
                                             </div> -->
                                             
                                             <!-- <div class="row mb-3">
                                                <div class="col-md-4 col-lg-3">
                                                   <label for="Address" class="col-form-label profilelabel">Address</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                   <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                                                </div>
                                             </div>
                                             
                                             
                                             <div class="row mb-3">
                                                <div class="col-md-4 col-lg-3">
                                                   <label for="Twitter" class="col-form-label profilelabel">Twitter Profile</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                   <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div class="col-md-4 col-lg-3">
                                                   <label for="Facebook" class="col-form-label profilelabel">Facebook Profile</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                   <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div class="col-md-4 col-lg-3">
                                                   <label for="Instagram" class="col-form-label profilelabel">Instagram Profile</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                   <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div class="col-md-4 col-lg-3">
                                                   <label for="Linkedin" class="col-form-label profilelabel">Linkedin Profile</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                   <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                                </div>
                                             </div> -->
                                             <div class="profile text-right">
                                                <button type="submit" class="btn btn-primary profilebtn">Save Changes</button>
                                             </div>
                                          </form>
                                          <!-- End Profile Edit Form -->
                                       </div>
                                       <!-- <div class="tab-pane fade pt-3" id="profile-settings">
                                       
                                          <form>
                                             <div class="row mb-3">
                                                <div class="col-md-4 col-lg-3">
                                                   <label for="fullName" class="col-form-label profilelabel">Email Notifications</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                   <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                      <label class="form-check-label" for="changesMade">
                                                      Changes made to your account
                                                      </label>
                                                   </div>
                                                   <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                      <label class="form-check-label" for="newProducts">
                                                      Information on new products and services
                                                      </label>
                                                   </div>
                                                   <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="proOffers">
                                                      <label class="form-check-label" for="proOffers">
                                                      Marketing and promo offers
                                                      </label>
                                                   </div>
                                                   <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                                      <label class="form-check-label" for="securityNotify">
                                                      Security alerts
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="profile text-right">
                                                <button type="submit" class="btn btn-primary profilebtn">Save Changes</button>
                                             </div>
                                          </form>
                                          
                                       </div> -->
                                       <div class="tab-pane fade pt-3" id="profile-reset-password">
                                          <!-- Change Password Form -->
                                          <form method="Post" action="{{route('member.change-password')}}">
                        @csrf
                         <!-- <div class="row mb-3">
                           <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                           <div class="col-md-8 col-lg-9">
                              <input name="password" type="password" class="form-control" id="newPassword" >
                           </div>
                        </div> -->
                        <input type="hidden" name="id" value="{{Auth::guard('member')->user()->id}}">
                       
            

                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">New Password</label>
                                <input id="password" class="form-control"  id="password" type="password" name="password" required/>
                                <span style="display:none" id="passworderror" class="text-danger" >
Password  is Required
    </span>
    <span style="display:none" id="passworderror1" class="text-danger" >
    Password should be atleast - 8 characters
    </span>
    <span style="display:none" id="passworderror2" class="text-danger" >
    Password should be atleast - 1 Capital, 1 Digit, 1 Special character
    </span>
                            </div>
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">Confirm Password</label>
                                <input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="confirmpassword" required/>
                                    <span style="display:none" id="passworderror3" class="text-danger" >
Password do not matched 
    </span>
    <span style="display:none" id="cpassworderror" class="text-danger" >
Password  is Required
    </span>

                            </div>
                            <div class="pt-1 mb-2 mt-4">
                                <button class="btn btn-info btn-lg btn-block loginbutn w-100" id ="resetsumittButton" type="button">Reset
                                    Password</button>
                            </div>
                          
                        </form>
                                          <!-- End Change Password Form -->
                                       </div>
                                    </div>
                                    <!-- End Bordered Tabs -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<!-- End #main -->

<div class="modal fade" id="invioce-modal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Invoice detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>

         <div class="modal-body">
            <div class="card p-3">
               <div class="row">
                  <div class="col-md-8">
                     <div class="">
                        <img class="logo" src="{{asset('Backend/img/new-logo.png')}}" alt="no-img" style="width:100px;" >
                        <ul class="list-unstyled CompanyDetail mt-2 mb-2">
                          <!-- <li class="text-dark">Farm Fresh Ltd 85 Great abc Street Jiddha W1w 7lt Saudi Arabia</li> -->
                          <li class="text-dark">{{@$data->first_name}} {{@$data->last_name}}</li>
                          <li class="text-dark">{{@$data->email}}</li>
                          <li class="text-dark">{{@$data->phone}}</li>
                          <li class="text-dark">{{@$data->address}}</li>
                          <!-- <li>Cancún, city, country C.P. 0500    </li> -->
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <table class="table table-bordered invoiceTable">
                        <tbody>
                           <tr>
                              <td>Invoice No</td>
                              <td>TRN00{{@$data->order_id}}</td>
                           </tr>
                           <tr>
                              <td>Date</td>
                              <td>{{date('d M Y',strtotime(@$data->order_date))}}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>    


               <div class="row my-2 mx-1 justify-content-center">
                  <div class="col-md-12">
                     <table class="table table-border invoiceItemeTable">
                        <thead style="background-color:#608c2a ;" class="text-white">
                          <tr>
                             <th scope="col">Sr. No</th>
                             <th scope="col">Order Id</th>
                             <th scope="col">Categories</th>
                             <th scope="col">Product</th>
                             <th scope="col">Unit Price</th>
                             <th scope="col">Qty</th>
                             <th scope="col" class="text-end">Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($record as $key => $record)
                           <tr>
                              <td>{{$key+1}}</td>
                              <td>TRN00{{@$record->order_id}}</td>
                              <td>Meat</td>
                              <td>Beaf</td>
                              <td>20</td>
                              <td>{{@$record->item_quantity}}</td>
                              <td class="text-end">20</td>
                           </tr>
                           @endforeach
                           <!-- <tr>
                              <td>11</td>
                              <td>2</td>
                              <td>Meat</td>
                              <td>Mutton</td>
                              <td>40</td>
                              <td>2</td>
                              <td class="text-end">80</td>
                           </tr> -->
                        </tbody>
                     </table>
                  </div>   
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="d-flex justify-content-end align-items-center">
                        <table class="table w-25" style="font-weight: 600;">
                           <tbody> 
                              <tr class="totalCal">
                                 <td colspan="12"></td>
                                 <td> Sub Total</td>
                                 <td><span id="subtotal_sign">SAR</span><span id="sub_total">3000</span></td>
                              </tr>
                              <tr class="totalCal">
                                 <td colspan="12"></td>
                                 <td>Tax<input type="hidden" id="vat" value="taxta" name="vat"></td>
                                 <td>SAR<span id="vatInpt">05670</span></td>
                              </tr>
                              <tr class="totalCal">
                                 <td colspan="12"></td>
                                 <td>Grand Total</td>
                                 <td>SAR<span id="all_total">0088</span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>   
               </div>  
               <hr>
               <div class="row">
                  <div class="col-xl-10">
                     <p class="text-dark">Thank you for your purchase</p>
                  </div>
               </div>
 
               <div class="row mb-3">
                  <div class="col-md-12 text-end">
                     <!-- <a href="{{url('admin/manageinvoice')}}"> 
                        <button type="button" class="btn btn-primary text-capitalize backbtn">Back</button>
                     </a> -->
                     <button id="btnvo" type="button" onclick="window.print()" class="btn btn-primary text-capitalize">Print</button>
                  </div>
               </div>
            </div>  
         </div>

         <!-- <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary">Save changes</button>
         </div> -->
      </div>
   </div>   
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script type="text/javascript">
   var loadFile = function (event) {
  var image = document.getElementById("output-img");
  image.src = URL.createObjectURL(event.target.files[0]);
};

</script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script>
         var velidate=1;
    
/////

$("#password_confirmation").on('keyup', function(){
            var cpass = $('#password_confirmation').val();
            var pass = $('#password').val();
            if( cpass ==""){
                $('#cpassworderror').show();
               

            }
            if( (pass != cpass) ){
              $('#passworderror3').show();
              $('#cpassworderror').hide();
         

            }
            
            else {   
                velidate=0;
              $('#cpassworderror').hide();
              $('#passworderror3').hide();

        }
        });
        //////
        $("#password").on('keyup', function(){
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            if ($('#password').val().length < 8) {
            
                $('#passworderror1').show();
              
            } else {
                $('#passworderror1').hide();
                if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                    $('#passworderror2').hide();
                    velidate=0;
                } else {
                    $('#passworderror2').show();
                  
                }
            }
            if($('#password').val() != ""){

                $('#passworderror').hide();
                velidate=0;

            }
          
            if($('#password').val() == "" )
            {
              
                $('#passworderror').show();
            }
        });


        $('#resetsumittButton').click(function() {
         console.log(velidate);
         var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
    var email = $('#email').val();
    var pass=$("#password").val();
    var cpass = $('#password_confirmation').val();
  
    if ($('#password').val().length < 8) {
                velidate=1;
                
              
            } 
            if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                  
                    
                } else {
                    
                    velidate=1;
                }

                if($('#password').val() == ""){


velidate=1;

}
if( cpass ==""){
           
                velidate=1;

            }
            if( (pass != cpass) ){
           
              velidate=1;

            }

console.log(velidate)

        if (velidate == 0){

$(this).attr('type', 'submit');
$('#nameerrorcheck').hide();

        }
 
 

})
</script>


<!--extra data -->
@include('membership.includes.script')
@include('membership.includes.footer')




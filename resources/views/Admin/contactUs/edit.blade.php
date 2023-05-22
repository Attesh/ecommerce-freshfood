@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Contact Us</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">General Settings</li>
            <li class="breadcrumb-item active">Edit Contact Us</li>
          </ol>
        </nav>
      </div> 
    <!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
             

              <!-- Multi Columns Form -->
             <form class="row g-3" method="POST" action="{{route('contact.update')}}">
                <input type="hidden" value="{{$contact->id}}" name="id">
              @csrf
                 <div class="col-md-6">
                  <label for="inputState" class="form-label">Email</label>
                  <input type="text" class="form-control" id="inputName5" name="email" value="{{$contact->email}}">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Contact</label>
                  <input type="text" class="form-control" id="inputName5" name="phone" value="{{$contact->phone}}">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputName5" name="address" value="{{$contact->address}}">
                </div>
             <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Update</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div> 
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@include('Admin.include.footer')
@include('Admin.include.script')
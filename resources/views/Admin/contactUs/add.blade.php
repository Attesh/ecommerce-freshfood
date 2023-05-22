@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Contact Us</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">General Settings</li>
            <li class="breadcrumb-item active">Add Contact Us</li>
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
              <form class="row g-3" method="POST" action="{{route('contact.store')}}" >
              @csrf
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Email</label>
                  <input type="text" class="form-control" id="inputName5" name="email">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Contact 1</label>
                  <input type="text" class="form-control" id="inputName5" name="phone1">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Contact 2</label>
                  <input type="text" class="form-control" id="inputName5" name="phone2">
                </div>
                
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Location</label>
                  <input type="text" class="form-control" id="inputName5" name="location">
                </div>
             <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
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
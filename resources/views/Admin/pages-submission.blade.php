<?php include ('include/head.php');?>
<?php include ('include/header.php');?>

<?php include ('include/asidebar.php');?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Conact</a></li>
          <li class="breadcrumb-item">Page</li>
          <!-- <li class="breadcrumb-item active">Tabs</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <h5 class="card-title">Conact Submission</h5>
            <!-- <a href="sliderForm.php" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto">
              <span class="fa fa-plus text-white"><b> ADD  </b></span>
            </a> -->
          </div>
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table " id="example">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                    <!-- <th scope="col">Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!-- <th scope="row">1</th> -->
                    <td>Ali</td>
                    <td>abc@gmail.com</td>
                    <td>subject</td>
                    <td>i am ali</td>
                    <td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>
                    <!-- <td>
                      <div class="d-flex">
                        <a href="#" title="click to Edit" class="btn1 btn btn-primary rounded-pill btn-info"><span class="fa fa-pencil"> Edit</span></a>&nbsp;
                        <a href="#" title="click to Delete" class="btn1 btn btn-primary rounded-pill btn-danger"><span class="fa fa-trash"> Delete</span></a>
                      </div>
                    </td> -->
                  </tr>
                  <!-- <tr>
                    <th scope="row">2</th>
                    <td>FAQ 2</td>
                    <td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex">
                        <a href="#" title="click to Edit" class="btn1 btn btn-primary rounded-pill btn-info"><span class="fa fa-pencil"> Edit</span></a>&nbsp;
                        <a href="#" title="click to Delete" class="btn1 btn btn-primary rounded-pill btn-danger"><span class="fa fa-trash"> Delete</span></a>
                      </div>
                    </td>
                  </tr> -->
                  <!-- <tr>
                    <th scope="row">3</th>
                    <td>FAQ 3</td>
                    <td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex">
                        <a href="#" title="click to Edit" class="btn1 btn btn-primary rounded-pill btn-info"><span class="fa fa-pencil"> Edit</span></a>&nbsp;
                        <a href="#" title="click to Delete" class="btn1 btn btn-primary rounded-pill btn-danger"><span class="fa fa-trash"> Delete</span></a>
                      </div>
                    </td>
                  </tr> -->
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

  <?php include ('include/footer.php');?>

  <?php include ('include/script.php');?>
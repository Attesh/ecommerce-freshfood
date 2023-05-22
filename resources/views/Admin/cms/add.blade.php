
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <main id="main" class="main">
<style>
    .add{
  cursor: pointer;
  }
</style>
    <div class="pagetitle">
      <h1>CMS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Add CMS</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add About Us</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('cms.store')}}" enctype="multipart/form-data">
			  @csrf
        <!-- <h4 class="card-title">HOME</h4>
                <h5 class="card-title">Features Section</h5> -->
                <div class="row">
                <div class="col-md-6">
                  <label for="title1" class="form-label">Section Name</label>
                  <input type="text" class="form-control ckeditor" id="inputName5" name="section_name" required="">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="icon_right1">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_right1">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_right1"></textarea>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="icon_right2">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_right2">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_right2"></textarea>
                </div>
                </div>


                <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="icon_left1">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_left1">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_left1"></textarea>
                </div>
                </div>
                

                <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="icon_left2">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_left2">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_left2"></textarea>
                </div>
                </div>
      </div>
    </div>
                
    
      
      </div>
    </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>  
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script>
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script type="text/javascript">
 $(document).ready(function() {
   $('select[name="category_id"]').on('change', function(){
       var category_id = $(this).val();
       if(category_id) {
           $.ajax({
               url:"{{ url('/catagory/subcategory/ajax')}}/"+category_id,
               type:"GET",
               dataType:"json",
               success:function(data) {

                  var d =$('select[name="subcategory_id"]').empty();
                     $.each(data, function(key,value){
                     $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.title+ '</option>');
});
},
});
} else {
           alert('danger');
}
});
});
</script>
<script>
$(document).ready(function(){
  var i = 0;
  $('.add_services').on('click', function() {
    i++;
    var field = '<br> <div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Icon</label> '+i+': <input class="form-control" type="text" name="cms['+ i +'][icon1]"> </div> <div class="col-md-6"><label for="inputState" class="form-label">Title</label> '+i+':  <input class="form-control" type="text" name="cms['+ i +'][title1]"></div></div>';
    $('.appending_services').append(field);
  });
});

</script>
<script>
$(document).ready(function(){
  var i = 0;
  $('.add').on('click', function() {
    i++;
    var field = '<br> <div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Icon</label> '+i+': <input class="form-control" type="text" name="cms['+ i +'][icon]"> </div> <div class="col-md-6"><label for="inputState" class="form-label">Title</label> '+i+':  <input class="form-control" type="text" name="cms['+ i +'][title]"></div></div><div class="row"><div class="col-md-12"><label for="inputState" class="form-label">Short Description</label> '+i+':<textarea type="text" class="form-control ckeditor" id="inputName5" name="cms['+ i +'][short_description]"></textarea> </div></div>';
    $('.appending_div').append(field);
  });
});

</script>
@include('Admin.include.footer')
@include('Admin.include.script')

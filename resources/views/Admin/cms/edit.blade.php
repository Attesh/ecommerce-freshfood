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
          <li class="breadcrumb-item active">Edit CMS</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Edit About Us</h5> -->

              <!-- Multi Columns Form -->
              <ul class="nav nav-tabs nav-tabs-bordered profilenav">
                                       <li class="nav-item">
                                          <button class="nav-link profilenavlinks active w-100" data-bs-toggle="tab" data-bs-target="#English">English</button>
                                       </li>
                                       <li class="nav-item">
                                          <button class="nav-link profilenavlinks w-100" data-bs-toggle="tab" data-bs-target="#Arabic">Arabic</button>
                                       </li>
                                    </ul>
                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active profile-edit pt-3" id="English">
              <form class="row g-3" method="POST" action="{{route('cms.update')}}" enctype="multipart/form-data">
			  @csrf
        <input type="hidden" name="id" value="{{$cms->id}}"/>
        <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="title1" class="form-label">Section Name</label>
                  <input type="text" class="form-control ckeditor" id="inputName5" name="section_name" value="{{$cms->section_name}}">
                </div>
          </div>
          <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_right1" value="{{$cms->title_right1}}">
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_right1" >{{$cms->short_description_right1}}</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_right2" value="{{$cms->title_right2}}">
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_right2">{{$cms->short_description_right2}}</textarea>
                </div>
                </div>


                <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_left1" value="{{$cms->title_left1}}">
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_left1" >{{$cms->short_description_left1}}</textarea>
                </div>
                </div>
                

                <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_left2" value="{{$cms->title_left2}}">
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_left2">{{$cms->short_description_left2}}</textarea>
                </div>
                </div>
      </div>
                
                                       <div class="tab-pane fade pt-3" id="Arabic">
                                        <div class="row">
                <div class="col-md-6">
                  <label for="title1" class="form-label">Section Name</label>
                  <input type="text" class="form-control ckeditor" id="inputName5" name="section_name_arr" value="{{$cms->section_name_arr}}">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_right1_arr" value="{{$cms->title_right1_arr}}">
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_right1_arr" >{{$cms->short_description_right1_arr}}</textarea>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_right2_arr" value="{{$cms->title_right2_arr}}">
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_right2_arr">{{$cms->short_description_right2_arr}}</textarea>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_left1_arr" value="{{$cms->title_left1_arr}}">
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_left1_arr" >{{$cms->short_description_left1_arr}}</textarea>
                </div>
                </div>
                

                <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title_left2_arr" value="{{$cms->title_left2_arr}}">
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="short_description_left2_arr">{{$cms->short_description_left2_arr}}</textarea>
                </div>
                </div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Icon 1</label>
                  <input type="text" class="form-control" id="inputName5" name="icon_right1" value="{{$cms->icon_right1}}">
                </div>

                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Icon 2</label>
                  <input type="text" class="form-control" id="inputName5" name="icon_right2" value="{{$cms->icon_right2}}">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Icon 3</label>
                  <input type="text" class="form-control" id="inputName5" name="icon_left1" value="{{$cms->icon_left1}}">
                </div>

                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Icon 4</label>
                  <input type="text" class="form-control" id="inputName5" name="icon_left2" value="{{$cms->icon_left2}}">
                </div>
                </div>
    <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Update</button>
                  </div>
                </div> 
                
              </form><!-- End Multi Columns Form -->
</div>
              </div>
                </div>  
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
  var i = document.getElementById("count_id").value;
  $('.add').on('click', function() {
    i++;
    var field = '<br> <div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Icon</label> '+i+': <input class="form-control" type="text" name="home['+ i +'][icon]"> </div> <div class="col-md-6"><label for="inputState" class="form-label">Title</label> '+i+':  <input class="form-control" type="text" name="home['+ i +'][title]"></div></div>';
    $('.appending_services').append(field);
  });
});

</script>
<script>
$(document).ready(function(){
  var i = document.getElementById("count_id").value;
  $('.add').on('click', function() {
    
    
    var field = '<br> <div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Icon</label> '+i+': <input class="form-control" type="text" name="aboutus['+ i +'][icon]"> </div> <div class="col-md-6"><label for="inputState" class="form-label">Title</label> '+i+':  <input class="form-control" type="text" name="aboutus['+ i +'][title]"></div></div><div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Service Description</label> '+i+':<textarea type="text" class="form-control ckeditor" id="inputName5" name="aboutus['+ i +'][service_description]"></textarea> </div></div>';
    $('.appending_div').append(field);
    i++;
  });
});

</script>
@include('Admin.include.footer')
@include('Admin.include.script')

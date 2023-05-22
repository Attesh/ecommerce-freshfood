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
      <h1>Committee List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Board Members</li>
          <li class="breadcrumb-item active">Add Committee List</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add Committee List</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('committee-list.store')}}" enctype="multipart/form-data">
			  @csrf
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Category</label>
                  <select id="inputState" class="form-select" name="category_id">
                    <option value="" selected disabled>Select Category</option>
                    @foreach($category as $record)
                       
                    <option value='{{$record->id}}'>{{$record->title}}</option>
                  
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6">
                <label for="inputState" class="form-label">Subcategory</label>
                <div class="controls">
                    <select name="subcategory_id" class="form-select" >
                        <option value="" selected disabled>Select Subcategory</option>
                    </select>
                    @error('subcategory_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                    </div>
                
                <!-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title">
                </div> -->
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Category Image</label>
                  <input type="file" name="cat_image" id="imgInp"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output"  width="100" ></a>
                </div>
                <div class="col-md-12">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="description"></textarea>
                </div>
              <div class="row" id="ipapprove">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Member Name</label>
                  <input type="text" class="form-control" id="inputName5" name="member[0][member_name]">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Member Title</label>
                  <input type="text" class="form-control" id="inputName5" name="member[0][member_title]">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Member Image</label>
                  <input type="file"  name="member[0][member_image]" id="imgInp" required="" accept="image/*" class="form-control input-default " onchange="">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id=""  width="100" ></a>
                </div>
             
              </div>
                
    <div class="appending_div">
      <div>
      
      </div>
    </div>
    <div class="row">
                  <div class="col-md-12">
                    <a class="btn1 btn btn-primary add">
                      <span class="fa fa-plus ">Add More</span>
                    </a>
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
  $('.add').on('click', function() {
    i++;
    var field = '<br> <div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Member Name</label> '+i+': <input class="form-control" type="text" name="member['+ i +'][member_name]"> </div> <div class="col-md-6"><label for="inputState" class="form-label">Member Title</label> '+i+':  <input class="form-control" type="text" name="member['+ i +'][member_title]"></div></div><div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Member Image</label> '+i+': <input type="file" name="member['+ i +'][member_image]" id="imgInp" required="" accept="image/*"  class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)"> </div></div>';
    $('.appending_div').append(field);
  });
});

</script>
@include('Admin.include.footer')
@include('Admin.include.script')

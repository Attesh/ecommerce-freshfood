@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Board Members</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Board Members</li>
          <li class="breadcrumb-item active">Board Members</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Board Members</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('board-members.update')}}" enctype="multipart/form-data">
			  @csrf
        <input type="hidden" name="id" value="{{$record->id}}">
        <div class="col-md-4">
          <label for="members-category" class="form-label">Members Category</label>
          <select id="inputState" class="form-select" name="category_id">
                    <option value="" selected disabled>Select Category</option>
                    
                       
                    <option value=''></option>
                  
                    
                  </select>
        </div>
            <div class="row" id="ipapprove">
            <input type="hidden" name="count" value="{{count($record)}}" id="count_id">
            @foreach($record as $key => $record)
              <div class="col-md-4">
                  <label for="inputState" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName5" name="board_members[0][name]" value="{{$record->member_name}}">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="board_members[0][title]" value="{{$record->member_name}}">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="board_members[0][member_image]" id="imgInp" required="" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output"  width="100" ></a>
                </div>
              @endforeach
              </div>
                <div class="appending_div">
                  <div>
      
                  </div>
                </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>  
              </div>
                <div class="row">
                  <div class="col-md-12">
                    <a class="btn1 btn btn-primary add">
                      <span class="fa fa-plus ">Add More</span>
                    </a>
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
<script>
$(document).ready(function(){
  var i = 0;
  $('.add').on('click', function() {
    i++;
    var field = '<br> <div class="row"><div class="col-md-4"><label for="inputState" class="form-label">Name</label> '+i+': <input class="form-control" type="text" name="board_members['+ i +'][name]"> </div> <div class="col-md-4"><label for="inputState" class="form-label">Title</label> '+i+':  <input class="form-control" type="text" name="board_members['+ i +'][title]"></div><div class="col-md-4"><label for="inputState" class="form-label">Image</label> '+i+': <input type="file" name="board_members['+ i +'][member_image]" id="imgInp" required="" accept="image/*"  class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)"> </div></div>';
    $('.appending_div').append(field);
  });
});

</script>
@include('Admin.include.footer')
@include('Admin.include.script')
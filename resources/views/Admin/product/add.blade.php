@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Product</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Shop</li>
        <li class="breadcrumb-item active">Add Product</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <!-- <h5 class="card-title">Add Committee Category</h5> -->

            <!-- Multi Columns Form -->
            <ul class="nav nav-tabs nav-tabs-bordered profilenav">
              <li class="nav-item">
                <button class="nav-link profilenavlinks active w-100" data-bs-toggle="tab"
                  data-bs-target="#English">English</button>
              </li>
              <li class="nav-item">
                <button class="nav-link profilenavlinks w-100" data-bs-toggle="tab"
                  data-bs-target="#Arabic">Arabic</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-edit pt-3" id="English">
                <form class="g-3" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-4 mt-3">
                      <label for="inputState" class="form-label">Category</label>
                      <select class="form-select" name="category" id="category" required>
                        <option selected disabled value="">Select Category</option>
                        @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div id="" class="col-md-4 mt-3">
                      <label for="inputState" class="form-label">Vendor</label>
                      <select class="form-select" name="manufacturer">
                        <option value="" selected disabled>Select Vendor</option>
                        @foreach($manufacturer as $manufacturer)
                        <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-4 mt-3">
                      <label for="inputState" class="form-label">Title</label>
                      <input type="text" class="form-control" id="product_title" name="product_title" required>
                    </div>
                    <div class="col-md-12 mt-3">
                      <label for="inputState" class="form-label">Short Description</label>
                      <textarea class="form-control ckeditor" id="short_description" name="short_description" required></textarea>
                    </div>
                    <div class="col-md-12 mt-3">
                      <label for="inputState" class="form-label">Description</label>
                      <textarea class="form-control ckeditor" id="description" name="description" required></textarea>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade pt-3" id="Arabic">
<div class="row">
                <div class="col-md-4 mt-3">
                  <label for="inputState" class="form-label">Category</label>
                  <select class="form-select" name="category" id="category" required>
                    <option value="" selected disabled>Select Category</option>
                    @foreach($category_data as $category)
                    <option value="{{$category->id}}">{{$category->name_ar}}</option>
                    @endforeach
                  </select>
                </div>
                <div id="" class="col-md-4 mt-3">
                  <label for="inputState" class="form-label">Vendor</label>
                  <select class="form-select" name="manufacturer">
                    <option value="" selected disabled>Select Vendor</option>
                    @foreach($manufacturer_data as $manufacturer)
                    <option value="{{$manufacturer->id}}">{{$manufacturer->name_ar}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-4 mt-3">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="product_title_ar" name="product_title_ar" required>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="inputState" class="form-label">Short Description</label>
                    <textarea class="form-control ckeditor" id="short_description_ar" name="short_description_ar" required></textarea>
                  </div>
                  <div class="col-md-12 mt-3">
                    <label for="inputState" class="form-label">Description</label>
                    <textarea class="form-control ckeditor" id="description_ar" name="description_ar" required></textarea>
                  </div>
                
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">SKU</label>
                  <input type="number" class="form-control" id="product_sku" name="product_sku" required>
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">VAT</label>
                  <input type="number" class="form-control" id="product_vat" name="product_vat" required>
                </div>
                </div>
                <div class="row">
                <!-- <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Opening stock</label>
                  <input type="number" class="form-control" id="Opening_stock" name="Opening_stock" required>
                </div> -->
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Price</label>
                  <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="col-md-6 mt-3" style="display:none;" id="sale_id">
                      <label for="inputState" class="form-label">Sale Price</label>
                      <input type="number" class="form-control" id="sale_price"  name="sale_price" >
                      <span style="display:none" id="message1" class="text-danger mt-3" >
</span>
                    </div>
</div>
<div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Quantity</label>
                  <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Alert stock</label>
                  <input type="number" class="form-control" id="Alert_Stock" name="Alert_Stock" required>
                  <span style="display:none" id="message" class="text-danger mt-3" >
</span>
                </div>
                
</div>
<div class="row">
                <div class="col-md-6 mt-3">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="product_image" id="product_image" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)" required>
                  <img class="mt-2" id="output" src="https://fisdemoprojects.com/pearl7/public/image/default/default_slider.jpeg" alt="your image" width="110px" height="110px">
                </div>
                <div class="col-md-6 mt-3" id="pakage_div" style="display:none;" >
                  <label for="inputState" class="form-label">On Sale Due Date</label>
                  <input type="date" class="form-control" id="date" name="sale_due_date" >
                </div>
                </div>
                
                <div class="row">
                  <div class="col-md-3 mt-5">
                    <label for="inputState" class="form-label">Featured</label>
                    <input type="checkbox" class="" value="1" id="product_featured" name="product_featured">
                  </div>
                  <div class="col-md-3 mt-5">
                    <label for="inputState" class="form-label">Status</label>
                    <input type="checkbox" class="" value="1" id="status" name="status">
                </div>
                <div class="col-md-3 mt-5">
                      <label for="inputState" class="form-label">On Sale</label>
                      <input type="checkbox" class="" value="" id="on_sale" name="on_sale">
                    </div>
                <div class="col-md-3 mt-5">
                      <label for="inputState" class="form-label">Deal</label>
                      <input type="checkbox" class="" value="1" id="deal" name="deal">
                  </div>
            
                
                  </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                  </div>
                </div>
                </form><!-- End Multi Columns Form -->
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
  var loadFile = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  $(document).ready(function () {
    $('select[name="category"]').on('change', function () {
      var category_id = $(this).val();
      console.log(category_id);
      if (category_id) {
        $.ajax({
          url: "{{ url('/admin/product/ajax')}}/" + category_id,
          type: "GET",
          dataType: "json",
          success: function (data) {
            console.log(data);
            if (data.length > 0) {
              $("#subcat").show();
              $("#subcat_arr").show();
            }
            var d = $('select[name="subcategory"]').empty();
            $.each(data, function (key, value) {
              $('select[name="subcategory"]').append('<option value="' + value.id + '">' + value.title + '</option>');
            });
          },
        });
      } else {
        alert('danger');
      }
    });
  });


// $('#Alert_Stock').keyup(function(){
//   var stock = $('#Alert_Stock').val();
//   var quantity = $('#quantity').val();
//   console.log(quantity);

//   if(stock > quantity){
//     $('#message').show();
//     document.getElementById('message').style.color = 'red';
//     document.getElementById('message').innerHTML = 'Alert stock must be less than quantity';
//   }
//   else{
//     $('#message').hide();

//   }
// });

$('#on_sale').click(function(){

  if( $('#on_sale').is(':checked') ){
    // alert("Radio Button Is checked!");
    $("#sale_id").show()
    $("#pakage_div").show()
    $("#on_sale").val('1')
}
else{
    // alert("Radio Button Is not checked :( ");
    $("#pakage_div").hide();

}
});


$('#Alert_Stock').keyup(function(){
   var data = $('#Alert_Stock').val();
   var quantity = $('#quantity').val();

   var data1;
   var quantity1;
   data1='0'+data;
   x=[0,1,2,3,4,5,6,7,8,9]
   if(quantity in x){
   
   if(data in x){
    data1='0'+data;
    quantity1='0'+quantity;
   }
   else{
    data1= data
    quantity1=quantity;

   }

}
else {

  if(data in x){
    data1='0'+data;
    quantity1=quantity;
   }
   else{
  data1=data;
  quantity1=quantity;
   }
}


   console.log('data1'+data1);
   console.log('sdfds' + quantity1);
   quantity_len= quantity1.length
   console.log('len' + quantity_len)
   if (data1.length > quantity_len ) {    
    // alert()s
    $('#message').show();
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Alert stock must be less than quantity';
    
}

  //  alert(quantity1);

            else if (data1 >= quantity1) {
                // alert("enter the no in range");
                    $('#message').show();
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Alert stock must be less than quantity';

            }
            else {
                // alert("Thats Great");
                $('#message').hide();

            }
          })

///////////////////////

$('#sale_price').keyup(function(){
   var data = $('#sale_price').val();
   var quantity = $('#price').val();

   var data1;
   var quantity1;
   data1='0'+data;
   x=[0,1,2,3,4,5,6,7,8,9]
   if(quantity in x){
   
   if(data in x){
    data1='0'+data;
    quantity1='0'+quantity;
   }
   else{
    data1= data
    quantity1=quantity;

   }

}
else {

  if(data in x){
    data1='0'+data;
    quantity1=quantity;
   }
   else{
  data1=data;
  quantity1=quantity;
   }
}


   console.log('data1'+data1);
   console.log('sdfds' + quantity1);
   quantity_len= quantity1.length
   console.log('len' + quantity_len)
   if (data1.length > quantity_len ) {    
    // alert()s
    $('#message1').show();
    document.getElementById('message1').style.color = 'red';
    document.getElementById('message1').innerHTML = 'Sale price must be less Price';
    
}
else   if (data1.length < quantity_len ) {    
    // alert()
    // $('#message1').show();
    $('#message1').hide();

    // document.getElementById('message1').style.color = 'red';
    // document.getElementById('message1').innerHTML = 'Sale price must be less Price';
    
}

  //  alert(quantity1);

            else if (data1 >= quantity1) {
                // alert("enter the no in range");
                    $('#message1').show();
    document.getElementById('message1').style.color = 'red';
    document.getElementById('message1').innerHTML = 'Sale price must be less Price';

            }
            else {
                // alert("Thats Great");
                $('#message1').hide();

            }
          })

          

        
</script>  
@include('Admin.include.footer')
@include('Admin.include.script')
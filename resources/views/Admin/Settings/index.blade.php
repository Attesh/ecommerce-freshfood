@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">General Settings</li>
                <li class="breadcrumb-item active">Edit Settings</li>
                <!-- <li class="breadcrumb-item active">Layouts</li> -->
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Edit Committee Category</h5> -->

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
                        <form class="row g-3" method="POST" action="{{route('setting.edit')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$shop->id}}">
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-edit pt-3" id="English">
                               <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Address</label>
                                        <input type="text" name="shop_address" value="{{$shop->shop_address}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Name</label>
                                        <input type="text" name="shop_name" value="{{$shop->shop_name}}"
                                            class="form-control">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Description</label>
                                        <input type="text" name="shop_description" value="{{$shop->shop_description}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Off Day Title</label>
                                        <input type="text" name="off_day_title" value="{{$shop->off_day_title}}"
                                            class="form-control">
                                    </div>
                                    
                                    </div>
                                    
                            </div>
                            <div class="tab-pane fade pt-3" id="Arabic">
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Address</label>
                                        <input type="text" name="shop_address_ar" value="{{$shop->shop_address_ar}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Name</label>
                                        <input type="text" name="shop_name_ar" value="{{$shop->shop_name_ar}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Description</label>
                                        <input type="text" name="shop_description_ar"
                                            value="{{$shop->shop_description_ar}}" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Off Day Title</label>
                                        <input type="text" name="off_day_title_ar" value="{{$shop->off_day_title_ar}}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                        <label>Shop Phone</label>
                                        <input type="text" name="shop_phone" value="{{$shop->shop_phone}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Fax</label>
                                        <input type="text" name="shop_fax" value="{{$shop->shop_fax}}"
                                            class="form-control">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Email</label>
                                        <input type="text" name="shop_email" value="{{$shop->shop_email}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Website</label>
                                        <input type="text" name="shop_website" value="{{$shop->shop_website}}"
                                            class="form-control">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Latitude</label>
                                        <input type="text" name="shop_lat" value="{{$shop->shop_lat}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Longitude</label>
                                        <input type="text" name="shop_lng" value="{{$shop->shop_lng}}"
                                            class="form-control">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Facebook</label>
                                        <input type="text" name="shop_fb" value="{{$shop->shop_fb}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Twitter</label>
                                        <input type="text" name="shop_tw" value="{{$shop->shop_tw}}"
                                            class="form-control">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Linkedin</label>
                                        <input type="text" name="shop_li" value="{{$shop->shop_li}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop GB</label>
                                        <input type="text" name="shop_gb" value="{{$shop->shop_gb}}"
                                            class="form-control">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Instagram</label>
                                        <input type="text" name="shop_in" value="{{$shop->shop_in}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Youtube</label>
                                        <input type="text" name="shop_yt" value="{{$shop->shop_yt}}"
                                            class="form-control">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label>Shop Logo</label>
                                        <input type="text" name="shop_logo" value="{{$shop->shop_logo}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Shop Footer Logo</label>
                                        <input type="text" name="shop_footer_logo" value="{{$shop->shop_footer_logo}}"
                                            class="form-control">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Off Day Logo</label>
                                        <input type="text" name="off_day_logo" value="{{$shop->off_day_logo}}"
                                            class="form-control">
                                    </div>
                                <div class=" mt-3">
                                    <div class="col-md-12" style="text-align: right;">
                                        <button type="submit" class="btn btn-primary submit">Update</button>
                                        <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                                    </div>
                                </div>
                                </form><!-- End Multi Columns Form -->
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<script>
    var loadFile = function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
@include('Admin.include.footer')
@include('Admin.include.script')
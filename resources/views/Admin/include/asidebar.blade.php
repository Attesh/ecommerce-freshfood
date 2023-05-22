<!-- ======= Sidebar ======= -->

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/admin/dashboard')}}"><i class="bi bi-house-door-fill"></i><span>Dashboard</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a href="{{url('admin/pages')}}" class="nav-link collapsed {{ (request()->segment(2) == 'pages') ? 'active' : '' }}"><i class="bi bi-house-door-fill"></i><span>Pages</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/cms')}}" class="nav-link collapsed {{ (request()->segment(2) == 'cms') ? 'active' : '' }}"><i class="bi bi-house-door-fill"></i><span>CMS</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'category' || request()->segment(2) == 'subcategory' || request()->segment(2) == 'product' || request()->segment(2) == 'vendor' || request()->segment(2) == 'Cart')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#shop-nav" aria-expanded="false" aria-controls="collapse">
                <i class="bi bi-person"></i><span>Shop</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="shop-nav" class="nav-content  {{ (request()->segment(2) == 'category' ||  request()->segment(2) == 'subcategory' || request()->segment(2) == 'product' || request()->segment(2) == 'vendor' || request()->segment(2) == 'Cart')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('admin/category')}}" class="{{ (request()->segment(2) == 'category') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Category</span>
                    </a>
                </li> 
                <li>
                    <a href="{{url('admin/subcategory')}}" class="{{ (request()->segment(2) == 'subcategory') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Sub Category</span>
                    </a>
                </li>   
                 <li class="nav-item">
                    <a href="{{url('admin/product')}}" class="{{ (request()->segment(2) == 'product') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Product</span>
                    </a>
                </li>
              
                <li class="nav-item">
                    <a href="{{url('admin/vendor')}}" class="{{ (request()->segment(2) == 'vendor') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Vendor</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/Cart')}}" class="{{ (request()->segment(2) == 'Cart') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Add to Cart</span>
                    </a>
                </li>
                
                
            </ul>
        </li>
        <!-- orders -->
        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(3) == 'pending' || request()->segment(3) == 'dispatched'  || request()->segment(3) == 'delivered' || request()->segment(3) == 'completed' || request()->segment(3) == 'rejected')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#order-nav">
                <i class="bi bi-person"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="order-nav" class="nav-content  {{ (request()->segment(3) == 'pending' || request()->segment(3) == 'dispatched' || request()->segment(3) == 'delivered' || request()->segment(3) == 'completed' || request()->segment(3) == 'rejected')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('/admin/order/pending')}}" class="{{ (request()->segment(3) == 'pending') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Pending</span>
                    </a>
                </li> 
                <li>
                    <a href="{{url('/admin/order/dispatched')}}" class="{{ (request()->segment(3) == 'dispatched') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Dispatched</span>
                    </a>
                </li>   
                 <li class="nav-item">
                    <a href="{{url('/admin/order/delivered')}}" class="{{ (request()->segment(3) == 'delivered') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Delivered</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/order/completed')}}" class="{{ (request()->segment(3) == 'completed') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Completed</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/order/rejected')}}" class="{{ (request()->segment(3) == 'rejected') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Incomplete</span>
                    </a>
                </li>
                
                
            </ul>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'noticeboard' || request()->segment(2) == 'document' || request()->segment(2) == 'registered-members')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#membersarea-nav" aria-expanded="false" aria-controls="collapse">
                <i class="bi bi-person"></i><span>Members</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="membersarea-nav" class="nav-content  {{ (request()->segment(2) == 'noticeboard' || request()->segment(2) == 'document' || request()->segment(2) == 'registered-members')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('admin/registered-members')}}" class="{{ (request()->segment(2) == 'registered-members') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Registered Members</span>
                    </a>
                </li>   
                <li class="nav-item">
                    <a href="{{url('admin/noticeboard')}}" class="{{ (request()->segment(2) == 'noticeboard') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Notice Board</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{url('admin/document')}}" class="{{ (request()->segment(2) == 'document') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Downloads</span>
                    </a>
                </li>
                
            </ul>
        </li> -->
        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'cms' || request()->segment(2) == 'pages' || request()->segment(2) == 'How_its_work' || request()->segment(2) == 'deals' || request()->segment(2) == 'slider' || request()->segment(2) == 'testimonials' || request()->segment(2) == 'blogs')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#setting-nav" aria-expanded="false" aria-controls="collapse">
                <i class="bi bi-collection-fill"></i><span>Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="setting-nav" class="nav-content  {{ (request()->segment(2) == 'cms' || request()->segment(2) == 'pages' || request()->segment(2) == 'How_its_work' || request()->segment(2) == 'delivery_area' || request()->segment(2) == 'slider' || request()->segment(2) == 'testimonials' || request()->segment(2) == 'blogs')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
        <li class="nav-item">
            <a href="{{url('admin/cms')}}" class="nav-link collapsed {{ (request()->segment(2) == 'cms') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>CMS</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/pages')}}" class="nav-link collapsed {{ (request()->segment(2) == 'pages') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>Pages</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/admin/How_its_work')}}" class="nav-link collapsed {{ (request()->segment(2) == 'How_its_work') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>How its work</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a href="{{url('/admin/deals')}}" class="nav-link collapsed {{ (request()->segment(2) == 'deals') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>Deals</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a href="{{url('admin/slider')}}" class="nav-link collapsed {{ (request()->segment(2) == 'slider') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>Home Slider</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/admin/testimonials')}}" class="nav-link collapsed {{ (request()->segment(2) == 'testimonials') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>Testimonials</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/blogs')}}" class="nav-link collapsed {{ (request()->segment(2) == 'blogs') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>Blogs</span>
            </a>
        </li>
            </ul>
        </li>



        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'zipcode')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#delivery-nav" aria-expanded="false" aria-controls="collapse">
                <i class="bi bi-collection-fill"></i><span>Delivery Area</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="delivery-nav" class="nav-content  {{ (request()->segment(2) == 'zipcode')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li class="nav-item">
            <a href="{{url('/admin/city')}}" class="nav-link collapsed {{ (request()->segment(2) == 'city') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>City</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/admin/sector')}}" class="nav-link collapsed {{ (request()->segment(2) == 'sector') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>Sector</span>
            </a>
        </li>
            <li class="nav-item">
            <a href="{{url('/admin/zipcode')}}" class="nav-link collapsed {{ (request()->segment(2) == 'zipcode') ? 'active' : '' }}"><i class="bi bi-circle"></i><span>Zipcode</span>
            </a>
        </li>
            </ul>
        </li>
        <!-- End Dashboard Nav -->
        
        
        <!-- End subCategories Page Nav -->

        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'submitted-contact' || request()->segment(2) == 'subscribe')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#submissions-nav" href="#">
                <i class="bi bi-inboxes"></i><span>Submissions</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="submissions-nav" class="nav-content  {{ (request()->segment(2) == 'submitted-contact' || request()->segment(2) == 'subscribe')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('admin/submitted-contact')}}" class="{{ (request()->segment(2) == 'submitted-contact') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/subscribe')}}" class="{{ (request()->segment(2) == 'subscribe') ? 'active' : '' }}"> 
                    <i class="bi bi-circle"></i><span>Subscribe</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'faq' || request()->segment(2) == 'terms-conditions')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#polocies-nav" href="#">
                <i class="bi bi-inboxes"></i><span>Policies</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="polocies-nav" class="nav-content  {{ (request()->segment(2) == 'faq' || request()->segment(2) == 'terms-conditions')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('admin/faq')}}" class="{{ (request()->segment(2) == 'faq') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>FAQ</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/terms-conditions')}}" class="{{ (request()->segment(2) == 'terms-conditions') ? 'active' : '' }}"> 
                    <i class="bi bi-circle"></i><span>Terms and Conditions</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/generalsettings')}}" class="nav-link collapsed {{ (request()->segment(2) == 'generalsettings') ? 'active' : '' }}"><i class="bi bi-gear-fill"></i><span>General Setting</span>
            </a>
        </li>
   
        
        <li class="nav-item" hidden>
            <a class="nav-link {{ (request()->segment(2) == 'contact' || request()->segment(2) == 'blog') || (request()->segment(2) == 'slider')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#setting-nav" href="#" > 
                <i class="bi bi-gear-fill"></i><span>CMS</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <!-- href="{{route('contact.edit')}}" -->
            <ul id="setting-nav" class="nav-content  {{ (request()->segment(2) == 'contact' || request()->segment(2) == 'blogs') || (request()->segment(2) == 'slider')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('admin/contact')}}" class="{{ (request()->segment(2) == 'contact') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/blogs')}}" class="{{ (request()->segment(2) == 'blogs') ? 'active' : '' }}"> 
                    <i class="bi bi-circle"></i><span>Blog</span>
                    </a>
                </li>
            
            </ul>
        </li>
        
        <!-- End subCategories Page Nav -->
        

    </ul>

    

</aside><!-- End Sidebar-->

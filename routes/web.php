<?php

use App\Models\HowItWorks;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CMSController;
use App\Http\Controllers\Backend\BlogsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubmittedContactController;
use App\Http\Controllers\Backend\TermsController;
use App\Http\Controllers\Backend\FAQController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubscriberController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\HowItWorksController;
use App\Http\Controllers\Backend\OrdersController;
use App\Http\Controllers\Backend\GeneralSettingsController;
use App\Http\Controllers\Backend\ManufacturerController;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\ImportController;
use App\Http\Controllers\Backend\TestimonialsController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\StripeController;
use App\Http\Controllers\frontend\AddDetailsController;
use App\Http\Controllers\frontend\CashondeliveryController;
use App\Http\Controllers\membership\MembershipController;
use App\Http\Controllers\membership\NewPasswordController;
use App\Http\Controllers\Backend\DeliveryAreaController;
use App\Http\Controllers\Backend\AddtocartController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\SectorController;
use App\Http\Controllers\Backend\DealController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('frontend.index');
// });

//language routes

    Route::get('change/language/{lang}', function (Request $request, $lang) {
        $request->session()->put('langu', $lang);
        return  redirect()->back();
    });



//end of languages

// Admin routes start

Route::middleware(['auth:admin'])->group(function () {

});
//Route::get('/admin', [AdminController::class,'adminlogin'])->name('admin.login');
Route::get('/admin/login', [AdminController::class,'adminlogin'])->name('admin.login');





Route::post('/admin/signin', [AdminController::class,'SingIn'])->name('admin.siginin');



Route::group(['middleware' => ['admin']],function () {
  Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
Route::get('/admin/users-profile', [AdminController::class,'admin_usersprofile']);
Route::post('admin/users-profile/profile',[AdminController::class,'update'])->name('admin.update');
Route::get('admin/users-profile/delete-profilepic/{id}',[AdminController::class,'delete_admin_img'])->name('admin.delete_img');
Route::post('admin/users-profile/password',[AdminController::class,'USerChangePassword'])->name('admin.change.password');
Route::get('/admin/lgout',[AdminController::class,'Logout'])->name('admin.logout');


Route::get('/admin/category', [CategoryController::class,'index']); 
Route::get('/admin/category/create', [CategoryController::class,'create'])->name('category.add');
Route::post('/admin/category/store', [CategoryController::class,'store'])->name('category.store');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/admin/category/update', [CategoryController::class,'update'])->name('category.update');
Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');


Route::get('/admin/subcategory', [SubCategoryController::class,'index']); 
Route::get('/admin/subcategory/create', [SubCategoryController::class,'create'])->name('product-subcategory.add');
Route::post('/admin/subcategory/store', [SubCategoryController::class,'store'])->name('sub.category.store');
Route::get('/admin/subcategory/edit/{id}',[SubCategoryController::class,'edit'])->name('sub.category.edit');
Route::post('/admin/subcategory/update', [SubCategoryController::class,'update'])->name('sub.category.update');
Route::get('/admin/subcategory/delete/{id}',[SubCategoryController::class,'delete'])->name('sub.category.delete');

/*Product Routes*/
Route::get('/admin/product', [ProductController::class,'index']); 
Route::get('/admin/product/create', [ProductController::class,'create'])->name('product.add');
Route::post('/admin/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('/admin/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/admin/product/update', [ProductController::class,'update'])->name('product.update');
Route::get('/admin/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('/admin/product/ajax/{category_id}',[ProductController::class,'AjaxgeteCategory']);
Route::post('/admin/import', [ProductController:: class,'importData']);
Route::get('/admin/export', [ProductController:: class,'exportData']);
/*Services Routes*/
Route::get('/admin/services',[ServicesController::class,'index']);
Route::get('/admin/services/create',[ServicesController::class,'create'])->name('services.add');
Route::get('/admin/services/delete/{id}',[ServicesController::class,'delete'])->name('services.delete');
Route::post('/admin/services/store',[ServicesController::class,'store'])->name('services.store');
Route::get('/admin/services/edit/{id}',[ServicesController::class,'edit'])->name('services.edit');
Route::post('/admin/services/update', [ServicesController::class,'update'])->name('services.update');

/*term and conditions Routes*/
Route::get('/admin/terms-conditions', [TermsController::class, 'index']);
Route::get('/admin/terms-conditions/form', [TermsController::class, 'create'])->name('terms-conditions.add');
Route::post('/admin/terms-conditions/insert/data/form', [TermsController::class, 'store'])->name('terms-conditions.form');
Route::get('/admin/terms-conditions/view', [TermsController::class, 'view']);
Route::get('/admin/terms-conditions/edit/{id}', [TermsController::class, 'edit'])->name('terms-conditions.edit');

Route::post('/admin/terms-conditions/update', [TermsController::class, 'update'])->name('terms-conditions.update');
Route::get('/admin/terms-conditions/status/{status}/{id}', [TermsController::class, 'Status']);
Route::get('/admin/terms-conditions/delete/{id}', [TermsController::class, 'destroy'])->name('terms-conditions.delete');
 
Route::get('/admin/subscribe', [SubscriberController::class,'subscribe'])->name('admin.subscribe');
Route::get('admin/status/subscribe/data/status/{status}/{id}', [SubscriberController::class, 'status_subscribe_data'])->name('status.subscribe');
/*Faq Routes*/
Route::get('/admin/faq', [FAQController::class,'index'])->name('admin.faq.index');
Route::get('admin/status/faq/data/status/{status}/{id}', [FAQController::class, 'status_faq_data'])->name('status.faq');
Route::get('/admin/faq', [FAQController::class, 'index']);
Route::get('/admin/faq/form', [FAQController::class, 'create'])->name('Admin.faq');
Route::post('/admin/faq/insert/data/form', [FAQController::class, 'store'])->name('faq.form');
Route::get('/admin/faqs/delete', [FAQController::class, 'delete_detail_ajax']);
Route::get('/admin/faqs/edit/{id}', [FAQController::class, 'edit']);
Route::post('/admin/faq/update/{id}', [FAQController::class, 'update']);
Route::get('/admin/faq/status/{status}/{id}', [FAQController::class, 'Status']);
Route::get('/admin/faq/delete/{id}', [FAQController::class, 'destroy']);

/*Slider Routes*/
Route::get('/admin/slider',[SliderController::class,'index']);
Route::get('/admin/slider/create',[SliderController::class,'create'])->name('slider.add');
Route::post('/admin/slider/store', [SliderController::class,'store'])->name('slider.store');
Route::get('/admin/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
Route::post('/admin/slider/update', [SliderController::class,'update'])->name('slider.update');
Route::get('/admin/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');

/*Gallery Routes*/
Route::get('/admin/gallery',[GalleryController::class,'index']);
Route::get('/admin/gallery/create',[GalleryController::class,'create'])->name('gallery.add');
Route::post('/admin/gallery/store', [GalleryController::class,'store'])->name('gallery.store');
Route::get('/admin/gallery/edit/{id}',[GalleryController::class,'edit'])->name('gallery.edit');
Route::post('/admin/gallery/update', [GalleryController::class,'update'])->name('gallery.update');
Route::get('/admin/gallery/delete/{id}',[GalleryController::class,'delete'])->name('gallery.delete');

/*News Routes*/
Route::get('/admin/news', [NewsController::class,'index']);
Route::get('/admin/news/create', [NewsController::class,'create'])->name('news.add');
Route::post('/admin/news/store', [NewsController::class,'store'])->name('news.store');
Route::get('/admin/news/edit/{id}',[NewsController::class,'edit'])->name('news.edit');
Route::post('/admin/news/update', [NewsController::class,'update'])->name('news.update');
Route::get('/admin/news/delete/{id}',[NewsController::class,'delete'])->name('news.delete');

/*Events Routes*/
Route::get('/admin/events', [EventsController::class,'index']);
Route::get('/admin/events/create', [EventsController::class,'create'])->name('events.add');
Route::post('/admin/events/store', [EventsController::class,'store'])->name('events.store');
Route::get('/admin/events/edit/{id}',[EventsController::class,'edit'])->name('events.edit');
Route::post('/admin/events/update', [EventsController::class,'update'])->name('events.update');
Route::get('/admin/events/delete/{id}',[EventsController::class,'delete'])->name('events.delete');

/*Committee Checkbox Routes*/
Route::get('/admin/committee-checkbox', [CommitteeCheckboxController::class,'index']);
Route::get('/admin/committee-checkbox/create', [CommitteeCheckboxController::class,'create'])->name('checkbox.add');
Route::post('/admin/committee-checkbox/store', [CommitteeCheckboxController::class,'store'])->name('checkbox.store');
Route::get('/admin/committee-checkbox/edit/{id}',[CommitteeCheckboxController::class,'edit'])->name('checkbox.edit');
Route::post('/admin/committee-checkbox/update', [CommitteeCheckboxController::class,'update'])->name('checkbox.update');
Route::get('/admin/committee-checkbox/delete/{id}',[CommitteeCheckboxController::class,'delete'])->name('checkbox.delete');

/*Members Category Routes*/
Route::get('/admin/members-category', [MembersCategoryController::class,'index']);
Route::get('/admin/members-category/create', [MembersCategoryController::class,'create'])->name('members.add');
Route::post('/admin/members-category/store', [MembersCategoryController::class,'store'])->name('members.store');
Route::get('/admin/members-category/edit/{id}',[MembersCategoryController::class,'edit'])->name('members.edit');
Route::post('/admin/members-category/update', [MembersCategoryController::class,'update'])->name('members.update');
Route::get('/admin/members-category/delete/{id}',[MembersCategoryController::class,'delete'])->name('members.delete');

/*Submitted Contact Routes*/
Route::get('/admin/submitted-contact',[SubmittedContactController::class,'index']);
Route::get('/admin/submitted-contact/details/{id}',[SubmittedContactController::class,'view'])->name('submitted.view');
Route::get('/admin/submitted-contact/delete/{id}',[SubmittedContactController::class,'delete'])->name('submitted.delete');


/*Committee Category Routes*/
Route::get('/admin/committee-category', [CommitteeCategoryController::class,'index']);
Route::get('/admin/committee-category/create', [CommitteeCategoryController::class,'create'])->name('committee-category.add');
Route::post('/admin/committee-category/store', [CommitteeCategoryController::class,'store'])->name('committee-category.store');
Route::get('/admin/committee-category/edit/{id}',[CommitteeCategoryController::class,'edit'])->name('committee-category.edit');
Route::post('/admin/committee-category/update', [CommitteeCategoryController::class,'update'])->name('committee-category.update');
Route::get('/admin/committee-category/delete/{id}',[CommitteeCategoryController::class,'delete'])->name('committee-category.delete');

/*Committee Sub-Category Routes*/
Route::get('/admin/committee-subcategory', [SubCategoryController::class,'index']);
Route::get('/admin/committee-subcategory/create', [SubCategoryController::class,'create'])->name('committee-subcategory.add');
Route::post('/admin/committee-subcategory/store', [SubCategoryController::class,'store'])->name('committee-subcategory.store');
Route::get('/admin/committee-subcategory/edit/{id}',[SubCategoryController::class,'edit'])->name('committee-subcategory.edit');
Route::post('/admin/committee-subcategory/update', [SubCategoryController::class,'update'])->name('committee-subcategory.update');
Route::get('/admin/committee-subcategory/delete/{id}',[SubCategoryController::class,'delete'])->name('committee-subcategory.delete');

/*Committee List Routes*/
Route::get('/admin/committee-list', [CommitteeListController::class,'index']);
Route::get('/admin/committee-list/create', [CommitteeListController::class,'create'])->name('committee-list.add');
Route::post('/admin/committee-list/store', [CommitteeListController::class,'store'])->name('committee-list.store');
Route::get('/admin/committee-list/edit/{id}',[CommitteeListController::class,'edit'])->name('committee-list.edit');
Route::post('/admin/committee-list/update', [CommitteeListController::class,'update'])->name('committee-list.update');
Route::get('/admin/committee-list/delete/{id}',[CommitteeListController::class,'delete'])->name('committee-list.delete');
Route::get('/catagory/subcategory/ajax/{category_id}',[CommitteeListController::class,'AjaxgeteCategory']);


/*MarketPlace Department Category Routes*/
Route::get('/admin/department-category', [DepartmentCategoryController::class,'index']);
Route::get('/admin/department-category/create', [DepartmentCategoryController::class,'create'])->name('department-category.add');
Route::post('/admin/department-category/store', [DepartmentCategoryController::class,'store'])->name('department-category.store');
Route::get('/admin/department-category/edit/{id}',[DepartmentCategoryController::class,'edit'])->name('department-category.edit');
Route::post('/admin/department-category/update', [DepartmentCategoryController::class,'update'])->name('department-category.update');
Route::get('/admin/department-category/delete/{id}',[DepartmentCategoryController::class,'delete'])->name('department-category.delete');

/*MarketPlace Department List Routes*/
Route::get('/admin/department-list', [DepartmentListController::class,'index']);
Route::get('/admin/department-list/create', [DepartmentListController::class,'create'])->name('department-list.add');
Route::post('/admin/department-list/store', [DepartmentListController::class,'store'])->name('department-list.store');
Route::get('/admin/department-list/edit/{id}',[DepartmentListController::class,'edit'])->name('department-list.edit');
Route::post('/admin/department-list/update', [DepartmentListController::class,'update'])->name('department-list.update');
Route::get('/admin/department-list/delete/{id}',[DepartmentListController::class,'delete'])->name('department-list.delete');
/*Noticeboard Routes*/
Route::get('/admin/noticeboard', [NoticeBoardController::class,'index']);
Route::get('/admin/noticeboard/details/{id}',[NoticeBoardController::class,'view'])->name('noticeboard.view');
Route::get('/admin/noticeboard/create', [NoticeBoardController::class,'create'])->name('noticeboard.add');
Route::post('/admin/noticeboard/store', [NoticeBoardController::class,'store'])->name('noticeboard.store');
Route::get('/admin/noticeboard/edit/{id}',[NoticeBoardController::class,'edit'])->name('noticeboard.edit');
Route::post('/admin/noticeboard/update', [NoticeBoardController::class,'update'])->name('noticeboard.update');
Route::get('/admin/noticeboard/delete/{id}',[NoticeBoardController::class,'delete'])->name('noticeboard.delete');

/*Testimonials Routes*/
Route::get('/admin/testimonials', [TestimonialsController::class,'index']);
Route::get('/admin/testimonials/create', [TestimonialsController::class,'create'])->name('testimonials.add');
Route::post('/admin/testimonials/store', [TestimonialsController::class,'store'])->name('testimonials.store');
Route::get('/admin/testimonials/edit/{id}',[TestimonialsController::class,'edit'])->name('testimonials.edit');
Route::post('/admin/testimonials/update', [TestimonialsController::class,'update'])->name('testimonials.update');
Route::get('/admin/testimonials/delete/{id}',[TestimonialsController::class,'delete'])->name('testimonials.delete');

/*Document Upload Routes*/
Route::get('/admin/document', [DocumentController::class,'index']);
Route::get('/admin/document/create', [DocumentController::class,'create'])->name('document.add');
Route::post('/admin/document/store', [DocumentController::class,'store'])->name('document.store');
Route::get('/admin/document/edit/{id}',[DocumentController::class,'edit'])->name('document.edit');
Route::post('/admin/document/update', [DocumentController::class,'update'])->name('document.update');
Route::get('/admin/document/delete/{id}',[DocumentController::class,'delete'])->name('document.delete');

/*Members Profile Routes*/
Route::get('/admin/registered-members', [RegisteredMembersController::class,'index']);
Route::get('/admin/registered-members/create', [RegisteredMembersController::class,'create'])->name('registered-members.add');
Route::post('/admin/registered-members/store', [RegisteredMembersController::class,'store'])->name('registered-members.store');
Route::get('/admin/registered-members/{id}',[RegisteredMembersController::class,'view'])->name('registered-members.view');
Route::get('/admin/registered-members/edit/{id}',[RegisteredMembersController::class,'edit'])->name('registered-members.edit');
Route::post('/admin/registered-members/update', [RegisteredMembersController::class,'update'])->name('registered-members.update');
Route::get('/admin/registered-members/delete/{id}',[RegisteredMembersController::class,'delete'])->name('registered-members.delete');
/*About Us Routes*/
Route::get('/admin/cms', [CMSController::class,'index']);
Route::get('/admin/cms/create', [CMSController::class,'create'])->name('cms.add');
Route::post('/admin/cms/store', [CMSController::class,'store'])->name('cms.store');
Route::get('/admin/cms/edit/{id}',[CMSController::class,'edit'])->name('cms.edit');
Route::post('/admin/cms/update', [CMSController::class,'update'])->name('cms.update');
Route::get('/admin/cms/delete/{id}',[CMSController::class,'delete'])->name('cms.delete');

/*Contact Details Routes*/
Route::get('/admin/contact', [ContactController::class,'index']);
Route::get('/admin/contact/create', [ContactController::class,'create'])->name('contact.add');
Route::post('/admin/contact/store', [ContactController::class,'store'])->name('contact.store');
Route::get('/admin/contact/edit',[ContactController::class,'edit'])->name('contact.edit');
Route::post('/admin/contact/update', [ContactController::class,'update'])->name('contact.update');
Route::get('/admin/contact/delete/{id}',[ContactController::class,'delete'])->name('contact.delete');

/*Blogs Routes */
Route::get('admin/blogs',[BlogsController::class,'index']);
Route::get('/admin/blogs/create', [BlogsController::class,'create'])->name('blogs.add');
Route::post('/admin/blogs/store', [BlogsController::class,'store'])->name('blogs.store');
Route::get('/admin/blogs/edit/{id}',[BlogsController::class,'edit'])->name('blogs.edit');
Route::post('/admin/blogs/update', [BlogsController::class,'update'])->name('blogs.update');
Route::get('/admin/blogs/delete/{id}',[BlogsController::class,'delete'])->name('blogs.delete');


/*Board of Trusties */
Route::get('admin/trusty',[TrustiesController::class,'index']);
Route::get('/admin/trusty/create', [TrustiesController::class,'create'])->name('trusty.add');
Route::post('/admin/trusty/store', [TrustiesController::class,'store'])->name('trusty.store');
Route::get('/admin/trusty/edit/{id}',[TrustiesController::class,'edit'])->name('trusty.edit');
Route::post('/admin/trusty/update', [TrustiesController::class,'update'])->name('trusty.update');
Route::get('/admin/trusty/delete/{id}',[TrustiesController::class,'delete'])->name('trusty.delete');

/*Past Officers */
Route::get('admin/past-officers',[PastOfficersController::class,'index']);
Route::get('/admin/past-officers/create', [PastOfficersController::class,'create'])->name('past-officers.add');
Route::post('/admin/past-officers/store', [PastOfficersController::class,'store'])->name('past-officers.store');
Route::get('/admin/past-officers/edit/{id}',[PastOfficersController::class,'edit'])->name('past-officers.edit');
Route::post('/admin/past-officers/update', [PastOfficersController::class,'update'])->name('past-officers.update');
Route::get('/admin/past-officers/delete/{id}',[PastOfficersController::class,'delete'])->name('past-officers.delete');


//Admin How its works
Route::get('/admin/How_its_work',[HowItWorksController::class,'index'])->name('how_work');
Route::get('/admin/How_its_work/create', [HowItWorksController::class,'create'])->name('How_its_work.add');
Route::post('/admin/How_its_work/store', [HowItWorksController::class,'store'])->name('How_its_work.store');
Route::get('/admin/How_its_work/edit/{id}',[HowItWorksController::class,'edit'])->name('How_its_work.edit');
Route::post('/admin/How_its_work/update', [HowItWorksController::class,'update'])->name('How_its_work.update');
Route::get('/admin/How_its_work/delete/{id}',[HowItWorksController::class,'delete'])->name('How_its_work.delete');


/* Delivery Area */
Route::get('/admin/zipcode',[DeliveryAreaController::class,'index'])->name('zipcode');
Route::get('/admin/zipcode/create', [DeliveryAreaController::class,'create'])->name('zipcode.add');
Route::post('/admin/zipcode/store', [DeliveryAreaController::class,'store'])->name('zipcode.store');
Route::get('/admin/zipcode/edit/{id}',[DeliveryAreaController::class,'edit'])->name('zipcode.edit');
Route::post('/admin/zipcode/update', [DeliveryAreaController::class,'update'])->name('zipcode.update');
Route::get('/admin/zipcode/delete/{id}',[DeliveryAreaController::class,'delete'])->name('zipcode.delete');


/* Deals */
Route::get('/admin/deals',[DealController::class,'index'])->name('deal');
Route::get('/admin/deals/create', [DealController::class,'create'])->name('deal.add');
Route::post('/admin/deals/store', [DealController::class,'store'])->name('deal.store');
Route::get('/admin/deals/edit/{id}',[DealController::class,'edit'])->name('deal.edit');
Route::post('/admin/deals/update', [DealController::class,'update'])->name('deal.update');
Route::get('/admin/deals/delete/{id}',[DealController::class,'delete'])->name('deal.delete');

/* City */
Route::get('/admin/city',[CityController::class,'index'])->name('city');
Route::get('/admin/city/create', [CityController::class,'create'])->name('city.add');
Route::post('/admin/city/store', [CityController::class,'store'])->name('city.store');
Route::get('/admin/city/edit/{id}',[CityController::class,'edit'])->name('city.edit');
Route::post('/admin/city/update', [CityController::class,'update'])->name('city.update');
Route::get('/admin/city/delete/{id}',[CityController::class,'delete'])->name('city.delete');


/* Sector */
Route::get('/admin/sector',[SectorController::class,'index'])->name('sector');
Route::get('/admin/sector/create', [SectorController::class,'create'])->name('sector.add');
Route::post('/admin/sector/store', [SectorController::class,'store'])->name('sector.store');
Route::get('/admin/sector/edit/{id}',[SectorController::class,'edit'])->name('sector.edit');
Route::post('/admin/sector/update', [SectorController::class,'update'])->name('sector.update');
Route::get('/admin/sector/delete/{id}',[SectorController::class,'delete'])->name('sector.delete');

//Admin Orders
// Route::get('/admin/order',[OrdersController::class,'index'])->name('orders');
// Route::get('/admin/order/view/{id}', [OrdersController::class,'view'])->name('order.view');
Route::get('/edit_order_process/accpet/{id}', [OrdersController::class,'accept'])->name('order.accept');
//Admin Order Pending
Route::get('/admin/order/pending',[OrdersController::class,'index'])->name('orders.pending');
//Admin Order Dispatched
Route::get('/admin/order/dispatched',[OrdersController::class,'dispatched_index'])->name('orders.dispatched');
//Admin Order Dispatched
Route::get('/admin/order/delivered',[OrdersController::class,'delivered_index'])->name('orders.delivered');
//Admin Order canceled
Route::get('/admin/order/completed',[OrdersController::class,'Canceled_index'])->name('orders.canceled');
//Admin Order rejected
Route::get('/admin/order/rejected',[OrdersController::class,'rejected_index'])->name('orders.rejected');
//
Route::get('/admin/pending/view/{id}', [OrdersController::class,'view'])->name('pending.view');
Route::get('/edit_order_process/accpet/{id}', [OrdersController::class,'accept'])->name('pending.accept');

//Admin General settings
Route::get('admin/generalsettings', [GeneralSettingsController::class, 'index']);
Route::Post('/admin/generalsettings', [GeneralSettingsController::class, 'edit'])->name('setting.edit');

//Admin manufacturer
Route::get('admin/vendor', [ManufacturerController::class, 'index']);
Route::get('/admin/vendor/create',[ManufacturerController::class,'create'])->name('manufacturer.add');
Route::post('/admin/vendor/store', [ManufacturerController::class,'store'])->name('manufacturer.store');
Route::get('/admin/vendor/edit/{id}',[ManufacturerController::class,'edit'])->name('manufacturer.edit');
Route::post('/admin/vendor/update', [ManufacturerController::class,'update'])->name('manufacturer.update');
Route::get('/admin/vendor/delete/{id}',[ManufacturerController::class,'delete'])->name('manufacturer.delete');


//Admin Pages
Route::get('admin/pages', [PagesController::class, 'index']);
Route::get('/admin/pages/edit/{id}',[PagesController::class,'edit'])->name('pages.edit');
Route::post('/admin/pages/update', [PagesController::class,'update'])->name('pages.update');

Route::get('/admin/pages/delete/{id}',[PagesController::class,'delete'])->name('pages.delete');
//Add to Cart

Route::get('admin/Cart', [AddtocartController::class, 'index']);




});



// Admin routes ends
//stripe route
Route::Post('stripe',[StripeController::class,'store'])->name('stripe.post');
Route::Post('/cashondelivery',[CashondeliveryController::class,'store'])->name('cashondelivery.post');
Route::get('conformorder',[AddDetailsController::class,'store']);

//Add to cart:
  
// Route::get('/', [CartController::class, 'index']); 
Route::get('Cart',[HomeController::class,'Cart'])->name('cart');

// Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::Post('add-to-cart', [CartController::class, 'addToCart_a'])->name('add.to.cart1');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');

Route::get('/',[HomeController::class,'index'])->name('index');
Route::post('subscribe', [HomeController::class, 'usersubscribes'])->name('subscribe');
Route::get('about',[HomeController::class,'About'])->name('about');
Route::get('Blog',[HomeController::class,'Blog'])->name('blog');
Route::get('Checkout',[HomeController::class,'Checkout'])->name('checkout');

Route::get('Contact_Us',[HomeController::class,'Contact_Us'])->name('contact_us');
Route::Post('Contact_Us',[HomeController::class,'Contact_Us_index'])->name('contact_us');
Route::get('Delivery_Area',[HomeController::class,'Delivery_Area'])->name('deliveryarea');
Route::post('Delivery_Area/',[HomeController::class,'Delivery_Area_search'])->name('deliveryarea.search');
Route::get('Blog_Detail/{slug}',[HomeController::class,'Blog_Detail'])->name('blog_detail');
Route::post('Blog_Detail/comments',[HomeController::class,'Blog_Comment'])->name('blog_comments');
Route::post('Blog_Detail/comments/reply',[HomeController::class,'Blog_Comment'])->name('blog_comments_reply');
// Route::post('Blog_Detail/comments/reply',[HomeController::class,'Blog_Comment_reply'])->name('blog_comments_reply');
// Route::get('Ourteam',[HomeController::class,'Ourteam'])->name('our.team');
Route::get('Faq',[HomeController::class,'Faq'])->name('faq');
Route::get('How_its_work',[HomeController::class,'How_its_work'])->name('How_its_work');
Route::get('Features',[HomeController::class,'Features'])->name('features');
Route::get('Shop_Marketplace',[HomeController::class,'Shop_Marketplace'])->name('shop_market');
Route::get('category_details/{id}',[HomeController::class,'category_details'])->name('category_details');
Route::get('Services',[HomeController::class,'Services'])->name('services');
Route::get('Product_Detail/{slug}',[HomeController::class,'Product_Detail'])->name('product_detail');
Route::get('sales',[HomeController::class,'Sales'])->name('sales');
Route::get("search",[HomeController::class,'search']);
Route::get('Shop_Marketplace/lowTohigh',[HomeController::class,'Low_to_High'])->name('Low_to_High');
Route::get('Shop_Marketplace/highToLow',[HomeController::class,'High_to_Low'])->name('High_to_Low');
// Route::get('registration',[HomeController::class,'Registration'])->name('registration');
// Route::get('Login',[HomeController::class,'Login'])->name('log.in');
// Route::get('Advisors',[HomeController::class,'Advisors'])->name('advisors');
// Route::get('Advisorsdetails',[HomeController::class,'Advisorsdetails'])->name('advisors.details');
// Route::get('membership/login',[MembershipController::class,'login'])->name('membership.login');

////
Route::get('membership/registration', [MembershipController::class, 'registration'])->name('membership.signup');
Route::post('membership/registration/store', [MembershipController::class, 'store'])->name('membership.signup.store');
Route::get('/membership/login',[MembershipController::class,'index'])->name('member.login');

// Route::get('/membership/login', [MembershipController::class, 'index'])->name('member.login');
Route::post('/membership/signin', [MembershipController::class, 'Login'])->name('member.signin'); 
Route::get('/membership/forgetpassword', [MembershipController::class, 'forgetpassword'])->name('member.forgetpassword'); 
Route::post('/membership/forgetpassword/reset', [MembershipController::class, 'forgetpasswordreset'])->name('member.forgetpassword.reset'); 
Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
Route::group(['middleware' => ['member']],function () {

Route::get('membership/dashboard', [MembershipController::class, 'member_details'])->name('member.dashboard'); 
Route::post('membership/dashboard',[MembershipController::class,'update'])->name('member.update');
Route::post('membership/order',[MembershipController::class,'orders']);
Route::get('membership/order/details/{id}',[MembershipController::class,'orders_details'])->name('member.order_detail');
Route::get('membership/order/details/delete/{id}',[MembershipController::class,'orders_details_delete'])->name('member.order_detail_delete');
Route::get('membership/dashboard/delete-profilepic/{id}',[MembershipController::class,'delete_member_img'])->name('member.delete_img');
Route::get('membership/dashboard/delete-orders/{id}',[MembershipController::class,'delete_orders'])->name('member.delete_orders');
Route::post('membership/change-password',[MembershipController::class,'USerChangePassword'])->name('member.change-password');
});
Route::get('user/checkemail', [MembershipController::class, 'userEmailCheck']);

Route::get('membership/logout', [MembershipController::class, 'logout'])->name('logout');




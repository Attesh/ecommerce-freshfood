@extends('frontend.main_master')
@section('content')




    <div class="container-fluid">
        <div class="container mt-sm-60 mt-30 faq">
            <div class="faq-search-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        
                            <h1 class="display-5 mb-20 text-center">Ask a question or browse by category below</h1>
                            <div class="form-group w-75 mb-0">
                                <div class="input-group">
                                    <input class="form-control form-control-lg filled-input bg-white bdr-rdus" placeholder="Search by keywords" type="text" style="border-top-right-radius: 9px;
    border-bottom-right-radius: 9px;">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>      

            <div class="row">
                <div class="col-xl-4">
                    <div class="card bg-primary bdr-rdus">
                        <h6 class="card-header text-white"> Category</h6>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item d-flex align-items-center active list1" onclick="myFunction1()" id="1">
                                <i class="ion ion-md-sunny mr-15"></i>PLACING AN ORDER<span class="badge badge-light badge-pill ml-15">06</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center list2" id="2" onclick="myFunction2()">
                                <i class="ion ion-md-unlock mr-15"></i>CANCELLATION &amp; RETURNS<span class="badge badge-light badge-pill ml-15">14</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center list3" id="3" onclick="myFunction3()">
                                <i class="ion ion-md-bookmark mr-15"></i>DELIVERY PROCESSES<span class="badge badge-light badge-pill ml-15">10</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center list3" id="4" onclick="myFunction4()">
                                <i class="ion ion-md-filing mr-15"></i>PAYMENT METHODS<span class="badge badge-light badge-pill ml-15">27</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card card-lg tb1" id="t1" style="display: block; border-radius: 11px;">
                        <h3 class="card-header border-bottom-0 bg-primary text-white bdr-rdus-top">PLACING AN ORDER</h3>
                        <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between activestate">
                                    <a role="button" data-bs-toggle="collapse" href="#collapse_1i" aria-expanded="true">How to place an order on the Farmers 4U Website ?</a>
                                </div>
                                <div id="collapse_1i" class="collapse show" data-bs-parent="#accordion_2" role="tabpanel">
                                    <div class="card-body pa-15">
                                        <ul class="list-unstyled">
                                            <p>Follow 5 simple steps to place your order:</p>
                                            <li class=""><b>Step 1:</b> Pursue through the categories </li>
                                            <li class=""><b>Step 2:</b> Add your desired items to the cart by selecting the quantity and <b>“Add to Cart”</b>.</li>
                                            <li class=""><b>Step 3:</b> Click on your cart to review it and click on proceed to checkout.</li>
                                            <li class=""><b>Step 5:</b> Place your order.</li>
                                            <li class=""><b>And you’re done!</b> </li>
                                            <li class=""><b>Note:</b>  Your order will be delivered to you <b>“NEXT DAY”</b> before 3 pm.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_2i" aria-expanded="false">How will I know my order has been confirmed?</a>
                                </div>
                                <div id="collapse_2i" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body pa-15">Once you have placed the order, you will receive a confirmation message on your email with your order details and order number. Our teams will then get in touch with you if any further communication is required..</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_3i" aria-expanded="false">Can I place an order at any time?</a>
                                </div>
                                <div id="collapse_3i" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body pa-15">Yes, you may place an order any day, anytime. If there is an exception and the service is unavailable, it will be announced on the main page..</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_4i" aria-expanded="false">Is it possible to track my order?</a>
                                </div>
                                <div id="collapse_4i" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body pa-15">Yes, you may track your order through our helpline 0123456789, asking our representative about the details against the Order ID provided to you.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_5i" aria-expanded="false">Limitation of liability of your products</a>
                                </div>
                                <div id="collapse_5i" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body pa-15">No matter what kind of goods you sell, best practices direct you to present any warranties you are disclaiming and liabilities you are limiting in a way that your customers will notice.</div>
                                </div>
                            </div>
                            <div class="card bdr-rdus-btm">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_6i" aria-expanded="false">How to enforce Terms and Conditions</a>
                                </div>
                                <div id="collapse_6i" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body pa-15">While creating and having a Terms and Conditions is important, it’s far more important to understand how you can make the Terms and Conditions enforceable. You should always use clickwrap to get users to agree to your Terms and Conditions. Clickwrap is when you make your users take some action – typically clicking something – to show they’re agreeing. Here’s how Engine Yard uses the clickwrap agreement with the I agree check box:</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-lg tb2" id="t2" style="display: none;">
                        <h3 class="card-header border-bottom-0 bg-primary text-white">CANCELLATION & RETURNS</h3>
                        <div class="accordion accordion-type-2 accordion-flush" id="accordion_2b">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between activestate">
                                    <a role="button" data-bs-toggle="collapse" href="#collapse_1ib" aria-expanded="true">How can I make a complaint/ curries?</a>
                                </div>
                                <div id="collapse_1ib" class="collapse show" data-bs-parent="#accordion_2b" role="tabpanel">
                                    <div class="card-body pa-15">
                                        <ul>
                                            <p>The Complaints section in your app allows you to submit complaints regarding your order. You can find the Complaints section Here. Please follow these steps to submit your complaint and our team will get back to you:</p>
                                            <li>Select your Reason e.g. Delivery, Product Quality/Damage, Technical, Payment. </li>
                                            <li>Select your Issue e.g. Rider Behavior, Rider did not have a change, Rider was late.</li>
                                            <li>Enter your Order ID.</li>
                                            <li> Place your order.</li>
                                            <li>Describe your issue.</li>
                                            <li>Press Submit — our team will look into your complaint and get back to you within 24-48 hours.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_2ib" aria-expanded="false">Can I return the products if I am not satisfied with the quality?</a>
                                </div>
                                <div id="collapse_2ib" class="collapse" data-bs-parent="#accordion_2b">
                                    <div class="card-body pa-15">In case you are unsatisfied with the quality of the product, you may ask for a refund within 24 hours, and our riders will pick up the product and refund the amount note replacement is also an option, if claimed within the time frame.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_3ib" aria-expanded="false">Can I edit my order?</a>
                                </div>
                                <div id="collapse_3ib" class="collapse" data-bs-parent="#accordion_2b">
                                    <div class="card-body pa-15">No, orders cannot be edited once they have been placed. You may place a new order for the required products. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_4ib" aria-expanded="false">Can I cancel my order?</a>
                                </div>
                                <div id="collapse_4ib" class="collapse" data-bs-parent="#accordion_2b">
                                    <div class="card-body pa-15">A Limit What Users Can Do clause can inform users that by agreeing to use your service, they’re also agreeing to not do certain things. This can be part of a very long and thorough list in your Terms and Conditions agreements so as to encompass the most amount of negative uses.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_5ib" aria-expanded="false">There was one item missing from my carrier bag. What is the process to get it back?</a>
                                </div>
                                <div id="collapse_5ib" class="collapse" data-bs-parent="#accordion_2b">
                                    <div class="card-body pa-15">
                                    <ul>
                                            <p>A. The Complaints section in your app allows you to submit complaints regarding your order. You can find the Complaints section in the left/Right-hand side menu in your app. Please follow these steps to submit your complaint and our team will get back to you:</p>
                                            <li>Go to the Complaints section in the left-hand side menu.</li>
                                            <li>Select your Reason as Product Quality/Damage.</li>
                                            <li>Enter your Order ID.</li>
                                            <li>Select Items.</li>
                                            <li>Describe your issue.</li>
                                            <li>Press Submit — our team will look into your complaint and get back to you within 24 hours.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                    <div class="card card-lg tb4" id="t4" style="display: none;">
                        <h3 class="card-header border-bottom-0 bg-primary text-white">
                        PAYMENT METHODS</h3>
                        <div class="accordion accordion-type-2 accordion-flush" id="accordion_2d">
                            
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_2id" aria-expanded="false">What payment options are available?</a>
                                </div>
                                <div id="collapse_2id" class="collapse" data-bs-parent="#accordion_2d">
                                    <div class="card-body pa-15">
                                        <ul>    
                                            You can pay by using both the options:
                                            <li>Cash on Delivery (COD).</li>
                                            <li>Jazz Cash</li>
                                        </ul>     
                                    </div>
                                </div>
                            </div>                                <!-- <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_6ic" aria-expanded="false">How to enforce Terms and Conditions</a>
                                </div>
                                <div id="collapse_6ic" class="collapse" data-bs-parent="#accordion_2c">
                                    <div class="card-body pa-15">While creating and having a Terms and Conditions is important, it’s far more important to understand how you can make the Terms and Conditions enforceable. You should always use clickwrap to get users to agree to your Terms and Conditions. Clickwrap is when you make your users take some action – typically clicking something – to show they’re agreeing. Here’s how Engine Yard uses the clickwrap agreement with the I agree check box:</div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="card card-lg tb3" id="t3" style="display: none;">
                        <h3 class="card-header border-bottom-0 bg-primary text-white">DELIVERY PROCESSES</h3>
                        <div class="accordion accordion-type-2 accordion-flush" id="accordion_2c">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between activestate">
                                    <a role="button" data-bs-toggle="collapse" href="#collapse_1ic" aria-expanded="true">Is there a specified time in which my order will be delivered?</a>
                                </div>
                                <div id="collapse_1ic" class="collapse show" data-bs-parent="#accordion_2c" role="tabpanel">
                                    <div class="card-body pa-15">
                                    A. We don’t store product, we collect it from our farmers and wholesale markets, pack it up and get it to you as quickly as possible. Our vehicle can get delivered to you as quickly as the next day.
                                    No, your order will be delivered as soon as possible depending on your location.
                                    Delivered “NEXT DAY’’ by 3 pm.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_2ic" aria-expanded="false">What are your delivery times?</a>
                                </div>
                                <div id="collapse_2ic" class="collapse" data-bs-parent="#accordion_2c">
                                    <div class="card-body pa-15">Our team will deliver the order to you on next day.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_3ic" aria-expanded="false">What are the shipping/delivery charges?</a>
                                </div>
                                <div id="collapse_3ic" class="collapse" data-bs-parent="#accordion_2c">
                                    <div class="card-body pa-15">
                                        <ul>
                                            <p>For Rawalpindi</p>
                                            <li>Rs. 250 applies for all orders.</li>
                                        </ul>
                                        <ul>
                                            <p>For Islamabad</p>
                                            <li>We offer free delivery on all orders above Rs. 2000.</li>
                                            <li>Rs.100 applies for orders below Rs. 1000, Rs. 50 apply above Rs. 1000.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_4ic" aria-expanded="false">Can I tip my rider?</a>
                                </div>
                                <div id="collapse_4ic" class="collapse" data-bs-parent="#accordion_2c">
                                    <div class="card-body pa-15">Yes, you can! All tips go directly to our riders and you can tip your rider when they come to drop off your order.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_5ic" aria-expanded="false">Is there a minimum order limit?</a>
                                </div>
                                <div id="collapse_5ic" class="collapse" data-bs-parent="#accordion_2c">
                                    <div class="card-body pa-15"> No. There is no minimum order limit.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse_6ic" aria-expanded="false">What is your delivery coverage area?</a>
                                </div>
                                <div id="collapse_6ic" class="collapse" data-bs-parent="#accordion_2c">
                                    <div class="card-body pa-15">
                                        <p>What is your delivery coverage area?</p>
                                        <p>Selected areas within the cities mentioned below:</p>
                                        <p><b>City A</b></p>
                                        <p>E Sector, F Sector, G Sector, H Sector, I Sector, Bani Gala, Margala Town, Shahzad Town, Shah Allah Ditta</p>
                                        <p><b>City B</b></p>
                                        <p>E Sector, F Sector, G Sector, H Sector, I Sector, Bani Gala, Margala Town, Shahzad Town, Shah Allah Ditta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
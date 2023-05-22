@extends('frontend.main_master')
@section('content')

<style>
    .comment-box{
        display : flex;
        width: 55%;
    }
</style>

    <!-- Hero Start -->
    <!-- <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Blog Detail</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="about.php" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                    <!-- <h6 class="text-primary text-uppercase">Products</h6> -->
                    <h1 class="display-5">@lang('msg.FreshProducts')</h1>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                @if($details)
                <div class="mb-5">
                    <div class="row g-5 mb-5">
                        <div class="col-md-12">
                            @if($details->image)
                            <img class="img-fluid w-100" src="{{ asset('Backend/images/' . $details->image) }}" style="height: 450px;" alt="">
                            @else
                            <img class="img-fluid w-100" src="{{ asset('frontend/img/default.jpg') }}" style="height: 450px;" alt="">
                            @endif
                        </div>
                        <!-- <div class="col-md-6">
                            <img class="img-fluid w-100" src="{{asset('frontend/img/blog-2.jpg')}}" alt="">
                        </div> -->
                    </div>
                    @if(session()->get('langu')=='ar')
                    <h1 class="mb-4">{!!$details->short_description_ar!!}</h1>
                    {!!$details->description_ar!!}
                    @else
                    <h1 class="mb-4">{!!$details->short_description!!}</h1>
                    {!!$details->description!!}
                    @endif
                    <!-- <p style="color: gray;">Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                        magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                        amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                        sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                        aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                        sit stet no diam kasd vero.</p>
                    <p style="color: gray;">Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                        vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                        nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                        ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                        clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                        justo dolore sit invidunt.</p>
                    <p style="color: gray;">Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                        invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                        lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                        rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                        sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                        lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                        sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.</p> -->
                </div>
                @endif
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                {{-- <div class="mb-5">
                    <h2 class="mb-4">3 Comments</h2>
                    @foreach ($details_comm as $details_comm)
                    <div class="comment-box d-flex mb-4">
                        <img src="{{asset('frontend/img/user.jpg')}}" class="img-fluid" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href=""> {{$details_comm->first_name}}</a> <small><i>{{date('d M Y',strtotime($details_comm->created_at))}}</i></small></h6>
                           
                         
                            <p style="color: gray;">{{$details_comm->comment}}</p>
                                
                           
                            <!-- <button class="btn btn-sm btn-primary" id="reply_butn">Reply</button> -->
                                    <form method ="Post" action="{{route('blog_comments_reply')}}">
                                    @csrf
                                    @auth('member')
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control bg-white border-0" name="blog_id" value="{{$details->id}}" hidden>

                                            <input type="text" class="form-control bg-white border-0" name="comment_id" value="{{$details_comm ->id}}" hidden>
                                            <input type="text" class="form-control bg-white border-0" name="user_id" value=' {{Auth::guard("member")->user()->id}}' hidden>
                                        </div>
                                    
                                        <div class="col-12">
                                            <textarea class="form-control bg-white border-0" rows="5" name="comment" placeholder="@lang('msg.comment')"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-secondary w-100 py-3" type="submit">Reply</button>
                                        </div>
                                    </div>
                                    @else
                                    <a href="{{ route('member.login') }}" class="text-sm text-white "> <h6> Log in </h6></a><p>to comment .. </p>

                                    @endauth
                                </form>
                        </div>
                       
                    </div>
                 
                @if(!empty($details_comm->reply ))
               @foreach ($details_comm->reply as $item)
                <div class="d-flex ms-5 mb-4">
                        <img src="{{asset('frontend/img/user.jpg')}}" class="img-fluid" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">{{$item ->first_name}}</a> <small><i>01 Jan 2045</i></small></h6>
                            <p style="color: gray;">{{$item ->comment}} </p>
                        </div>
                    </div>
               
                   
                    @endforeach
                    @endif
                   
                    @endforeach
                  
                    
                </div>
                <!-- Comment List End -->


                <!-- Comment Form Start -->
               <div class="bg-primary p-5">
                    <h2 class="text-white mb-4">@lang('msg.leavecomment')</h2>
                    <form method ="Post" action="{{route('blog_comments')}}">
                        @csrf
                        @auth('member')
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" name="blog_id" value="{{$details->id}}" hidden>
                                <input type="text" class="form-control bg-white border-0" name="user_id" value=' {{Auth::guard("member")->user()->id}}' hidden>
                            </div>
                          
                            <div class="col-12">
                                <textarea required class="form-control bg-white border-0" rows="5" name="comment" placeholder="@lang('msg.comment')"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">@lang('msg.leavecomment')</button>
                            </div>
                        </div>
                        @else
                        <a href="{{ route('member.login') }}" class="text-sm text-white ">Log in </a><p>to comment .. </p>

                        @endauth
                    </form>
                </div>--}}
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <!-- <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="@lang('msg.keyword')">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div> -->
                <!-- Search Form End -->

                <!-- Category Start -->
                <!-- <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start bg-primary p-4">
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Design</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Keyword Research</a>
                        <a class="fs-5 fw-bold text-white" href="#"><i class="bi bi-arrow-right me-2"></i>Email Marketing</a>
                    </div>
                </div> -->
                <!-- Category End -->

                <!-- Recent Post Start -->
                        @php 
                        $latest=DB::table('blogs')->where('slug','!=',$details->slug)->orderBy('id','DESC')->skip(0)->take(3)->get();
                        @endphp
                        @if((count($latest) > 0))
                <div class="mb-5">
                    <h2 class="mb-4">@lang('msg.recentpost')</h2>
                    <div class="bg-primary p-4">
                        <!-- <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/blog-9.png')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/blog-2.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/blog-3.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/blog-9.png')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div> -->
                       
                        @foreach($latest as $record)
                        <div class="d-flex overflow-hidden mb-3">
                            @if($record->image)
                            <img class="img-fluid flex-shrink-0" src="{{ asset('Backend/images/' . $record->image) }}" style="width: 75px;" alt="">
                            @else
                            <img class="img-fluid flex-shrink-0" src="{{ asset('frontend/img/default.jpg') }}" style="width: 75px;" alt="">
                            @endif
                            @if(session()->get('langu')=='ar')
                            <a href="{{route('blog_detail',$record->slug)}}" class="w-100 d-flex align-items-center bg-white text-dark fs-6 fw-bold px-3 mb-0">{{$record->name_ar}}
                            @else
                            <a href="{{route('blog_detail',$record->slug)}}" class="w-100 d-flex align-items-center bg-white text-dark fs-6 fw-bold px-3 mb-0">{{$record->name}}
                            @endif
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Recent Post End -->

                <!-- Image Start -->
                <!-- <div class="mb-5">
                    <img src="{{asset('frontend/img/blog-9.png')}}" alt="" class="img-fluid rounded">
                </div> -->
                <!-- Image End -->

                <!-- Tags Start -->
                <!-- <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-primary m-1">Design</a>
                        <a href="" class="btn btn-primary m-1">Development</a>
                        <a href="" class="btn btn-primary m-1">Marketing</a>
                        <a href="" class="btn btn-primary m-1">SEO</a>
                        <a href="" class="btn btn-primary m-1">Writing</a>
                        <a href="" class="btn btn-primary m-1">Consulting</a>
                        <a href="" class="btn btn-primary m-1">Design</a>
                        <a href="" class="btn btn-primary m-1">Development</a>
                        <a href="" class="btn btn-primary m-1">Marketing</a>
                        <a href="" class="btn btn-primary m-1">SEO</a>
                        <a href="" class="btn btn-primary m-1">Writing</a>
                        <a href="" class="btn btn-primary m-1">Consulting</a>
                    </div>
                </div> -->
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <!-- <div>
                    <h2 class="mb-4">Plain Text</h2>
                    <div class="bg-primary text-center text-white" style="padding: 30px;">
                        <p style="color: gray;">Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-secondary py-2 px-4">Read More</a>
                    </div>
                </div> -->
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>

$('#reply_butn').click(function() {
    // alert('hi')
    // reply_comment_box
    $("#reply_comment_box").show();
   
alert('hi');


   
    });


 </script>
    @endsection
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    
    
<div >
    <div class="block">
        <x-primary-image-slider />
    </div>

    <div class="my-5"></div>
    
   

    <div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="product-card grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3   gap-8">
                
                <section >
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/mission.jpg"
                            class="card-img-top" alt="Mission" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Mission</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
                
                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/vision.jpg" 
                            class="card-img-top" alt="vision" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Vision</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/core-value.jpg"
                            class="card-img-top" alt="Core Value" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Core Value</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </div>
        </section>
    </div>




    <div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"> </h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                
                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/current-events-newspaper.jpg"
                            class="card-img-top" alt="Current Event" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Current Event</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="" 
                            class="card-img-top" alt="Upcoming event" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Upcoming event</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/blog-post.jpg"
                            class="card-img-top" alt="Blog Post" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Blog Post</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </div>
        </section>
    </div>


    <div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
                
            
            <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/news.jpg" 
                            class="card-img-top" alt="News" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">News</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/news-letter.jpg"
                            class="card-img-top" alt="Newsletter" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Newsletter</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>

                            <button class="btn">
                                <a href="#">Submit</a>
                            </button> 
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>                
            </div>
        </div>
    </section>
</div>

<div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                
            
            <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/advertisement.jpg" 
                            class="card-img-top" alt="Advertisement " />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Advertisement </h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>


                    <section>
                        
                            <div class="row justify-content-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <div class="card text-black">
                                        <div class="calendar">
                                        <iframe src="https://www.hamropatro.com/widgets/calender-medium.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:295px; height:385px;" allowtransparency="true"></iframe>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </section>                  
 </div>
</div>

<div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                
            
            <section>
               
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                       <div class="converter">
                        <h1>Date Converter</h1>
                       <iframe src="https://www.hamropatro.com/widgets/dateconverter.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:350px; height:150px;" allowtransparency="true"></iframe>
                       </div>
                    </div>
                    </div>
                
                </section>


                    <section>
                        <div class=" py-5">
                            <div class="row justify-content-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <div class="card text-black">
                                    <div class="clock" id="nepal">
                                        
                                    </div>
                                    <div class="place">
                                            <h1>Nepal</h1>
                                        </div>

                                        <div class="clock" id="us">
                                        
                                    </div>
                                    <div class="place">
                                            <h1>Us</h1>
                                        </div>
                                            
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>                  
    </div>
</div>

</section>
</div>

<div class="counter-up">
    <div class="content">
      <div class="box">
        <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
        <div class="counter">724</div>
        <div class="text">Website Reach</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
        <div class="counter">508</div>
        <div class="text">Number Of Doners</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fa-solid fa-star"></i></div>
        <div class="counter">436</div>
        <div class="text">Ratings</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fa-solid fa-handshake-angle"></i></div>
        <div class="counter">120</div>
        <div class="text">Number Of Volunteers </div>
      </div>
    </div>
  </div>
<div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-8">
                
            
              <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
                        <div class="para">hhhh</div>
                        <a href="#"><button class="button">Educate</button></a>
                    </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                       <div class="feature">
                        <h1>
                            Number Of Doners
                        </h1>
                       </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                       <div class="feature">
                        <h1>
                            Rating
                        </h1>
                       </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                       <div class="feature">
                        <h1>
                            Number Of Volunteers
                        </h1>
                       </div>
                    </div>
                </div>
            </section>
    </div>
</div>

</section>
</div>


<!-- calendar script -->
  <script>
    setInterval(function(){
  var date = new Date();
  var format = [
      ("0" + date.getHours()).substr(-2)
    , ("0" + date.getMinutes()).substr(-2)
    , ("0" + date.getSeconds()).substr(-2)
  ].join(":");
  document.getElementById("nepal").innerHTML = format;
}, 500)

setInterval(function(){
  var date = new Date();
  var format = [
      ("0" + date.getHours()).substr(-2)
    , ("0" + date.getMinutes()).substr(-2)
    , ("0" + date.getSeconds()).substr(-2)
  ].join(":");
  document.getElementById("us").innerHTML = format;
}, 500)
  </script>

<!-- counter script -->
<script>
  $(document).ready(function(){
    $('.counter').counterUp({
      delay: 10,
      time: 1200
    });
  });
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <div class="bg-gray-100">
        <div class="container py-5 md:py-8 ">
            <div class="text-center mb-4 sm:mb-6">
                <h2 class="text-lg sm:text-2xl tracking-wide">Blogs</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 lg:gap-8">
                @foreach ($posts as $post)
                <div class="bg-white rounded shadow-sm overflow-hidden">
                    @if ($post->cover_image)
                    <a href="{{ route('frontend.blogs.show', $post) }}" class="block aspect-w-12 aspect-h-6">
                        <img src="{{ $post->imageUrl() }}" alt=" {{ $post->title }}">
                    </a>
                    @endif
                    <div class="p-4">
                        <h6 class="text-gray-800 line-clamp-1">
                            <a href="{{ route('frontend.blogs.show', $post) }}">
                                {{ $post->title }}
                            </a>
                        </h6>
                        <p class="text-sm">
                            {{ $post->excerpt }}
                        </p>
                        <a href="{{ route('frontend.blogs.show', $post) }}" class="underline text-sm font-semibold mt-4">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5 sm:mt-6">
                <a href="{{ route('frontend.blogs.index') }}" class="inline-block py-2 px-4 bg-blue-600 text-white rounded-full hover:bg-blue-500 font-semibold text-sm">View All Blogs</a>
            </div>
        </div>
    </div>

    <div class="text-white py-5" style="background-color: #444444;">
        @include('frontend.partials.our-services')
    </div>

</div>


@endsection

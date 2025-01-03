
@extends('layouts.master')

@section('title', 'HomePage')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')

<div class="container home-page">
    <div style="position:relative;height: 100vh;">
        <video autoplay muted playsinline loop class="video-banner video-desktop">
            <source src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/video/meerab.mp4" type="video/mp4"></source>
        </video>
        <video autoplay muted playsinline loop class="video-banner video-mobile">
            <source src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/video/mobile_new.mp4" type="video/mp4"></source>
        </video>
        <div class="search-realestate">
            <div class="city-names">Find Your Dream Property in Dubai's Best Areas</div>
            @include('components.searchProperty')
        </div>
    </div>


    <div class="popup hidden">
        <div class="content">
            <div class="img-container">
                <img src="{{asset('images/list_with_us_copy.jpg')}}" alt="Leading Companies" loading="lazy">
            </div>
            <div class="text flex" >
                <div class="title text-center">Ready to Sell?</div>
                <div class="desc text-center">
                    Hire a Multi-Award Winning Brokerage with a Global Network. Best SME Company - Cyprus. Among Best Agencies Globally. Global Tech Innovations. At What Price would You become a Seller?
                </div>
                <div class="btn" style="display:flex;justify-content: center">
                    <a href="/about-us">Let’s Find Out!</a>
                </div>
            </div>
            <div class="close-popup">
                <img src="{{asset('images/close_icon.png')}}" alt="Close Icon" loading="lazy">
            </div>
        </div>
    </div>



    {{-- about --}}
    <div id="particles-js">
    <div class="about-section">
        <div class="content" data-aos="fade-up" >
            <div class="text-content col-flex" >
                <div class="title" data-aos="fade-right">About Meerab</div>

                <div class="desc" data-aos="fade-right">
                   {!! $home->about_section_text !!}
                 </div>
                 <a href="#" data-aos="fade-right">
                    Read More
                 </a>
            </div>

            <div class="img-container">
                <!-- Image Section -->
                <div class="flex-col" >
                    <img  class="img-about" style="box-shadow: 1px 2px 9px 1px #3d2e2a" src="{{asset('/storage').'/'.$home->images->first()->url}}">

                </div>

                <!-- Swiper Section -->
                <div class="swiper-container-about">
                  <div class="swiper-wrapper">
                      @foreach($home->images as $image)

                          <div class="swiper-slide">
                              <img src="{{asset('/storage/'.$image->url)}}" alt="Slide 1">
                          </div>
                      @endforeach

                  </div>

                </div>
              </div>

        </div>
    </div>
    <div style="height: 80px" id="services_section"></div>
        <section class="services_section listining-section" >
            <div class="title" style="margin-top: 0;margin-bottom: 4rem">Our Services</div>
            <div class="services_cards">
                @foreach($services as $service)
                    <div class="service_card">
                        <img src="{{asset('/storage').'/'.$service->image}}" alt="{{$service->title}}" class="service_image">
                        <h3 class="service_title">{{$service->title}}</h3>
                        <p class="service_description">
                            {!! $service->description !!}
                        </p>
                    </div>

                @endforeach


            </div>
        </section>

    {{-- listing-syndicattion --}}
    <div class="listining-section">
        <div class="content" data-aos="fade-up" >
            <input type="hidden" id="speed" value="{{$home->speed}}">
            <div class="title">Sister Companies</div>
            <div class="marquee_container">
                <div class="items marquee" data-speed="1">
                    @include('components.item')
                </div>
            </div>

        </div>
    </div>
    {{-- premium_properties --}}
    <div class="services listining-section">
        <div class="content" data-aos="fade-up" >
            <div class="title" data-aos="fade-right">Properties We Manage</div>
            <div class="buttons">
                <a href="/search-result/laborcamp">Labor Camps </a>
                <a href="/search-result/residentialbuilding">Residential Buildings</a>
                <a href="/search-result/commercialspaces">Commercial Spaces</a>
                <a href="/search-result/showrooms">Showrooms</a>
            </div>
            <div class="grid-container">
                @include('components.service')
            </div>
        </div>
    </div>

    <div class="blogs_section">
        <div class="content" data-aos="fade-up" >
            <div class="title font-title">Blogs</div>
            <div class="desc">
                {{$home->blogs_section_text}}
            </div>
            <div class="boxes">
                <div class="grid-container ">
                    @foreach($blogs1 as $blog)
                        <div class="col box">
                            <div class="img-container" >

                                <a href="{{route('get_blog_details',['slug'=>$blog->slug])}}">
                                    <img src="{{asset('/storage').'/'.$blog->url}}">
                                </a>
                            </div>
                            <div class="box-title">
                                {{$blog->title}}
                            </div>
                            <div class="box-desc">
                                {!! $blog->description !!}
                            </div>
                            <a class="read" href="{{route('get_blog_details',['slug'=>$blog->slug])}}">Read More</a>

                        </div>
                    @endforeach

                    <div class="col third">
                        @foreach($blogs2 as $blog)
                            <a class="img-container" href="{{route('get_blog_details',['slug'=>$blog->slug])}}">
                                <img src="{{asset('/storage').'/'.$blog->url}}" alt="img-blog">
                                <div class="overlay">
                                    <div class="title">{{\Illuminate\Support\Str::words($blog->title,8)}}</div>
                                    <div class="desc">{!!  \Illuminate\Support\Str::words($blog->description,10) !!}</div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('components.icons_right')

</div>


@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection

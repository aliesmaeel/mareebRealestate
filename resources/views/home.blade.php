
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
    {{-- about --}}
    <div id="particles-js">
    <div class="about-section">
        <div class="content" data-aos="fade-up" >
            <div class="text-content col-flex" >
                <div class="title">ABOUT Meerab</div>

                <div class="desc">
                   {!! $home->about_section_text !!}
                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit sapiente cumque pariatur adipisci quasi illo exercitationem officiis est deleniti quia! Ipsa voluptatem doloribus adipisci aliquam magnam exercitationem repellendus distinctio expedita.
                 </div>
                 <a href="#">
                    Read More
                 </a>
            </div>

            <div class="img-container">
                <!-- Image Section -->
                <div class="flex-col">
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
    {{-- listing-syndicattion --}}
    <div class="listining-section">
        <div class="content" data-aos="fade-up" >
            <div class="title">Sister Companies</div>
            <div class="marquee_container">
                <div class="items marquee" data-speed="1">
                    @include('components.item')
                </div>
            </div>

        </div>
    </div>
    {{-- premium_properties --}}
    <div class="services">
        <div class="content" data-aos="fade-up" >
            <div class="title">Properties We Manage</div>
            <div class="buttons">
                <a href="/search-result/laborcamp">Labor Camps </a>
                <a href="/search-result/residentialbuilding">Residential Buildings</a>
                <a href="/search-result/commercialfloors">Commercial Floors</a>
                <a href="/search-result/showrooms">Showrooms</a>
            </div>
            <div class="grid-container">
                @include('components.service')
            </div>
        </div>
    </div>
    {{-- explore_recent --}}
{{--    <div class="explore_recent">--}}
{{--        <div class="content" data-aos="fade-up" >--}}
{{--            <div class="title">Properties We Manage</div>--}}
{{--            <div class="desc">--}}
{{--                {{$home->what_we_do_section_text}}--}}
{{--            </div>--}}
{{--            <!-- Swiper -->--}}
{{--            <div class="explore_recent_swiper ">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    @foreach($services as $service)--}}
{{--                        <div class="swiper-slide" >--}}
{{--                            <div class="our-services-container"--}}
{{--                                 style="background-image: url({{asset('/storage/'.$service->image)}});"--}}
{{--                            >{{$service->name}}</div>--}}
{{--                            <div class="description">--}}
{{--                                {!! $service->description !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}
{{--            <a class="read-more" href="#">Recent Off Plan Project</a>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{-- team section -------}}
{{--    <div class="team_section">--}}
{{--        <div class="content" data-aos="fade-up" >--}}
{{--            <div class="title">OUR TEAM</div>--}}
{{--            <hr>--}}
{{--            <div class="desc">--}}
{{--                {{$home->our_team_section_text}}--}}
{{--            </div>--}}
{{--            <!-- Swiper -->--}}
{{--            <div class="team_swiper ">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    @foreach($teams as $team)--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="{{asset('/storage/'.$team->image)}}">--}}
{{--                            <div class="name">{{$team->name}}</div>--}}
{{--                            <a class="read-more" href="#">view profile</a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}
{{--            <a class="read-more" href="#">Meet Our Team</a>--}}

{{--        </div>--}}
{{--    </div>--}}
    {{-- blogs section --}}
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

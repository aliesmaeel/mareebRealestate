
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
            <source src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/video/web_new.mp4" type="video/mp4"></source>
        </video>
        <video autoplay muted playsinline loop class="video-banner video-mobile">
            <source src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/video/mobile_new.mp4" type="video/mp4"></source>
        </video>
        <div class="search-realestate">
            {{-- <div class="city-names">Search Luxury Homes In <span id="city-name">MMM</span></div> --}}
            @include('components.seachProperty')
        </div>
    </div>
    {{-- about --}}
    <div id="particles-js">
    <div class="about-section">
        <div class="content" data-aos="fade-up" >
            <div class="text-content col-flex" >
                <div class="title">ABOUT Meerab</div>
                <div class="bold">WE’RE LOCAL, WE’RE GLOBAL</div>
                <div class="desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Consequuntur minus molestiae aperiam amet eos non, culpa aspernatur ea aliquid accusamus fugit
                     quidem obcaecati animi est officia voluptatum alias, beatae ipsam.
                 </div>
                 <a href="#">
                    Read More
                 </a>
            </div>
            <div class="img-container">
                <img src="https://savoirproperties.com/images/IMG_1882.jpeg">
            </div>
        </div>
    </div>
    {{-- listing-syndicattion --}}
    <div class="listining-section">
        <div class="content" data-aos="fade-up" >
            <div class="title">Sister Companies</div>
            <div class="items">

                @include('components.item')
            </div>
        </div>
    </div>
    {{-- premium_properties --}}
    <div class="services">
        <div class="content" data-aos="fade-up" >
            <div class="title">Services</div>
            <div class="buttons">
                <a href="#">Labor Camps </a>
                <a href="#">Residential Buildings</a>
                <a href="#">Commercial Floors</a>
            </div>
            <div class="grid-container">
                @include('components.service')
            </div>
        </div>
    </div>
    {{-- explore_recent --}}
    <div class="explore_recent">
        <div class="content" data-aos="fade-up" >
            <div class="title">What We Do</div>
            <div class="desc">
                Discover a plethora of off-plan projects in Dubai & Worldwide with the best
                payment plan.
            </div>
            <!-- Swiper -->
            <div class="explore_recent_swiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/offplan/XCNXnvIXBqlO6veGcOMc0pC9UdTH2H68eq6GSoM2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/offplan/XCNXnvIXBqlO6veGcOMc0pC9UdTH2H68eq6GSoM2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/offplan/XCNXnvIXBqlO6veGcOMc0pC9UdTH2H68eq6GSoM2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/offplan/XCNXnvIXBqlO6veGcOMc0pC9UdTH2H68eq6GSoM2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/offplan/XCNXnvIXBqlO6veGcOMc0pC9UdTH2H68eq6GSoM2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/offplan/XCNXnvIXBqlO6veGcOMc0pC9UdTH2H68eq6GSoM2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/offplan/XCNXnvIXBqlO6veGcOMc0pC9UdTH2H68eq6GSoM2.jpg">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a class="read-more" href="#">Recent Off Plan Project</a>
        </div>
    </div>
    {{-- team section --}}
    <div class="team_section">
        <div class="content" data-aos="fade-up" >
            <div class="title">OUR TEAM</div>
            <hr>
            <div class="desc">

                More than your average real estate agents, our certified community
                specialists are experts in their respective areas with an in-depth
                knowledge of the Dubai real estate market.

            </div>
            <!-- Swiper -->
            <div class="team_swiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more" href="#">view profile</a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a class="read-more" href="#">Meet Our Team</a>

        </div>
    </div>
    {{-- blogs section --}}
    <div class="blogs_section">
        <div class="content" data-aos="fade-up" >
            <div class="title font-title">Blogs</div>
            <div class="desc">
                   Stay up to date with our latest blogs to know all about real estate trends
                    worldwide
            </div>
            <div class="boxes">
                <div class="grid-container ">
                    <div class="col box">
                        <div class="img-container">
                            <a href="#">
                                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Blog/xSVAK0KUZOhYosjkeXeGHLcwRJhmNjHHHqCTtEQ4.webp">
                            </a>
                       </div>
                        <div class="box-title">
                            Key Real Estate Trends Shaping the Market in 2024
                        </div>
                        <div class="box-desc">
                            Key Real Estate Trends Shaping the Market in Dubai a city renowned for its opulence and rapid development continues to capture the imagination of investors and homebuyers from around the
                        </div>
                        <a class="read" href="#">Read More</a>

                    </div>
                    <div class="col box">
                        <div class="img-container">
                            <a href="#">
                                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Blog/jtXB2exBQl344oPRx2RYtRWDX0jJyULvSpBjZZk0.jpg">
                            </a>
                        </div>
                        <div class="box-title">
                            Key Real Estate Trends Shaping the Market in 2024
                        </div>
                        <div class="box-desc">
                            Dubai Green Spine The World rsquo s Greenest Highway Dubai a city synonymous with innovation and grandeur is poised to achieve a new milestone in urban sustainability with the Dubai
                        </div>
                        <a class="read" href="#">Read More</a>

                    </div>
                    <div class="col third">
                        <a class="img-container" href="#">
                            <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Blog/on2fSfTjdLU1usOZi6LEmuocbq7jOniCF5OZMKtp.jpg">
                            <div class="overlay">
                                <div class="title">Balancing Innovation with Expertise</div>
                                <div class="desc">Balancing Innovation with Expertise In the bustling landscape of Dubai</div>
                            </div>
                        </a>
                        <a class="img-container" href="#">
                            <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Blog/TSa3MQb5vMGjcGnAMrea03w46SKfIImYi1iz6Lvx.jpg">
                            <div class="overlay">
                                <div class="title">Why Choose Real Estate Agents in Dubai?</div>
                                <div class="desc">Why Choose Real Estate Agents in Dubai Dubai s real</div>
                            </div>
                        </a>
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

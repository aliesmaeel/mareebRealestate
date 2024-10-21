
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
        <video autoplay muted playsinline loop class="video-banner">
            <source src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/video/web_new.mp4" type="video/mp4"></source>
        </video>
        <div class="search-realestate">
            {{-- <div class="city-names">Search Luxury Homes In <span id="city-name">MMM</span></div> --}}
            <form>
                {{-- search --}}
                <div class="input-search">
                    <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="#212529" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                        </path>
                    </svg>
                    <input type="search" name="search" placeholder="Search Country, City, Area Or Community">
                </div>
                {{-- rent --}}
                <div class="dropdown">
                    <div class="rent-option options-selected">
                        <div>Rent</div>
                        <img src="/images/arrow.png">
                    </div>
                    <div class="abs abs-rent">
                        <div class="flex col">
                            <div class="title">Interested to</div>
                            <div class="group-options interest-group">
                                <div class="option">
                                    <div class="custom-radio" data-value="buy">Buy</div>
                                    <input type="radio" value="buy" name="interestd_status" style="display: none;">
                                </div>
                                <div class="active option">
                                    <div class="custom-radio" data-value="rent">Rent</div>
                                    <input type="radio" value="rent" name="interestd_status" style="display: none;">
                                </div>
                                <input type="hidden" id="interestd_status">
                            </div>
                            <div class="title">Property status</div>
                            <div class="group-options property-group">
                                <div class="option">
                                    <div class="custom-radio" data-value="All">All</div>
                                    <input type="radio" value="All" name="property_status" style="display: none;">
                                </div>
                                <div class="option">
                                    <div class="custom-radio" data-value="Ready">Ready</div>
                                    <input type="radio" value="Ready" name="property_status" style="display: none;">
                                </div>
                                <div class="active option">
                                    <div class="custom-radio" data-value="Off-plane">Off-plane</div>
                                    <input type="radio" value="Off-plane" name="property_status" style="display: none;">
                                </div>
                                <input type="hidden" id="property_status">
                            </div>
                            <div class="reset_done">
                                <div class="reset">Reset</div>
                                <div class="done">Done</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                {{-- type --}}
                <div class="dropdown">
                    <div class="type-option options-selected">
                        <div>Type</div>
                        <img src="/images/arrow.png">
                       
                    </div>
                    <div class="abs abs-type">
                        <div class="flex col">
                            <div class="title">Property type</div>
                            <div class="group-options property-type">
                                <div class="option">
                                    <div class="custom-radio" data-value="Flat">Flat</div>
                                    <input type="radio" value="Flat" name="property_type" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="Bulk Units">Bulk Units</div>
                                    <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="Bulk Units">Bulk Units</div>
                                    <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="Bulk Units">Bulk Units</div>
                                    <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="Bulk Units">Bulk Units</div>
                                    <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="Bulk Units">Bulk Units</div>
                                    <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="Bulk Units">Bulk Units</div>
                                    <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                                </div>
                                <input type="hidden" id="property_type">
                            </div>
                            <div class="reset_done">
                                <div class="reset">Reset</div>
                                <div class="done">Done</div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                 {{-- bedroom --}}
                 <div class="dropdown">
                    <div class="bedroom-option options-selected">
                        <div>Bedrooms</div>
                        <img src="/images/arrow.png">
                       
                    </div>
                    <div class="abs abs-bedroom">
                        <div class="flex col">
                            <div class="title">Bedrooms</div>
                            <div class="group-options bedroom-group">
                                <div class="option">
                                    <div class="custom-radio" data-value="any">Any</div>
                                    <input type="radio" value="any" name="bedrooms" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="Studio">Studio</div>
                                    <input type="radio" value="Studio" name="bedrooms" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="1 Beds">1 Beds</div>
                                    <input type="radio" value="1 Beds" name="bedrooms" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                                    <input type="radio" value="2 Beds" name="bedrooms" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                                    <input type="radio" value="2 Beds" name="bedrooms" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                                    <input type="radio" value="2 Beds" name="bedrooms" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                                    <input type="radio" value="2 Beds" name="bedrooms" style="display: none;">
                                </div>
                                <input type="hidden" id="bedrooms">
                            </div>
                            <div class="title">Bathrooms</div>
                            <div class="group-options bathroom-group">
                                <div class="option active">
                                    <div class="custom-radio" data-value="any">Any</div>
                                    <input type="radio" value="Any" name="bathroom" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="Studio">Studio</div>
                                    <input type="radio" value="Studio" name="bathroom" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="1 Beds">1 Beds</div>
                                    <input type="radio" value="1 Beds" name="bathroom" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                                    <input type="radio" value="2 Beds" name="bathroom" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                                    <input type="radio" value="2 Beds" name="bathroom" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                                    <input type="radio" value="2 Beds" name="bathroom" style="display: none;">
                                </div>
                                <div class=" option">
                                    <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                                    <input type="radio" value="2 Beds" name="bathroom" style="display: none;">
                                </div>
                                <input type="hidden" id="bathroom">
                            </div>
                            <div class="reset_done">
                                <div class="reset">Reset</div>
                                <div class="done">Done</div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                {{-- price --}}
                <div class="dropdown">
                    <div class="bedroom-option options-selected">
                        <div>Price</div>
                        <img src="/images/arrow.png">
                    </div>
                    <div class="abs abs-price">
                        <div class="flex col">
                            <div class="title">Price (AED)</div>
                            <div class="group-options">
                                <div class="option">
                                    <div>Min</div>
                                    <input type="text" placeholder="min-price">
                                </div>
                                <div class="option">
                                    <div>Max</div>
                                    <input type="text" placeholder="min-price">
                                </div>
                                
                            </div>
                           
                            <div class="reset_done">
                                <div class="reset">Reset</div>
                                <div class="done">Done</div>
                            </div>
                        </div>
                    </div>
                  
                </div>
              
                <input type="submit" value="Submit" class="submit">
            </form>
        </div>
    </div>
    {{-- about --}}
    <div class="about-section">
        <div class="content">
            <div class="text-content col-flex" >
                <div class="title">ABOUT SAVOIR</div>
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
        <div class="content">
            <div class="title"> LISTING SYNDICATION AND AFFILIATED WEBSITES</div>
            <div class="items">
                
                @include('components.item')
            </div>
        </div>
    </div>
    {{-- premium_properties --}}
    <div class="services">
        <div class="content">
            <div class="title">Services</div>
            <div class="buttons">
                <a>FOR SALE</a>
                <a>FOR SALE</a>
                <a>FOR SALE</a>
            </div>
            <div class="grid-container">
                @include('components.service')
            </div>
        </div>
    </div>
    {{-- explore_recent --}}
    <div class="explore_recent">
        <div class="content">
            <div class="title">EXPLORE RECENT OFF PLAN PROJECTS</div>
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
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a class="read-more">Recent Off Plan Project</a>
        </div>
    </div>
    {{-- team section --}}
    <div class="team_section">
        <div class="content">
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
                        <a class="read-more">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more">view profile</a>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/5BThdm523Bpik5cpaGxd8ja5v9ws6mT7cETgd1F2.jpg">
                        <div class="name">Eva Bogotlieva</div>
                        <div class="position"> Property Advisor</div>
                        <a class="read-more">view profile</a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a class="read-more">Meet Our Team</a>

        </div>
    </div>
    {{-- blogs section --}}
    <div class="blogs_section">
        <div class="content">
            <div class="title">Blogs</div>
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
                        <a class="read">Read More</a>
                        
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
                        <a class="read">Read More</a>
                        
                    </div>
                    <div class="col third">
                        <div class="img-container">
                            <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Blog/on2fSfTjdLU1usOZi6LEmuocbq7jOniCF5OZMKtp.jpg">
                            <div class="overlay">
                                <div class="title">Balancing Innovation with Expertise</div>
                                <div class="desc">Balancing Innovation with Expertise In the bustling landscape of Dubai</div>
                            </div>
                        </div>
                        <div class="img-container">
                            <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Blog/TSa3MQb5vMGjcGnAMrea03w46SKfIImYi1iz6Lvx.jpg">
                            <div class="overlay">
                                <div class="title">Why Choose Real Estate Agents in Dubai?</div>
                                <div class="desc">Why Choose Real Estate Agents in Dubai Dubai s real</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
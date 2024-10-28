@extends('layouts.master')

@section('title', 'About Us')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
<div class="container about_us">
    <div class="content"> 
        <div class="first_section" >
            <div class="grid-container">
                <div class="col">
                    <div class="title">Who We Are</div>
                    <div class="desc">
                        With four decades of experience, our luxury boutique real estate agency is dedicated to setting a
                         new benchmark for service and expertise in the realm of upscale properties in Dubai. Understanding 
                         the distinct needs and preferences of our clients, we provide personalized solutions that consistently 
                         surpass expectations. Leveraging our profound knowledge of the local market and an extensive network,
                          we present a
                         carefully curated selection of exclusive properties epitomizing luxury living.
                    </div>
                </div>
                <div class="col parent_img">
                    <div class="img-container">
                        <img src="https://savoirproperties.com/public/images/career22.jpg">
                    </div>
                </div>
                <div class="col col-2">
                    Our commitment extends beyond transactions, focusing on cultivating enduring
                     relationships anchored in trust, integrity, and transparency. Recognizing that a real 
                     estate journey is a collaborative experience, our dedication ensures a seamless and 
                     immensely rewarding process. With over 40 years of experience and a track record exceeding
                      1 billion in overall property sales, we stand as a testament to our unwavering commitment to 
                      excellence in luxury real estate services in Dubai. Providing a real estate experience that 
                    defies the conventional and invites you to discover the extraordinary.
                </div>
              </div>
              <div class="title p-10">Savoir. Beyond Excellence</div>
        </div>
        <div class="scroll-container">
            <div class="desc_section sticky-component">
                <div class="flex-container">
                    <div class="col text fixedsticky" data-aos="fade-right">
                        <div class="title">Our Core Values</div>
                    </div>
                    <div class="sticky-content" data-aos="fade-lrft">
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>1.</span>
                                Knowledge
                            </div>
                            <div class="desc">
                                In our real estate domain, knowledge is not just information; it is power.
                                At Savoir Privé Properties, we empower our clients with the information they
                                need to make the smartest choices, recognizing that knowledge is the key to success.
                            </div>
                            <div class="about_swiper ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide img-container">
                                        
                                        <img src="https://savoirproperties.com/public/images/IMG_1882.jpeg">
                                    </div>
                                    <div class="swiper-slide img-container">
                                        <img src="https://savoirproperties.com/public/images/career2.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>2.</span>
                                Passion
                            </div>
                            <div class="desc">
                                We firmly believe that genuine passion is the driving force
                                behind transformative change. At Savoir Privé Properties, we wholeheartedly
                                commit ourselves to creating a positive influence in the lives of our clients.
                                Our motivation is humble yet powerful – to 
                                change our clients' world for the better through unwavering passion.
                            </div>
                            <div class="btn-container">
                                <a href="#">
                                    Meet Our Team
                                </a>
                            </div>
                            <div class="about_swiper ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide img-container">
                                        <img src="https://savoirproperties.com/public/images/passion.jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Additional .col.flex-col sections -->
                    </div>
                </div>
                {{-- second --}}
                <div class="flex-container">
                    <div class="col text order-1 fixedsticky" data-aos="fade-left">
                        <div class="title ">
                            
                        <q > To be successful in real estate, you must always and consistently
                            put your clients’ best interests first. When you do, your personal
                            needs will be realized beyond your greatest expectations.</q >
                            <br><br>
                            Anthony Hitt

                        </div>
                    </div>
                    <div class="sticky-content second" data-aos="fade-right">
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>3.</span>
                                Trust 
                            </div>
                            <div class="desc">
                            
                                At SAVOIR we do not have clients, we have partners. This is a healthy
                                relationship based on trust and mutual understanding. Trust is what leads us to success.
                            </div>
                            <div class="about_swiper ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide img-container">
                                        <img src="https://savoirproperties.com/public/images/career2.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>4.</span>
                                Excellence  
                            </div>
                            <div class="desc">
                                The synergy of knowledge and experience culminates in excellence,
                                and that is precisely what we stand for at Savoir Privé Properties. Our commitment is 
                                to provide excellence in every facet of our work. As wisdom and hands-on expertise converge, a
                                new echelon of quality defines our distinctive approach to the realm of real estate.
                            </div>
                            
                        </div>
                    
                        <!-- Additional .col.flex-col sections -->
                    </div>
                </div>
            </div>
        </div>
        <div class="about_form">
            <div class="flex-col">
                <div class="title">
                    Talk To <br> An Expert
                </div>
                <div class="desc">Trust your most important decisions to the team with the most experience.</div>
            </div>
            <div class="col flex-col">
                @include('components.form')
            </div>
        </div>
        
    </div>
</div>
@endsection

{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection

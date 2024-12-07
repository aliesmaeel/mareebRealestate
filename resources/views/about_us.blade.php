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
                    <div class="title">About Us</div>
                    <div class="desc">
                        As a leading real estate brokerage firm, Meerab Properties has been a trusted name in Dubai for over a decade. We specialize in connecting clients with a wide range of properties, including well-designed labor camps, stylish residential buildings, and prime commercial spaces. Our goal is to help you find the ideal property that meets your specific needs and preferences.
                    </div>
                </div>
                <div class="col parent_img">
                    <div class="img-container">
                        <img src="https://savoirproperties.com/public/images/career22.jpg">
                    </div>
                </div>
                <div class="title">Our Vision</div>
                <div class="col col-2">
                    Meerab Properties is committed to being a premier real estate brokerage
                    firm in the UAE. We strive to provide exceptional service and help clients
                    discover properties that enhance their quality of life. Our vision is to foster
                    a thriving community by offering diverse, comfortable, and secure living and working
                    environments that cater to the evolving needs of our clients.
                </div>
              </div>
            <div class="title p-10">Meerab Properties SLOGAN</div>

        </div>
        <div class="scroll-container">
            <div class="desc_section sticky-component">
                <div class="flex-container">
                    <div class="col text fixedsticky" data-aos="fade-right">
                        <div class="title">Core Values</div>
                    </div>
                    <div class="sticky-content" data-aos="fade-lrft">
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>1.</span>
                                Customer Satisfaction
                            </div>
                            <div class="desc">
                                Our clients are at the center of everything we do. We are committed to providing exceptional service and exceeding their expectations.                             </div>
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
                                Quality
                            </div>
                            <div class="desc">
                                We deliver high-quality properties and services that meet the highest industry standards                            </div>
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

                        <q > In the real estate business you learn more about people
                            and you learn more about community issues, you learn more
                            about life, you learn more about the impact of government,
                            probably than any other profession that I know of.” Jhonny Isakson</q >
                            <br><br>

                        </div>
                    </div>
                    <div class="sticky-content second" data-aos="fade-right">
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>3.</span>
                                Integrity
                            </div>
                            <div class="desc">
                                We conduct our business with honesty, transparency, and ethical principles.
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
                                Innovation
                            </div>
                            <div class="desc">
                                We embrace new technologies and innovative solutions to stay ahead and offer our clients the best possible experience.
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

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
                    <div class="desc" data-aos="fade-right">
                        {{$aboutus['about-us']}}
                    </div>
                </div>
                <div class="col parent_img" data-aos="fade-right">
                    <div class="img-container">
                        <img src="{{asset('/storage').'/'.$aboutus['about-us-image']}}">
                    </div>
                </div>
                <div class="title">Our Vision</div>
                <div class="col col-2">
                    {{$aboutus['our-vision']}}

                </div>
              </div>
            <div class="title p-10">{{$aboutus['trust-heading']}}</div>

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
                                INTEGRITY AND TRUST
                            </div>
                            <div class="desc">
                                {{$aboutus['customer-satisfaction']}}
                            </div>
                            <div class="about_swiper ">
                                <div class="swiper-wrapper">

                            @foreach($aboutus['customer-satisfaction-images'] as $image)
                            <div class="swiper-slide img-container">
                                <img src="{{asset('/storage').'/'.$image['image']}}" alt="img-logo">
                            </div>
                            @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>2.</span>
                                CLIENT-CENTRIC EXCELLENCE
                            </div>
                            <div class="desc">
                                {{$aboutus['quality']}}
                            </div>

                        <div class="about_swiper ">
                            <div class="swiper-wrapper">
                                @foreach($aboutus['quality-images'] as $image)
                                    <div class="swiper-slide img-container">
                                        <img src="{{asset('/storage').'/'.$image['image']}}">
                                    </div>
                                @endforeach
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

                        <q > {{$aboutus['quote']}}
                        </q >
                            <br><br>

                        </div>
                    </div>
                    <div class="sticky-content second" data-aos="fade-right">
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>3.</span>
                                OPERATIONAL EXCELLENCE
                            </div>
                            <div class="desc">
                                {{$aboutus['integrity']}}
                            </div>
                            <div class="about_swiper ">
                                <div class="swiper-wrapper">
                                    @foreach($aboutus['integrity-images'] as $image)
                                        <div class="swiper-slide img-container">
                                            <img src="{{asset('/storage').'/'.$image['image']}}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col flex-col">
                            <div class="num-heading">
                                <span>4.</span>
                                RELIABLE SERVICE AND SUPPORT
                            </div>
                            <div class="desc">
                                {{$aboutus['innovation']}}
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
